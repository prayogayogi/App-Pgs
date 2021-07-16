<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel']);
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
    $data['dataPenduduk'] = $this->pendudukModel->getDataPenduduk()->num_rows();
    $data['dataKartuKeluarga'] = $this->pendudukModel->getDataKartuKeluarga()->num_rows();
    $data['dataLakilaki'] = $this->pendudukModel->getDataLakilaki()->num_rows();
    $data['dataPerempuan'] = $this->pendudukModel->getDataPerempuan()->num_rows();
    $data['dataLahir'] = $this->pendudukModel->getDataLahir()->num_rows();
    $data['dataMeninggal'] = $this->pendudukModel->getDataMeninggal()->num_rows();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/viewDashboard', $data);
    $this->load->view('includes/footer');
  }
}
