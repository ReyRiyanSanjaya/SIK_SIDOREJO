<?php

class Penerima_model extends CI_Model
{
	public function data_penerima()
	{
		// sintax join table dengan mengurutkan 
		// $this->db->order_by('nama', 'ASC');
    //     return $this->db->from('warga')
    //       ->join('status', 'status.nik=warga.nik')
    //       ->get()
    //       ->result();
		$diterima = 'Diterima';

		$this->db->order_by('nama', 'ASC');
			return $this->db->from('warga')
				->where('status_berkas' , 'Diterima')
				->get()
				->result();
	}
}
