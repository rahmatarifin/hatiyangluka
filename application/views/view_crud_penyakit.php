<!DOCTYPE html>
<html>
<head>
	<title>Penyakit</title>
</head>
<body>
<?php echo form_open('crud_penyakit/tambah');?>
	<pre>
		<h1>Tambah Data Penyakit</h1>
		PenyakitID : <input type="text" name="penyakitid" placeholder="penyakitid" required autofocus></br>
		Penyakit   : <input type="text" name="penyakit" placeholder="penyakit" required></br>
		<input type="submit" value="Simpan">
	</pre>
	<?php form_close(); ?>
	<hr>
	<table width="50%" border="1">
		<tr>
			<td colspan="4" align="center">Data Penyakit</td>
		</tr>
		<tr>
			<td>PenyakitID</td>
			<td>Penyakit</td>
			<td colspan="2">Aksi</td>
		</tr>
		<tr>
			<?php foreach($data as $row): ?>
				<td><?php echo $row->penyakitid; ?></td>
				<td><?php echo $row->penyakit;?></td>
				<td><a href='<?php base_url();?>edit/<?php echo $row->penyakitid;?>'>Edit</a></td>
				<td><a href='<?php base_url();?>hapus/<?php echo $row->penyakitid;?>'>Hapus</a></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>