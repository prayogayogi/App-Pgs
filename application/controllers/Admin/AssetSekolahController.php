<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AssetSekolahController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['AssetSekolahModel', 'authModel', 'UserAppModel']);
  }

  // Untuk Struktur Organisasi
  public function struktur()
  {
    $data['title'] = "Struktur Organisasi";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
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

  // Untuk Visi & Misi
  public function visiMisi()
  {
    $data['title'] = "Struktur Organisasi";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/assetSekolah/visiMisi', $data);
    $this->load->view('includes/Admin/footer');
  }

  // Untuk Visi & Misi
  public function dataInformasi()
  {
    $data['title'] = "Struktur Organisasi";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/assetSekolah/dataInformasi', $data);
    $this->load->view('includes/Admin/footer');
  }
}
