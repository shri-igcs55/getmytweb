<!-- 	CUSTOMER REGISTRATION -->
	
	<section class="custmer_reg">
		<div class="container">
			<div class="row">


				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); ?>
				</article>

				<article class="col-md-9">
				<div class="tab-content">
				<div class="tab-pane fade in active" id="edit_tab1">
					<div class="form_wrp">
						<form class="transporter-form" action="">
							<div class="section_head">
								<h1>Update Your <span>Info</span></h1>
							</div>

							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
										<br>
									    <label for="e_type">Select Type of Transporter<sup>*</sup></label>
									    <!-- <input type="text" class="form-control" id="Designatn" required> -->
									    <select id="e_type" class="form-control Designatn" required>
									    	<option></option>
									    	<option>Commission Agent</option>
									    	<option>Commission Agent</option>
									    	<option>Commission Agent</option>
									    </select>
									</div>
								</article>
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
									    <label for="e_pincode">Pin code<sup>*</sup></label>
									    <input type="number" class="form-control" id="e_pincode" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="e_country">Country<sup>*</sup></label>
									    <input type="text" class="form-control" id="e_country" required>
									</div>
								</article>
							</div>

							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
									    <label for="e_state">State<sup>*</sup></label>
									    <input type="text" class="form-control" id="e_state" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="e_district">District<sup>*</sup></label>
									    <input type="text" class="form-control" id="e_district" required>
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
				<div class="tab-pane fade" id="edit_tab2">
					<div class="form_wrp">
					<h1>2</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab3">
					<div class="form_wrp">
					<h1>3</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab4">
					<div class="form_wrp">
					<h1>4</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab5">
					<div class="form_wrp">
					<h1>5</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab6">
					<div class="form_wrp">
					<h1>6</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab7">
					<div class="form_wrp">
					<h1>7</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab8">
					<div class="form_wrp">
					<h1>8</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab9">
					<div class="form_wrp">
					<h1>9</h1>
					</div>
				</div>
				<div class="tab-pane fade" id="edit_tab10">
					<div class="form_wrp">
						<form class="transporter-form" action="">
							<div class="section_head">
								<h1>Reset Your <span>Password</span></h1>
							</div>

							

							<div class="row">
								<article class="col-md-6">
									<div class="form-group">
									    <label for="e_F_name">New Password<sup>*</sup></label>
									    <input type="password" class="form-control" id="e_F_name" required>
									</div>
								</article>
								<article class="col-md-6">
									<div class="form-group">
									    <label for="e_L_name">Confirm Password<sup>*</sup></label>
									    <input type="password" class="form-control" id="e_L_name">
									</div>
								</article>
							</div>

							<div class="row">
								<article class="col-md-12">
									<div class="form-group">
									    <input type="submit" class="form-control" id="e_paswrd" value="Save">
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