<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel', 'DataUserSekolahModel']);
  }
  // Untuk View Dashboard
  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('authController');
    }
    $data['title'] = 'Dashboard';
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['penduduk'] = $this->pendudukModel->join()->result_array();
    $data['numGuru'] = $this->DataUserSekolahModel->getGuru()->num_rows();
    $data['numSiswa'] = $this->DataUserSekolahModel->getSiswa()->num_rows();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/viewDashboard', $data);
    $this->load->view('includes/Admin/footer');
  }
}
