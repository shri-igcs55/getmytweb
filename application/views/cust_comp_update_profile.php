<!-- CUSTOMER company REGISTRATION -->
<section class="custmer_reg">
	<div class="container">
		<div class="row">

			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); ?>
			</article>
			<?php // print_r($logged_in_user); ?>

			<article class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="edit_tab1">
						<div class="form_wrp">
							<form class="transporter-form" action="">
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
										    <input type="text" class="form-control" id="e_F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_L_name">Last Name</label>
										    <input type="text" class="form-control" id="e_L_name">
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="Designatn">Designation<sup>*</sup></label>
										    <!-- <input type="text" class="form-control" id="Designatn" required> -->
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
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_m_number">Mobile Number<sup>*</sup></label>
										    <span class="M_number_befr">
										    	<input type="number" class="form-control" id="e_m_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_e_mail">Email</label>
										    <input type="email" class="form-control" id="e_e_mail" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_company_type">Company Type<sup>*</sup></label>
										    <!-- <input type="text" class="form-control" id="Designatn" required> -->
										    <select id="e_company_type" class="form-control Designatn" required>
										    	<option></option>
										    	<option>Owner</option>
										    	<option>Owner</option>
										    	<option>Owner</option>
										    </select>
										</div>
									</article>
									
								</div>

								<div class="section_sub">
									<h3>Contact <span>Details</span></h3>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss">Firm Address<sup>*</sup></label>
										    <input type="text" class="form-control" id="c_c_addrss" placeholder="Line 1" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss_2"><br></label>
										    <input type="text" class="form-control" id="c_c_addrss_2" placeholder="Line 2" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_state">State<sup>*</sup></label>
										    <select id="e_state" class="state form-control" required>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_district">District<sup>*</sup></label>
										    <select id="e_district" class="district form-control" required>
										    </select>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_city">City<sup>*</sup></label>
										    <select id="e_city" class="city form-control" required>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_pincode">Pin code<sup>*</sup></label>
										    <input type="number" name="pincode" class="form-control" id="e_pincode" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_city">City<sup>*</sup></label>
										    <input type="text" class="form-control" id="e_city" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_pan_no">PAN No<sup>*</sup></label>
										    <input type="text" class="form-control" id="e_pan_no" required>
										</div>
									</article>
								</div>


								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="submit" id="cus-reg-sbmit" class="form-control" id="" value="Save">
										    
										</div>
									</article>
								</div>


							</form>
						</div>
					</div>
				</div>
			</article>
			
		</div>
	</div>
</section>
<!-- 	CUSTOMER REGISTRATION ENDS-->