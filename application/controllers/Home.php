<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Warga_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('index');
		$this->load->view('isi');
		$this->load->view('layout/footer');
	}

	public function profil()
	{
		$this->load->view('layout/header');
		$this->load->view('profil');
		$this->load->view('layout/footer');
	}

	public function visi()
	{
		$this->load->view('layout/header');
		$this->load->view('visi');
		$this->load->view('layout/footer');
	}

	public function struktur()
	{
		$this->load->view('layout/header');
		$this->load->view('struktur');
		$this->load->view('layout/footer');
	}

	public function bansos()
	{
		$this->load->view('layout/header');
		$this->load->view('home');
		$this->load->view('isian');
		$this->load->view('layout/footer');
	}

	public function tentang()
	{
		$this->load->view('layout/header');
		$this->load->view('tentang');
		$this->load->view('layout/footer');
	}

	public function selamat()
	{
		$this->load->view('layout/header');
		$this->load->view('selamat');
		$this->load->view('layout/footer');
	}

	public function sudah_dilengkapi()
	{
		$this->load->view('layout/header');
		$this->load->view('sudah_dilengkapi');
		$this->load->view('layout/footer');
	}

	public function ditolak()
	{
		$this->load->view('layout/header');
		$this->load->view('ditolak');
		$this->load->view('layout/footer');
	}

	public function b_lengkap()
	{
		$this->load->view('layout/header');
		$this->load->view('b_lengkap');
		$this->load->view('layout/footer');
	}

	public function cek_penerima() {
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');

		// query cek data berkas
		$cd =  $nik;
		$finalc = $this->Warga_model->cek_data($cd);
		
		$status = $finalc[0]['status_berkas'];
		$c_nama = $finalc[0]['nama'];

		$this->load->view('layout/header');
		// echo $status;
		if($status == "Sudah dilengkapi" && $nama == $c_nama) {
			redirect('home/sudah_dilengkapi');
		} elseif ($status == "berhak" && $nama == $c_nama) {
			redirect('home/selamat');
		} elseif ($status == "Ditolak" && $nama == $c_nama) {
			redirect('home/ditolak');
		} elseif ($status == "belum dilengkapi" && $nama == $c_nama) {
			redirect('home/b_lengkap');
		}
		else {
			$this->load->view('tidak_ada');
		}
		
		$this->load->view('layout/footer');
	}

	public function tes() {
		echo $this->session->userdata();
	}
}
