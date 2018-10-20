<?php 

class Hardware extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mdepartemen');
		$this->load->model('Mpegawai');
		$this->load->model('Mkategori');
		$this->load->model('Mhardware');

		// jika belum login , diredirect ke form login
		if(!$this->session->userdata("user"))
		{
			redirect("login");
		}

	}

	function index()
	{
		//mengambil data dari fungsi tampil_hardware
		$data['hardware'] = $this->Mhardware->tampil_hardware();
		//mengambil data dari fungsi tampil_departemen
		$data['departemen'] = $this->Mdepartemen->tampil_departemen();
		
		$data['judul'] = "Tabel Aset Kantor";
		$this->theme->set_ui("admin/tampilhardware", $data);
	}

	function tambah()
	{
		//mengambil data dari fungsi tampil_departemen
		$data['departemen'] = $this->Mdepartemen->tampil_departemen();
		//mengambil data dari fungsi tampil_pegawai
		$data['pegawai'] = $this->Mpegawai->tampil_pegawai();
		//mengambil data dari fungsi tampil_kategori
		$data['kategori'] = $this->Mkategori->tampil_kategori();
		//mengambil data dari fungsi tampil_hardware
		$data['hardware'] = $this->Mhardware->tampil_hardware();

		$data['judul'] = "Form Tambah Hardware";
		//Menampilkan form tambahhardware
		$this->theme->set_ui("admin/tambahhardware", $data);

		//menyimpan inputan dari form tambahhardware
		$inputan = $this->input->post();

		//jika ada inputan dari form
		if($inputan)
		{
			//menjalankan fungsi simpan_hardware
			$this->Mhardware->simpan_hardware($inputan);

			redirect("admin/hardware");
		}
		

	}
	function ubah($id)
	{
		//mengambil data array dari fungsi ambil_hardware()
		$data['hardware'] = $this->Mhardware->ambil_hardware($id);
		//mengambil data array dari fungsi tampil_kategori()
		$data['kategori'] = $this->Mkategori->tampil_kategori();
		//mengambil data array dari fungsi tampil_pegawai()
		$data['pegawai'] = $this->Mpegawai->tampil_pegawai();

		//menampilkan form ubahhardware
		$data['judul'] = "Form Ubah Data Aset";
		$this->theme->set_ui("admin/ubahhardware", $data);

		//mengambil inputan dari form ubahhardware
		$inputan = $this->input->post();

		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi ubah_hardware
			$this->Mhardware->ubah_hardware($inputan, $id);
			redirect("admin/hardware");
		}

		
	}

	function hapus($id)
	{
		//menjalankan fungsi hapus_hardware()
		$this->Mhardware->hapus_hardware($id);
		redirect("admin/hardware");
	}


}

?>