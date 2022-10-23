<?php

class Auth extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		redirect('eror', 'refresh');
	}

	public function login()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required|numeric');
		$this->form_validation->set_rules('pasword', 'pasword', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header');
			$this->load->view('login');
			$this->load->view('layout/footer');
		} else {
			$this->proses_login();
		}
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nik', 'nik', 'trim|required|is_unique[user.nik]', [
			'is_unique' => 'Nik anda sudah terdaftar sama yang maha kuasa, harap masukan nik yang berbeda!'
		]);
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('layout/header');
			$this->load->view('daftar');
			$this->load->view('layout/footer');
		} else {
			$data = [
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),	
				'password' => $this->input->post('password'),
			];

			$data_user = [
				'nik' => $data['nik'],
				'nama' => $data['nama'],
				'password' => $data['password'],
				'level' => 2
			];
			
			$data_bank = [
				'nik' => $data['nik'],
				'norek' => 'Data tidak ditemukan'
			];

			$data_warga = [
				'nik' => $data['nik'],
				'nama' => $data['nama'],
				'poto' => 'default.jpg'
			];

			$this->db->insert('user', $data_user);
			$this->db->insert('data_bank', $data_bank);
			$this->db->insert('warga', $data_warga);
			$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Selamat nik anda sudah terdaftar calon penerima bantuan sosial, Silahkan login untuk melengkapi data-data anda.
		  </div>');
			redirect('auth/login');
		}
	}



	public function proses_login()
	{
		$nik = $this->input->post('nik');
		$pass = $this->input->post('password');

		$user = $this->db->get_where('user', ['nik' => $nik])->row_array();

		if ($user) {
			if ($pass == $user['password']) {
				$data = [
					'nik' => $user['nik'],
					'nama' => $user['nama'],
					'level' => $user['level']
				];
				$this->session->set_userdata($data);
				if($user['level'] == 1) {
					redirect('admin');
				} else if ($user['level'] == 2) {

					$get_data = $this->db->get_where('warga', ['nik' => $nik])->row_array();

					$id = $get_data['id_warga'];

					// trigger data warga 
					$data_wargaa = array(
						'id_warga' => $id,
						'status_berkas' => 'belum dilengkapi' ,
						'keterangan' => 'Saat ini anda belum dinyatakan sebagai penerima bantuan sosial'
					);
		
					$this->db->insert('data_warga', $data_wargaa);

					redirect('warga');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			password anda salah, silahkan masukan kembali password anda yang benar.
		  </div>');
				redirect('auth/login');
				$this->login();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Nik ataupun password anda salah, silahkan masukan kembali nik dan password anda yang benar.
		  </div>');
			redirect('auth/login');
			$this->login();
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nik');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Anda berhasil logout...
		  </div>' );
		redirect('auth/login');
	}
}
