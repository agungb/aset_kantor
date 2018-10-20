<h2><?php echo $judul; ?></h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $pegawai["username"]; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" value="<?php echo $pegawai["password"]; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" value="<?php echo $pegawai["nama"]; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Departemen</label>
		<select name="id_departemen" class="form-control">

			<?php foreach ($departemen as $key => $value): ?>
			<option value="<?php echo $value["id_departemen"]; ?>" 
						<?php if ($value["id_departemen"] == $pegawai["id_departemen"]): ?>
						<?php echo "selected"; ?>
						<?php endif ?>>
				<?php echo $value["nama_departemen"]; ?>
			</option>	
			<?php endforeach ?>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>