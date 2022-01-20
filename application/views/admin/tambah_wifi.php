<div class="page-header">
  <h3>Tambah Data Baru</h3>
</div>
<?= validation_errors('<p style="color:red;">','</p>'); ?>
<?php
if($this->session->flashdata()){
  echo "<div class='alert alert-danger alert-message'>";
  echo $this->session->flashdata('alert');
  echo "</div>";
} ?>
<form action="<?php echo base_url().'admin/tambah_wifi_act' ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Nama Wifi</label>
      <input type="text" name="nama_wifi" class="form-control">
      <?php echo form_error('nama_wifi'); ?>
    </div>

     <div class="form-group">
      <label>Lokasi</label>
      <input type="text" name="lokasi" class="form-control">
      <?php echo form_error('lokasi'); ?>
    </div>

     <div class="form-group">
      <label>Status</label>
      <input type="text" name="status" class="form-control">
      <?php echo form_error('status'); ?>
    </div>

    <div class="form-group">
      <input type="submit" value="Simpan" class="btn btn-primary">
    </div>
  </div>
</form>
