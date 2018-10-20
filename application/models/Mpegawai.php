<?php 

class Mpegawai extends CI_model
{
	function tampil_pegawai()
	{
		$this->db->select("*");
		$this->db->join('departemen', 'pegawai.id_departemen = departemen.id_departemen');
		$ambil = $this->db->get('pegawai');

		return $ambil->result_array();

	}

	function simpan_pegawai($inputan)
	{
		// adegan menyimpan data inputan kedalam tabel pegawai
		$this->db->insert('pegawai', $inputan);
	}

	function ambil_pegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$ambil = $this->db->get('pegawai');

		return $ambil->row_array();
	}

	function ubah_pegawai($inputan, $id)
	{
		$this->db->where('id_pegawai', $id);
		$this->db->update('pegawai', $inputan);
	}

	function hapus_pegawai($id)
	{
		$this->db->where('id_pegawai', $id);
		$this->db->delete('pegawai');
	}
}

?>