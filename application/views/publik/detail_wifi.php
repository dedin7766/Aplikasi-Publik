<div class="page-header">
  <h3>Detail Data WIFI</h3>
</div>
<?php foreach ($wifi as $a){ ?>
<form action="<?php echo base_url().'admin/update_wifi' ?>" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label>Nama WIFI</label>
    <input type="hidden" name="id" value="<?php echo $a->id; ?>">
    <input type="text" name="nama_wifi" class="form-control" value="<?php echo $a->nama_wifi; ?>" readonly>
  </div>

   <div class="form-group">
    <label>Alamat WIFI Terdaftar</label>
    <input type="text" name="lokasi" class="form-control" value="<?php echo $a->lokasi; ?>" readonly>
  </div>

   <div class="form-group">
    <label>Status</label>
    <input type="text" name="status" class="form-control" value="<?php echo $a->status; ?>" readonly>
  </div>


  <div class="form-group">
		<input type="button" value="Kembali" class="btn btn-primary" onclick="window.history.go(-1)">
  </div>
  </form>
  <?php } ?>
