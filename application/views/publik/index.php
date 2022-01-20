
	<div class="welcome-bottom">
		<div class="container">
			<div class="welcome-bottom-banner">
				<h2 class="tittle"><!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PUBLIK</title>
</head>
<body>
<html>
<head>
</head>
<form action="<?php echo base_url('welcome/cari_data')?>" action="GET">
        <div class="form-group">
          <label for="cari">Filter Data</label>
          <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
        </div>
        <input class="btn btn-primary" type="submit" value="Cari">
      </form><br>
<body>
<div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped">

    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($wifi as $a) {
      ?>
      <tr>
        <td><img src="<?php echo base_url(); ?>assets/images/w.png" width="40px"></td>
        <td><?php echo $a->nama_wifi ?><br>
        	<?php echo $a->lokasi ?>
        </td>
        <td nowrap="nowrap">
          <center><a class="btn btn-warning" href="<?php echo base_url().'welcome/detail_wifi/'.$a->id; ?>"> Detail Data</a></center>
        </td>
      </tr>
    <?php } ?>

</table>
</body>
</html></h2>
				<div class="welcome-bottom-grids">
					<div class="welcome-bottom-grid-left">
						
						
						
					</div>
					<div class="welcome-bottom-grid-right">
						<div class="car-text">
					
					
					</div>
					<div class="clearfix"> </div>
				</div>
				
<!-- //welcome-bottom -->

<!--start-video-->
  