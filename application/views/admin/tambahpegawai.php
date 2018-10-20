<h2><?php echo $judul; ?></h2>
<hr>
<form action="<?php echo base_url("admin/pegawai/tambah"); ?>" method="post">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Departemen</label>
		<select name="id_departemen" class="form-control">
			<option value="">Pilih Departemen</option>
			<?php foreach ($departemen as $key => $value): ?>
			<option value="<?php echo $value["id_departemen"]; ?>"><?php echo $value["nama_departemen"]; ?></option>
			<?php endforeach ?>
		</select>
	</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
</form>