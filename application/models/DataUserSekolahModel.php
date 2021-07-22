<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataUserSekolahModel extends CI_Model
{
  // Get Data Guru
  function getGuru()
  {
    return $this->db->get('db_guru');
  }



  // Store Data Guru
  function storeGuru()
  {
    $file = $_FILES['foto'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/guru/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }
    $data = [
      'nama' => $this->input->post('nama'),
      'jabatan' => $this->input->post('jabatan'),
      'mengajar' => $this->input->post('mengajar'),
      'foto' => $files,
      'deskripsi' => $this->input->post('deskripsi')
    ];
    $this->db->insert('db_guru', $data);
  }
}
