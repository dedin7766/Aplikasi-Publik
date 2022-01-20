<div class="page-header">
  <h3>Data Member</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_anggota'; ?>" class="btn btn-primary "><span class="glyphicon glyphicon-plus"></span> Member Baru</a>
<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_anggota' ?>">
  <span class="glypicon glypicon-print"></span>
Print</a>
<br><br>
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
        <td></td>
        <td nowrap="nowrap">
          <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/edit_wifi/'.$a->id; ?>"><span class="glyphicon glyphicon-zoom-in"></span></a>
          <a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_wifi/'.$a->id; ?>"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
