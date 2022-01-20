
<!DOCTYPE HTML>
<html>
<head>
<title>Ujian Diskominfo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Roadster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url().'assets/css/style.css'?>" rel='stylesheet' type='text/css' />	
<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"> </script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!--start-home-->
<div id="home" class="header">
		<div class="container">
	     <div class="header-top">
	        <div class="logo">
					<span><h3><a href="#"><img src="<?php echo base_url(); ?>assets/images/k.png" width="60px">Aplikasi Sebaran WIFI Kabupaten Karawang</span></h3>
					</a>
				</div>
					
					<div class="clearfix"> </div>
					<div class="quate">
									 <?php if ( ! $this->session->userdata('nama_agt') ): ?>
              
                 <a href="<?= base_url(); ?>login"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a>
            <?php else: ?>
                    <a href="<?= base_url() ?>member/logout"><span class="glyphicon glyphicon-log-out"></span> Keluar</a>
            <?php endif ?>
								</div>
					<span class="menu"></span>
				    <div class="top-menu">
								 
							<ul class="cl-effect-16">
								<li><a class="active" href="<?php echo base_url().'welcome' ?>" data-hover="HOME">Beranda</a></li> 
								
								
								
							</ul>
						</div>
							<!--script-for-menu-->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>
			
		</div>
	</div>