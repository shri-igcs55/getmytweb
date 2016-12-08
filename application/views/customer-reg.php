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
				    <input class="captcha_wrd" type="hidden" name="hidden_captcha" value="<?php echo $word; ?>">
				    <div class="tab-content">
					    <div id="Individual" class="tab-pane fade in active">
					      	<form action="" class="cus_indvl cust_form reg_form" id="cust_indv" name="cust_indv">
					
								<div class="section_sub">
									<h3>Basic <span>Details</span></h3>
								</div>
								
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="F_name">First Name<sup>*</sup></label>
										    <input name="first_name" type="text" class="form-control" id="F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="L_name">Last Name</label>
										    <input name="last_name" type="text" class="form-control" id="L_name">
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="M_number">Mobile Number<sup>*</sup></label>
										    <span class="M_number_befr">
										    	<input name="user_mob" min="10" max="10" minlength="10" maxlength="10" type="text" class="form-control" id="M_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="E_mail">Email<sup>*</sup></label>
										    <input name="user_email" type="email" class="form-control" id="E_mail" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="password">Password<sup>*</sup></label>
										    <input name="user_pass" type="password" class="form-control" id="password" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="confirm_password">Confirm Password</label>
										    <input name="c_pass" type="password" class="form-control" id="c_pass" required>
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
										    <input name="address1" type="text" class="form-control" id="C_addrss" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="C_addrss_2"><br></label>
										    <input name="address2" type="text" class="form-control" id="C_addrss_2" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="State">State<sup>*</sup></label>
										    <select name="state" id="State" class="state form-control" required>
										    	<option value="">Select State</option>
										    	<option value="">Loading...</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="District">District<sup>*</sup></label>
										    <select name="district" id="District" class="district form-control" required disabled="" title="Select State First">
										    	<option value="">Select District</option>
										    </select>
										</div>
									</article>
								</div>
								
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="City">City<sup>*</sup></label>
										    <select name="city" id="City" class="city form-control" required disabled="" title="Select District First">
										    	<option value="">Select City</option>
										    	<option value="">Please select District First</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="Pincode">Pin code<sup>*</sup></label>
										    <input name="pin" min="6" max="6" minlength="6" maxlength="6" type="text" class="form-control" id="Pincode" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <input name="user_type" type="hidden" class="form-control" id="user_type" value="3" required>
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
					      	<form action="" class="cus_compny cust_form reg_form" id="cus_compny" name="cus_compny">
					
								<div class="section_sub">
									<h3>Basic <span>Details</span></h3>
								</div>
								
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="F_name">First Name<sup>*</sup></label>
										    <input name="first_name" type="text" class="form-control" id="F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="L_name">Last Name</label>
										    <input name="last_name" type="text" class="form-control" id="L_name">
										</div>
									</article>
								</div>

								<div class="row">
									<article id="dt" class="col-md-6">
										<div class="form-group">
										    <label for="Designatn">Designation<sup>*</sup></label>
										    <select name="designation" id="Designatn" class="form-control">
										    	<option>Select Designation</option>
										    	<option>Agent</option>
										    	<option>Director</option>
										    	<option>Manager</option>
										    	<option>Other</option>
										    	<option>Owner</option>
										    	<option>Partner</option>
										    </select>
										</div>
									</article>
									<article id="othr_desg" hidden="" class="col-md-3">
										<div class="form-group">
										    <label for="dsg_typ">&nbsp;</label>
										    <input name="dsg_typ" type="text" class="form-control" id="dsg_typ" placeholder="Other Designation" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="FirmName">Firm Name<sup>*</sup></label>
										    <input name="firm_name" type="text" class="form-control" id="FirmName" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="M_number">Mobile Number<sup>*</sup></label>
										    <span class="M_number_befr">
										    	<input name="user_mob" min="10" max="10" minlength="10" maxlength="10" type="text" class="form-control" id="M_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="E_mail">Email<sup>*</sup></label>
										    <input name="user_email" type="email" class="form-control" id="E_mail" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="password">Password<sup>*</sup></label>
										    <input name="user_pass" type="password" class="form-control" id="password" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="confirm_password">Confirm Password</label>
										    <input name="c_pass" type="password" class="form-control" id="c_pass" required>
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
										    <input name="address1" type="text" class="form-control" id="C_addrss" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="C_addrss_2"><br></label>
										    <input name="address2" type="text" class="form-control" id="C_addrss_2" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="State">State<sup>*</sup></label>
										    <select name="state" id="State" class="state form-control" required>
										    	<option value="">Select State</option>
										    	<option value="">Loading...</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="District">District<sup>*</sup></label>
										    <select name="district" id="District" class="district form-control" required disabled="" title="Select State First">
										    	<option value="">Select District</option>
										    </select>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="City">City<sup>*</sup></label>
										    <select name="city" id="City" class="city form-control" required disabled="" title="Select District First">
										    	<option value="">Select City</option>
										    </select>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="Pincode">Pin code<sup>*</sup></label>
										    <input name="pin" min="6" max="6" minlength="6" maxlength="6" type="text" class="form-control" id="Pincode" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <input name="user_type" type="hidden" class="form-control" id="user_type" value="4" required>
										</div>
									</article>
								</div>
								
								<div class="section_sub">
									<h3>Other <span>Details</span></h3>
								</div>

							 	<div class="row">
									<article id="ct" class="col-md-6">
										<div class="form-group">
										    <label for="C_type">Company Type<sup>*</sup></label>
										    <select name="company_type" id="C_type" class="ctype form-control" required>
										    	<option value="">Select Company Type</option>
										    	<option value="">Loading...</option>
										    </select>
										</div>
									</article>
									<article id="othr_comp" hidden="" class="col-md-3">
										<div class="form-group">
										    <label for="cmp_typ">&nbsp;</label>
										    <input name="cmp_typ" type="text" class="form-control" id="cmp_typ" placeholder="Other Company Type" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="email_phn">Pan No</label>
										    <input name="pan" min="10" max="10" minlength="10" maxlength="10" type="text" class="form-control" id="email_phn" required>
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
						<span id="form_validation_msg"></span>
					    <!-- ================================================== -->
					</div>
					
				</div>
			</article>
			<article class="col-md-3 pad-0">
				<?php include_once('comman/signup_right_sidebar.php'); ?>
			</article>
		</div>
	</div>
</section>
<!-- main CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	$('#C_type').change(function() {
	    var selected = $(this).val();
	    if(selected == '1'){
	    	$('#ct').attr('class', 'col-md-3');
	    	$('#othr_comp').show();
	    }
	    else{
	    	$('#ct').attr('class', 'col-md-6');
	    	$('#othr_comp').hide();
	    }
	});
	$('#Designatn').change(function() {
	    var selected = $(this).val();
	    if(selected == 'Other'){
	    	$('#dt').attr('class', 'col-md-3');
	    	$('#othr_desg').show();
	    }
	    else{
	    	$('#dt').attr('class', 'col-md-6');
	    	$('#othr_desg').hide();
	    }
	});
</script>