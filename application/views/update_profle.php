<!-- 	CUSTOMER REGISTRATION -->
<section class="custmer_reg update_profile">
	<div class="container">
		<div class="row">

			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); $u_id = $logged_in_user['user_id']; ?>
			</article>

			<?php echo $u_id; 
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
			
			?>

			<article class="col-md-9">
				<div class="tab-content update_my_info">
					<div class="tab-pane fade in active" id="edit_profile">
						<div class="form_wrp">
							<form id="update_prof" name="update_prof" class="transporter-form  cust_up_prof" action="">
								<div class="section_head">
									<h1>Update Your <span>Info</span></h1>
								</div>

								<div class="section_sub">
									<h3>Basic <span>Details</span></h3>
								</div>
								
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_F_name">First Name<sup>*</sup></label>
										    <input type="text" name="first_name" class="form-control" id="e_F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_L_name">Last Name</label>
										    <input type="text" name="last_name" class="form-control" id="e_L_name">
										</div>
									</article>
								</div>

								<!-- <div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="Designatn">Designation<sup>*</sup></label>
										    <input type="text" class="form-control" id="Designatn" required>
										    <select id="e_designatn" class="form-control Designatn" required>
										    	<option></option>
										    	<option>Owner</option>
										    	<option>Owner</option>
										    	<option>Owner</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="FirmName">Firm Name<sup>*</sup></label>
										    <input type="text" class="form-control" id="FirmName" required>
										</div>
									</article>
								</div> -->
								<!-- <div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_company_type">Company Type<sup>*</sup></label>
										    <input type="text" class="form-control" id="Designatn" required>
										    <select id="e_company_type" class="form-control Designatn" required>
										    	<option></option>
										    	<option>Owner</option>
										    	<option>Owner</option>
										    	<option>Owner</option>
										    </select>
										</div>
									</article>
								</div> -->

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_m_number">Mobile Number<sup>*</sup></label>
										    <!-- <input style="padding:0;" type="button" id="edit_mob" class="" value="Edit"> -->
										    <span class="M_number_befr">
										    	<input type="number" disabled="" name="mobile" class="form-control" id="e_m_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_e_mail">Email</label>
										    <!-- <input style="padding:0;" type="button" id="edit_mail" class="" value="Edit"> -->
										    <input type="email" disabled="" name="email" class="form-control" id="e_e_mail" required>
										</div>
									</article>
								</div>

								<div class="section_sub">
									<h3>Contact <span>Details</span></h3>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss">Address<sup>*</sup></label>
										    <input type="text" name="address1" class="form-control" id="c_c_addrss" placeholder="Line 1" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss_2"><br></label>
										    <input type="text" name="address2" class="form-control" id="c_c_addrss_2" placeholder="Line 2" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_state">State<sup>*</sup></label>
										    <select name="state" id="e_state" class="state form-control" required>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_district">District<sup>*</sup></label>
										    <select name="district" id="e_district" class="district form-control" required>
										    </select>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_city">City<sup>*</sup></label>
										    <select name="city" id="e_city" class="city form-control" required>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_pincode">Pin code<sup>*</sup></label>
										    <input type="number" name="pin" class="form-control" id="e_pincode" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_pan_no">PAN No<sup>*</sup></label>
										    <input type="text" name="pan" class="form-control" id="e_pan_no" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="button" id="update_cus-reg-sbmit" class="form-control update_cus-reg-sbmit update_user_profile" value="Save">
										</div>
									</article>
								</div>
								<span id="form_validation_msg"></span>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
<!-- CUSTOMER REGISTRATION ENDS -->