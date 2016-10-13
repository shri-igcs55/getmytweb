<?php $logged_in_user = $this->session->userdata('logged_in_user'); $u_id=$logged_in_user['user_id']; ?>
<section class="place_order_sidebar" >
<div id="left_sidebar">
	<ul class="nav nav-tabs"><!-- 'tabs-right' for right tabs -->
	    <!-- <li class="active"><a href="<?php //echo site_url('/'); ?>">Home</a></li> -->
	    <li><a href="<?php echo site_url('userdashboard/place_transporter_order'); ?>">Book Order</a></li>
	    <?php if($logged_in_user['user_type'] == 5 ||
	    		 $logged_in_user['user_type'] == 6 ||
	    		 $logged_in_user['user_type'] == 8 ||
	    		 $logged_in_user['user_type'] == 9 ||
	    		 $logged_in_user['user_type'] == 10 ||
	    		 $logged_in_user['user_type'] == 11 ||
	    		 $logged_in_user['user_type'] == 12 ){ ?>

		    <li><a href="<?php echo site_url('userdashboard/search_transporter_order'); ?>">Find Order</a></li>
		    <li><a href="<?php echo site_url('userdashboard/booked_orders'); ?>">View &amp; Rate Order</a></li>
		    <li><a href="#">Select Station</a></li>
		    
	    <?php } ?>
		
		<?php if($logged_in_user['user_type'] == 3 || $logged_in_user['user_type'] == 4):?>
			<li><a href="<?php echo site_url('userdashboard/booked_orders'); ?>">Pending Order</a></li>
		<?php endif;?>
		 
	    <li><a href="#">Subscription &amp; Package</a></li>
	    <li><a href="#">Save Contact</a></li>
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
	    <li><a href="#">Customer Care</a></li>
	    <li><a href="#">Terms &amp; Conditions</a></li>
	    <li><a href="<?php echo site_url('user/signout'); ?>">Sign out</a></li>
	</ul>
</div>
</section>
<script type="text/javascript">
	var user_id = '<?php //echo $u_id; ?>';
</script>
