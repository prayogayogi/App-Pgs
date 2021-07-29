<?php
defined('BASEPATH') or exit('No direct script access allowed');
class DataUserSekolahModel extends CI_Model
{
	// UNTUK DATA GURU
	// Get Data Guru
	function getGuru()
	{
		return $this->db->get('db_guru');
	}

	// Get Data Pagination
	function getPagination($start, $mulai)
	{
		return $this->db->get('db_guru', $start, $mulai, 'DESC');
	}

	// Get Detail Guru
	function getDetailGuru($id)
	{
		$this->db->where(['id' => $id]);
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

	// Update Data Guru
	function updateGuru($id)
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './assets/assetGambar/guru/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
				$this->db->set(['foto' => $files]);
				$this->db->select('foto');
				$foto = $this->db->get_where('db_guru', ['id' => $id])->row_array();
				unlink(FCPATH . './assets/assetGambar/guru/' . $foto['foto']);
			} else {
				echo "error";
			}
		}
		$data = [
			'nama' => $this->input->post('nama'),
			'jabatan' => $this->input->post('jabatan'),
			'mengajar' => $this->input->post('mengajar'),
			'deskripsi' => $this->input->post('deskripsi')
		];
		$this->db->set($data);
		$this->db->where(['id' => $id]);
		$this->db->update('db_guru');
	}

	// Destroy Data Guru
	function destroy($id)
	{
		$foto = $this->db->get_where('db_guru', ['id' => $id])->row_array();
		unlink(FCPATH . './assets/assetGambar/guru/' . $foto['foto']);
		$this->db->where(['id' => $id]);
		$this->db->delete('db_guru');
	}

	// UNTUK DATA SISWA
	// Get Data Siswa
	function getSiswa()
	{
		return $this->db->get('db_siswa');
	}

	// Store Data Siswa
	function storeSiswa()
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'nisn' => $this->input->post('nisn'),
			'nama' => ucwords(trim($this->input->post('nama'))),
			'jenis_kelamin' => $this->input->post('jenisKelamin'),
			'tempat_lahir' => ucwords(trim($this->input->post('tempatLahir'))),
			'tanggal_lahir' => $this->input->post('tanggalLahir'),
			'nama_ayah' => ucwords(trim($this->input->post('namaAyah'))),
			'nama_ibu' => ucwords(trim($this->input->post('namaIbu'))),
			'agama' => ucwords(trim($this->input->post('agama')))
		];
		$this->db->set($data);
		$this->db->insert('db_siswa');
	}

	// Update Data Siswa
	function updateSiswa($id)
	{
		$data = [
			'nis' => $this->input->post('nis'),
			'nisn' => $this->input->post('nisn'),
			'nama' => ucwords(trim($this->input->post('nama'))),
			'tempat_lahir' => ucwords(trim($this->input->post('tempatLahir'))),
			'tanggal_lahir' => $this->input->post('tanggalLahir'),
			'nama_ayah' => ucwords(trim($this->input->post('namaAyah'))),
			'nama_ibu' => ucwords(trim($this->input->post('namaIbu'))),
			'agama' => ucwords(trim($this->input->post('agama')))
		];
		$this->db->set($data);
		$this->db->where(['id' => $id]);
		$this->db->update('db_siswa');
	}

	// Destroy Data Siswa
	function destroySiswa($id)
	{
		$this->db->where(['id' => $id]);
		$this->db->delete('db_siswa');
	}

	// Get Data Admin Num Rows
	function getAdmin()
	{
		return $this->db->get('userapp');
	}
}
