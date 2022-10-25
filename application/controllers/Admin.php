<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Warga_model');
		$this->load->model('Admin_model');
		$this->load->model('Penerima_model');
		$this->load->model('Pengaturan_model');
		$this->load->model('Berkas_model');
		$this->load->library('session');
	}

	public function index()
	{
		$data['title'] = 'Dashboard Admin';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/layout/footer');
	}

	// controller data warga 
	public function data_warga()
	{
		$warga = $this->Warga_model->data_warga();
		$data_warga = array('data_warga' => $warga);

		$data['title'] = 'Menu Data Warga';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/data_warga', $data_warga);
		$this->load->view('dashboard/layout/footer');
	}

	public function data_warga_all()
	{
		$penduduk = $this->Warga_model->data_penduduk();
		$data_penduduk = array('data_penduduk' => $penduduk);

		$data['title'] = 'Menu Data penduduk';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();

		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/dw_all', $data_penduduk);
		$this->load->view('dashboard/layout/footer');
	}

	public function edit_data_warga($id)
	{
		$queryDataWarga = $this->Warga_model->getDataWarga($id);
		$datawargaedit = array('editdatawarga' => $queryDataWarga);
		$data['title'] = 'Menu Data Warga';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/edit_datawarga', $datawargaedit);
		$this->load->view('dashboard/layout/footer');
	}

	public function tambah_data_warga()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');

		$data_user = [
			'nik' => $nik,
			'nama' => $nama,
			'password' => '123',
			'level' => 2
		];

		$data_bank = [
			'nik' => $nik,
			'norek' => 'Data tidak ditemukan'
		];

		$data_warga = [
			'nik' => $nik,
			'nama' => $nama,
			'poto' => 'default.jpg'
		];

		$this->db->insert('user', $data_user);
		$this->db->insert('data_bank', $data_bank);
		$this->db->insert('warga', $data_warga);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Berhasil menambah data user warga.
		  </div>');
		redirect('admin/data_warga');
	}

	public function edit_data()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');

		$arrEditData = array(
			'nik' => $nik,
			'nama' => $nama,
		);

		$this->Warga_model->editDataWarga($nik, $arrEditData);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/data_warga');
	}

	public function delete_data_warga($nik)
	{
		$where = array('nik' => $nik);
		$this->Warga_model->deleteDataWarga($where, 'warga');
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil dihapus.
		  </div>');
		redirect('admin/data_warga');
	}

	public function data_berkas()
	{
		$c = 'Sudah dilengkapi';
		$b = 'berhak';
		$data_berkas = $this->Berkas_model->data_berkas($c);
		$datab = array('berkas' => $data_berkas);

		$ct = $data_berkas[0]['status_berkas'];

		$data['title'] = 'Menu Data berkas';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');

		if ($ct == $c) {
			$this->load->view('dashboard/menu/data_berkas', $datab);
		} else {
			$this->load->view('dashboard/menu/no_data');
			// echo "berhasil";
		}
		$this->load->view('dashboard/layout/footer');
		// var_dump($data_berkas);
	}

	public function edit_data_berkas($id_berkas)
	{
		$queryDataberkas = $this->berkas_model->getDataberkas($id_berkas);
		$databerkasedit = array('editdataberkas' => $queryDataberkas);
		$data['title'] = 'Menu Data berkas';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/berkas/edit_databerkas', $databerkasedit);
		$this->load->view('dashboard/layout/footer');
	}

	public function tambah_data_berkas()
	{

		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$photo = $this->input->post('photo');

		$arrTambahData = array(
			'nama' => $nama,
			'no_hp' => $no_hp,
			'photo' => $photo
		);

		$this->berkas_model->tambah_data_berkas($arrTambahData);
		redirect('admin/data_berkas');
	}

	public function edit_datap()
	{
		$id_berkas = $this->input->post('id_berkas');
		$nama = $this->input->post('nama');
		$no_hp = $this->input->post('no_hp');
		$photo = $this->input->post('photo');
		$status = $this->input->post('status');
		$arrEditDatap = array(
			'id_berkas' => $id_berkas,
			'nama' => $nama,
			'no_hp' => $no_hp,
			'photo' => $photo,
			'status' => $status
		);

		$this->berkas_model->editDataberkas($id_berkas, $arrEditDatap);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/data_berkas');
	}

	public function delete_data_berkas($id_berkas)
	{
		$where = array('id_berkas' => $id_berkas);
		$this->berkas_model->deleteDataberkas($where, 'berkas');
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil dihapus.
		  </div>');
		redirect('admin/data_berkas');
	}


	// controller pengaturan akun 
	public function setting()
	{
		$data['title'] = 'Pengaturan Akun';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/akun/data_user');
		$this->load->view('dashboard/layout/footer');
	}

	public function setting_user()
	{
		$data['title'] = 'Ubah Data Admin';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/akun/edit_datapengaturan');
		$this->load->view('dashboard/layout/footer');
	}

	public function edit_datau()
	{
		$id = $this->input->post('id');
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$poto = $this->input->post('poto');
		$level = $this->input->post('level');
		$arrEditDataku = array(
			'id' => $id,
			'nik' => $nik,
			'password' => $password,
			'nama' => $nama,
			'alamat' => $alamat,
			'poto' => $poto,
			'level' => $level
		);

		$this->Pengaturan_model->editDataUser($id, $arrEditDataku);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/setting');
	}


	// controler status penerima bantuan sosial uma 
	public function data_penerima()
	{
		$data['penerima'] = $this->Penerima_model->data_penerima();
		$data['title'] = 'List Data warga penerima Bansos tahun 2022';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/data_penerima', $data);
		$this->load->view('dashboard/layout/footer');
		// var_dump($data['title']);
		// echo "<hr><br>";
		// var_dump($data['penerima']);
		// echo "$data['penerima']->nama";
	}

	public function acc()
	{
		$cek = $this->uri->segment('3');
		$data_berkas = $this->Berkas_model->data_berkas2($cek);
		$da = array('berkas' => $data_berkas);
		$data['title'] = 'Lihat Berkas Warga';
		$data['user'] = $this->db->get_where('user', ['nik' => $this->session->userdata('nik')])->row_array();
		$this->load->view('dashboard/layout/header', $data);
		$this->load->view('dashboard/layout/sidebar');
		$this->load->view('dashboard/menu/acc', $da);
		$this->load->view('dashboard/layout/footer');
		// var_dump($data_berkas);
	}

	public function penerima()
	{

		$cek = $this->uri->segment('3');
		$data_berkas = $this->Berkas_model->data_berkas2($cek);

		$id_warga = $data_berkas->id_warga;

		// updating data status 
		$status = $this->uri->segment('4');
		$c = $this->uri->segment('5');

		$data = array(
			'id_data' => $cek,
			'id_warga' => $id_warga,
			'status_berkas' => $status,
			'keterangan' => $c
		);

		// var_dump($data);

		$this->Berkas_model->update_status($cek, $data);
		$this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">
			Data berhasil diubah.
		  </div>');
		redirect('admin/data_berkas');
	}
}
