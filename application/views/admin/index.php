<div class="page-header">
  <h3>Data WIFI</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_wifi'; ?>" class="btn btn-primary ">Tambah Data</a>

<a class="btn btn-success " href="<?php echo base_url().'admin/print_data_wifi' ?>">
  <span class="glypicon glypicon-print"></span>
Print</a>
<br><br>
<form action="<?php echo base_url('admin/cari_data')?>" action="GET">
        <div class="form-group">
          <label for="cari">Filter Data</label>
          <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
        </div>
        <input class="btn btn-primary" type="submit" value="Cari">
      </form><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama WIFI</th>
        <th>Lokasi</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($wifi as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama_wifi ?></td>
        <td><?php echo $a->lokasi ?></td>
        <td><?php echo $a->status ?></td>
        <td nowrap="nowrap">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_wifi/'.$a->id; ?>"><span class="glyphicon glyphicon-edit"></span></a>
          <a class="btn btn-warning btn-xs" href="<?php echo base_url().'welcome/detail_wifi/'.$a->id; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
          <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_wifi/'.$a->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>


        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
