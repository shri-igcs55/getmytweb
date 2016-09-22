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

						    <div class="tab-content">
							    <div id="Individual" class="tab-pane fade in active">
							      <form action="" class="cus_indvl" id="cust_indv">
							
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
												    <select id="State" class="form-control" required>
												    	<option value="">Select State</option>
												    </select>
												</div>
											</article>
											<article class="col-md-6">
												<div class="form-group">
												    <label for="District">District<sup>*</sup></label>
												    <!-- <input type="text" class="form-control" id="District" required> -->
												    <select id="District" class="form-control" required>
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
												    <select id="City" class="form-control" required>
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
												    <input type="hidden" class="form-control" id="user_type" value="3" required>
												    <input type="hidden" class="form-control" id="pkg_id" value="1" required>
												</div>
											</article>
										</div>
										
										<div class="row">
											<article class="col-md-4">
												<div class="form-group">
												    <label for="COde">Enter Code Here<sup>*</sup></label>
												    <input type="text" class="form-control" id="captcha" required>
												</div>
											</article>
											<br/>
											<article class="col-md-6">
												<label><br/></label>
												<div class="form-group col-md-6" id="image">
													<?php echo $image; ?>
												</div>
												<div class="form-group col-md-3">
													<img id="img" class="img-responsive refresh img" src="<?php echo base_url('assets/');?>images/refresh.png" alt="refresh">
												</div>
											</article>
											
										</div>

										<div class="row">
											<article class="col-md-8">
												<div class="form-group">
												    <div class="checkbox">
													  	<input id="check1" type="checkbox" name="check" value="1">
													  	<label for="check1">I accept <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
													  	<!-- color:#37b1d8; -->
													  	<span id="form_validation_msg" style="color:red; padding-left: 25px;"></span>
													</div>
												</div>
											</article>
										</div>

										<div class="row">
											<article class="col-md-4">
												<div class="form-group">
												    <input type="submit" id="cus-indv-reg-sbmit" class="form-control" value="Submit">
												    
												</div>
											</article>
											
										</div>
								  </form>
								</div>

								<!-- ===================================================== -->
							    <div id="Company" class="tab-pane fade">
							      <form action="" class="cus_compny" id="cus_compny">
							
									<div class="section_sub">
										<h3>Basic <span>Details</span></h3>
									</div>
									
									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_F_name">First Name<sup>*</sup></label>
											    <input type="text" class="form-control" id="c_F_name" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_L_name">Last Name</label>
											    <input type="text" class="form-control" id="c_L_name">
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="Designatn">Designation<sup>*</sup></label>
											    <!-- <input type="text" class="form-control" id="Designatn" required> -->
											    <select id="c_Designatn" class="form-control">
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
											    <label for="c_FirmName">Firm Name<sup>*</sup></label>
											    <input type="text" class="form-control" id="c_FirmName" required>
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_M_number">Mobile Number<sup>*</sup></label>
											    <span class="M_number_befr">
											    	<input maxlength="10" type="number" class="form-control" id="c_M_number" required>
											    </span>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_E_mail">Email</label>
											    <input type="email" class="form-control" id="c_E_mail" required>
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_password">Password<sup>*</sup></label>
											    <input type="password" class="form-control" id="c_password" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_confirm_password">Confirm Password</label>
											    <input type="password" class="form-control" id="c_c_pass" required>
											</div>
										</article>
									</div>

									<div class="section_sub">
										<h3>Contact <span>Details</span></h3>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_C_addrss">Company Address<sup>*</sup></label>
											    <input type="text" class="form-control" id="c_C_addrss" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_C_addrss_2"><br></label>
											    <input type="text" class="form-control" id="c_C_addrss_2" required>
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="State">State<sup>*</sup></label>
											    <!-- <input type="text" class="form-control" id="State" required> -->
											    <select id="company_state" class="form-control" required>
											    	<option value="">Select State</option>
											    </select>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="District">District<sup>*</sup></label>
											    <!-- <input type="text" class="form-control" id="District" required> -->
											    <select id="company_district" class="form-control" required>
											    	<option value="">Select District</option>
											    </select>
											</div>
										</article>
									</div>
									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_City">City<sup>*</sup></label>
											    <!--<input type="text" class="form-control" id="City" required>-->
											    <select id="company_city" class="form-control" required>
											    	<option value="">Select City</option>
											    </select>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_Pincode">Pin code<sup>*</sup></label>
											    <input maxlength="6" type="number" class="form-control" id="c_Pincode" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <input type="hidden" class="form-control" id="c_user_type" value="4" required>
											    <input type="hidden" class="form-control" id="c_pkg_id" value="1" required>
											</div>
										</article>
									</div>
									
									<div class="section_sub">
										<h3>Other <span>Details</span></h3>
									</div>

									 <div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_C_type">Company Type<sup>*</sup></label>
											    <input type="text" class="form-control" id="c_C_type" required>
											</div>
										</article>
										<article class="col-md-6">
											<div class="form-group">
											    <label for="c_email_phn">Pan No</label>
											    <input type="text" class="form-control" id="c_email_phn" required>
											</div>
										</article>
									</div>
									<br/>
									<div class="row">
										<article class="col-md-4">
											<div class="form-group">
											    <label for="COde">Enter Code Here<sup>*</sup></label>
											    <input type="text" class="form-control" id="company_captcha" required>
											</div>
										</article>
										<br/>
										<article class="col-md-6">
											<label><br/></label>
											<div class="form-group col-md-6" id="company_image">
												<?php echo $image; ?>
											</div>
											<div class="form-group col-md-3">
												<img id="company_img" class="img-responsive refresh img" src="<?php echo base_url('assets/');?>images/refresh.png" alt="refresh">
											</div>
										</article>
										
									</div>

									<div class="row">
										<article class="col-md-8">
											<div class="form-group">
											    <div class="checkbox">
												  	<input id="check11" type="checkbox" name="check" value="1">
												  	<label for="check11">I accept <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
												  	<!-- color:#37b1d8; -->
													<span id="company_form_validation_msg" style="color:red; padding-left: 25px;"></span>
												</div>
											</div>
										</article>
									</div>

									<div class="row">
										<article class="col-md-8">
											<div class="form-group">
											    <input type="submit" id="cus-comp-reg-sbmit" class="form-control" id="" value="Submit">
											    
											</div>
										</article>
									</div>

								  </form>
						    	</div>

							    <!-- ================================================== -->
							</div>
						
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
<!-- 	CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	$(document).ready(function(){
		
		/*------------------------*/
		// indv form is in main js	
		/*------------------------*/

		$('ul li.radio_company').click(function(){

			// to get state list for company form
			jQuery.ajax({
				type:"GET",
				url: "/gmt/Indian_city_dropdown/state_dropdown",
				success: function(res){
					if(res){
						// $('#State').empty();
			            $.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<option value="'+v+'">'+v+'</option>').appendTo('#company_state');
			                });
			            });
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
			
			// to get state list for company form
			$("#company_state").change(function(event){
				event.preventDefault();
		        var state = $( "#company_state option:selected" ).text();
		        jQuery.ajax({
			    	type:"POST",
					url: "/gmt/Indian_city_dropdown/district_dropdown",
					dataType: 'json',
			        data: { state: state },
					success: function(res){
						if(res){
							$('#company_district').empty();
							$('<option value="">Select District</option>').appendTo('#company_district');
				            $.each(res.data, function(key, val) {
				            	$.each(val, function(k, v){
				                    $('<option value="'+v+'">'+v+'</option>').appendTo('#company_district');
				                });
				            });
						}
					},
			        error: function(){
			        	console.log('Somthing went wrong');
			        }
				});
			});

			// to get state list for company form
			$("#company_district").change(function(event){
				event.preventDefault();
		        var state = $( "#company_state option:selected" ).text();
		        var district = $( "#company_district option:selected" ).text();
		        jQuery.ajax({
			    	type:"POST",
					url: "/gmt/Indian_city_dropdown/city_dropdown",
					dataType: 'json',
			        data: { 
			        	state: state,
			        	district: district
			        },
					success: function(res){
						if(res){
							$('#company_city').empty();
							$('<option value="">Select City</option>').appendTo('#company_city');
				            $.each(res.data, function(key, val) {
				            	$('<option value="'+val['id']+'">'+val['city']+'</option>').appendTo('#company_city');
				            });
						}
					},
			        error: function(){
			        	console.log('Somthing went wrong');
			        }
				});
			});

			// Ajax post for refresh captcha image for company form.
	       	$("#company_img").click(function() {
	        	jQuery.ajax({
	                type: "POST",
	                url: base_url+"user/captcha_refresh",
	                success: function(res) {
	                    if (res)
	                    {
	                        jQuery("#company_image").html(res);
	                    }
	                },
			        error: function(){
			        	console.log('Somthing went wrong');
			        }
	            });
	        }); // Captcha refresh function close

       	
		});
		// Ajax post for submiting registration form
       	$("#cus-comp-reg-sbmit").click(function(event) {
       		event.preventDefault();

	        var captcha 		= $('#company_captcha').val();
	        var captcha_word 	= "<?php echo $word; ?>";
	        var first_name 		= $("#c_F_name").val();
	        var last_name 		= $("#c_L_name").val();
	        var designation 	= $("#c_Designatn").val();
	        var firm_name	 	= $("#c_FirmName").val();
	        var user_mob 		= $("#c_M_number").val();
	        var user_email 		= $("#c_E_mail").val();
	        var user_pass 		= $("#c_password").val();
	        var c_pass 			= $("#c_c_pass").val();
	        var address1 		= $("#c_C_addrss").val();
	        var address2 		= $("#c_C_addrss_2").val();
	        var state 			= $("#company_state").val();
	        var district 		= $("#company_district").val();
	        var city 			= $("#company_city").val();
	        var pin 			= $("#c_Pincode").val();
	        var pkg_id 			= $("#c_pkg_id").val();
	        var user_type 		= $("#c_user_type").val();
	        var company_type	= $('#c_C_type').val();
	        var company_pan		= $('#c_email_phn').val();
	            
	        if($("#check11").prop('checked') == false){
	        	$('#company_form_validation_msg').empty();
				$('<p><strong>Please Read and Accept our Terms of Service and Privacy Policy.</strong></p>').appendTo('#company_form_validation_msg');
			}else if(first_name == '', firm_name == '', user_mob == '', user_pass == '', 
	        	address1 == '', state == '', district == '', city == '', pin == '', 
	        	company_type == '', captcha == '' ){
				$('#company_form_validation_msg').empty();
			    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#company_form_validation_msg');
	        }else if(captcha != captcha_word){
	        	$('#company_form_validation_msg').empty();
			    $('<p><strong>Captcha code is wrong.</strong></p>').appendTo('#company_form_validation_msg');
	        }else{
	        	$.ajax({
		        	type: "POST",
			        url: "/gmt/User/user_signup",
			        cache: false,
			        dataType: 'json',
			        data: {
			        	first_name : first_name,
						last_name : last_name,
						designation : designation,
						firm_name : firm_name,
						user_mob : user_mob,
						user_email : user_email,
						user_pass : user_pass,
						c_pass : c_pass,
						address1 : address1,
						address2 : address2,
						state : state,
						district : district,
						city : city,
						pin : pin,
						pkg_id : pkg_id,
						user_type : user_type,
						company_type : company_type,
						pan : company_pan
			       	},
			       	success: function(res) {
			       		if (res.status_code == 200)
			            {
			              	$('#company_form_validation_msg').empty();
				            $('<p><strong>Registered Successfully.</strong></p>').appendTo('#company_form_validation_msg');
			              	document.getElementById("cus_compny").reset();
				            /*$.each(res.data, function(key, val) {
				            	$.each(val, function(k, v){
				                    $('<li>'+v+'</li>').appendTo('#test');
				                });
				            });*/
			            }else{
				            $('#company_form_validation_msg').empty();
				            $.each(res.data, function(key, val) {
				            	$('<p><strong>'+val+'</strong></p>').appendTo('#company_form_validation_msg');
				            });
			            }
		          	},
			        error: function(){
			        	console.log('Somthing went wrong');
			        }
		        });
		    }
	    });

	}); // Document ready close
</script>