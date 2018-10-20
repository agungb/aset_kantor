<h2><?php echo $judul; ?></h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Nama Departemen</label>
		<input type="text" name="nama_departemen" class="form-control" value="<?php echo $departemen["nama_departemen"] ?>">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>