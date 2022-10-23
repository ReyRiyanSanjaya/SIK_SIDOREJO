<?php

class Berkas_model extends CI_Model
{

	public function data_berkas($c)
	{
		$this->db->select('*');
		$this->db->from('user a');
		$this->db->join('warga b', 'b.nik=a.nik', 'left');
		$this->db->join('data_warga c', 'c.id_warga=b.id_warga', 'left');
		$this->db->where('c.status_berkas', $c);
		$query = $this->db->get();
		if ($query->num_rows() != 0) {
			return $query->result_array();
		} else {
			return false;
		}
	}

	public function data_berkas2($cek)
	{
		$this->db->select('*');
		$this->db->from('warga a');
		$this->db->join('data_warga b', 'b.id_warga=a.id_warga', 'left');
		$this->db->join('berkas c', 'c.id_data=b.id_data', 'left');
		$this->db->where('c.id_data', $cek);
		$query = $this->db->get();
		if ($query->num_rows() != 0) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function update_status($cek,$data)
	{
		$this->db->where('id_data', $cek);
		$this->db->update('data_warga', $data);
	}
}
