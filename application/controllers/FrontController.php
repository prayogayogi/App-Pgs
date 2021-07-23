<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['FrontModel', 'DataUserSekolahModel']);
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
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/beranda', $data);
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Profile
  public function profile()
  {
    $data['title'] = "PGS | Profile";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/profile');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Guru
  public function guru()
  {
    $data['title'] = "PGS | Guru";
    $data['getGuru'] = $this->DataUserSekolahModel->getGuru()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/guru', $data);
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Siswa
  public function siswa()
  {
    $data['title'] = "PGS | Siswa";
    $data['no'] = 1;
    $data['getSiswa'] = $this->DataUserSekolahModel->getSiswa()->result_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/siswa', $data);
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Ekskul
  public function ekskul()
  {
    $data['title'] = "PGS | Ekskul";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/ekskul');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Informasi
  public function informasi()
  {
    $data['title'] = "PGS | Informasi";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/informasi');
    $this->load->view('includes/Front/footer');
  }
}
