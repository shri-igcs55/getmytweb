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
							<form id="sv_cont" name="sv_cont" class="transporter-form save_contact_form" action="">
								<div class="section_head">
									<h1>Add New<span> Contact</span></h1>
								</div>
								<input type="hidden" name="u_id" id="u_id" value="<?php echo $logged_in_user['user_id']; ?>">
								<br>
								<br>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="name">Name<sup>*</sup></label>
										    <input name="name" type="text" class="form-control" id="name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="number">Contact Number<sup>*</sup></label>
										    <input name="number" type="text" class="form-control" id="number" required>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="email">Contact Email<sup>*</sup></label>
										    <input name="email" type="text" class="form-control" id="email">
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
											<label for="group">Select Contact Group<sup>*</sup></label>
											<select id="group" class="group_list form-control trans_plc_ord" required>
										    	<option value="">Select Group</option>
												<option value="">Loading...</option>
											</select>
										</div>
									</article>
								</div>
								<div class="row">
									<article class="col-md-4">
										<div class="form-group">
											<label for="save">&nbsp;</label>
										    <input type="button" class="form-control chg_pass sv_cont" id="e_sub_paswrd" value="Save">
										</div>
									</article>
								</div>
							</form>
							<span id='form_validation_msg'></span>
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
		// to get group list
		$(".group_list").one('click',function(){
	        var user_id = $('#u_id').val();
	        
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/Save_contact/listGroup",
				dataType: 'json',
		        data: { user_id: user_id },
				success: function(res){
					if(res.status_code == 200){
						
						$('.group_list').empty();
						$('.group_list').val('');
						var option ='<option value="">Select Group</option>';
			            $.each(res.data, function(key, val) {
			            	option +='<option value="'+val['group_id']+'">'+val['group_name']+'</option>';
			            });
			            $('.group_list').html(option);
					}else{
						console.log('No response.');
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		$('.sv_cont').click(function()
		{
			var user_id  	= $('#u_id').val();
			var cont_name	= $('#name').val();
			var cont_number	= $('#number').val();
			var cont_email  = $('#email').val();
			var cont_group_id = $("option:selected").val();

			if(user_id == '' || cont_name == '' || cont_number == '' || cont_email == '' || cont_group_id == ''){
				$('#form_validation_msg').empty();
				$('<p style="color:#ed4343;"><strong>All * fields are required</strong></p>').appendTo('#form_validation_msg');
			}else{
				var save_contact = $('#sv_cont').serialize();
				jQuery.ajax({
					type 	: "POST",
					url  	: "/gmt/Save_contact/save_contact",
					data	: {
				        		user_id 		: user_id,
								cont_name 		: cont_name,
								cont_number 	: cont_number,
								cont_email		: cont_email,
								cont_group_id	: cont_group_id
							},
					success: function(res){
						if(res.status_code == 200){
							$('#form_validation_msg').empty();
							$('<p style="color:#00ff00;"><strong>Contact Saved Successfully.</strong></p>').appendTo('#form_validation_msg');
							$('.save_contact_form')[0].reset();
						}else{
							$('#form_validation_msg').empty();
							$.each(res.data, function(key, val) {
				            	$('<p style="color:#ed4343;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
				            });
						}
					},
					error: function(){
						console.log('Something went wrong.');
					}
				}); // ajax
			}
		}); // Ajax post for submiting registration form
	}); // doc ready 
</script>