<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KartuKeluargaModel extends CI_Model
{
  // Get data penduduk
  public function getaDataKk()
  {
    return $this->db->get('kartu_keluarga');
  }

  // Unutk Detail Kartu Keluarga
  public function join($id)
  {
    $this->db->select('*');
    $this->db->from('kartu_keluarga');
    $this->db->join('data_penduduk', 'data_penduduk.no_kk = kartu_keluarga.no_kk');
    $this->db->where('kartu_keluarga.no_kk', $id);
    return $this->db->get();
  }

  // Unutk Store Kartu Keluarga
  public function storeKk()
  {
    $data = [
      'no_kk' => $this->input->post('no_kk'),
      'no_nik' => $this->input->post('no_nik'),
      'nama' => $this->input->post('nama'),
    ];
    $this->db->insert('kartu_keluarga', $data);
  }
}
