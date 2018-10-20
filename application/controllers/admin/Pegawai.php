<?php 

class Pegawai extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mpegawai');
		$this->load->model('Mdepartemen');

		// jika belum login , diredirect ke form login
		if(!$this->session->userdata("user"))
		{
			redirect("login");
		}

	}

	function index()
	{
		$data['judul'] = "Tabel Pegawai";
		$data['pegawai'] = $this->Mpegawai->tampil_pegawai();

		$this->theme->set_ui('admin/tampilpegawai', $data);
	}

	function tambah()
	{
		//mengambil data dari tabel pegawai & departemen
		//untuk ditampilkan di form tambahpegawai

		$data['pegawai'] = $this->Mpegawai->tampil_pegawai();
		$data['departemen'] = $this->Mdepartemen->tampil_departemen();

		$data['judul'] = "Form Tambah pegawai";
		$this->theme->set_ui('admin/tambahpegawai', $data);

		//mengambil inputan dari form tambahpegawai
		$inputan = $this->input->post();

		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi simpan_pegawai
			$this->Mpegawai->simpan_pegawai($inputan);
			redirect("admin/pegawai");
		}


	}

	function ubah($id)
	{
		//menjalankan fungsi ambil_pegawai
		$data['pegawai'] = $this->Mpegawai->ambil_pegawai($id);
		$data['departemen'] = $this->Mdepartemen->tampil_departemen();

		//menampilkan form ubahpegawai
		$data['judul'] = "Form Ubah pegawai";
		$this->theme->set_ui('admin/ubahpegawai', $data);

		//mengambil inputan dari form ubahpegawai
		$inputan = $this->input->post();
		//jika ada inputan
		if($inputan)
		{
			//menjalankan fungsi ubah_pegawai
			$this->Mpegawai->ubah_pegawai($inputan, $id);
			redirect("admin/pegawai");
		}

	}

	function hapus($id)
	{
		//menjalankan fungsi hapus_pegawai
		$this->Mpegawai->hapus_pegawai($id);
		redirect("admin/pegawai");
	}
}

 ?>