<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Warga extends CI_Controller
{
    public function index()
    {
        $data['warga'] = $this->M_warga->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Warga', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_warga()
    {
        $nik               = $this->input->post('nik');
        $nama              = $this->input->post('nama');
        $tempat_lahir      = $this->input->post('tempat_lahir');
        $tanggal_lahir     = $this->input->post('tanggal_lahir');
        $alamat            = $this->input->post('alamat');
        $agama             = $this->input->post('agama');
        $jenis_kelamin     = $this->input->post('jenis_kelamin');
        $pendidikan        = $this->input->post('pendidikan');
        $pekerjaan         = $this->input->post('pekerjaan');
        $rt                = $this->input->post('rt');
        $rw                = $this->input->post('rw');
        $kelurahan         = $this->input->post('kelurahan');


        $data = array(
            'nik'               => $nik,
            'nama'              => $nama,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,
            'agama'             => $agama,
            'jenis_kelamin'     => $jenis_kelamin,
            'pendidikan'        => $pendidikan,
            'pekerjaan'         => $pekerjaan,
            'rt'                => $rt,
            'rw'                => $rw,
            'kelurahan'        => $kelurahan
        );

        $this->M_warga->tambah_warga($data, 'tb_warga');
        redirect('Warga/index');
    }


    public function edit_warga($id)
    {
        $where = array('id_warga' => $id);
        $data['warga'] = $this->M_warga->edit_warga($where, 'tb_warga')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Edit_warga', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id_warga          = $this->input->post('id_warga');
        $nik               = $this->input->post('nik');
        $nama              = $this->input->post('nama');
        $tempat_lahir      = $this->input->post('tempat_lahir');
        $tanggal_lahir     = $this->input->post('tanggal_lahir');
        $alamat            = $this->input->post('alamat');
        $agama             = $this->input->post('agama');
        $jenis_kelamin     = $this->input->post('jenis_kelamin');
        $pendidikan        = $this->input->post('pendidikan');
        $pekerjaan         = $this->input->post('pekerjaan');
        $rt                = $this->input->post('rt');
        $rw                = $this->input->post('rw');
        $kelurahan         = $this->input->post('kelurahan');



        $data = array(
            'nik'               => $nik,
            'nama'              => $nama,
            'tempat_lahir'      => $tempat_lahir,
            'tanggal_lahir'     => $tanggal_lahir,
            'alamat'            => $alamat,
            'agama'             => $agama,
            'jenis_kelamin'     => $jenis_kelamin,
            'pendidikan'        => $pendidikan,
            'pekerjaan'         => $pekerjaan,
            'rt'                => $rt,
            'rw'                => $rw,
            'kelurahan'        => $kelurahan
        );

        $where = array(
            'id_warga' => $id_warga
        );

        if ($this->M_warga->update_warga($where, $data, 'tb_warga')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update Warga Success!!</div>');
            redirect('Warga/index');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Update jasa Gagal!!</div>');
            redirect('Warga/index');
        }
    }


    public function detail_warga($id)
    {
        $where = array('id_warga' => $id);
        $data['warga'] = $this->M_warga->detail_warga($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Detail_warga', $data);
        $this->load->view('templates/footer');
    }

    public function hapus_warga($id)
    {
        $where = array('id_warga' => $id);
        $this->M_warga->hapus_warga($where, 'tb_warga');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Delete jasa Success!!</div>');
        redirect('warga/index');
    }
}
