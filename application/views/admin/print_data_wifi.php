<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <style type="text/css">
  .table-data{
    width: 100%;
    border-collapse: collapse;
  }

  .table-data tr th.
  .table-data tr td{
  	border: 1px solid black;
  	font-size: 10pt;
  }
  </style>
  <center><h1>Laporan Data WIFI</h1></center>
  <br>
  <table class="table-data" border="1">
  	<thead>
  		 <tr>
        <th>No</th>
        <th>Nama WIFI</th>
        <th>Lokasi</th>
        <th>Status</th>
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
      </tr>
    <?php } ?>

</tbody>
</table>
<script type="text/javascript">
window.print();
</script>
</body>
</html>