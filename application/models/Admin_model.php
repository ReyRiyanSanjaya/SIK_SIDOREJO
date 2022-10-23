<?php

class Admin_model extends CI_Model
{
	public function get_data($nik)
	{
		$this->db->select('*');
		$this->db->from('user a'); 
		$this->db->join('warga b', 'b.nik=a.nik', 'right');
		$this->db->join('data_warga c', 'c.id_warga=b.id_warga', 'right');
		$this->db->where('a.nik',$nik);       
		$query = $this->db->get(); 
		if($query->num_rows() != 0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}
}
