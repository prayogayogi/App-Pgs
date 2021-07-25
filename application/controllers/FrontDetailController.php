<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontDetailController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['AssetSekolahModel', 'FrontModel']);
  }

  // Get View Detail Data Informasi
  public function getDetaiInformasi($id)
  {
    $data['title'] = "PGS | Detail Informasi";
    $data['getDetailInformasi'] = $this->AssetSekolahModel->getDetailInformasi($id)->row_array();
    $data['getInformasi'] = $this->AssetSekolahModel->getNewInformasi()->result_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $data['fotoOunerPost'] = $this->FrontModel->fotoOunerPost($id)->row_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/Front-detail/informasiDetail', $data);
    $this->load->view('includes/Front/footer', $data);
  }
}
