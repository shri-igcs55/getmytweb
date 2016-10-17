<?php $logged_in_user = $this->session->userdata('logged_in_user'); ?>
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

	<!-- Home page css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/home.css">

	<!-- loader css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/pre-loader.css">
	<!-- loader css ends -->

	<!-- jQuery js -->
	<script type="text/javascript" src="<?php echo base_url('assets/');?>js/jquery-2.1.4.js"></script>

	<!-- home page js -->
	

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
								<a href="<?php echo site_url('/'); ?>">
									<img class="img-responsive" src="<?php echo base_url('assets/');?>images/logo.png" alt="LOGO">
								</a>
							</div>
						</article>
						<article class="col-sm-10 col-xs-6">
							<div class="menu-wrp">
								<?php if($logged_in_user){ ?>
									<ul class="top-menu text-right">
										<li>Welcome <span style="color:#ed4343;"><a href="<?php echo site_url('user/edit'); ?>"><?php echo ucfirst($logged_in_user['first_name']).' '.ucfirst($logged_in_user['last_name']); ?></a></span></li>
										<li><span style="color:#ed4343;"><a href="<?php echo site_url('user/signout'); ?>">Logout</a></span></li>
									<input type="hidden" value="<?php echo $logged_in_user['user_id']; 
			if ($logged_in_user['user_type'] == 3) {
				echo "Individual Customer";
			} elseif($logged_in_user['user_type'] == 4){
				echo "Company as Customer";
			} elseif($logged_in_user['user_type'] == 5){
				echo "Packers and Movers";
			} elseif($logged_in_user['user_type'] == 6){
				echo "Crane Provider";
			} elseif($logged_in_user['user_type'] == 8){
				echo "Container Suppliers";
			} elseif($logged_in_user['user_type'] == 9){
				echo "Commission Agent";
			} elseif($logged_in_user['user_type'] == 10){
				echo "Fleet Owners";
			} elseif ($logged_in_user['user_type'] == 11) {
				echo "Transporter and Logistics Provider";
			} elseif ($logged_in_user['user_type'] == 12) {
				echo "Trolley and Tanker Provider";
			}
			
			?>"></ul>
									
								<?php }else{ ?>
									<ul class="top-menu text-right">
										<li><a href="<?php echo site_url('user/signin/'); ?>">Sign In</a></li>
										<li><a href="<?php echo site_url('user/signup/'); ?>">Sign Up</a></li>
									</ul>
								<?php } ?>
								<ul class="bottom-menu text-right">
									<li><a class="active hvr-shutter-out-horizontal" href="<?php echo site_url('/'); ?>">Home</a></li>
									<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('aboutus'); ?>">About Us</a></li>
									<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('ourservice'); ?>">Our Services</a></li>
									<li><a class="hvr-shutter-out-horizontal" href="#<?php //echo site_url('how-it-works'); ?>">How it works</a></li>
									<li><a class="hvr-shutter-out-horizontal" href="#<?php //echo site_url('membership'); ?>">Membership</a></li>
									<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('contactUs'); ?>">Contact Us</a></li>
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
						<li><a class="active hvr-shutter-out-horizontal" href="<?php echo site_url('/'); ?>">Home</a></li>
						<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('aboutus'); ?>">About Us</a></li>
						<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('ourservices'); ?>">Our Services</a></li>
						<li><a class="hvr-shutter-out-horizontal" href="#<?php //echo site_url('welcome/how-it-works'); ?>">How it works</a></li>
						<li><a class="hvr-shutter-out-horizontal" href="#<?php //echo site_url('welcome/membership'); ?>">Membership</a></li>
						<li><a class="hvr-shutter-out-horizontal" href="<?php echo site_url('contactus'); ?>">Contact Us</a></li>
					</ul>

				</div>
			</div>
			
		</section>
	</header>
	<!-- header ends  -->