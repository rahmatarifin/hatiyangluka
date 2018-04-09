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
          </tr>
          <tr>
            <?php foreach($data as $row): ?>
              <td><?php echo $row->penyakitid; ?></td>
              <td><?php echo $row->penyakit;?></td>
              <td><?php echo $row->penyebab; ?></td>
              <td><?php echo $row->solusi?></td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
  </section>
</div>