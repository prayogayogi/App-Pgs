<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PendudukModel extends CI_Model
{
  // Untuk Mengambil Jumlah Data Penduduk
  function getDataPenduduk()
  {
    return $this->db->get('data_penduduk');
  }

  // Untuk Mengambil Jumlah Data Kartu Keluarga
  function getDataKartuKeluarga()
  {
    return $this->db->get('kartu_keluarga');
  }

  // Untuk Mengambil Jumlah Data laki-laki
  function getDataLakilaki()
  {
    return $this->db->get_where('data_penduduk', ['jenis_kelamin' => 'LAKI-LAKI']);
  }

  // Untuk Mengambil Jumlah Data Perempuan
  function getDataPerempuan()
  {
    return $this->db->get_where('data_penduduk', ['jenis_kelamin' => 'PEREMPUAN']);
  }

  // Untuk Mengambil Jumlah Data Lahir
  function getDataLahir()
  {
    return $this->db->get_where('data_penduduk', ['status' => 'DATA LAHIR']);
  }

  // Untuk Mengambil Jumlah Data Meninggal
  function getDataMeninggal()
  {
    return $this->db->get_where('data_penduduk', ['status' => 'MENINGGAL']);
  }

  // Store Data Penduduk
  function storePenduduk()
  {
    $data = [
      'no_kk' => $this->input->post('no_kk'),
      'no_nik' => $this->input->post('no_nik'),
      'nama' => $this->input->post('nama'),
      'tempat_tgl' => $this->input->post('tempat_tgl'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'alamat' => $this->input->post('alamat'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'tgl_masuk' => date('d-m-Y')
    ];
    $this->db->insert('data_penduduk', $data);
  }


  // Edit Data Pendududuk
  function update($id)
  {
    $data = [
      'alamat' => $this->input->post('alamat'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'no_nik' => $this->input->post('no_nik'),
      'no_kk' => $this->input->post('no_kk'),
      'pekerjaan' => $this->input->post('pekerjaan')
    ];
    $this->db->where('id', $id);
    $this->db->update('data_penduduk', $data);
  }

  // Get Data Detail
  function getShow($id)
  {
    $data = ['id' => $id];
    return $this->db->get_where('datapenduduk', $data);
  }

  // Join
  public function join()
  {
    return $this->db->get('data_penduduk');
  }
}
