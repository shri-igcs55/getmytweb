<!-- 	CUSTOMER REGISTRATION -->
<section class="custmer_reg update_profile">
	<div class="container">
		<div class="row">

			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); $u_id = $logged_in_user['user_id']; ?>
			</article>

			<article class="col-md-9">
				<div class="tab-content">
					<div class="tab-pane fade in active" id="edit_tab1">
						<div class="form_wrp">
							<form class="transporter-form cust_up_prof" action="">
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
										    <input type="text" name="fname" class="form-control" id="e_F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_L_name">Last Name</label>
										    <input type="text" name="lname" class="form-control" id="e_L_name">
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
										    <span class="M_number_befr">
										    	<input type="number" name="mobile" class="form-control" id="e_m_number" required>
										    </span>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_e_mail">Email</label>
										    <input type="email" name="email" class="form-control" id="e_e_mail" required>
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
										    <input type="text" name="addr1" class="form-control" id="c_c_addrss" placeholder="Line 1" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="c_c_addrss_2"><br></label>
										    <input type="text" name="addr2" class="form-control" id="c_c_addrss_2" placeholder="Line 2" required>
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
										    <label for="e_pan_no">PAN No<sup>*</sup></label>
										    <input type="text" name="pan_no" class="form-control" id="e_pan_no" required>
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-8">
										<div class="form-group">
										    <input type="button" id="update_cus-reg-sbmit" class="form-control update_cus-reg-sbmit" value="Save">
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
<!-- CUSTOMER REGISTRATION ENDS -->
<script type="text/javascript">
	$(document).ready(function(){
		
   	// update profile
   	$('.update_profile').ready(function(){
			var user_id = <?php echo $u_id; ?>;
			jQuery.ajax({
				type 	: "POST",
				url  	: "/gmt/View_profile/view_profile",
				dataType: "json",
				data	: {
					user_id : user_id
				},
				success: function(res){
					if(res.status_code == 200){
						$('.cust_up_prof')[0].reset();
						$.each(res.data, function(key, val) {
							$.each(val, function(k, v){

								if(k=='c_id'){
									$('#e_state').append($("<option selected value='"+val['state']+"'>"+val['state']+"</option>"));
									$('#e_district').append($("<option selected value='"+val['dstrt']+"'>"+val['dstrt']+"</option>"));
									$('#e_city').append($("<option selected value='"+val['c_id']+"'>"+val['city']+"</option>"));
								}
								$("input[name$='"+k+"']").val(v);
			                });
			            });
					}else{
						alert('No Response for user profile. Please Contact Admin.');
						window.location ='<?php echo site_url('userdashboard/place_transporter_order'); ?>';
						console.log('No Response. Please Contact Admin.');
					}
				},
				error: function(){
					console.log('Something went wrong.');
				}
			}); // ajax
		}); // section load


		/*$(".cus-reg-sbmit").click(function(event) {
	   		var objCurrentSection = $('.tab-content div.active');       		
	   		
	        var first_name 		= objCurrentSection.find("#e_F_name").val();
			var last_name 		= objCurrentSection.find("#e_L_name").val();
	        var user_mob 		= objCurrentSection.find("#e_m_number").val();
	        var user_email 		= objCurrentSection.find("#e_e_mail").val();
	        var address1 		= objCurrentSection.find("#c_c_addrss").val();
	        var address2 		= objCurrentSection.find("#c_c_addrss_2").val();
	        var state 			= objCurrentSection.find("#e_state").val();
	        var district 		= objCurrentSection.find("#e_district").val();
	        var city 			= objCurrentSection.find("#e_city").val();
	        var pin 			= objCurrentSection.find("#e_pincode").val();
	        var pan 			= objCurrentSection.find("#e_pan_no").val();
	        var user_type 		= objCurrentSection.find("#user_type").val();

	        if(first_name == '' || user_mob == '' || user_email == '' || address1 == '' || 
	        	state == '' || district == '' || city == '' || pin == '' || pan == '' || 
	        	last_name == '' || user_type == '' || address2 == '' ){
	        	$('#form_validation_msg').empty();
			    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        }else{
		        $.ajax({
			        type: "POST",
			        url: "/gmt/User/user_signup",
			        cache: false,
			        dataType: 'json',
			        data: {
			        	first_name 	: first_name,
						last_name 	: last_name,
						user_mob 	: user_mob,
						user_email 	: user_email,
						address1 	: address1,
						address2 	: address2,
						state 		: state,
						district 	: district,
						city 		: city,
						pin 		: pin,
						user_type 	: user_type,
						pan 		: pan
			       	},
			        success: function(res) {
			            if (res.status_code == 200)
			            {
			              	$('#form_validation_msg').empty();
				            $('<p><strong>Registered Successfully.</strong></p>').appendTo('#form_validation_msg');
			              	$('.reg_form')[0].reset();
				            // $.each(res.data, function(key, val) {
				            // 	$.each(val, function(k, v){
				            //         $('<li>'+v+'</li>').appendTo('#test');
				            //     });
				            // });
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

		$('.update_cus-reg-sbmit').click(function(){
			
			var user_id  = $('#u_id').val();
			var old_pass = $('#old_pass').val();
			var new_pass = $('#new_pass').val();
			var c_pass   = $('#conf_pass').val();

			jQuery.ajax({
				type 	: "POST",
				url  	: "/gmt/User/chng_pass",
				dataType: "json",
				data	: {
					old_pass: old_pass,
					user_id : user_id,
					new_pass: new_pass,
					c_pass  : c_pass
				},
				success: function(res){
					if(res.status_code == 200){
						$('#form_validation_msg').empty();
						$('<p><strong>Paasword Changed  Successfully.</strong></p>').appendTo('#form_validation_msg');
						$('.pass_form')[0].reset();
					}else{
						$('#form_validation_msg').empty();
						$.each(res.data, function(key, val) {
			            	$('<p><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            });
					}
				},
				error: function(){
					console.log('Something went wrong.');
				}
			}); // ajax
		});*/ // submit form
	}); // doc ready 
</script>