<?php 

class Kategori extends CI_controller
{

	// fungsi yang otomatis bekerja tanpa dipanggil
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mkategori');
		
		// jika belum login , diredirect ke form login
		if(!$this->session->userdata("user"))
		{
			redirect("login");
		}

	}
	
	function index()
	{
		$data['judul'] = "Tabel Kategori";
		$data['kategori'] = $this->Mkategori->tampil_kategori();
		$this->theme->set_ui('admin/tampilkategori', $data);
	}

	function tambah()
	{
		// menampilkan form tambahkategori di view
		$data['judul'] = "Tambah Kategori";
		$this->theme->set_ui('admin/tambahkategori', $data);

		//mengambil semua inputan dari form
		$inputan = $this->input->post();

		//Jika ada inputan
		if($inputan)
		{
			$this->Mkategori->simpan_kategori($inputan);
			redirect("admin/kategori");
		}
	}

	function ubah($id)
	{
		//Menjalankan fungsi ambil_kategori
		$data['kategori'] = $this->Mkategori->ambil_kategori($id);
		//menampilkan form ubahkategori
		$data['judul'] = "Form Ubah kategori";
		$this->theme->set_ui('admin/ubahkategori', $data);

		//Menyimpan data hasil inputan form
		$inputan = $this->input->post();
		//jika ada inputan maka jalankan fungsi ubah_kategori
		if($inputan)
		{
			$this->Mkategori->ubah_kategori($inputan, $id);

			redirect("admin/kategori");
		}
	}

	function hapus($id)
	{
		$this->Mkategori->hapus_kategori($id);
		redirect("admin/kategori");
	}
}

?>