<?php 
	$logged_in_user = $this->session->userdata('logged_in_user'); 
	$u_id=$logged_in_user['user_id']; 

	if($logged_in_user['user_type'] == 5){
		$findOrder = site_url('userdashboard/search_packer_mover_order');
	}else if($logged_in_user['user_type'] == 6){
		$findOrder = site_url('userdashboard/search_cranes_order');
	}else if($logged_in_user['user_type'] == 8 || $logged_in_user['user_type'] == 9 || $logged_in_user['user_type'] == 10 || $logged_in_user['user_type'] == 11 || $logged_in_user['user_type'] == 12 ){
		$findOrder = site_url('userdashboard/search_transporter_order');
	}
?>
<section class="place_order_sidebar" >
	<div id="left_sidebar">
		<ul class="nav nav-tabs"><!-- 'tabs-right' for right tabs -->
		    <!-- <li class="active"><a href="<?php //echo site_url('/'); ?>">Home</a></li> -->
		    <?php if($logged_in_user['user_type'] == 3 || 
		    		 $logged_in_user['user_type'] == 4 ||
		    		 $logged_in_user['user_type'] == 8 ||
		    		 $logged_in_user['user_type'] == 9 ||
		    		 $logged_in_user['user_type'] == 10 ||
		    		 $logged_in_user['user_type'] == 11 ||
		    		 $logged_in_user['user_type'] == 12 ):?>
				<li><a href="<?php echo site_url('userdashboard/place_transporter_order'); ?>">Book Order</a></li>
		    <?php endif;?>
		    <?php if($logged_in_user['user_type'] == 5 ||
		    		 $logged_in_user['user_type'] == 6 ||
		    		 $logged_in_user['user_type'] == 8 ||
		    		 $logged_in_user['user_type'] == 9 ||
		    		 $logged_in_user['user_type'] == 10 ||
		    		 $logged_in_user['user_type'] == 11 ||
		    		 $logged_in_user['user_type'] == 12 ){ ?>

			    <li><a href="<?php echo $findOrder; ?>">Find Order</a></li>
			    <li><a href="<?php echo site_url('userdashboard/booked_orders'); ?>">View &amp; Rate Order</a></li>
			    <li><a href="<?php echo site_url('userdashboard/save_working_station'); ?>">Select Station</a></li>

		    <?php } ?>
			<li><a href="<?php echo site_url('userdashboard/booked_orders'); ?>">Pending Order</a></li>
			<li><a href="<?php echo site_url('userdashboard/save_contact'); ?>">Save Contact</a></li>
		    <li><a href="#">Confirmed Order</a></li>
		    <li id="myProfile"><a href="#">My Profile</a>
			    <ul class="list-unstyled myProfileMenu">
			    	<li><a href="<?php echo site_url('user/edit'); ?>">Edit Profile</a></li>
			    	<?php if($logged_in_user['user_type'] == 5 ||
				    		 $logged_in_user['user_type'] == 6 ||
				    		 $logged_in_user['user_type'] == 8 ||
				    		 $logged_in_user['user_type'] == 9 ||
				    		 $logged_in_user['user_type'] == 10 ||
				    		 $logged_in_user['user_type'] == 11 ||
				    		 $logged_in_user['user_type'] == 12 ){ ?>
			    		<li><a href="<?php echo site_url('user/edit_doc'); ?>">Upload Document</a></li>
			    	<?php } ?>
			    	<li><a href="<?php echo site_url('user/changePassword'); ?>">Reset Password</a></li>
			    </ul>
		    </li>
		    <li><a href="#">Subscription &amp; Package</a></li>
		    <li><a href="<?php echo site_url('contactUs'); ?>">Customer Care</a></li>
		    <li><a href="<?php echo site_url('termandcondition'); ?>">Terms &amp; Conditions</a></li>
		    <li><a href="<?php echo site_url('user/signout'); ?>">Sign out</a></li>
		</ul>
	</div>
</section>