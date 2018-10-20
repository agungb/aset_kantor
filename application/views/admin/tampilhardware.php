<h2><?php echo $judul; ?></h2>
<hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Jenis Alat</th>
			<th>Nama Alat</th>
			<th>Kode Aset</th>
			<th>Pengguna</th>
			<th>Departemen</th>
			<th>Kisaran harga</th>
			<th>Kondisi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($hardware as $key => $value): ?>
			
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value["nama_kategori"]; ?></td>
			<td><?php echo $value["nama_hardware"]; ?></td>
			<td><?php echo $value["kode_hardware"]; ?></td>
			<td><?php echo $value["nama"]; ?></td>
			<td>
				<?php foreach ($departemen as $key => $dept): ?>
					<?php if ($value["id_departemen"] == $dept["id_departemen"]): ?>
						<?php echo $dept["nama_departemen"]; ?>
					<?php endif ?>
				
				<?php endforeach ?>
			</td>
			<td><?php echo $value["kisaran_harga"]; ?></td>
			<td><?php echo $value["kondisi"]; ?></td>
			<td>
				<a href="<?php echo base_url("admin/hardware/ubah/$value[id_hardware]"); ?>" class="btn btn-warning">Ubah</a>
				<a href="<?php echo base_url("admin/hardware/hapus/$value[id_hardware]"); ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<hr>
<a href="<?php echo base_url("admin/hardware/tambah"); ?>" class="btn btn-primary">Tambah Data</a>