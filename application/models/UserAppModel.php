<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserAppModel extends CI_Model
{
  public function tambahDataAdmin()
  {
    $file = $_FILES['foto'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/administrator/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }

    $data = [
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'alamat' => $this->input->post('alamat'),
      'foto' => $files,
      'deskripsi' => $this->input->post('deskripsi'),
      'roles' => $this->input->post('roles'),
      'password' => password_hash(('admin'), PASSWORD_DEFAULT)
    ];
    $this->db->insert('userapp', $data);
  }

  // Update Data Administrator
  function updateDataAdmin($id)
  {
    $data = [
      'email' => $this->input->post('email'),
      'alamat' => $this->input->post('alamat'),
      'deskripsi' => $this->input->post('deskripsi'),
    ];
    $this->db->set($data);
    $this->db->where(['id' => $id]);
    $this->db->update('userapp');
  }
}
