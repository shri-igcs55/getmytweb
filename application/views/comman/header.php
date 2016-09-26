<!DOCTYPE html>
<html>
<head>
	<title>GetMy Truck</title>
	<meta charset="utf-8">
	<meta name="author" content="indglobal">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->

	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>bootstrap/css/bootstrap-theme.css">
	<!-- bootstrap css ends -->

	<!-- jquery UI css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/jquery-ui.css">
	<!-- jquery UI css ends -->

	<!-- owl carousel css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/owl.theme.css">
	<!-- owl carousel css ends -->

	<!-- animate.min css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/animate.min.css">
	<!-- animate.min css ends -->

	<!-- fontawsome css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>font-awesome/css/font-awesome.css">
	<!-- fontawsome css ends -->

	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/normalize.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/hover.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/responsive.css">
	<!-- main css ends -->

	<!-- loader css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/pre-loader.css">
	<!-- loader css ends -->

	<!-- jQuery js -->
	<script type="text/javascript" src="<?php echo base_url('assets/');?>js/jquery-2.1.4.js"></script>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">  
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var site_url = '<?php echo site_url(); ?>';
</script>
</head>
<body><section class="master_wrp">
	
	<!-- custom loader  -->
	<div id="preloader">
	    <div id="status"></div>
	</div>
	<!-- custom loader  -->


	<!-- header starts  -->
		<header id="header">
			<section class="header_section">
				<div class="main_menu">
					<div class="container">
						<div class="row">
							<article class="col-sm-2 col-xs-6">
								<div class="logo_wrp">
									<img class="img-responsive" src="<?php echo base_url('assets/');?>images/logo.png" alt="LOGO">
								</div>
							</article>
							<article class="col-sm-10 col-xs-6">
								<div class="menu-wrp">

									<ul class="top-menu text-right">
										<li><a href="<?php echo site_url('user/signin/'); ?>">Sign In</a></li>
										<li><a href="<?php echo site_url('user/signup/'); ?>">Sign Up</a></li>
									</ul>

									<ul class="bottom-menu text-right">
										<li><a class="active hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/'); ?>">Home</a></li>
										<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/about-us'); ?>">About Us</a></li>
										<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/our-services'); ?>">Our Services</a></li>
										<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/how-it-works'); ?>">How it works</a></li>
										<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/membership'); ?>">Membership</a></li>
										<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/contact-us'); ?>">Contact Us</a></li>
									</ul>

								</div>
								<section class="mobile-menu-icn text-right">
									<span><i class="fa fa-bars" aria-hidden="true"></i></span>
								</section>
							</article>
						</div>
					</div>
				</div>

				<div class="mobile-menu">
					<div class="mobile-menu-wrp">

						<ul class="top-menu text-right">
							<li><a href="<?php echo site_url('user/signin/'); ?>">Sign In</a></li>
							<li><a href="<?php echo site_url('user/signup/'); ?>">Sign Up</a></li>
						</ul>

						<ul class="bottom-menu text-center">
							<li><a class="active hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/'); ?>">Home</a></li>
							<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/about-us'); ?>">About Us</a></li>
							<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/our-services'); ?>">Our Services</a></li>
							<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/how-it-works'); ?>">How it works</a></li>
							<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/membership'); ?>">Membership</a></li>
							<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('welcome/contact-us'); ?>">Contact Us</a></li>
						</ul>

					</div>
				</div>
				
			</section>
		</header>
	<!-- header ends  -->
