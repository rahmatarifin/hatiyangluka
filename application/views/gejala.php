<!DOCTYPE html>
<html>
<head>
	<title>Data Gejala</title>
</head>
<body>
	<table width="40%" border="1">
		<tr align="center">
			<td>Kode Gejala</td>
			<td>Gejala</td>
		</tr>
		<tr>
			<?php foreach ($data as $row):?>
				<td><?php echo $row->gejalaid;?></td>
				<td><?php echo $row->gejala;?></td>			
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>