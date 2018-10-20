<?php 

class Departemen extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdepartemen');

		// jika belum login , diredirect ke form login
		if(!$this->session->userdata("user"))
		{
			redirect("login");
		}

	}

	function index()
	{
		//mengambil data array dari fungsi ambil_departemen
		$data['departemen'] = $this->Mdepartemen->tampil_departemen();

		// menampilkan tampildepartemen 
		$data['judul'] = "Tabel Departemen";
		$this->theme->set_ui('admin/tampildepartemen', $data);
	}

	function tambah()
	{
		//menampilkan form tambahdepartemen
		$data['judul'] = "Form Tambah Departemen";
		$this->theme->set_ui("admin/tambahdepartemen", $data);

		//mengambil inputan dari form tambahdepartemen
		$inputan = $this->input->post();

		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi simpan_departemen
			$this->Mdepartemen->simpan_departemen($inputan);
			redirect("admin/departemen");
		}
	}

	function ubah($id)
	{
		//mengambil data array dari fungsi ambil_departemen
		$data['departemen'] = $this->Mdepartemen->ambil_departemen($id);

		//menampilkan form ubahdepartemen
		$data['judul'] = "Form Ubah Departemen";
		$this->theme->set_ui("admin/ubahdepartemen", $data);

		//menyimpan hasil inputan form ubahdepartemen
		$inputan = $this->input->post();

		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi ubah_departmen
			$this->Mdepartemen->ubah_departemen($inputan, $id);
			redirect("admin/departemen");
		}

	}

	function hapus($id)
	{
		//menjalankan fungsi hapus_departemen
		$this->Mdepartemen->hapus_departemen($id);
		redirect("admin/departemen");
	}
}

?>