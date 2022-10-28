<?php

class Warga_model extends CI_Model
{
	public function data_warga()
	{
		$query = $this->db->get('warga')->result();
		return $query;
	}

	public function data_penduduk()
	{
		$query = $this->db->get('data_penduduk')->result();
		return $query;
	}


	public function tambah_data_warga($data)
	{
		$this->db->insert('warga', $data);
	}

	public function getDataWarga($nik)
	{
		$this->db->where('nik', $nik);
		$query = $this->db->get('warga');;
		return $query->row();
	}

	public function getDataPenduduk($nik)
	{
		$this->db->where('nik', $nik);
		$query = $this->db->get('data_penduduk');;
		return $query->row();
	}

	public function editDataWarga($nik, $arrEditData)
	{
		$this->db->where('nik', $nik);
		$this->db->update('warga', $arrEditData);
	}

	public function editDataWargaP($nik, $arrEditData)
	{
		$this->db->where('nik', $nik);
		$this->db->update('data_penduduk', $arrEditData);
	}

	public function deleteDataWarga($where)
	{
		$this->db->where($where);
		$this->db->delete(array('user','warga','data_bank'));

	}

	public function update_warga($nik,$update_warga)
	{
		$this->db->where('nik', $nik);
		$this->db->update('warga', $update_warga);
	}

	public function data_warga_berkas($id_data, $data_warga)
	{
		$this->db->where('id_data', $id_data);
		$this->db->update('data_warga', $data_warga);
	}

	public function berkas_data_warga($berkas_warga)
	{
		$this->db->insert('berkas', $berkas_warga);
	}

	// cek berkas 
	public function cek_data($c)
	{
		$this->db->select('*');
		$this->db->from('user a'); 
		$this->db->join('warga b', 'b.nik=a.nik', 'right');
		$this->db->join('data_warga c', 'c.id_warga=b.id_warga', 'right');
		$this->db->where('a.nik',$c);       
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

		// cek berkas 
		public function cek_penerima($c)
		{
			$this->db->select('*');
			$this->db->from('user a'); 
			$this->db->join('warga b', 'b.nik=a.nik', 'right');
			$this->db->join('data_warga c', 'c.id_warga=b.id_warga', 'right');
			$this->db->where('a.nik',$c);       
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
