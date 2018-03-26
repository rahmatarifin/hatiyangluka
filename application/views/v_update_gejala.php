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
      <?php foreach($data as $row):?>
  <?php echo form_open('crud_gejala/update');?>
  <h1>Edit Data Gejala</h1>
  <table>
    <tr>
      <td>GejalaID</td>
      <td><input type="text" name="gejalaid" value="<?php echo $row->gejalaid;?>"></td>
    </tr>
    <tr>
      <td>Gejala</td>
      <td><input type="text" name="gejala" value="<?php echo $row->gejala;?>"></td>
    </tr>
  </table>
  <input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close(); ?>
    </section>
</div>