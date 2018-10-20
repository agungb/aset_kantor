<?php 

class Mkategori extends CI_model
{
	function tampil_kategori()
	{
		$ambil = $this->db->get('kategori');
		return $ambil->result_array();
	}

	function simpan_kategori($inputan)
	{
		//proses menyimpan
		$this->db->insert('kategori', $inputan);
	}

	function ambil_kategori($id)
	{
		$this->db->where('id_kategori', $id);
		$ambil = $this->db->get('kategori');

		return $ambil->row_array();
	}

	function ubah_kategori($inputan, $id)
	{
		
		$this->db->where('id_kategori', $id);
		$this->db->update('kategori', $inputan);
	}

	function hapus_kategori($id)
	{
		
		$this->db->where('id_kategori', $id);
		$this->db->delete('kategori');

	}
}

?>