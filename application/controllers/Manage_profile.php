<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Manage_profile extends CI_Controller
{
    public function index()
    {
        $data['Mg_profile'] = $this->M_mg_profile->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/visiMisi', $data);
        $this->load->view('templates/footer');
    }
    public function user()
    {
        $data['Mg_profile'] = $this->M_mg_profile->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Mg_profile', $data);
        $this->load->view('templates/footer');
    }

    public function Detail_user($id)
    {
        $where = array('id_user' => $id);
        $data['Mg_profile'] = $this->M_mg_profile->detail_warga($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Detail_mg', $data);
        $this->load->view('templates/footer');
    }

    public function edit_user($id)
    {
        $where = array('id_user' => $id);
        $data['Mg_profile'] = $this->M_mg_profile->edit_mg_profile($where, 'tb_user')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/Edit_mg_profile', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id               = $this->input->post('id_user');
        $nama             = $this->input->post('nama');
        $alamat           = $this->input->post('alamat');
        $username         = $this->input->post('username');
        $role_id          = $this->input->post('role_id');
        $foto             =  $_FILES['foto']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo "Gambar Gagal Diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama'      => $nama,
            'alamat'    => $alamat,
            'username'  => $username,
            'role_id'   => $role_id,
            'foto'      => $foto
        );

        $where = array(
            'id_user' => $id
        );

        $this->M_mg_profile->update_manage_profile($where, $data, 'tb_user');
        redirect('Manage_profile/index');
    }
}
