<h2><?php echo $judul; ?></h2>
<hr>
<form method="post">
	<div class="form-group">
		<label>Nama kategori</label>
		<input type="text" name="nama_kategori" value="<?php echo $kategori["nama_kategori"]; ?>" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Ubah</button>
</form>