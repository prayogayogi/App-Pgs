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
}
