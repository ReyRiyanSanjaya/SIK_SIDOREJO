<?php

class Penduduk_model extends CI_Model
{
	public function tambah_data_penduduk($data)
	{
		$this->db->insert('data_penduduk', $data);
	}

	public function deleteDataPenduduk($dimana)
	{
		$this->db->where($dimana);
		$this->db->delete('data_penduduk');

	}
}

