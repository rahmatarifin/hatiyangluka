<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Form Tabel Penyakit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Forms</li>
        <li class="active">Penyakit</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo form_open('dashboard/tambahp');?>
  <pre>
    <h1>Tambah Data Penyakit</h1>
    PenyakitID : <input type="text" name="penyakitid" placeholder="penyakitid" required autofocus></br>
    Penyakit   : <input type="text" name="penyakit" placeholder="penyakit" required></br>
    Penyebab   : <input type="text" name="penyebab" placeholder="penyebab" required><br>
    Solusi     : <input type="text" name="solusi" placeholder="solusi" required>
    <input type="submit" value="Simpan">
  </pre>
  <?php form_close(); ?>
  <hr>
  <table width="70%" border="1">
    <tr>
      <td colspan="6" align="center">Data Penyakit</td>
    </tr>
    <tr align="center" text-style="bold">
      <td>PenyakitID</td>
      <td>Penyakit</td>
      <td>Penyebab</td>
      <td>Solusi</td>
      <td colspan="2">Aksi</td>
    </tr>
    <tr>
      <?php foreach($data as $row): ?>
        <td><?php echo $row->penyakitid; ?></td>
        <td><?php echo $row->penyakit;?></td>
        <td><?php echo $row->penyebab; ?></td>
        <td><?php echo $row->solusi?></td>
        <td><a href='<?php base_url();?>editp/<?php echo $row->penyakitid;?>'>Edit</a></td>
        <td><a href='<?php base_url();?>hapusp/<?php echo $row->penyakitid;?>'>Hapus</a></td>
    </tr>
  <?php endforeach; ?>
  </table>
    </section>
</div>