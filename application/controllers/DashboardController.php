<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['AuthModel', 'DataUserSekolahModel']);
  }
  // Untuk View Dashboard
  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('authController');
    }
    $data['title'] = 'Dashboard';
    $data['no'] = 1;
    $data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
    $data['numGuru'] = $this->DataUserSekolahModel->getGuru()->num_rows();
    $data['numSiswa'] = $this->DataUserSekolahModel->getSiswa()->num_rows();
    $data['numAdmin'] = $this->DataUserSekolahModel->getAdmin()->num_rows();
    $data['getSiswa'] = $this->DataUserSekolahModel->getSiswa()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/viewDashboard', $data);
    $this->load->view('includes/Admin/footer');
  }
}
