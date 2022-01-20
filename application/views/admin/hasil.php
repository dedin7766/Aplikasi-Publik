<div class="page-header">
  <h3>Hasil Pencarian Data WIFI</h3>
</div>

<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover" id = "table-datatable">
    <thead>
      <tr>
        <th>Nama WIFI</th>
        <th>Lokasi</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($cari as $a) {
      ?>
      <tr>
        <td><?php echo $a->nama_wifi ?></td>
        <td><?php echo $a->lokasi ?></td>
        <td><?php echo $a->status ?></td>
  
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
