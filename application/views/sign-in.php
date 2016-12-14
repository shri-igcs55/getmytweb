<section class="sign-in-page custmer_reg">
	<div class="container">
		<div class="row form-wrp">

			<article class="col-sm-6 pad-rit-0">

				<div class="signin-wrp">

					<center><h1>Sign in to your account</h1></center>

					<form class="user_signin" action="" id="signin_form" name="signin_form">
						<div class="form-group">
						    <label for="text">Email/Mobile Number<sup>*</sup></label>
						    <input type="text" class="form-control" id="email_phn" required>
						</div>
						<div class="form-group">
						    <label for="password">Password<sup>*</sup></label>
						    <input type="password" class="form-control" id="paswrd" required>
						</div>
						<p class="text-right forgot-paswrd"><a href="#" data-toggle="modal" data-target="#forgotModal">Forgot Password?</a></p>

						<div class="form-group text-center">
						    <div class="form-group">
						    	<input id="signin" class="signin form-control" value="Sign In" type="button" />
						    </div>
						    <!-- color:#37b1d8; -->
							<span id="form_validation_msg"></span>
						    
						</div>
					</form>

				</div>
			</article>

			<article class="col-sm-6">

				<div class="register-wrp">

					<center><h1>New to <a href="#">getmytruck.in</a></h1></center>

					<div class="form-group text-center">
					    <a href="<?php echo site_url('user/signup/'); ?>" type="submit" class="register-btn ">Register Now</a>
					</div>

					<div class="register-btm">
						<p>Don't have an account? Register today and join thousands of peoples who are using our service to deliver their products in a easy and convenient way.</p>
					</div>

				</div>
			</article>

		</div>
	</div>
</section>
<!-- #### FORGOT PASSWORD MODAL ### -->
<div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title text-center" id="myModalLabel">Forgot Password</h2>
			</div>
			<div class="modal-body">
				<form class="user_forgot_pass" action="" id="forgotpass_form" name="forgotpass_form" method="POST">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="text">Email/Mobile Number<sup>*</sup></label>
								<input type="text" class="form-control" id="forgot_email_phn" name="forgot_email_phn" required />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<div class="col-md-6">
									<input id="forgotpassword_resend" name="forgotpassword_resend" class="forgotpass_resend form-control" value="RESUBMIT" type="button" disabled="" />
								</div>
								<div class="col-md-6">
									<input id="forgotpassword" name="forgotpassword" class="forgotpass form-control" value="SUBMIT" type="button" />
								</div>
							</div>
						    <!-- color:#37b1d8; -->
							<span id="form_validation_msg_forgot"></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- #### FORGOT PASSWORD MODAL ### -->
<script type="text/javascript">
	$(document).ready(function(){
		// to get user type list
		jQuery.ajax({
			type:"GET",
			url: "/gmt/User/login_user_type_list",
			success: function(res){
				if(res){
					$.each(res.data, function(key, val) {
		            	$('<option value="'+val['uid']+'">'+val['utype']+'</option>').appendTo('.role');
		            });
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});

		// to login
		$(".signin").click(function(event){
			var objCurrentSection = $('.pad-rit-0 div.signin-wrp');       		
	   		
	   		var email_mob 	= objCurrentSection.find("#email_phn").val();
			var password 	= objCurrentSection.find("#paswrd").val();
			// var role	= objCurrentSection.find("#role").val();
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/User/user_signin",
				dataType: 'json',
		        data: { 
		        	email_mob: email_mob,
		        	password : password
		        	// utype_id : role
		        },
				success: function(res){
					if(res.status_code == 200){
						$('#form_validation_msg').empty();
			    		$('<p style="color:#00ff00"><strong>Login Successfully.</strong></p>').appendTo('#form_validation_msg');
			    		// window.location ='<?php //echo site_url('user/edit'); ?>';
			    		window.location = '<?php echo site_url('userdashboard/place_transporter_order'); ?>';
					}else{
						$('#form_validation_msg').empty();
			        	$.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            });
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// to forgot
		$(".forgotpass").click(function(event){
			var objCurrentSection = $('.user_forgot_pass');       		
	   		
	   		var forgot_email_phn = objCurrentSection.find("#forgot_email_phn").val();
			// var password = objCurrentSection.find("#paswrd").val();
			// var role	= objCurrentSection.find("#role").val();
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/User/recover",
				dataType: 'json',
		        data: { email_mob: forgot_email_phn },
				success: function(res){
					if(res.status_code == 200){
						$('#form_validation_msg_forgot').empty();
			    		$.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg_forgot');
			            });
			            window.location ='<?php echo site_url('user/signin'); ?>';
					}else{
						$('#form_validation_msg_forgot').empty();
			        	$.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg_forgot');
			            });
			            $("#forgotpassword").attr("disabled", true);
			            $("#forgotpassword_resend").show();
			    		setTimeout(function(){$("#forgotpassword_resend").removeAttr("disabled")},10000);
						// $("#forgotpassword_resend").show(30000);
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// Resend OTP
		$(".forgotpass_resend").click(function(event){
			var objCurrentSection = $('.user_forgot_pass');       		
	   		
	   		var forgot_email_phn = objCurrentSection.find("#forgot_email_phn").val();
			// var password = objCurrentSection.find("#paswrd").val();
			// var role	= objCurrentSection.find("#role").val();
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/User/resend",
				dataType: 'json',
		        data: { email_mob: forgot_email_phn },
				success: function(res){
					if(res.status_code == 200){
						$('#form_validation_msg_forgot').empty();
			    		$.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg_forgot');
			            });
			            window.location ='<?php echo site_url('user/signin'); ?>';
					}else{
						$('#form_validation_msg_forgot').empty();
			        	$.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg_forgot');
			            });
			            $("#forgotpassword_resend").attr("disabled", true);
			            setTimeout(function(){$("#forgotpassword_resend").removeAttr("disabled")},10000);
						// $("#forgotpassword_resend").show(30000);
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});
	});
</script>