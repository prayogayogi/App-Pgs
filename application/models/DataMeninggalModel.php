<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataMeninggalModel extends CI_Model
{
  function GetAllDataMeniggal()
  {
    return $this->db->get_where('data_penduduk', ['status' => 'MENINGGAL']);
  }
}
