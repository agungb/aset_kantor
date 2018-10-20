<h2><?php echo $judul ?></h2>
<hr>

<form action="<?php echo base_url("admin/kategori/tambah"); ?>" method="post">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="nama_kategori" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>