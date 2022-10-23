<?php

class Pengaturan_model extends CI_Model
{
	public function data_user()
	{
		$query = $this->db->get('user');
		return $query->result();
	}

	public function editDataUser($id, $arrEditDataku)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $arrEditDataku);
	}

	public function editDataUserWarga($ubah_pass)
	{
		$this->db->where('nik', $nik);
		$this->db->update('user', $ubah_pass);
	}
}
