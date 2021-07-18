<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AssetSekolahController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel', 'UserAppModel']);
  }

  // Untuk Struktur Organisasi
  public function struktur()
  {
    $data['title'] = "Struktur Organisasi";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/assets/strukturSekolah', $data);
    $this->load->view('includes/Admin/footer');
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
    $this->load->view('pages/dashboard/assets/visiMisi', $data);
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
    $this->load->view('pages/dashboard/assets/dataInformasi', $data);
    $this->load->view('includes/Admin/footer');
  }
}
