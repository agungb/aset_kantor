<h2><?php echo $judul; ?></h2>
<hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama</th>
			<th>Departemen</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pegawai as $key => $value): ?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value["username"]; ?></td>
			<td><p>********</p></td>
			<td><?php echo $value["nama"]; ?></td>
			<td><?php echo $value["nama_departemen"]; ?></td>
			<td>
				<a href="<?php echo base_url("admin/pegawai/ubah/$value[id_pegawai]"); ?>" class="btn btn-warning">Ubah</a>
				<a href="<?php echo base_url("admin/pegawai/hapus/$value[id_pegawai]"); ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<hr>
<a href="<?php echo base_url("admin/pegawai/tambah"); ?>" class="btn btn-primary">Tambah pegawai</a>