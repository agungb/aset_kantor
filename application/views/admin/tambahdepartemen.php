<h2><?php echo $judul ?></h2>
<hr>

<form action="<?php echo base_url("admin/departemen/tambah"); ?>" method="post">
	<div class="form-group">
		<label>Nama Departmen</label>
		<input type="text" name="nama_departemen" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>