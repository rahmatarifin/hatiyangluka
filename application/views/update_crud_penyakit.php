<!DOCTYPE html>
<html>
<head>
	<title>Update Data Penyakit</title>
</head>
<body>
<?php foreach($data as $row):?>
	<?php echo form_open('crud_penyakit/update');?>
	<h1>Edit Data Categories</h1>
	<table>
		<tr>
			<td>PenyakitID</td>
			<td><input type="text" name="penyakitid" value="<?php echo $row->penyakitid;?>"></td>
		</tr>
		<tr>
			<td>Penyakit</td>
			<td><input type="text" name="penyakit" value="<?php echo $row->penyakit;?>"></td>
		</tr>
	</table>
	<input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close(); ?>
</body>
</html>