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
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Gejala</h3>
            </div>

        <?php echo form_open('dashboard/tambah'); ?>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label>Gejala ID</label>
              <input class="form-control" type="text" name="gejalaid" placeholder="gejalaid" required autofocus>
              </div>
              <div class="form-group">
              <label>Gejala</label>
              <input class="form-control" type="text" name="gejala" placeholder="gejala" required>
              </div>
              <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-primary">
              </div>
            </div>
            </div>
        </div>
        <?php form_close(); ?>
          <div class="row">
            <div class="col-md-12">
            <div class="box-body">
      <table class="table table-bordered" >
        <tr align="center">
          <td colspan="4"><h5>Data Gejala</h5></td>
        </tr>
        <tr align="center">
          <td>Gejala ID</td>
          <td>Gejala</td>
          <td colspan="2">Aksi</td>
        </tr>
        <tr class="tab" >
          <?php foreach($data as $row): ?>
        <td align="center"><?php echo $row->gejalaid; ?></td>
        <td><?php echo $row->gejala;?></td>
        <td align="center"><a class="btn btn-sm btn-success" href='<?php base_url();?>edit/<?php echo $row->gejalaid;?>'><i class="fa fa-external-link"></i></a> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <a class="btn btn-sm btn-danger" href='<?php base_url();?>hapus/<?php echo $row->gejalaid;?>'><i class="fa  fa-eraser"></i></a></td>
        </tr>
      <?php endforeach; ?>
      </table>
      </div>

      </div>
      </div>
      </div>
      </div>
    </section>
</div>