<?php 

class Theme
{
	function set_ui($namafile, $datanya)
	{
		// mengakses core/inti dari codeigniter lalu disimpan dalam $ci
		$ci =& get_instance();

		// membuat data konten didapat dari namafile di view dan datanya direturn TRUE
		$data['konten'] = $ci->load->view($namafile, $datanya, TRUE);

		// menaruh konten kedalam template index
		$ci->load->view('admin/index', $data);
	}
}

?>