<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Form Tabel Rules</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Forms</li>
        <li class="active">Rules</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo form_open('dashboard/tambahr');?>
  <pre>
    <h1>Tambah Data Penyakit</h1>
    Rules : <input type="text" name="rules" placeholder="rules" required autofocus></br>
    PenyakitID   : <input type="text" name="penyakitid" placeholder="penyakitid" required></br>
    GejalaID   : <input type="text" name="gejalaid" placeholder="gejalaid" required><br>
    <input type="submit" value="Simpan">
  </pre>
  <?php form_close(); ?>
  <hr>
  <table width="70%" border="1">
    <tr>
      <td colspan="6" align="center">Data Penyakit</td>
    </tr>
    <tr align="center" text-style="bold">
      <td>Rules</td>
      <td>PenyakitID</td>
      <td>GejalaID</td>
      <td colspan="2">Aksi</td>
    </tr>
    <tr>
      <?php foreach($data as $row): ?>
        <td><?php echo $row->rules; ?></td>
        <td><?php echo $row->penyakitid;?></td>
        <td><?php echo $row->gejalaid; ?></td>
        <td><a href='<?php base_url();?>editr/<?php echo $row->rules;?>'>Edit</a></td>
        <td><a href='<?php base_url();?>hapusr/<?php echo $row->rules;?>'>Hapus</a></td>
    </tr>
  <?php endforeach; ?>
  </table>
    </section>
</div>