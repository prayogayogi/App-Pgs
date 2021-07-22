<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataUserSekolahController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['authModel', 'DataUserSekolahModel']);
  }

  // Untuk Guru 
  public function dataGuru()
  {
    $data['title'] = "Data Guru";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getGuru'] = $this->DataUserSekolahModel->getGuru()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/dataUserSekolah/dataGuru', $data);
    $this->load->view('includes/Admin/footer');
  }

  // Tambah Data Guru
  public function storeGuru()
  {
    $this->DataUserSekolahModel->storeGuru();
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Guru</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('Admin/DataUserSekolahController/dataGuru');
  }



  // Untuk Data Siswa
  public function dataSiswa()
  {
    $data['title'] = "Data Siswa";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/dataUserSekolah/dataSiswa', $data);
    $this->load->view('includes/Admin/footer');
  }
}
