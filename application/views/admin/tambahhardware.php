<h2><?php echo $judul; ?></h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Kategori Perangkat</label>
		<select name="id_kategori" class="form-control">
			<option value="">Pilih Kategori Perangkat</option>
			<?php foreach ($kategori as $key => $value): ?>
				
			<option value="<?php echo $value["id_kategori"]; ?>"><?php echo $value["nama_kategori"]; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Pengguna Perangkat</label>
		<select name="id_pegawai" class="form-control">
			<option value="">Pilih Pengguna</option>
			<?php foreach ($pegawai as $key => $value): ?>
				
			<option value="<?php echo $value["id_pegawai"]; ?>"><?php echo $value["nama"]; ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Kode Aset</label>
		<input type="text" name="kode_hardware" class="form-control"> 
	</div>
	<div class="form-group">
		<label>Nama Perangkat</label>
		<input type="text" name="nama_hardware" class="form-control"> 
	</div>
	<div class="form-group">
		<label>Spesifikasi Perangkat</label>
		<textarea name="spesifikasi" cols="30" rows="5" class="form-control"></textarea> 
	</div>
	<div class="form-group">
		<label>Serial Number Perangkat</label>
		<input type="text" name="serial_number" class="form-control"> 
	</div>
	<div class="form-group">
		<label>Kisaran Harga Perangkat</label>
		<input type="text" name="kisaran_harga" class="form-control"> 
	</div>
	<div class="form-group">
		<label>Kondisi Perangkat</label>
		<input type="text" name="kondisi" class="form-control"> 
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>