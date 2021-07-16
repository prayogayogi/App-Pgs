<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SirkulasiController extends CI_Controller
{
  // Model2 Untuk data
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel', 'UserAppModel']);
  }

  public function dataPendatang()
  {
    $data['title'] = "Data Lahir";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/sirkulasiPenduduk/dataPendatang', $data);
    $this->load->view('includes/footer');
  }

  public function dataPindah()
  {
    $data['title'] = "Data Lahir";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/sirkulasiPenduduk/dataPindah', $data);
    $this->load->view('includes/footer');
  }
}
