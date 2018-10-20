<h2><?php echo $judul; ?></h2>
<hr>
<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Nama Departemen</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($departemen as $key => $value): ?>
			
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value["nama_departemen"]; ?></td>
			<td>
				<a href="<?php echo base_url("admin/departemen/ubah/$value[id_departemen]"); ?>" class="btn btn-warning">Ubah</a>
				<a href="<?php echo base_url("admin/departemen/hapus/$value[id_departemen]"); ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<hr>
<a href="<?php echo base_url("admin/departemen/tambah"); ?>" class="btn btn-primary">Tambah Departemen</a>