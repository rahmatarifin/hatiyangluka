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

    <section class="content">
    <div class="box">
     <div class="box-header">
              <h3 class="box-title">Edit data gejala Gejala</h3>
     </div>
     <?php foreach($data as $row):?>
     	<?php echo form_open('crud_gejala/update');?>
        <div class="box-body">
            <div class="row">
     	      <div class="col-md-6">
     	          <div class="form-group">
     	              
                      <label>Gejala ID</label>
                      <input class="form-control" type="text" name="gejalaid" value="<?php echo $row->gejalaid;?>">
                      
                      <label>Gejala</label>
                      <input class="form-control" type="text" name="gejala" value="<?php echo $row->gejala;?>">
                      <br>
                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
     	          </div>
     	      </div>
     	  </div>
     	</div>
     <?php endforeach; ?>
     <?php form_close(); ?>
</section>
    
</div>