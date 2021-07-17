<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontController extends CI_Controller
{
  // Untuk Halaman Home
  public function index()
  {
    $data['title'] = "Home";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/beranda');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Profile
  public function profile()
  {
    $data['title'] = "Profile";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/profile');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Guru
  public function guru()
  {
    $data['title'] = "Guru";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/guru');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Siswa
  public function siswa()
  {
    $data['title'] = "Siswa";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/siswa');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Ekskul
  public function ekskul()
  {
    $data['title'] = "Ekskul";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/ekskul');
    $this->load->view('includes/Front/footer');
  }

  // Untuk Halaman Informasi
  public function informasi()
  {
    $data['title'] = "Informasi";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/informasi');
    $this->load->view('includes/Front/footer');
  }
}
