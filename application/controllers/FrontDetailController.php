<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FrontDetailController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['AssetSekolahModel', 'FrontModel', 'DataUserSekolahModel']);
  }

  // Get View Detail Data Informasi
  public function getDetaiInformasi($id)
  {
    $data['title'] = "Detail Informasi | Smk 05 Ujan Mas";
    $data['start'] = $this->uri->segment(3);
    $data['getDetailInformasi'] = $this->AssetSekolahModel->getDetailInformasi($id)->row_array();
    $data['getInformasi'] = $this->AssetSekolahModel->getNewInformasi()->result_array();
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $data['fotoOunerPost'] = $this->FrontModel->fotoOunerPost($id)->row_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/Front-detail/informasiDetail', $data);
    $this->load->view('includes/Front/footer', $data);
  }

  // Get View Detail Data Guru
  public function getDetailGuru($id)
  {
    $data['title'] = "Detail Guru | Smk 05 Ujan Mas";
    $data['start'] = $this->uri->segment(3);
    $data['getNewFooterInformasi'] = $this->AssetSekolahModel->getNewFooterInformasi()->result_array();
    $data['fotoOunerPost'] = $this->FrontModel->fotoOunerPost($id)->row_array();
    $data['getDetailGuru'] = $this->DataUserSekolahModel->getDetailGuru($id)->row_array();
    $this->load->view('includes/Front/header', $data);
    $this->load->view('pages/Front/Front-detail/guruDetail', $data);
    $this->load->view('includes/Front/footer', $data);
  }
}
