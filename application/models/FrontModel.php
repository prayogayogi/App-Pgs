<?php
defined('BASEPATH') or exit('No direct script access allowed');
class FrontModel extends CI_Model
{
  // Get Data Kepala Sekolah 
  function getKepsek()
  {
    $where = ['jabatan' => 'KEPALA SEKOLAH'];
    return $this->db->get_where('db_guru', $where);
  }

  // Get Data Wakil Kepala Sekolah
  function getWakilKepsek()
  {
    $where = ['jabatan' => 'WAKIL KEPALA SEKOLAH'];
    return $this->db->get_where('db_guru', $where);
  }

  // Get Data Guru
  function getGuru()
  {
    $where = ['jabatan' => 'GURU'];
    return $this->db->get_where('db_guru', $where);
  }

  // Untuk Ambil Foto Yang Upload Data Informasi
  function fotoOunerPost($id)
  {
    $this->db->select('*');
    $this->db->from('db_informasi');
    $this->db->join('userapp', 'userapp.nama = db_informasi.ouner_post');
    $this->db->where('db_informasi.id', $id);
    return $this->db->get();
  }

  // Get Foto Struktur Organisasi
  function getStrukturOrganisasi()
  {
    return $this->db->get('struktur_organisasi');
  }
}
