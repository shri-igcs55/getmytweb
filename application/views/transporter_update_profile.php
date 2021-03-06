<!-- CUSTOMER company REGISTRATION -->
<section class="custmer_reg update_profile">
	<div class="container">
		<div class="row">

			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); $u_id = $logged_in_user['user_id']; ?>
			</article>
			
			<article class="col-md-9">
				<div class="tab-content update_my_info">
					<div class="tab-pane fade in active" id="edit_profile">
						<div class="form_wrp">
							<form class="transporter-form cust_up_prof" action="" id="trans_update" name="trans_update">
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
										    <input name="first_name" type="text" class="form-control" id="e_F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_L_name">Last Name</label>
										    <input name="last_name" type="text" class="form-control" id="e_L_name">
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_m_number">Mobile Number<sup>*</sup></label>
										    <!-- <input style="padding:0;" type="button" id="edit_mob" class="" value="Edit"> -->
										    <span class="M_number_befr">
										    	<input name="mobile" disabled="" type="number" class="form-control" id="e_m_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_e_mail">Email</label>
										    <!-- <input style="padding:0;" type="button" id="edit_mail" class="" value="Edit"> -->
										    <input name="email" disabled="" type="email" class="form-control" id="e_e_mail" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="FirmName">Firm Name<sup>*</sup></label>
										    <input name="firm_name" type="text" class="form-control" id="FirmName" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_pan_no">PAN No<sup>*</sup></label>
										    <input name="pan" type="text" class="form-control" id="e_pan_no" required>
										</div>
									</article>
								</div>
								<div class="section_sub">
									<h3>Contact <span>Details</span></h3>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="TinNo">TIN No.<sup>*</sup></label>
										    <input name="tin" type="text" class="form-control" id="TinNo" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="sTAX">Service Tax No<sup>*</sup></label>
										    <input name="stax" type="text" class="form-control" id="sTAX" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss">Firm Address<sup>*</sup></label>
										    <input name="address1" type="text" class="form-control" id="c_c_addrss" placeholder="Line 1" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss_2"><br></label>
										    <input name="address2" type="text" class="form-control" id="c_c_addrss_2" placeholder="Line 2" required>
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
										    <input name="pin" type="number" name="pincode" class="form-control" id="e_pincode" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="button" id="cus-reg-sbmit" class="form-control update_user_profile" value="Save">
										</div>
									</article>
								</div>
								<span id='form_validation_msg'></span>
							</form>
						</div>
					</div>
				</div>
			</article>
			
		</div>
	</div>
</section>
<!-- 	CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	var user_id = '<?php //echo $u_id; ?>';
</script>