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
    <div class="box">
    <div class="box-header">
      <h3 class="box-title">Tambah Rules</h3>
    </div>
      <?php echo form_open('dashboard/tambahr');?>
  <div class="box-body">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Rules</label>
          <input type="text" name="rules" class="form-control" placeholder="rules" autofocus required>
          <label>PenyakitID</label>
          <input type="text" name="penyakitid" class="form-control" required placeholder="penyakitid">
          <label>GejalaID</label>
          <input type="text" name="gejalaid" class="form-control" placeholder="gejalaid" required>
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
        <table class="table table-bordered">
          <tr align="center">
            <td colspan="5">Data Rules</td>
          </tr>
          <tr align="center">
            <td>Rules</td>
            <td>PenyakitID</td>
            <td>GejalaID</td>
            <td colspan="2">Aksi</td>
          </tr>
          <tr>
            <?php foreach($data as $row): ?>
              <td><?php echo $row->rules; ?></td>
              <td><?php echo $row->penyakitid; ?></td>
              <td><?php echo $row->gejalaid; ?></td>
              <td align="center"><a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>index.php/editr/<?php echo $row->rules; ?>"><i class="fa fa-external-link"></i></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>index.php/hapusr/<?php echo $row->rules; ?>"><i class="fa fa-eraser"></i></a></td>
          </tr>
        <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</section>
</div>