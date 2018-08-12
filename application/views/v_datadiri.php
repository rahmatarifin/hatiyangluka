<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Tabel Gejala</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
    	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Gejala</h3>
            </div>
            <div class="row">
            <div class="col-md-12">
            <div class="box-body">
            <?php echo form_open('visitor/data_diri') ?>
<pre>
	<h3>Masukan data diri anda</h3></br>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="nama" required autofocus></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="checkbox" name="checklist[]" alt="checkbox" value="laki-laki">Laki-laki</input>
				<input type="checkbox" name="checklist[]" alt="checkbox" value="perempuan">Perempuan</input>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" required></input></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Simpan"></td>
		</tr>
	</table>
</pre>
<?php form_close(); ?>

    </section>
