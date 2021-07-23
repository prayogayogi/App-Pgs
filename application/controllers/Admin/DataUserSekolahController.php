<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataUserSekolahController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['AuthModel', 'DataUserSekolahModel']);
  }

  // UNTUK DATA GURU
  // View Data Guru
  public function dataGuru()
  {
    $data['title'] = "Data Guru";
    $data['no'] = 1;
    $data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
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

  // Delete Data Guru
  public function destroy($id)
  {
    $this->DataUserSekolahModel->destroy($id);
    $this->session->set_flashdata('status', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Data Guru</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('Admin/DataUserSekolahController/dataGuru');
  }

  // UNTUK DATA SISWA
  // Untuk Data Siswa
  public function dataSiswa()
  {
    $data['title'] = "Data Siswa";
    $data['no'] = 1;
    $data['userLogin'] = $this->AuthModel->getUserLogin()->row_array();
    $data['getSiswa'] = $this->DataUserSekolahModel->getSiswa()->result_array();
    $this->load->view('includes/Admin/header', $data);
    $this->load->view('includes/Admin/sidebar', $data);
    $this->load->view('pages/dashboard/dataUserSekolah/dataSiswa', $data);
    $this->load->view('includes/Admin/footer');
  }

  // Tambah Data Siswa
  public function storeSiswa()
  {
    $this->DataUserSekolahModel->storeSiswa();
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Siswa</strong> Berhasil Di Tambah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('Admin/DataUserSekolahController/dataSiswa');
  }

  // Update Data Siswa
  public function updateSiswa($id)
  {
    $this->DataUserSekolahModel->updateSiswa($id);
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Siswa</strong> Berhasil Di Ubah..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('Admin/DataUserSekolahController/dataSiswa');
  }

  // Destroy Untuk data Siswa
  public function destroySiswa($id)
  {
    $this->DataUserSekolahModel->destroySiswa($id);
    $this->session->set_flashdata('status', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Data Siswa</strong> Berhasil Di Hapus..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('Admin/DataUserSekolahController/dataSiswa');
  }
}
