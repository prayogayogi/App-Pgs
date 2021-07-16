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

  // Untuk Halaman Home
  public function About()
  {
    $data['title'] = "About";
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/beranda');
    $this->load->view('includes/Front/footer');
  }
}
