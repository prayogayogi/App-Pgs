<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AssetSekolahModel extends CI_Model
{
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
      $id = ['id' => $this->input->post('id')];
      $data = [
        'struktur' => $files
      ];
      $this->db->where($id);
      $this->db->update('struktur_organisasi', $data);
    }
  }
}
