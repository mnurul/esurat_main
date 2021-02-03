<?php
defined('BASEPATH') or exit('No direct script access allowed');


class pageWarga extends CI_Controller
{
    public function inputSurat()
    {
        //$data['warga'] = $this->M_warga->tampil_data()->result();
        $data['id_user'] = $this->session->userdata('id_user');
        $data['nik'] = $this->session->userdata('nik');
        $where = array('id_user' => $data['id_user']);
        $table = 'tb_user';
        $data['user'] = $this->M_warga->profile_user($where, $table)->result();

        $this->load->view('templatesWarga/header');
        $this->load->view('templatesWarga/sidebar');
        $this->load->view('warga/surat', $data);
        $this->load->view('templatesWarga/footer');
    }

    public function index()
    {

        $id_user = $this->session->userdata('id_user');
        $nik = $this->session->userdata('nik');
        $where = array('nik' => $nik);
        $table = 'tb_surat_masuk_rt';
        $data['surat'] = $this->M_warga->surat($where, $table)->result();
        // var_dump($data['user'], $id_user);
        // die();
        $this->load->view('templatesWarga/header');
        $this->load->view('templatesWarga/sidebar');
        $this->load->view('warga/visiMisi', $data);
        $this->load->view('templatesWarga/footer');
    }

    public function warga()
    {
        $data['warga'] = $this->M_warga->tampil_data()->result();
        // var_dump($data['user'], $data['nik']);
        // die();
        $this->load->view('templatesWarga/header');
        $this->load->view('templatesWarga/sidebar');
        $this->load->view('warga/Warga', $data);
        $this->load->view('templatesWarga/footer');
    }

    public function trakingSurat()
    {
        $id_user = $this->session->userdata('id_user');
        $nik = $this->session->userdata('nik');
        $where = array('nik' => $nik);
        $table = 'tb_surat_masuk_rt';
        $data['surat'] = $this->M_warga->surat($where, $table)->result();
        // var_dump($data['user'], $id_user);
        // die();
        $this->load->view('templatesWarga/header');
        $this->load->view('templatesWarga/sidebar');
        $this->load->view('warga/trakingSurat', $data);
        $this->load->view('templatesWarga/footer');
    }

    public function prosesSurat($nik)
    {
        $dataWarga = $this->M_warga->cek_nik($nik);
        $nik          = $this->input->post('nik');
        $nama          = $this->input->post('nama');
        $jkel          = $this->input->post('jkel');
        $agama          = $this->input->post('agama');
        $jenis_surat          = $this->input->post('jenis_surat');
        $maksud_keperluan     = $this->input->post('maksud_keperluan');
        $status_izin_rt       = $this->input->post('status_izin_rt');

        $data = array(
            'jenis_surat' => $jenis_surat,
            'id_warga' => $dataWarga->id_warga,
            'nik' => $nik,
            'perihal' => $maksud_keperluan,
            'status_izin_rt' => $status_izin_rt
        );
        // var_dump($data);
        // die();

        $this->db->insert('tb_surat_masuk_rt', $data);


        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Surat anda berhasil diajukan, Silahkan Menunggu</div>');
        redirect('pageWarga/inputSurat');
    }

    public function profile()
    {
        $id_user = $this->session->userdata('id_user');
        $where = array('id_user' => $id_user);
        $table = 'tb_user';
        $data['user'] = $this->M_warga->profile_user($where, $table)->result();
        // var_dump($data['user'], $id_user);
        // die();
        $this->load->view('templatesWarga/header');
        $this->load->view('templatesWarga/sidebar');
        $this->load->view('warga/profile', $data);
        $this->load->view('templatesWarga/footer');
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
