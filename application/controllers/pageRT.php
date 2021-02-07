<?php
defined('BASEPATH') or exit('No direct script access allowed');


class pageRT extends CI_Controller
{
    public function __construct()
    {
        // $this->load->model('model_auth', '', TRUE);
        parent::__construct();
        $this->load->model('M_surat_rt');
    }
    public function index()
    {
        $data['surat'] = $this->M_surat_rt->tampil_data()->result();
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/visiMisi', $data);
        $this->load->view('templatesRT/footer');
    }
    public function surat()
    {
        $data['surat'] = $this->M_surat_rt->tampil_data()->result();
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/surat_permohonan', $data);
        $this->load->view('templatesRT/footer');
    }

    public function printPdf($id)
    {
        $data['surat'] = $this->M_surat_rt->detail_surat($id);
        // $data['warga'] = $this->M_warga->detail_warga($id);
        //$data['surat'] = $this->M_surat_rt->tampil_data()->result();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "surat-keterangan.pdf";
        $this->pdf->load_view('rt/laporan_pdf', $data);
    }


    public function edit_surat($id)
    {
        $data['warga'] = $this->M_surat_rt->tampil_warga()->result();
        $where = array('id_surat_masuk' => $id);
        $data['surat'] = $this->M_surat_rt->edit_surat($where, 'tb_surat_masuk_rt')->result();
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/edit_surat', $data);
        $this->load->view('templatesRT/footer');
    }

    public function update()
    {
        $id_surat_masuk              = $this->input->post('id_surat_masuk');
        $no_surat_masuk              = $this->input->post('no_surat_masuk');
        // $id_warga                    = $this->input->post('id_warga');
        $tgl_pengajuan               = $this->input->post('tgl_pengajuan');
        $jenis_surat                 = $this->input->post('jenis_surat');
        $perihal                     = $this->input->post('perihal');
        $status_izin_rt              = $this->input->post('status_izin_rt');
        $status_izin_rw              = $this->input->post('status_izin_rw');
        $tgl_persetujuan             = $this->input->post('tgl_persetujuan');
        $keterangan                  = $this->input->post('keterangan');


        $data = array(
            'no_surat_masuk'        => $no_surat_masuk,
            //'id_warga'              => $id_warga,
            'tgl_pengajuan'         => $tgl_pengajuan,
            'jenis_surat'           => $jenis_surat,
            'perihal'               => $perihal,
            'status_izin_rt'        => $status_izin_rt,
            'status_izin_rw'        => $status_izin_rw,
            'tgl_persetujuan'       => $tgl_persetujuan,
            'keterangan'            => $keterangan
        );

        $where = array(
            'id_surat_masuk' => $id_surat_masuk
        );

        if ($this->M_surat_rt->update_surat($where, $data, 'tb_surat_masuk_rt')) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Update Surat Permohonan Success!!</div>');
            redirect('pageRT/surat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Update surat permohonan Gagal!!</div>');
            redirect('pageRT/surat');
        }
    }

    public function detail_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $data['surat'] = $this->M_surat_rt->detail_surat($id);
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/Detail_surat', $data);
        $this->load->view('templatesRT/footer');
    }

    public function hapus_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $this->M_surat_rt->hapus_surat($where, 'tb_surat_masuk_rt');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Delete surat permohonan Success!!</div>');
        redirect('pageRT/surat');
    }

    public function dataPenduduk()
    {
        $rt = $this->session->userdata('rt');
        $data['filterData'] = $this->M_surat_rt->getRekap($rt);
        $data['rekap'] = $this->M_surat_rt->tampil_rekap()->result();
        // var_dump($data['filterData'], $rt);
        // die();
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/dataPenduduk', $data);
        $this->load->view('templatesRT/footer');
    }

    public function tambah_rekap()
    {
        $nik = $this->input->post('nik');
        $dataWarga = $this->M_surat_rt->cek_nik($nik);
        $rt = $this->input->post('rt');
        $keterangan = $this->input->post('keterangan');
        $status_rumah = $this->input->post('status_rumah');
        $status_keluarga = $this->input->post('status_keluarga');
        $nikRt = $this->session->userdata('nik');
        $getRt = $this->session->userdata('rt');

        if ($getRt == $dataWarga->rt) {
            $data = array(
                'nik' => $nik,
                'rt' => $rt,
                'rw' => $dataWarga->rw,
                'keterangan' => $keterangan,
                'status_rumah' => $status_rumah,
                'status_keluarga' => $status_keluarga,
            );
            // var_dump($data);
            // die();
            $this->M_surat_rt->tambah_rekap($data, 'tb_rekap_data');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Penambahan Data Rekap Berhasil</div>');
            redirect('pageRT/dataPenduduk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Penambahan Data Rekap belum Berhasil</div>');
            redirect('pageRT/dataPenduduk');
        }
    }

    public function detail_rekap($id_rekap_data)
    {
        $where = array('id_rekap_data' => $id_rekap_data);
        $data['rekap'] = $this->M_surat_rt->detail_rekap($id_rekap_data);
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/detail_rekap', $data);
        $this->load->view('templatesRT/footer');
    }

    public function edit_rekap($id_rekap_data)
    {
        $where = array('id_rekap_data' => $id_rekap_data);
        $data['rekap'] = $this->M_surat_rt->edit_rekap($where, 'tb_rekap_data')->result();
        $this->load->view('templatesRT/header');
        $this->load->view('templatesRT/sidebar');
        $this->load->view('rt/edit_rekap', $data);
        $this->load->view('templatesRT/footer');
    }

    public function update_rekap($id_rekap_data)
    {
        $nik               = $this->input->post('nik');
        $keterangan              = $this->input->post('keterangan');
        $status_rumah      = $this->input->post('status_rumah');
        $status_keluarga      = $this->input->post('status_keluarga');

        $data = array(
            'nik'               => $nik,
            'keterangan'              => $keterangan,
            'status_rumah'      => $status_rumah,
            'status_keluarga'     => $status_keluarga,
        );

        // var_dump($data);
        // die();

        $where = array(
            'id_rekap_data' => $id_rekap_data
        );

        if ($this->M_surat_rt->update_rekap($where, $data, 'tb_rekap_data')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Data Rekap Berhasil</div>');
            redirect('pageRT/dataPenduduk');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Update Data Rekap belum Berhasil</div>');
            redirect('pageRT/dataPenduduk');
        }
    }

    public function hapus_rekap($id_rekap_data)
    {
        $where = array('id_rekap_data' => $id_rekap_data);
        $this->M_surat_rt->hapus_rekap($where, 'tb_rekap_data');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Hapus Data Rekap Berhasil</div>');
        redirect('pageRT/dataPenduduk');
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
        $this->load->view('rt/exportData', $data);
        $this->load->view('rt/printExcel');
        // $this->load->view('templatesRT/footer');
    }
}
