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
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Penyakit</h3>
            </div>


      <?php echo form_open('dashboard/tambahp');?>
      <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label>PenyakitID</label>
              <input class="form-control" type="text" name="penyakitid" placeholder="penyakitid" required autofocus></br>
              <label>Penyakit</label>
              <input type="text" name="penyakit" placeholder="penyakit" class="form-control" required></br>
              <label>Penyebab</label>
              <input class="form-control" type="text" name="penyebab" placeholder="penyebab" required><br>
              <label>Solusi</label>
              <input type="text" name="solusi" placeholder="solusi" class="form-control" required><br>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" value="Simpan">
              </div>
              </div>
              </div>
  <?php form_close(); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="box-body">
        <table class="table table-bordered">
          <tr ><td colspan="6" align="center"><h5>Data Penyakit</h5></td></tr>
          <tr align="center">
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
              <td align="center"><a class="btn btn-sm btn-success" href='<?php base_url();?>editp/<?php echo $row->penyakitid;?>'><i class="fa fa-external-link"></i></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<a class="btn btn-sm btn-danger" href='<?php base_url();?>hapusp/<?php echo $row->penyakitid;?>'><i class="fa fa-eraser"></i></a></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
  </section>
</div>