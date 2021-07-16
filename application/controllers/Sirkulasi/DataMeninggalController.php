<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMeninggalController extends CI_Controller
{
  // Model2 Untuk Data
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['authModel', 'DataMeninggalModel']);
  }

  public function index()
  {
    $data['title'] = "Data Lahir";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $data['dataMeninggal'] = $this->DataMeninggalModel->GetAllDataMeniggal()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/sirkulasiPenduduk/dataMeninggal', $data);
    $this->load->view('includes/footer');
  }
}
