<!-- CUSTOMER REGISTRATION -->
	<section class="custmer_reg">
		<div class="container">
			<div class="row">
				<article class="col-md-9">
					<div class="form_wrp">

						<div class="section_head">
							<h1>Customer <span>Registration</span></h1>
						</div>

						<ul class="nav nav-tabs custmr_type">
					    	<li class="active radio_individual"><a data-toggle="tab" href="#Individual"><span>Individual</span></a></li>
					    	<li class="radio_company"><a data-toggle="tab" href="#Company"><span>Company</span></a></li>
					    </ul>
					    <input class="captcha_wrd" type="hidden" name="hidden_captcha" value="<?php echo $word;?>">
					    <div class="tab-content">
						    <div id="Individual" class="tab-pane fade in active">
						      <form action="" class="cus_indvl cust_form reg_form" id="cust_indv">
						
									<div class="section_sub">
										<h3>Basic <span>Details</span></h3>
									</div>
									
									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="F_name">First Name<sup>*</sup></label>
											    <input type="text" class="form-control" id="F_name" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="L_name">Last Name</label>
											    <input type="text" class="form-control" id="L_name">
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="M_number">Mobile Number<sup>*</sup></label>
											    <span class="M_number_befr">
											    	<input maxlength="10" type="number" class="form-control" id="M_number" required>
											    </span>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="E_mail">Email</label>
											    <input type="email" class="form-control" id="E_mail" required>
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="password">Password<sup>*</sup></label>
											    <input type="password" class="form-control" id="password" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="confirm_password">Confirm Password</label>
											    <input type="password" class="form-control" id="c_pass" required>
											</div>
										</article>
									</div>

									<div class="section_sub">
										<h3>Contact <span>Details</span></h3>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="C_addrss">Address<sup>*</sup></label>
											    <input type="text" class="form-control" id="C_addrss" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="C_addrss_2"><br></label>
											    <input type="text" class="form-control" id="C_addrss_2" required>
											</div>
										</article>
									</div>

									

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="State">State<sup>*</sup></label>
											    <!-- <input type="text" class="form-control" id="State" required> -->
											    <select id="State" class="state form-control" required>
											    	<option value="">Select State</option>
											    	<option value="">Loading...</option>
											    </select>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="District">District<sup>*</sup></label>
											    <!-- <input type="text" class="form-control" id="District" required> -->
											    <select id="District" class="district form-control" required disabled="" title="Select State First">
											    	<option value="">Select District</option>
											    </select>
											</div>
										</article>
									</div>
									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="City">City<sup>*</sup></label>
											    <!--<input type="text" class="form-control" id="City" required>-->
											    <select id="City" class="city form-control" required disabled="" title="Select District First">
											    	<option value="">Select City</option>
											    	<option value="">Please select District First</option>
											    </select>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="Pincode">Pin code<sup>*</sup></label>
											    <input maxlength="6" type="number" class="form-control" id="Pincode" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <input type="hidden" class="form-control" id="user_type" value="3" required>
											    <!-- <input type="hidden" class="form-control" id="pkg_id" value="1" required> -->
											</div>
										</article>
									</div>
									
									<div class="row">
										<article class="col-md-4">
											<div class="form-group">
											    <label for="COde">Enter Code Here<sup>*</sup></label>
											    <input type="text" class="captcha_txt form-control" id="captcha" required>
											</div>
										</article>
										<br/>
										<article class="col-md-6">
											<label><br/></label>
											<div class="form-group col-md-6 captcha_image" id="image">
												<?php echo $image; ?>
											</div>
											<div class="form-group col-md-3">
												<img id="img" class="img-responsive refresh img captcha_img" src="<?php echo base_url('assets/');?>images/refresh.png" alt="refresh">
											</div>
										</article>
										
									</div>

									<div class="row">
										<article class="col-md-8">
											<div class="form-group">
											    <div class="checkbox">
												  	<input name="check1" id="check1" type="checkbox" value="1">
												  	<label for="check1">I accept <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
												  	<!-- color:#37b1d8; -->
												  	<!-- <span id="form_validation_msg" style="color:red; padding-left: 25px;"></span> -->
												</div>
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-4">
											<div class="form-group">
											    <input type="button" id="cus-reg-sbmit" class="form-control cus-reg-sbmit" value="Submit">
											    
											</div>
										</article>
										
									</div>
							  </form>
							</div>

							<!-- ===================================================== -->
						    <div id="Company" class="tab-pane fade">
						      <form action="" class="cus_compny cust_form reg_form" id="cus_compny">
						
								<div class="section_sub">
									<h3>Basic <span>Details</span></h3>
								</div>
								
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="F_name">First Name<sup>*</sup></label>
										    <input type="text" class="form-control" id="F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="L_name">Last Name</label>
										    <input type="text" class="form-control" id="L_name">
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="Designatn">Designation<sup>*</sup></label>
										    <!-- <input type="text" class="form-control" id="Designatn" required> -->
										    <select id="Designatn" class="form-control">
										    	<option>Select Designation</option>
										    	<option>Owner</option>
										    	<option>Manager</option>
										    	<option>Partner</option>
										    	<option>Director</option>
										    	<option>Agent</option>
										    	<option>Other</option>
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
										    <label for="M_number">Mobile Number<sup>*</sup></label>
										    <span class="M_number_befr">
										    	<input maxlength="10" type="number" class="form-control" id="M_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="E_mail">Email</label>
										    <input type="email" class="form-control" id="E_mail" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="password">Password<sup>*</sup></label>
										    <input type="password" class="form-control" id="password" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="confirm_password">Confirm Password</label>
										    <input type="password" class="form-control" id="c_pass" required>
										</div>
									</article>
								</div>

								<div class="section_sub">
									<h3>Contact <span>Details</span></h3>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="C_addrss">Company Address<sup>*</sup></label>
										    <input type="text" class="form-control" id="C_addrss" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="C_addrss_2"><br></label>
										    <input type="text" class="form-control" id="C_addrss_2" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="State">State<sup>*</sup></label>
										    <!-- <input type="text" class="form-control" id="State" required> -->
										    <select id="State" class="state form-control" required>
										    	<option value="">Select State</option>
										    	<option value="">Loading...</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="District">District<sup>*</sup></label>
										    <!-- <input type="text" class="form-control" id="District" required> -->
										    <select id="District" class="district form-control" required disabled="" title="Select State First">
										    	<option value="">Select District</option>
										    </select>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="City">City<sup>*</sup></label>
										    <!--<input type="text" class="form-control" id="City" required>-->
										    <select id="City" class="city form-control" required disabled="" title="Select District First">
										    	<option value="">Select City</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="Pincode">Pin code<sup>*</sup></label>
										    <input maxlength="6" type="number" class="form-control" id="Pincode" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <input type="hidden" class="form-control" id="user_type" value="4" required>
										    <!-- <input type="hidden" class="form-control" id="pkg_id" value="1" required> -->
										</div>
									</article>
								</div>
								
								<div class="section_sub">
									<h3>Other <span>Details</span></h3>
								</div>

								 <div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="C_type">Company Type<sup>*</sup></label>
										    <input type="text" class="form-control" id="C_type" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="email_phn">Pan No</label>
										    <input type="text" class="form-control" id="email_phn" required>
										</div>
									</article>
								</div>
								<br/>
								<div class="row">
									<article class="col-md-4">
										<div class="form-group">
										    <label for="COde">Enter Code Here<sup>*</sup></label>
										    <input type="text" class="captcha_txt form-control" id="captcha" required>
										</div>
									</article>
									<br/>
									<article class="col-md-6">
										<label><br/></label>
										<div class="form-group col-md-6 captcha_image" id="image">
											<?php echo $image; ?>
										</div>
										<div class="form-group col-md-3">
											<img id="img" class="img-responsive refresh img captcha_img" src="<?php echo base_url('assets/');?>images/refresh.png" alt="refresh">
										</div>
									</article>
									
								</div>

								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <div class="checkbox">
											  	<input id="check11" name="check1" type="checkbox" value="1">
											  	<label for="check11">I accept <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
											</div>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="button" id="cus-reg-sbmit" class="form-control cus-reg-sbmit" value="Submit">    
										</div>
									</article>
								</div>

							  </form>
					    	</div>
					    	<!-- color:#37b1d8; -->
							<span id="form_validation_msg" style="color:red;"></span>
						    <!-- ================================================== -->
						</div>
						
					</div>
				</article>
				<article class="col-md-3 pad-0">
					<?php include_once('comman/right_sidebar.php'); ?>
				</article>
			</div>
		</div>
	</section>
<!-- main CUSTOMER REGISTRATION ENDS-->