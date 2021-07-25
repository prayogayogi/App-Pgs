<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['FrontModel', 'DataUserSekolahModel', 'AssetSekolahModel']);
  }

  // Untuk Halaman Home
  public function index()
  {
    $data['title'] = "PGS | Home";
    $data['getKepsek'] = $this->FrontModel->getKepsek()->row_array();
    $data['getWakilKepsek'] = $this->FrontModel->getWakilKepsek()->row_array();
    $data['getGuru'] = $this->FrontModel->getGuru()->result_array();
    $data['getJumlahGuru'] = $this->DataUserSekolahModel->getGuru()->num_rows();
    $data['getJumlahSiswa'] = $this->DataUserSekolahModel->getSiswa()->num_rows();
    $data['getNewInformasi'] = $this->AssetSekolahModel->getNewInformasi()->result_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/beranda', $data);
    $this->load->view('includes/Front/footer', $data);
  }

  // Untuk Halaman Profile
  public function profile()
  {
    $data['title'] = "PGS | Profile";
    $data['getStrukturOrganisasi'] = $this->FrontModel->getStrukturOrganisasi()->row_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/profile');
    $this->load->view('includes/Front/footer', $data);
  }

  // Untuk Halaman Guru
  public function guru()
  {
    $data['title'] = "PGS | Guru";
    $data['getGuru'] = $this->DataUserSekolahModel->getGuru()->result_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/guru', $data);
    $this->load->view('includes/Front/footer', $data);
  }

  // Untuk Halaman Siswa
  public function siswa()
  {
    $data['title'] = "PGS | Siswa";
    $data['no'] = 1;
    $data['getSiswa'] = $this->DataUserSekolahModel->getSiswa()->result_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/siswa', $data);
    $this->load->view('includes/Front/footer', $data);
  }

  // Untuk Halaman Ekskul
  public function ekskul()
  {
    $data['title'] = "PGS | Ekskul";
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/ekskul');
    $this->load->view('includes/Front/footer', $data);
  }

  // Untuk Halaman Informasi
  public function informasi()
  {
    $data['title'] = "PGS | Informasi";
    $data['getInformasi'] = $this->AssetSekolahModel->getInformasi()->result_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/informasi', $data);
    $this->load->view('includes/Front/footer', $data);
  }
}
