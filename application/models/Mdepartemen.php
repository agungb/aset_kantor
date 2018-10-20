<?php 

class Mdepartemen extends CI_model
{
	function tampil_departemen()
	{
		$ambil = $this->db->get('departemen');
		return $ambil->result_array();
	}

	function simpan_departemen($inputan)
	{
		//proses menyimpan
		$this->db->insert('departemen', $inputan);
	}

	function ambil_departemen($id)
	{
		//mengambil data tabel departemen pada id=$id
		$this->db->where('id_departemen', $id);
		$ambil = $this->db->get('departemen');

		return $ambil->row_array();

	}

	function ubah_departemen($inputan, $id)
	{
		$this->db->where('id_departemen', $id);

		//menjalankan proses update data tabel departemen
		$this->db->update('departemen', $inputan);
	}

	function hapus_departemen($id)
	{
		$this->db->where('id_departemen', $id);
		$this->db->delete('departemen');
	}

}

?>