<?php 

class Mhardware extends CI_model
{
	function tampil_hardware()
	{
		$this->db->select("*");
		$this->db->join('pegawai', 'hardware.id_pegawai = pegawai.id_pegawai');
		$this->db->join('kategori', 'hardware.id_kategori = kategori.id_kategori');

		$ambil = $this->db->get('hardware');
		return $ambil->result_array();
	}

	function simpan_hardware($inputan)
	{
		//adegan menyimpan $inputan kedalam tabel hardware
		$this->db->insert('hardware', $inputan);
	}

	function ambil_hardware($id)
	{
		//mengambil data di tabel hardware dengan id_hardware=$id
		$this->db->where('id_hardware', $id);
		$ambil = $this->db->get('hardware');

		return $ambil->row_array();
	}

	function ubah_hardware($inputan, $id)
	{
		$this->db->where('id_hardware', $id);
		$this->db->update('hardware', $inputan);
	}

	function hapus_hardware($id)
	{
		$this->db->where('id_hardware', $id);
		$this->db->delete('hardware');
	}
}

?>