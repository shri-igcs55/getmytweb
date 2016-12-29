<?php 
	$logged_in_user = $this->session->userdata('logged_in_user'); 
	$u_id=$logged_in_user['user_id']; 

	if($logged_in_user['user_type'] == 5){
		$findOrder = site_url('userdashboard/search_packer_mover_order');
	}else if($logged_in_user['user_type'] == 6){
		$findOrder = site_url('userdashboard/search_cranes_order');
	}else 
		if(	$logged_in_user['user_type'] == 8 || 
			$logged_in_user['user_type'] == 9 || 
			$logged_in_user['user_type'] == 10 || 
			$logged_in_user['user_type'] == 11 || 
			$logged_in_user['user_type'] == 12 ||
			$logged_in_user['user_type'] == 13){
				$findOrder = site_url('userdashboard/search_transporter_order');
	}
?>
<?php
/*
admin 									= 1
Customer								= 2
  `->	Individual Customer 			= 3
  `->	Company as Customer				= 4
Packers and Movers  					= 5
Crane Provider							= 6
Transporter 							= 7
  `->	Container Suppliers				= 8
  `->	Commission Agent 				= 9
  `->	Fleet Owners 					= 10
  `->	Transporter and Logistics Provider	= 11
  `->	Trolley Provider					= 12
  `->	Tanker Provider						= 12
*/
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
		    		 $logged_in_user['user_type'] == 12 ||
					 $logged_in_user['user_type'] == 13 ||
		    		 $logged_in_user['user_type'] == 5 ||
		    		 $logged_in_user['user_type'] == 6 ):?>
				<li><a href="<?php echo site_url('userdashboard/place_transporter_order'); ?>">Book your Order</a></li>
		    <?php endif;?>
		    <?php if($logged_in_user['user_type'] == 5 ||
		    		 $logged_in_user['user_type'] == 6 ||
		    		 $logged_in_user['user_type'] == 8 ||
		    		 $logged_in_user['user_type'] == 9 ||
		    		 $logged_in_user['user_type'] == 10 ||
		    		 $logged_in_user['user_type'] == 11 ||
		    		 $logged_in_user['user_type'] == 12 ||
					 $logged_in_user['user_type'] == 13){ ?>

			    	<li><a href="<?php echo $findOrder; ?>">Find Order</a></li>
			<?php } ?>
			    <li id="ViewMyOrder" style="color: #545454; cursor: pointer; font-size: 18px;">View Order<span style="float:right;">&or;</span>
			    	<ul class="list-unstyled MyViewOrderMenu">
			    	<?php if($logged_in_user['user_type'] == 5 ||
		    		 $logged_in_user['user_type'] == 6 ||
		    		 $logged_in_user['user_type'] == 8 ||
		    		 $logged_in_user['user_type'] == 9 ||
		    		 $logged_in_user['user_type'] == 10 ||
		    		 $logged_in_user['user_type'] == 11 ||
		    		 $logged_in_user['user_type'] == 12 ){ ?>
					    <li><a href="<?php echo site_url('userdashboard/booked_orders'); ?>">Pending Order</a></li> <!--changed lable by Bhvaesh Rate to Pending-->
				    <?php }else{ ?>
						<li><a href="<?php echo site_url('userdashboard/booked_orders'); ?>">Pending Order</a></li>
					<?php } ?>
						<li><a href="<?php echo site_url('userdashboard/rated_orders'); ?>">Rated Order</a></li>
				    	<li><a href="<?php echo site_url('userdashboard/confirm_orders'); ?>">Confirmed Order</a></li>
				    </ul>
				</li>
			<li><a href="<?php echo site_url('userdashboard/save_working_station'); ?>">Select Station</a></li>
			<li id="myContact" style="color: #545454; cursor: pointer; font-size: 18px;">My Contact<span style="float:right;">&or;</span>
				<ul class="list-unstyled myContactMenu">
					<li><a href="<?php echo site_url('userdashboard/add_contact'); ?>">Add Contact</a></li>
			    	<li><a href="<?php echo site_url('userdashboard/add_contact_group'); ?>">Create Group</a></li>
			    	<li id="view_clist"><a href="<?php echo site_url('userdashboard/save_contact'); ?>">View Contact</a></li>
			    </ul>
			</li>
		    <li id="myProfile" style="color: #545454; cursor: pointer; font-size: 18px;">My Profile<span style="float:right;">&or;</span>
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
		    <li><a href="<?php echo site_url('membership'); ?>">Subscription &amp; Package</a></li>
		    <li><a href="<?php echo site_url('contactus'); ?>">Customer Care</a></li>
		    <li><a href="<?php echo site_url('termandcondition'); ?>">Terms &amp; Conditions</a></li>
		    <li><a href="<?php echo site_url('user/signout'); ?>">Sign out</a></li>
		</ul>
	</div>
</section>