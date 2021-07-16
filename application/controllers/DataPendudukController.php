<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPendudukController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel']);
  }

  // DATA PENDUDUK
  // Untuk view data penduduk
  public function index()
  {
    $data['title'] = 'Data || Penduduk';
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['penduduk'] = $this->pendudukModel->join()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/viewDataPenduduk', $data);
    $this->load->view('includes/footer');
  }

  // untuk tambah data penduduk
  public function tambahDataPenduduk()
  {
    $this->pendudukModel->storePenduduk();
    // $this->TambahDataPenduduk_m->tambahData($data);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Penduduk</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('DataPendudukController');
  }

  // untuk hapus data penduduk
  public function hapusDataPenduduk($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('data_penduduk');
    $this->session->set_flashdata('status', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data</strong> Berhasil Dihapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('DataPendudukController');
  }

  // untuk ubah data penduduk
  public function ubahDataPenduduk($id)
  {
    $this->pendudukModel->update($id);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data</strong> Berhasil Diubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('DataPendudukController');
  }


  // untuk detail data
  public function show($id)
  {
    $data['data'] = $this->pendudukModel->getShow($id)->row_array();
    $data['title'] = 'Detail Data Kartu Keluarga';
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/viewDataKartuKeluargaDetail', $data);
    $this->load->view('includes/footer');
  }
  // AKHIR DATA PENDUDUK
}
