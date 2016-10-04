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
								<input type="hidden" name="u_id" id="u_id" value="<?php echo $logged_in_user['user_id']; ?>">
								<br>
								<br>
								<div class="row">
									<article class="col-md-4">
										<div class="form-group">
										    <label for="old_pass">Old Password<sup>*</sup></label>
										    <input type="password" class="form-control" id="old_pass" required>
										</div>
									</article>
									<article class="col-md-4">
										<div class="form-group">
										    <label for="new_pass">New Password<sup>*</sup></label>
										    <input type="password" class="form-control" id="new_pass" required>
										</div>
									</article>
									<article class="col-md-4">
										<div class="form-group">
										    <label for="conf_pass">Confirm Password<sup>*</sup></label>
										    <input type="password" class="form-control" id="conf_pass">
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-12">
										<div class="form-group">
										    <input type="button" class="form-control chg_pass" id="e_sub_paswrd" value="Save">
										</div>
									</article>
								</div>
								<span id='form_validation_msg' style="color:#ed4343;"></span>

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
		$('.chg_pass').click(function()
		{
			var user_id  = $('#u_id').val();
			var old_pass = $('#old_pass').val();
			var new_pass = $('#new_pass').val();
			var c_pass   = $('#conf_pass').val();

			if(user_id == '' || old_pass == '' || new_pass == '' || c_pass == ''){
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
			}else{
				$('#form_validation_msg').empty();
				$('<p><strong>All * fields are required.</strong></p>').appendTo('#form_validation_msg');
			}
		}); // Ajax post for submiting registration form
	}); // doc ready 
</script>