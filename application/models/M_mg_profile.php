<?php

class M_mg_profile extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_user');
    }

    public function detail_warga($id_user)
    {
        $result = $this->db->where('id_user', $id_user)->get('tb_user');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function edit_mg_profile($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_manage_profile($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
