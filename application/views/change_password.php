<!-- 	CUSTOMER REGISTRATION -->
<section class="custmer_reg">
	<div class="container">
		<div class="row">
			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); ?>
			</article>

			<article class="col-md-9">
				<div class="tab-content">
					
					<div id="edit_tab10">
						<div class="form_wrp" style="padding: 40px 75px 271px;">
							<form class="transporter-form pass_form" action="">
								<div class="section_head">
									<h1>Reset Your <span>Password</span></h1>
								</div>
								<br>
								<br>
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
								<span id ='form_validation_msg'></span>

							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
<!-- 	CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	$(document).ready(function()
	{
		$('.customer_update_profile').load(function()
		{
			var user_id = <?php echo $u_id; ?>;
			jQuery.ajax({
				type 	: "POST",
				url  	: "/gmt/User/chng_pass",
				dataType: "json",
				data	: {
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

        // Ajax post for submiting registration form
	}); // doc ready 
</script>