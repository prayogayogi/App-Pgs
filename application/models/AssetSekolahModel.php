<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AssetSekolahModel extends CI_Model
{
  // UNTUK DATA STRUKTUR ORGANISASI
  // Get Data Struktur Organisasi
  function getData()
  {
    return $this->db->get('struktur_organisasi');
  }

  // Store Data Organisasi Sekolah
  function store()
  {
    $file = $_FILES['struktur'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/struktur/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('struktur')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }
    $data = [
      'struktur' => $files
    ];
    $this->db->insert('struktur_organisasi', $data);
  }

  // Update Data Struktur Organisasi
  function update()
  {
    $foto = $this->input->post('struktur');
    unlink(FCPATH . './assets/assetGambar/struktur/' . $foto);
    $this->db->where(['struktur' => $foto]);
    $this->db->delete('struktur_organisasi');
    $file = $_FILES['struktur'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/struktur/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('struktur')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
      $data = [
        'struktur' => $files
      ];
      $this->db->insert('struktur_organisasi', $data);
    }
  }

  // UNTUK DATA INFORMASI
  // Get Data Informasi
  public function getInformasi()
  {
    $this->db->order_by('id', 'DESC');
    $this->db->limit(6);
    return $this->db->get('db_informasi');
  }

  // Get Data Informasi Berdasarkan Berita Terbaru
  public function getNewInformasi()
  {
    $this->db->order_by('id', 'DESC');
    $this->db->limit(3);
    return $this->db->get('db_informasi');
  }

  // Get Data Informasi Detail
  public function getDetailInformasi($id)
  {
    $this->db->where(['id' => $id]);
    return $this->db->get('db_informasi');
  }

  // Store Data Informasi
  public function storeInformasi()
  {
    $file = $_FILES['foto'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/informasi/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }
    $ouner = $this->db->get_where('userapp', ['email' => $this->session->userdata('email')])->row_array();
    $data = [
      'judul' => ucwords($this->input->post('judul')),
      'isi' => $this->input->post('isi'),
      'foto' => $files,
      'ouner_post' => $ouner['nama'],
      'created_at' => time()
    ];
    $this->db->insert('db_informasi', $data);
  }

  // Updata Data Informasi
  public function updateInformasi()
  {
    $file = $_FILES['foto'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/informasi/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $files = $this->upload->data('file_name', TRUE);
        $this->db->set($files);
      } else {
        echo "error";
      }
    }
    $ouner = $this->db->get_where('userapp', ['email' => $this->session->userdata('email')])->row_array();
    $data = [
      'judul' => ucwords($this->input->post('judul')),
      'isi' => $this->input->post('isi'),
      'ouner_post' => $ouner['nama']
    ];
    $this->db->where(['id' => $this->input->post('id')]);
    $this->db->set($data);
    $this->db->update('db_informasi');
  }

  // Destroy Data Informasi
  public function destroyInformasi($id)
  {
    $foto = $this->db->get_where('db_informasi', ['id' => $id])->row_array();
    unlink(FCPATH . './assets/assetGambar/informasi/' . $foto['foto']);
    $this->db->where(['id' => $id]);
    $this->db->delete('db_informasi');
  }
}
