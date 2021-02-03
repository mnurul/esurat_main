<?php

class M_surat_rw extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_surat_masuk_rt');
        $this->db->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga');
        $query = $this->db->get();
        return $query;
    }

    public function getRekap()
    {
        $this->db->select('*');
        $this->db->from('tb_rekap_data');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_warga()
    {
        $this->db->select('id_warga');
        $this->db->select('nik');
        $this->db->from('tb_warga');
        $this->db->where('id_warga');
        // $this->db->join('tb_user', 'tb_user.id = tb_surat.id_kurir');
        $query = $this->db->get();
        return $query;
    }

    public function detail_surat($id)
    {
        $result = $this->db->where('id_surat_masuk', $id)->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_surat($where, $table)
    {
        return $this->db->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get_where($table, $where);
    }
    // public function profile_user($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    public function update_surat($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
        return $this->db->affected_rows();
    }

    public function hapus_surat($where, $table)
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

    public function detail_rekap($id_rekap_data)
    {
        $result = $this->db->where('id_rekap_data', $id_rekap_data)->get('tb_rekap_data');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
