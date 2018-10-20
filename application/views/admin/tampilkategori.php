<h2><?php echo $judul ?></h2>
<hr>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($kategori as $key => $value): ?>
			
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value['nama_kategori']; ?></td>
			<td>
				<a href="<?php echo base_url("admin/kategori/ubah/$value[id_kategori]"); ?>" class="btn btn-warning">Ubah</a>
				<a href="<?php echo base_url("admin/kategori/hapus/$value[id_kategori]"); ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		<?php endforeach ?>
	</tbody>
</table>
<hr>
<a href="<?php echo base_url("admin/kategori/tambah"); ?>" class="btn btn-primary">Tambah Kategori</a>