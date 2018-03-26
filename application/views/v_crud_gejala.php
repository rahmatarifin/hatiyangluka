<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Form Tabel Gejala</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo form_open('dashboard/tambah'); ?>
      <pre>
        <h1>Tambah Data Gejala</h1>
        Gejala ID : <input type="text" name="gejalaid" placeholder="gejalaid" required autofocus><br>
        Gejala    : <input type="text" name="gejala" placeholder="gejala" required>
        <input type="submit" value="Simpan">
      </pre>
      <?php form_close(); ?>
      <table width="70%" border="1" margin-left="5px">
        <tr align="center">
          <td colspan="4"><h5>Data Gejala</h5></td>
        </tr>
        <tr align="center">
          <td>Gejala ID</td>
          <td>Gejala</td>
          <td colspan="2">Aksi</td>
        </tr>
        <tr class="tab">
          <?php foreach($data as $row): ?>
        <td><?php echo $row->gejalaid; ?></td>
        <td><?php echo $row->gejala;?></td>
        <td><a href='<?php base_url();?>edit/<?php echo $row->gejalaid;?>'>Edit</a></td>
        <td><a href='<?php base_url();?>hapus/<?php echo $row->gejalaid;?>'>Hapus</a></td>
        </tr>
      <?php endforeach; ?>
      </table>
    </section>
</div>