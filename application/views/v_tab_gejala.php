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

    <!-- Main content -->
    <section class="content">
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Gejala</h3>
            </div>
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
          
        </tr>
        <tr class="tab" >
          <?php foreach($data as $row): ?>
            <td align="center"><?php echo $row->gejalaid; ?></td>
            <td><?php echo $row->gejala;?></td>
        </tr>
      <?php endforeach; ?>
      </table>
      </div>
      </div>
      </div>
      </div>
      </section>
      </div>