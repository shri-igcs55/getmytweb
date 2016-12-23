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
							<div class="row">
								<form id="creat_group" name="creat_group" class="transporter-form group_form" action="">
									<div class="section_head">
										<h1>Add New<span> Contact Group</span></h1>
									</div>
									<input type="hidden" name="u_id" id="u_id" value="<?php echo $logged_in_user['user_id']; ?>">
									<br>
									<br>
									<div class="row">
										<article class="col-md-6">
											<div class="form-group">
											    <label for="cont_group_name">Group Name<sup>*</sup></label>
											    <input name="cont_group_name" type="text" class="form-control" id="cont_group_name" required>
											</div>
										</article>
										<article class="col-md-4">
											<div class="form-group">
												<label for="cont_group_name">&nbsp;</label>
											    <input type="button" class="form-control creat_group" id="e_sub_paswrd" value="Save">
											</div>
										</article>
									</div>
									<span id='form_validation_msg'></span>
								</form>
							</div>
							<br/>
							<br/>
							<div class="row">
		    					<div class="find-order-page">
		    						<div id="" class="">
		    							<table id="contact_list_table" class="table table-hover save_edit_delete_table">
		    								<thead>
		    									<tr>
		    										<th>&nbsp;</th>
		    										<th>Group Name</th>
		    										<th>Number of Contact</th>
		    									</tr>
		    								</thead>
		    								<tbody class="contactlisthead">
		    									<?php 
		    										//print_r($orderObj);exit();
		    										if(!isset($orderObj->data->message)):
														foreach($orderObj->data as $orderObj): 
												?>
													<tr>
														<td>
															<div class="checkbox">
																<input type="checkbox" id="add<?php echo $orderObj->group_id; ?>">
																
																<label for="add<?php echo $orderObj->group_id; ?>"><?php echo $orderObj->group_id; ?></label>
															</div>
														</td>
														<td><input type="hidden" name="groupid_<?php echo $orderObj->group_id; ?>" id="groupid_<?php echo $orderObj->group_id; ?>" value="<?php echo $orderObj->group_id; ?>">
															<?php echo $orderObj->group_name; ?>
														</td>
														<td>
															<?php echo $orderObj->contact_in_group; ?>
														</td>
													</tr>
												<?php 
														endforeach;
													else:
														echo '<h5>'.$orderObj->data->message.'</h5>';
													endif;
												?>
		    								</tbody>
		    							</table>
		    						</div>
		    					</div>
			    			</div>
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
		$('.select_all_box').click(function(event){
			if(this.checked) {
				$(this).closest('.find-order-page').find('.save_edit_delete_table :checkbox').each(function() {
					this.checked = true;                        
				});
			}
			else{
				$(this).closest('.find-order-page').find('.save_edit_delete_table :checkbox').each(function() {
					this.checked = false;                        
				});
			}
		});

		$('.save_edit_delete_table').DataTable();
		// DELETE FUNCTION
		$('#delete_row').on('click',function(){
			$(this).closest('.place_order_main').find('.save_edit_delete_table tbody  :checkbox:checked').each(function() {
				$(this).closest('tr').remove();
			});
		});

		$('.creat_group').on('click',function()
		{
			var user_id  = $('#u_id').val();
			var cont_group_name = $('#cont_group_name').val();
			
			if(user_id == '' || cont_group_name == ''){
				$('#form_validation_msg').empty();
				$('<p style="color:#ed4343;"><strong>All * fields are required</strong></p>').appendTo('#form_validation_msg');
				return false;
			}else{
				var add_grp = $('#creat_group').serialize();
				jQuery.ajax({
					type 	: "POST",
					url  	: "/gmt/Save_contact/save_group",
					data	: add_grp,
					success: function(res){
						if(res.status_code == 200){
							$('#form_validation_msg').empty();
							$('<p style="color:#00ff00;"><strong>Group created Successfully.</strong></p>').appendTo('#form_validation_msg');
							$('.group_form')[0].reset();
							location.reload();
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