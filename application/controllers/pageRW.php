<?php
defined('BASEPATH') or exit('No direct script access allowed');

// Load library phpspreadsheet
// require('../../uploads/file_excel/vendor/autoload.php');
require('./application/third_party/vendor/autoload.php');

// require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// End load library phpspreadsheet

class pageRW extends CI_Controller
{
    public function __construct()
    {
        // $this->load->model('model_auth', '', TRUE);
        parent::__construct();
        $this->load->model('M_surat_rt');
        $this->load->model('M_surat_rw');
    }
    public function index()
    {
        $data['surat'] = $this->M_surat_rt->tampil_data()->result();
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/visiMisi', $data);
        $this->load->view('templatesRW/footer');
    }

    public function surat()
    {
        $data['surat'] = $this->M_surat_rt->tampil_data()->result();
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/surat_permohonan', $data);
        $this->load->view('templatesRW/footer');
    }

    public function printPdf($id)
    {
        $data['surat'] = $this->M_surat_rt->detail_surat($id);
        //$data['surat'] = $this->M_surat_rt->tampil_data()->result();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "surat-keterangan-rw.pdf";
        $this->pdf->load_view('rw/laporan_pdf', $data);
    }

    public function edit_surat($id)
    {
        $data['warga'] = $this->M_surat_rt->tampil_warga()->result();
        $where = array('id_surat_masuk' => $id);
        $data['surat'] = $this->M_surat_rt->edit_surat($where, 'tb_surat_masuk_rt')->result();
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/edit_surat', $data);
        $this->load->view('templatesRW/footer');
    }

    public function update()
    {
        $id_surat_masuk              = $this->input->post('id_surat_masuk');
        $no_surat_masuk              = $this->input->post('no_surat_masuk');
        // $id_warga                    = $this->input->post('id_warga');
        $tgl_pengajuan               = $this->input->post('tgl_pengajuan');
        $jenis_surat                 = $this->input->post('jenis_surat');
        $perihal                     = $this->input->post('perihal');
        // $status_izin_rt              = $this->input->post('status_izin_rt');
        $status_izin_rw              = $this->input->post('status_izin_rw');
        // $tgl_persetujuan             = $this->input->post('tgl_persetujuan');
        // $keterangan                  = $this->input->post('keterangan');
        $tgl_persetujuan_rw          = $this->input->post('tgl_persetujuan_rw');
        $keterangan_rw               = $this->input->post('keterangan_rw');


        $data = array(
            'no_surat_masuk'        => $no_surat_masuk,
            //'id_warga'              => $id_warga,
            'tgl_pengajuan'         => $tgl_pengajuan,
            'jenis_surat'           => $jenis_surat,
            'perihal'               => $perihal,
            'status_izin_rw'        => $status_izin_rw,
            'tgl_persetujuan_rw'    => $tgl_persetujuan_rw,
            'keterangan_rw'         => $keterangan_rw
        );

        $where = array(
            'id_surat_masuk' => $id_surat_masuk
        );

        if ($this->M_surat_rt->update_surat($where, $data, 'tb_surat_masuk_rt')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Update Surat Permohonan Success!!</div>');
            redirect('pageRW/surat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Update surat permohonan Gagal!!</div>');
            redirect('pageRW/surat');
        }
    }


