<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdministratorController extends CI_Controller
{
	// Model2 Untuk Data
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['authModel', 'UserAppModel']);
		if (!$this->session->userdata('email')) {
			redirect('AuthController');
		}
	}

	// Get data Administrator
	public function index()
	{
		$data['title'] = "Admin";
		$data['no'] = 1;
		$data['userLogin'] = $this->authModel->getUserLogin()->row_array();
		$data['getAdmin'] = $this->authModel->getAdmin()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/auth/viewAdmin', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Tambah Data Admin
	public function tambahDataAdmin()
	{
		$this->UserAppModel->tambahDataAdmin();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Admin</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('AdministratorController');
	}

	// Ubah data admin
	public function ubahDataAdmin($id)
	{
		$this->UserAppModel->updateDataAdmin($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Admisistrator</strong> Berhasil Diubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('AdministratorController');
	}

	// Hapus data admin
	public function hapusAdministrator($id)
	{
		$this->UserAppModel->hapusAdministrator($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Admisistrator</strong> Berhasil Diubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('AdministratorController');
	}
}
