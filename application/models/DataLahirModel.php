<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataLahirModel extends CI_Model
{
  // Get Data Lahir
  public function getAllDataLahir()
  {
    return $this->db->get_where('data_penduduk', ['status' => 'DATA LAHIR']);
  }

  // Store Data Lahir
  public function storeDataLahir()
  {
    $data = [
      'no_kk' => $this->input->post('no_kk'),
      'nama' => strtoupper(trim($this->input->post('nama'))),
      'tempat_tgl_lahir' => strtoupper(trim($this->input->post('tempat_tgl'))),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'jenis_kelamin' => strtoupper($this->input->post('jenis_kelamin')),
      'alamat' => strtoupper(trim($this->input->post('alamat'))),
      'pekerjaan' => '-',
      'status_keluarga' => 'ANAK',
      'status' => 'DATA lAHIR',
      'tgl_masuk' => date('d-m-Y')
    ];
    $this->db->insert('data_penduduk', $data);
  }
}
