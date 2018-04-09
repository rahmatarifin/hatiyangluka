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
      </ol>
    </section>
    <section class="content">
    <?php foreach($data as $row):?>
  <?php echo form_open('crud_rules/update');?>
  <h1>Edit Data Penyakit</h1>
  <table>
    <tr>
      <td>Rules</td>
      <td><input type="text" name="rules" value="<?php echo $row->rules;?>"></td>
    </tr>
    <tr>
      <td>PenyakitID</td>
      <td><input type="text" name="penyakitid" value="<?php echo $row->penyakitid;?>"></td>
    </tr>
    <tr>
      <td>GejalaID</td>
      <td><input type="text" name="gejalaid" value="<?php echo $row->gejalaid;?>"></td>
    </tr>
  </table>
  <input type="submit" value="Update">
<?php endforeach; ?>
<?php form_close(); ?>
    </section>
</div>