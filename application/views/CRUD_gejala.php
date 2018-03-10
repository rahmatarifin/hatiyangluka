<!DOCTYPE html>
<html>
<head>
	<title>Update Gejala</title>
</head>
<body>
<?php echo form_open('gejala/tambah') ;?>
<pre>
	<h1>Tambah Data Gejala</h1>
	Kode Gejala : <input type="text" name="gejalaid" placeholder="gejalaid" required autofocus><br>
	Gejala      : <input type="text" name="gejala" placeholder="gejala" required><br>
	<input type="submit" value="simpan">
</pre>
<?php form_close(); ?>
</body>
</html>