<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanController extends CI_Controller
{
  // Model2 Untuk data
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel', 'UserAppModel']);
  }

  // UNTUK LAPORAN DATA PENDUDUK
  // untuk get data penduduk
  public function index()
  {
    $data['title'] = "Laporan Data Penduduk";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/KelolaLaporan/dataPenduduk', $data);
    $this->load->view('includes/footer');
  }

  // untuk get data penduduk data database
  public function getDataPenduduk()
  {
    //
  }


  // AKHIR LAPORAN DATA PENDUDUK

  // Untuk laporan Data Kartu Keluarga
  public function dataKk()
  {
    $data['title'] = "Laporan Data Kartu Keluarga";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/KelolaLaporan/dataKartuKeluarga', $data);
    $this->load->view('includes/footer');
  }

  // Untuk laporan dataLahir
  public function dataLahir()
  {
    $data['title'] = "Laporan Data Lahir";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/KelolaLaporan/dataLahir', $data);
    $this->load->view('includes/footer');
  }

  // Untuk laporan Data Menginggal
  public function dataMeningal()
  {
    $data['title'] = "Laporan Data Menginggal";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/KelolaLaporan/dataMeningal', $data);
    $this->load->view('includes/footer');
  }

  // Untuk laporan  Data Pendatang
  public function dataPendatang()
  {
    $data['title'] = "Laporan Data Pendatang";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/KelolaLaporan/dataPendatang', $data);
    $this->load->view('includes/footer');
  }

  // Untuk laporan data Data Pindah
  public function dataPindah()
  {
    $data['title'] = "Laporan Data Pindah";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdmin'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/KelolaLaporan/dataPindah', $data);
    $this->load->view('includes/footer');
  }
}
