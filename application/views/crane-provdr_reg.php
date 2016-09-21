<!-- CRANE PROVIDER REGISTRATION-->
	<section class="custmer_reg">
		<div class="container">
			<div class="row">
				<article class="col-md-9">
					<div class="form_wrp">
						<form class="crane-providr-form" action="">
							<div class="section_head">
								<h1>Crane Provider <span>Registration</span></h1>
							</div>


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
								<article class="col-md-12">
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
									    	<input type="number" class="form-control" id="M_number" required>
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

							<div class="section_sub">
								<h3>Contact <span>Details</span></h3>
							</div>

							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
									    <label for="C_addrss">Company Address<sup>*</sup></label>
									    <input type="text" class="form-control" id="C_addrss" placeholder="Line 1" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="C_addrss_2"><br></label>
									    <input type="text" class="form-control" id="C_addrss_2" placeholder="Line 2" required>
									</div>
								</article>
							</div>

							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
									    <label for="Pincode">Pin code<sup>*</sup></label>
									    <input type="number" class="form-control" id="Pincode" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="Country">Country<sup>*</sup></label>
									    <input type="text" class="form-control" id="Country" required>
									</div>
								</article>
							</div>

							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
									    <label for="State">State<sup>*</sup></label>
									    <input type="text" class="form-control" id="State" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="District">District<sup>*</sup></label>
									    <input type="text" class="form-control" id="District" required>
									</div>
								</article>
							</div>
							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
									    <label for="City">City<sup>*</sup></label>
									    <input type="text" class="form-control" id="City" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="Pan_no">PAN No<sup>*</sup></label>
									    <input type="text" class="form-control" id="Pan_no" required>
									</div>
								</article>
							</div>

							<!--<div class="section_sub">
								<h3>Basic <span>Details</span></h3>
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
							</div> -->
							<br>

							<div class="row">
								<article class="col-md-4">
									<div class="form-group">
									    <label for="COde">Enter Code Here</label>
									    <input type="text" class="form-control" id="COde" required>
									    
									</div>
								</article>
								<article class="col-md-2 col-xs-6">
									<div class="form-group">
										<label><br></label>
									    <p class="value_store">asdf</p>
									</div>
								</article>
								<article class="col-md-2 col-xs-6">
									<div class="form-group">
										<label><br></label>
									    <img id="img" class="img-responsive refresh img" src="<?php echo base_url('assets/');?>images/refresh.png" alt="refresh">
									</div>
								</article>
								
							</div>

							<div class="row">
								<article class="col-md-8">
									<div class="form-group">
									    <div class="checkbox">
										  	<input id="check1" type="checkbox" name="check" value="check1">
										  	<label for="check1">I accept <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
										</div>
									</div>
								</article>
							</div>

							<div class="row">
								<article class="col-md-8">
									<div class="form-group">
									    <input type="submit" id="cus-reg-sbmit" class="form-control" id="" value="Submit">
									    
									</div>
								</article>
							</div>



						</form>
					</div>
				</article>
				<article class="col-md-3 pad-0">
					<div class="custmr_reg_right">

						<div class="usr_login">
							<div class="section_sub">
								<h3>Already <span>Details</span></h3>
								<h4><a href="<?php echo site_url('user/signin/'); ?>">Click here to Login</a></h4>
							</div>
						</div>

						<div class="reg_option">
							<div class="section_sub">
								<h3>Basic <span>Details</span></h3>
								
							</div>

							<ul>
								<li><a href="<?php echo site_url('user/customer/'); ?>">Customer Registration</a></li>
								<li><a href="<?php echo site_url('user/transporter_logistic/'); ?>">Transport Registration</a></li>
								<li><a href="<?php echo site_url('user/packer_mover/'); ?>">Packers and Mover Registration</a></li>
								<li><a href="<?php echo site_url('user/crane_provider/'); ?>">Crane Provider Registration</a></li>

							</ul>
						</div>

					</div>
				</article>
			</div>
		</div>
	</section>
<!-- CRANE PROVIDER REGISTRATION ENDS-->