    public function detail_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $data['surat'] = $this->M_surat_rt->detail_surat($id);
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/Detail_surat', $data);
        $this->load->view('templatesRW/footer');
    }

    public function hapus_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $this->M_surat_rt->hapus_surat($where, 'tb_surat_masuk_rt');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Delete surat permohonan Success!!</div>');
        redirect('pageRW/surat');
    }

    public function dataPenduduk()
    {
        $rw = $this->session->userdata('rw');
        $data['rekap'] = $this->M_surat_rt->getRekap($rw);
        $data['rekap'] = $this->M_surat_rt->tampil_rekap()->result();
        // var_dump($rw);
        // die();
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/dataPenduduk', $data);
        $this->load->view('templatesRW/footer');
    }

    public function detail_rekap($id_rekap_data)
    {
        $where = array('id_rekap_data' => $id_rekap_data);
        $data['rekap'] = $this->M_surat_rw->detail_rekap($id_rekap_data);
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/detail_rekap', $data);
        $this->load->view('templatesRW/footer');
    }

    public function exportData()
    {
        // $rt = $this->session->userdata('rt');
        // $data['filterData'] = $this->M_surat_rt->getRekap($rt);
        $data['rekap'] = $this->M_surat_rt->tampil_rekap()->result();
        // var_dump($data['filterData'], $rt);
        // die();
        // $this->load->view('templatesRT/header');
        // $this->load->view('templatesRT/sidebar');
        $this->load->view('rw/exportData', $data);
        $this->load->view('rw/printExcel');
        // $this->load->view('templatesRT/footer');
        redirect('pageRW/dataPenduduk');
    }

    public function export()
    {
        $provinsi = $this->M_surat_rw->getRekap()->result();

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Set document properties
        $spreadsheet->getProperties()->setCreator('Andoyo - Java Web Media')
            ->setLastModifiedBy('Andoyo - Java Web Medi')
            ->setTitle('Office 2007 XLSX Test Document')
            ->setSubject('Office 2007 XLSX Test Document')
            ->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
            ->setKeywords('office 2007 openxml php')
            ->setCategory('Test result file');

        // Add some data
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'NIK')
            ->setCellValue('B1', 'KETERANGAN')
            ->setCellValue('C1', 'STATUS RUMAH')
            ->setCellValue('D1', 'STATUS KELUARGA')
            ->setCellValue('E1', 'RT')
            ->setCellValue('F1', 'RW');

        // Miscellaneous glyphs, UTF-8
        $i = 2;
        foreach ($provinsi as $provinsi) {

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $i, $provinsi->nik)
                ->setCellValue('B' . $i, $provinsi->keterangan)
                ->setCellValue('C' . $i, $provinsi->status_rumah)
                ->setCellValue('D' . $i, $provinsi->status_keluarga)
                ->setCellValue('E' . $i, $provinsi->rt)
                ->setCellValue('F' . $i, $provinsi->rw);
            $i++;
        }

        // Rename worksheet
        $spreadsheet->getActiveSheet()->setTitle('Report Excel ' . date('d-m-Y H'));

        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $spreadsheet->setActiveSheetIndex(0);

        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="Report Excel.xlsx"');
        header('Cache-Control: max-age=0');
        // If you're serving to IE 9, then the following may be needed
        header('Cache-Control: max-age=1');

        // If you're serving to IE over SSL, then the following may be needed
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
        header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
        header('Pragma: public'); // HTTP/1.0

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
        exit;
        redirect('pageRW/sendData');
    }

    public function sendData()
    {
        $this->load->view('templatesRW/header');
        $this->load->view('templatesRW/sidebar');
        $this->load->view('rw/uploadRekap');
        $this->load->view('templatesRW/footer');
    }

    public function prosesSend()
    {
        $nik = $this->session->userdata('nik');
        // $upload_image     = $_FILES['file_excel']['name'];
        $upload_image     = $_FILES['file_excel']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'xlsx|xls';
            $config['max_size']      = '8048';
            $config['upload_path']   = './uploads/file_excel';
            // $config['max_width']            = '240';
            // $config['max_height']           = '240';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_excel')) {
                $new_image = $this->upload->data('file_name');
                $data = array(
                    'file_excel' => $new_image,
                    'nik' => $nik,
                );
                // $this->db->where('id_surat', $id_surat);
                $this->db->insert('tb_file_rekap', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengiriman File Data Rekap Berhasil</div>');
                redirect('pageRW/sendData');
            } else {
                echo $this->upload->display_errors();
            }
        }
    }
}
