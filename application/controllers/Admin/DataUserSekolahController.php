<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataUserSekolahController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel', 'UserAppModel']);
  }

  // Untuk Guru 
  public function dataGuru()
  {
    $data['title'] = "Data Guru";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/dataUserSekolah/dataGuru', $data);
    $this->load->view('includes/Admin/footer');
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
