<!DOCTYPE html>
<html>
<head>
	<title>Update Data Penyakit</title>
</head>
<body>
<?php foreach($data as $row):?>
	<?php echo form_open('crud_gejala/update');?>
	<h1>Edit Data Gejala</h1>
	<table>
		<tr>
			<td>GejalaID</td>
			<td><input type="text" name="gejalaid" value="<?php echo $row->gejalaid;?>"></td>
		</tr>
		<tr>
			<td>Gejala</td>
			<td><input type="text" name="gejala" value="<?php echo $row->gejala;?>"></td>
		</tr>
	</table>
	<input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close(); ?>
</body>
</html>