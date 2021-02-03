<?php

class M_surat_aparat extends CI_Model
{

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_surat_masuk_rt');
        $this->db->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga');
        $query = $this->db->get();
        return $query;
    }

    public function getRekapData()
    {
        $this->db->select('*');
        $this->db->from('tb_file_rekap');
        $this->db->join('tb_warga', 'tb_warga.nik = tb_file_rekap.nik');
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

    public function getFileExcel($id)
    {
        $this->db->select('file_excel');
        $this->db->from('tb_file_rekap');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }

    public function detail_surat($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_permohonan_ktp($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'ktp')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_permohonan_kk($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'kk')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_keterangan_domisili($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'domisili')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_keterangan_kelahiran($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'kelahiran')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_keterangan_kematian($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'kematian')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_keterangan_tidakmampu($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'tidak mampu')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_keterangan_usaha($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'usaha')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function surat_pengantar_skck($id)
    {
        // join user
        $result = $this->db->where('id_surat_masuk', $id)->where('perihal', 'skck')->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga')->get('tb_surat_masuk_rt');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    function pencarian($jenis_surat)
    {
        $this->db->where('jenis_surat', $jenis_surat);
        $this->db->join('tb_warga', 'tb_warga.id_warga = tb_surat_masuk_rt.id_warga');
        return $this->db->get("tb_surat_masuk_rt");
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

    public function detail_rekap($id)
    {
        $this->db->select('tb_warga.nik, tb_warga.nama, tb_warga.rt,tb_warga.rw,tb_file_rekap.file_excel,tb_file_rekap.tgl_upload');
        $this->db->from('tb_file_rekap');
        $this->db->join('tb_warga', 'tb_warga.nik = tb_file_rekap.nik');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query;
    }
}
