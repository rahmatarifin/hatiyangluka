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
  <?php echo form_open('crud_penyakit/update');?>
  <h1>Edit Data Penyakit</h1>
  <table>
    <tr>
      <td>PenyakitID</td>
      <td><input type="text" name="penyakitid" value="<?php echo $row->penyakitid;?>"></td>
    </tr>
    <tr>
      <td>Penyakit</td>
      <td><input type="text" name="penyakit" value="<?php echo $row->penyakit;?>"></td>
    </tr>
    <tr>
      <td>Penyebab</td>
      <td><input type="text" name="penyebab" value="<?php echo $row->penyebab;?>"></td>
    </tr>
    <tr>
      <td>Solusi</td>
      <td><input type="text" name="solusi" value="<?php echo $row->solusi;?>"></td>
    </tr>
  </table>
  <input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close(); ?>
    </section>
</div>