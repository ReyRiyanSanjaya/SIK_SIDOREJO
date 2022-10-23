<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Warga_model');
		$this->load->library('session');
	}


	public function index()
	{
		$data['title'] = 'Dashboard Pendaftaran BANSOS UMA';
		$data['user'] = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('warga/header', $data);
		$this->load->view('warga/sidebar');
		$this->load->view('warga/index');
		$this->load->view('warga/footer');
	}

	public function Pelengkapan_berkas() {
		$data['title'] = 'Silahkan form pendaftaran anda';
		$data['user'] = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('warga/header', $data);
		$this->load->view('warga/sidebar');

		// query cek data berkas
		$c =  $data['user']['nik'];
		$final = $this->Warga_model->cek_data($c);
		$cek_data =  $final[0]['status_berkas'];
		// kondisi pengecekan 	 
		if($cek_data == 'Sudah dilengkapi') {
			$this->load->view('warga/wait');
		} elseif ($cek_data == 'berhak') {
			$this->load->view('warga/wait');
		} else {
			$this->load->view('warga/data');
		}
	
		$this->load->view('warga/footer');
	}

	public function berkas()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$pendapatan = $this->input->post('pendapatan');
		$jumlah_anak = $this->input->post('jumlah_anak');
		$pengeluaran = $this->input->post('pengeluaran');
		$status_rumah = $this->input->post('status_rumah');
		$poto = $this->input->post('poto');

		// upload gambar 
		$config['upload_path']          = './berkas/';
		$config['file_name']			= $nik. '.jpg';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1000;
		$config['max_width']            = 2080;
		$config['max_height']           = 2080;
		$config['encrypt_name']			= FALSE;
		$this->load->library('upload', $config);
		
		$upload_poto = $this->upload->do_upload('poto');
		// upload gambar 

		$c = $nik;
		$cek = $this->Warga_model->cek_data($c);
		$id_data = $cek[0]['id_data'];

		$data_warga = array(
			'status_berkas' => 'Sudah dilengkapi',
			'keterangan' => 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'
		);
		
		$berkas_warga = array(
			'id_data' => $id_data,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan,
			'pendapatan' => $pendapatan,
			'jumlah_anak' => $jumlah_anak,
			'pengeluaran' => $pengeluaran,
			'status_rumah' => $status_rumah,
			'poto' => $nik. '.jpg'
		);

		$update_warga = array(
			'nik' => $nik,
			'nama' => $nama,
			'poto' => $nik. '.jpg'
		);

		// // update ke tabel warga 
		$this->Warga_model->update_warga($nik,$update_warga);
		// // insert ke tabale data warga
		$this->Warga_model->data_warga_berkas($id_data, $data_warga);
		// insert data ke tabel berkas 
		$this->Warga_model->berkas_data_warga($berkas_warga);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Berkas Berhasil Dilengkapi, Silahkan menunggu apakah anda berhak menerima bantuan sosial atau tidak!.
		  </div>');
		redirect('warga');
	}

	// controller pengaturan akun 
	public function setting()
	{
		$data['title'] = 'Pengaturan Akun';
		$data['user'] = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();

		// $data['user']['poto'];
		$this->load->view('warga/header', $data);
		$this->load->view('warga/sidebar');
		$this->load->view('warga/setting/data_user');
		$this->load->view('warga/footer');
	}

	public function setting_user()
	{
		$data['title'] = 'Ubah Passowrd';
		$data['user'] = $this->db->get_where('warga', ['nik' => $this->session->userdata('nik')])->row_array();		
		$this->load->view('warga/header', $data);
		$this->load->view('warga/sidebar');
		$this->load->view('warga/setting/edit_datapengaturan');
		$this->load->view('warga/footer');
	}

	public function edit_datau()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');

		$dlevel = $this->db->get('user')->row_array();
		$level = ($dlevel['level']);
		
		$ubah_pass = array(
			'nik' => $nik,
			'nama' => $nama,
			'password' => $password,
			'level' => $level
		);

		$this->db->where('nik', $nik);
		$this->db->update('user', $ubah_pass);
		// echo $nik;
		// $this->Pengaturan_model->editDataUserWarga($ubah_pass);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Password berhasil diubah.
		  </div>');
		redirect('warga/setting');
	}

}
