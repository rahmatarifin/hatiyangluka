<div class="content-wrapper">

  <section class="content-header">
    <h1>Dasboard<small>Form Table Penyakit</small></h1>
    <ol class="breadcrumb">
      <li>
      <a href="#"><i class="fa fa-dashboard"></i>Home</a>
      </li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Edit data Penyakit</h3>
      </div>
      <?php foreach($data as $row): ?>
        <?php echo form_open('crud_penyakit/update'); ?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>PenyakitID</label>
                <input type="text" name="penyakitid" placeholder="PenyakitID" class="form-control" value="<?php echo $row->penyakitid;?>">

                <label>Penyakit</label>
                <input type="text" name="penyakit" placeholder="Penyakit" class="form-control" value="<?php echo $row->penyakit;?>">

                <label>Penyebab</label>
                <input type="text" name="penyebab" placeholder="Penyebab" class="form-control" value="<?php echo $row->penyebab;?>">

                <label>Penyakit</label>
                <input type="text" name="solusi" placeholder="solusi" class="form-control" value="<?php echo $row->solusi;?>">
                
              </div>
              <div class="form-group">
                  <input type="submit" value="update" class="btn btn-primary" >
                </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <?php form_close(); ?>
    </div>
  </section>
</div>