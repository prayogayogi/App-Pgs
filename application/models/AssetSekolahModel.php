<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AssetSekolahModel extends CI_Model
{
	// UNTUK DATA STRUKTUR ORGANISASI
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
		$foto = $this->input->post('struktur');
		unlink(FCPATH . './assets/assetGambar/struktur/' . $foto);
		$this->db->where(['struktur' => $foto]);
		$this->db->delete('struktur_organisasi');
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
			$data = [
				'struktur' => $files
			];
			$this->db->insert('struktur_organisasi', $data);
		}
	}

	// UNTUK VISI DAN MISI
	// Get Data Visi & Misi
	function getVisiMisi()
	{
		return $this->db->get('db_visimisi');
	}

	// Get Visi
	function getWhereVisi()
	{
		$this->db->where(['jenis' => 'VISI']);
		return $this->db->get('db_visimisi');
	}

	// Get Misi
	function getWhereMisi()
	{
		$this->db->where(['jenis' => 'MISI']);
		return $this->db->get('db_visimisi');
	}

	// Store Data Visi & Misi
	function storeVisiMisi()
	{
		$data = [
			'isi' => $this->input->post('isi'),
			'jenis' => $this->input->post('jenis')
		];
		$this->db->set($data);
		$this->db->insert('db_visimisi');
	}

	// Update Data Visi Misi
	function updateVisiMisi($id)
	{
		$data = ['isi' => $this->input->post('updateisi')];
		$this->db->set($data);
		$this->db->where(['id' => $id]);
		$this->db->update('db_visimisi');
	}

	// Destroy Data Vsis Misi
	function destroyVisiMisi($id)
	{
		$this->db->where(['id' => $id]);
		$this->db->delete('db_visimisi');
	}


	// UNTUK DATA INFORMASI
	// Get Data Informasi
	function getDataInformasi()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('db_informasi');
	}

	// Get Data Informasi Di Front End
	public function getInformasi()
	{
		$this->db->order_by('id', 'DESC');
		$this->db->limit(6);
		return $this->db->get('db_informasi');
	}

	// Get Data Informasi Berdasarkan Berita Terbaru
	public function getNewInformasi()
	{
		$this->db->order_by('id', 'DESC');
		$this->db->limit(3);
		return $this->db->get('db_informasi');
	}

	// Get Data Informasi Detail
	public function getDetailInformasi($id)
	{
		$this->db->where(['id' => $id]);
		return $this->db->get('db_informasi');
	}

	// Get New Footer Data Informasi
	public function getNewFooterInformasi()
	{
		$this->db->order_by('id', 'DESC');
		$this->db->limit(2);
		return $this->db->get('db_informasi');
	}

	// Store Data Informasi
	public function storeInformasi()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './assets/assetGambar/informasi/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
			} else {
				echo "error";
			}
		}
		$ouner = $this->db->get_where('userapp', ['email' => $this->session->userdata('email')])->row_array();
		$data = [
			'judul' => ucwords($this->input->post('judul')),
			'isi' => $this->input->post('isi'),
			'foto' => $files,
			'ouner_post' => $ouner['nama'],
			'created_at' => time()
		];
		$this->db->insert('db_informasi', $data);
	}

	// Updata Data Informasi
	public function updateInformasi()
	{
		$file = $_FILES['foto'];
		if ($file) {
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']       = '2048';
			$config['upload_path']    = './assets/assetGambar/informasi/';
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto')) {
				$files = $this->upload->data('file_name', TRUE);
				$this->db->set($files);
			} else {
				echo "error";
			}
		}
		$ouner = $this->db->get_where('userapp', ['email' => $this->session->userdata('email')])->row_array();
		$data = [
			'judul' => ucwords($this->input->post('judul')),
			'isi' => $this->input->post('isi'),
			'ouner_post' => $ouner['nama']
		];
		$this->db->where(['id' => $this->input->post('id')]);
		$this->db->set($data);
		$this->db->update('db_informasi');
	}

	// Destroy Data Informasi
	public function destroyInformasi($id)
	{
		$foto = $this->db->get_where('db_informasi', ['id' => $id])->row_array();
		unlink(FCPATH . './assets/assetGambar/informasi/' . $foto['foto']);
		$this->db->where(['id' => $id]);
		$this->db->delete('db_informasi');
	}
}
