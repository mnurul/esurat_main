<?php

class M_rp_surat extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_surat_masuk');
    }

    public function tambah_rekap($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function detail_rekap($id_surat_masuk)
    {
        $result = $this->db->where('id_surat_masuk', $id_surat_masuk)->get('tb_surat_masuk');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_rp_surat($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_rp_surat($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
