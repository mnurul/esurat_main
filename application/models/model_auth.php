<?php

class Model_auth extends CI_Model
{
	public function cek_login($email, $password)
	{
		$email = set_value('email');
		$password = set_value('password');

		$result = $this->db->where('email', $email)
			->where('password', $password)
			//utk membuat login aktif dg nilai 1
			// ->where('is_active', 1)
			->limit(1)
			->get('tb_user');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function getRt($nik)
	{
		$result = $this->db->where('nik', $nik)
			// ->where('password', $password)
			//utk membuat login aktif dg nilai 1
			// ->where('is_active', 1)
			->limit(1)
			->get('tb_warga');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}

	public function getRw($nik)
	{
		$result = $this->db->where('nik', $nik)
			// ->where('password', $password)
			//utk membuat login aktif dg nilai 1
			// ->where('is_active', 1)
			->limit(1)
			->get('tb_warga');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
