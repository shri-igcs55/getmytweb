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
						    	<li class="active"><a data-toggle="tab" href="#Individual"><span>Individual</span></a></li>
						    	<li><a data-toggle="tab" href="#Company"><span>Company</span></a></li>
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
													  	<input id="check1" type="checkbox" name="check" value="check1">
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
												    <input type="submit" id="cus-reg-sbmit" class="form-control" value="Submit">
												    
												</div>
											</article>
											
										</div>
									</form>
								</div>

								<!-- ===================================================== -->
										    <div id="Company" class="tab-pane fade">
										      <form action="" class="cus_compny">
										
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
														    <select id="Designatn" class="form-control" required>
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
		
		// to get state list
		jQuery.ajax({
			type:"GET",
			url: "/gmt/Indian_city_dropdown/state_dropdown",
			success: function(res){
				if(res){
					// $('#State').empty();
		            $.each(res.data, function(key, val) {
		            	$.each(val, function(k, v){
		                    $('<option value="'+v+'">'+v+'</option>').appendTo('#State');
		                });
		            });
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});
		
		// to get state list
		$("#State").change(function(event){
			event.preventDefault();
	        var state = $( "#State option:selected" ).text();
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/Indian_city_dropdown/district_dropdown",
				dataType: 'json',
		        data: { state: state },
				success: function(res){
					if(res){
						$('#District').empty();
						$('<option value="">Select District</option>').appendTo('#District');
			            $.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<option value="'+v+'">'+v+'</option>').appendTo('#District');
			                });
			            });
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// to get state list
		$("#District").change(function(event){
			event.preventDefault();
	        var state = $( "#State option:selected" ).text();
	        var district = $( "#District option:selected" ).text();
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
						$('#City').empty();
						$('<option value="">Select City</option>').appendTo('#City');
			            $.each(res.data, function(key, val) {
			            	$('<option value="'+val['id']+'">'+val['city']+'</option>').appendTo('#City');
			            });
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// Ajax post for refresh captcha image.
       	$("#img").click(function() {
        	jQuery.ajax({
                type: "POST",
                url: base_url+"/user/captcha_refresh",
                success: function(res) {
                    if (res)
                    {
                        jQuery("#image").html(res);
                    }
                },
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
            });
        }); // Captcha refresh function close

       	// Ajax post for submiting registration form
       	$("#cus-reg-sbmit").click(function(event) {
	        event.preventDefault();

	        var captcha = $('#captcha').val();
	        var captcha_word = "<?php echo $word; ?>";
	        var first_name = $("#F_name").val();
	        var last_name = $("#L_name").val();
	        var user_mob = $("#M_number").val();
	        var user_email = $("#E_mail").val();
	        var user_pass = $("#password").val();
	        var c_pass = $("#c_pass").val();
	        var address1 = $("#C_addrss").val();
	        var address2 = $("#C_addrss_2").val();
	        var country = $("#Country").val();
	        var state = $("#State").val();
	        var district = $("#District").val();
	        var city = $("#City").val();
	        var pin = $("#Pincode").val();
	        var pkg_id = $("#pkg_id").val();
	        var user_type = $("#user_type").val();
	        
	        if(first_name == '', user_mob == '', user_pass == '', address1 == '', 
	        	country == '', state == '', district == '', city == '', pin == '', 
	        	captcha == '' ){
	        	$('#form_validation_msg').empty();
			    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        }else if(captcha != captcha_word){
	        	$('#form_validation_msg').empty();
			    $('<p><strong>Captcha code is wrong.</strong></p>').appendTo('#form_validation_msg');
	        }else{

		        $.ajax({
			        type: "POST",
			        url: "/gmt/User/user_signup",
			        cache: false,
			        dataType: 'json',
			        data: {
			        	first_name : first_name,
						last_name : last_name,
						user_mob : user_mob,
						user_email : user_email,
						user_pass : user_pass,
						c_pass : c_pass,
						address1 : address1,
						address2 : address2,
						country : country,
						state : state,
						district : district,
						city : city,
						pin : pin,
						pkg_id : pkg_id,
						user_type : user_type
			       	},
			        success: function(res) {
			            if (res.status_code == 200)
			            {
			              	$('#form_validation_msg').empty();
				            $('<p><strong>Registered Successfully.</strong></p>').appendTo('#form_validation_msg');
			              	document.getElementById("cust_indv").reset();
				            /*$.each(res.data, function(key, val) {
				            	$.each(val, function(k, v){
				                    $('<li>'+v+'</li>').appendTo('#test');
				                });
				            });*/
			            }else{
				            $('#form_validation_msg').empty();
				            $.each(res.data, function(key, val) {
				            	$('<p><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
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