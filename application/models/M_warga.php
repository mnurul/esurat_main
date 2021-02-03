<?php

class M_warga extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_warga');
    }

    public function tambah_warga($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_warga($id)
    {
        $result = $this->db->where('id_warga', $id)->get('tb_warga');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_warga($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function profile_user($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_warga($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

    public function hapus_warga($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function cek_nik($nik)
    {
        $result = $this->db->where('nik', $nik)
            ->limit(1)
            ->get('tb_warga');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function surat($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
