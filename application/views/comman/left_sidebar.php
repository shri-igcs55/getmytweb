<?php $logged_in_user = $this->session->userdata('logged_in_user'); ?>
<section class="place_order_sidebar">
	<ul class="nav nav-tabs"><!-- 'tabs-right' for right tabs -->
	    <li class="active"><a href="<?php echo site_url('/'); ?>">Home</a></li>
	    <li><a href="<?php echo site_url('userdashboard/place_transporter_order'); ?>">Book Order</a></li>
	    <?php if($logged_in_user['user_type'] == 5 ||
	    		 $logged_in_user['user_type'] == 6 ||
	    		 $logged_in_user['user_type'] == 8 ||
	    		 $logged_in_user['user_type'] == 9 ||
	    		 $logged_in_user['user_type'] == 10 ||
	    		 $logged_in_user['user_type'] == 11 ||
	    		 $logged_in_user['user_type'] == 12 ){ ?>

		    <li><a href="#">View & Find Order</a></li>
		    <li><a href="#">Select Station</a></li>
		    
	    <?php } ?>
	    <li><a href="#">Subscription & Package</a></li>
	    <li><a href="#">Save Contact</a></li>
	    <li><a href="#">Booked History</a></li>
	    <li><a href="<?php echo site_url('user/edit'); ?>">Update Profile</a></li>
	    <li><a href="<?php echo site_url('user/changePassword'); ?>">Reset Password</a></li>
	    <li><a href="#">Customer Care</a></li>
	    <li><a href="#">Terms & Conditions</a></li>
	    <li><a href="<?php echo site_url('user/signout'); ?>">Sign out</a></li>
	</ul>
</section>