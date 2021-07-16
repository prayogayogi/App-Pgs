<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataLahirController extends CI_Controller
{
  // Model2 Untuk Data
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['authModel', 'DataLahirModel']);
  }

  // Untuk View Data Lahir
  public function index()
  {
    $data['title'] = "Data Lahir";
    $data['no'] = 1;
    $data['dataLahir'] = $this->DataLahirModel->getAllDataLahir()->result_array();
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/sirkulasiPenduduk/dataLahir', $data);
    $this->load->view('includes/footer');
  }

  // Untuk Store Data Lahir
  public function storeDataLahir()
  {
    $this->DataLahirModel->storeDataLahir();
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Penduduk</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('Sirkulasi/DataLahirController');
  }
}
