<section class="sign-in-page custmer_reg">
	<div class="container">
		<div class="row form-wrp">

			<article class="col-sm-6 pad-rit-0">

				<div class="signin-wrp">

					<center><h1>Sign in to your account</h1></center>

					<form action="" id="">
						<div class="form-group">
						    <label for="text">Email/Mobile Number<sup>*</sup></label>
						    <input type="text" class="form-control" id="email_phn" required>
						</div>
						<div class="form-group">
						    <label for="password">Password<sup>*</sup></label>
						    <input type="password" class="form-control" id="paswrd" required>
						</div>
						<p class="text-right forgot-paswrd"><a href="#">Forgot Password?</a></p>

						<div class="form-group text-center">
						    <!-- <a type="submit" class="signin hvr-shutter-out-vertical">Sign In</a> -->
						    <div class="form-group">
						    	<input id="signin" class="signin form-control" value="Sign In" type="button" />
						    </div>
						    <!-- color:#37b1d8; -->
							<span id="form_validation_msg" style="color:red;"></span>
						    
						</div>
					</form>

				</div>
			</article>

			<article class="col-sm-6">

				<div class="register-wrp">

					<center><h1>New to <a href="#">GetmyTruck.com</a></h1></center>

					<div class="form-group text-center">
					    <a href="<?php echo site_url('user/signup/'); ?>" type="submit" class="register-btn ">Register Now</a>
					</div>

					<div class="register-btm">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						nostrud ullamco laboris nisi ut aliquip ea commodo
						consequat.</p>
					</div>

				</div>
			</article>

		</div>
	</div>
</section>
<script type="text/javascript">
	// to login
	$(".signin").click(function(event){
		var objCurrentSection = $('.pad-rit-0 div.signin-wrp');       		
   		
   		var email_mob 		= objCurrentSection.find("#email_phn").val();
		var password 		= objCurrentSection.find("#paswrd").val();
        jQuery.ajax({
	    	type:"POST",
			url: "/gmt/User/user_signin",
			dataType: 'json',
	        data: { 
	        	email_mob: email_mob,
	        	password: password
	        },
			success: function(res){
				if(res.status_code == 200){
					$('#form_validation_msg').empty();
		    		$('<p><strong>Login Successfully.</strong></p>').appendTo('#form_validation_msg');
		    		window.location ='<?php echo site_url('userdashboard/place_transporter_order'); ?>';
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
	});
</script>