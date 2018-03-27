<!DOCTYPE html>
<html>
<head>
	<title>Gejala</title>
</head>
<body>
<?php echo form_open('crud_gejala/tambah');?>
	<pre>
		<h1>Tambah Data Gejala</h1>
		Gejalaid : <input type="text" name="gejalaid" placeholder="gejalaid" required autofocus></br>
		Gejala   : <input type="text" name="gejala" placeholder="gejala" required></br>
		<input type="submit" value="Simpan">
	</pre>
	<?php form_close(); ?>
	<hr>
	<table width="50%" border="1">
		<tr>
			<td colspan="4">Data Gejala</td>
		</tr>
		<tr>
			<td>Gejalaid</td>
			<td>gejala</td>
			<td colspan="2">Aksi</td>
		</tr>
		<tr>
			<?php foreach($data as $row): ?>
				<td><?php echo $row->gejalaid; ?></td>
				<td><?php echo $row->gejala; ?></td>
				<td><a href='<?php base_url();?>crud_gejala/edit/<?php echo $row->gejalaid;?>'>Edit</a></td>
				<td><a href='<?php base_url();?>crud_gejala/hapus/<?php echo $row->gejalaid;?>'>Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>