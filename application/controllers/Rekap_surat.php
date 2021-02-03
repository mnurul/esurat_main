<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_surat extends CI_Controller
{
    public function index()
    {
        $data['Rp_surat'] = $this->M_rp_surat->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Rp_surat', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_rekap()
    {
        $id_surat          = $this->input->post('id_surat');
        $id_user           = $this->input->post('id_user');
        $id_warga          = $this->input->post('id_warga');
        $no_surat_masuk    = $this->input->post('no_surat_masuk');
        $tgl_diterima      = $this->input->post('tgl_diterima');

        $data = array(
            'id_surat'       => $id_surat,
            'id_user'        => $id_user,
            'id_warga'       => $id_warga,
            'no_surat_masuk' => $no_surat_masuk,
            'tgl_diterima'   => $tgl_diterima
        );

        $this->M_rp_surat->tambah_rekap($data, 'tb_surat_masuk');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah jasa Success!!</div>');
        redirect('Rekap_surat/index');
    }

    public function Detail_rp_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $data['Rp_surat'] = $this->M_rp_surat->detail_rekap($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Detail_rekap', $data);
        $this->load->view('templates/footer');
    }

    public function edit_rp_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $data['Rp_surat'] = $this->M_rp_surat->edit_rp_surat($where, 'tb_surat_masuk')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Edit_rp_surat', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id_surat_masuk    = $this->input->post('id_surat_masuk');
        $id_surat          = $this->input->post('id_surat');
        $id_user           = $this->input->post('id_user');
        $id_warga          = $this->input->post('id_warga');
        $no_surat_masuk    = $this->input->post('no_surat_masuk');
        $tgl_diterima      = $this->input->post('tgl_diterima');

        $data = array(
            'id_surat'       => $id_surat,
            'id_user'        => $id_user,
            'id_warga'       => $id_warga,
            'no_surat_masuk' => $no_surat_masuk,
            'tgl_diterima'   => $tgl_diterima
        );

        $where = array(
            'id_surat_masuk' => $id_surat_masuk
        );

        if ($this->M_rp_surat->update($where, $data, 'tb_surat_masuk')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update customer Success!!</div>');
            redirect('Rekap_surat/index');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update customer Success!!</div>');
            redirect('Rekap_surat/index');
        }
    }

    public function hapus_rp_surat($id)
    {
        $where = array('id_surat_masuk' => $id);
        $this->M_rp_surat->hapus_rp_surat($where, 'tb_surat_masuk');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete jasa Success!!</div>');
        redirect('Rekap_surat/index');
    }
}
