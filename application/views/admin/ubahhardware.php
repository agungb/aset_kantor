<h2><?php echo $judul; ?></h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Jenis Perngkat</label>
		<select name="id_kategori" class="form-control">
			<?php foreach ($kategori as $key => $value): ?>
			<option value="<?php echo $value["id_kategori"]; ?>"
				<?php if ($value["id_kategori"] == $hardware["id_kategori"]){echo " selected";} ?>
				><?php echo $value["nama_kategori"]; ?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Pengguna</label>
		<select name="id_pegawai" class="form-control">
			<?php foreach ($pegawai as $key => $value): ?>
			<option value="<?php echo $value["id_pegawai"]; ?>"
				<?php if ($value["id_pegawai"] == $hardware["id_pegawai"]): ?>
					<?php echo " selected"; ?>
				<?php endif ?>><?php echo $value["nama"]; ?></option>
				
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Kode Aset</label>
		<input type="text" name="kode_hardware" class="form-control" value="<?php echo $hardware["kode_hardware"] ?>">
	</div>
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama_hardware" class="form-control" value="<?php echo $hardware["nama_hardware"] ?>">
	</div>
	<div class="form-group">
		<label>Spesifikasi Perangkat</label>
		<textarea name="spesifikasi" cols="30" rows="5" class="form-control"><?php echo $hardware["spesifikasi"]; ?></textarea>
	</div>
	<div class="form-group">
		<label>Serial Number</label>
		<input type="text" name="serial_number" class="form-control" value="<?php echo $hardware["serial_number"] ?>">
	</div>
	<div class="form-group">
		<label>Kisaran Harga</label>
		<input type="text" name="kisaran_harga" class="form-control" value="<?php echo $hardware["kisaran_harga"] ?>">
	</div>
	<div class="form-group">
		<label>Kondisi</label>
		<input type="text" name="kondisi" class="form-control" value="<?php echo $hardware["kondisi"] ?>">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>