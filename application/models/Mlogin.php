<?php 

class Mlogin extends CI_model
{
	function login_user($inputan)
	{
		$user = $inputan["username"];
		$pass = $inputan["password"];

		//mencari data di tabel pegawai yang username=$user dan password=$pass
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$ambil = $this->db->get('pegawai');

		//menghitung data yang terambil /yang cocok
		$datayangcocok = $ambil->num_rows();

		if($datayangcocok > 0)
		{
			//mendapatkan data pegawai yang login
			$pegawai = $ambil->row_array();

			//memasukkan dalam session
			$this->session->set_userdata("user", $pegawai);

			//login sukses
			return "sukses";
		}
		else
		{
			//login gagal
			return "gagal";
		}
	}
}

?>