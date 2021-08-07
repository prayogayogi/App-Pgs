<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AssetSekolahController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['AssetSekolahModel', 'AuthModel']);
		if (!$this->session->userdata('email')) {
			redirect('AuthController');
		}
	}
	// UNTUK STRUKTUR ORGANISASI
	// get & View Struktur Organisasi
	public function struktur()
	{
		$data['title'] = "Struktur Organisasi";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getOrganisasi'] = $this->AssetSekolahModel->getData()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/strukturOrganisasi', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store Data Organisasi Sekolah
	public function storeOrganisasi()
	{
		$this->AssetSekolahModel->store();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Struktur Organisasi</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/struktur');
	}

	// Update Struktur Organisasi
	public function update()
	{
		$this->AssetSekolahModel->update();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Struktur Organisasi</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/struktur');
	}

	// UNTUK VISI & MISI
	// Untuk Visi & Misi
	public function visiMisi()
	{
		$data['title'] = "Visi Misi";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getVisiMisi'] = $this->AssetSekolahModel->getVisiMisi()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/visiMisi', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store Visi Dan Misi
	public function storeVisiMisi()
	{
		$this->AssetSekolahModel->storeVisiMisi();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Visi Misi</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// Update Data Visi Misi
	public function updateVisiMisi($id)
	{
		$this->AssetSekolahModel->updateVisiMisi($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Visi Misi</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// Destroy Data Visi Misi
	public function destroyVisiMisi($id)
	{
		$this->AssetSekolahModel->destroyVisiMisi($id);
		$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Visi Misi</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/visiMisi');
	}

	// UNTUK DATA INFORMASI
	// Untuk Data Informasi
	public function dataInformasi()
	{
		$data['title'] = "Data Informasi";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getInformasi'] = $this->AssetSekolahModel->getDataInformasi()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/dataInformasi', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Store Data Informasi
	public function storeInformasi()
	{
		$this->AssetSekolahModel->storeInformasi();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Informasi</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/dataInformasi');
	}

	// Update Data Informasi
	public function updateInformasi()
	{
		$this->AssetSekolahModel->updateInformasi();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Informasi</strong> Berhasil Di Update..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/dataInformasi');
	}

	// Destroy Data Informasi
	public function destroyInformasi($slug)
	{
		$this->AssetSekolahModel->destroyInformasi($slug);
		$this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Informasi</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/dataInformasi');
	}

	// SOSIAL MEIDA
	// Get Sosial Media
	public function sosialMedia()
	{
		$data['title'] = "Sosial Media";
		$data['no'] = 1;
		$data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
		$data['getSosialMedia'] = $this->AssetSekolahModel->getSosialMedia()->result_array();
		$this->load->view('includes/Admin/header', $data);
		$this->load->view('includes/Admin/sidebar', $data);
		$this->load->view('pages/dashboard/assetSekolah/sosialMedia', $data);
		$this->load->view('includes/Admin/footer');
	}

	// Sotore Sosial Media
	public function storeSosialMedia()
	{
		$this->AssetSekolahModel->storeSosialMedia();
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Sosial Media</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/sosialMedia');
	}

	// Updata Sosial Media
	public function updateSosialMedia($id)
	{
		$this->AssetSekolahModel->updateSosialMedia($id);
		$this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Sosial Media</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
		redirect('Admin/AssetSekolahController/sosialMedia');
	}
}
