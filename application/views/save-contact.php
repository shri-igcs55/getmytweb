<!-- ### SAVE CONTACT PAGE ### -->
<section class="place_orderwrp custmer_reg">
	<section class="find_order">
		<div class="container">
			<div class="row">
				<article class="col-md-3">
					<?php 
						include_once('comman/left_sidebar.php'); $u_id =$logged_in_user['user_id'];
					?>
				</article>
				<article class="col-md-9">
					<section class="place_order_main">
		    			<div class="tab-content">
		    				<div class="tab-pane fade in active" id="plc_crn_sav_canct">
		    					<div class="row">
				    				<article class="col-md-12">
				    					<div class="section_head">
											<h1>Save <span>Contacts</span></h1>
											<ul class="list-inline text-right edit_delete_list">
												<li>
													<a href="javascript:void(0);" class="cmn_edit_delete_btn grp_list_edit" data-toggle="modal" data-target="#saveContactModal" id="edit_cont">EDIT</a>
												</li>
												<li>
													<a href="javascript:void(0);" class="cmn_edit_delete_btn" name="delete_row" id="delete_row">DELETE</a>
												</li>
											</ul>
										</div>
				    				</article>
				    			</div>
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="find-order-page">
				    						<div id="" class="">
				    							<table id="contact_list_table" class="table table-hover save_edit_delete_table">
				    								<thead>
				    									<tr>
				    										<th>
				    											<!-- <div class="checkbox">
				    												<input type="checkbox" id="add1" class="select_all_box">
				    												<label for="add1"></label>
				    											</div> -->
				    										</th>
				    										<th>Name</th>
				    										<th>Phone No.</th>
				    										<th>Email</th>
				    										<th>Group</th>
				    									</tr>
				    								</thead>
				    								<tbody class="contactlisthead">
				    									<?php 
				    									     // print_r($orderObj);exit();
				    										if(!isset($orderObj->data->message)){
																foreach($orderObj->data as $orderObj): 
														?>
															<tr>
																<td>
																	<div class="checkbox">
																		<input class="checked_cont_edit" type="checkbox" id="add<?php echo $orderObj->cont_id; ?>" name="checked_cont_id" value="<?php echo $orderObj->cont_id; ?>">
																		<label for="add<?php echo $orderObj->cont_id; ?>"></label>
																	</div>
																</td>
																<td><input class="edit_val_checked" type="hidden" name="contactid_<?php echo $orderObj->cont_id; ?>" id="contactid_<?php echo $orderObj->cont_id; ?>" value="<?php echo $orderObj->cont_id; ?>">
																		<input class="edit_val_checked_id" type="hidden" name="grpid_<?php echo $orderObj->group_id; ?>" id="contactid_<?php echo $orderObj->group_id; ?>" value="<?php echo $orderObj->group_id; ?>"><?php echo $orderObj->cont_name; ?></td>
																<td><?php echo $orderObj->cont_mob; ?></td>
																<td><?php echo $orderObj->cont_email; ?></td>
																<td><?php echo $orderObj->group_name; ?></td>
															</tr>
														<?php 
																endforeach;
															}elseif(isset($orderObj->data->message)){
																echo '<h5>'.$orderObj->data->message.'</h5>';
															}
														?>
				    								</tbody>
				    							</table>
				    						</div>
				    					</div>
				    				</article>
				    			</div>
		    				</div>
		    			</div>
					</section>
				</article>
			</div>
		</div>
	</section>
</section>
<!-- #### SAVE CONTACT MODAL ### -->
<div class="modal fade" id="saveContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title text-center" id="myModalLabel">Edit Contact</h2>
			</div>
			<form action="" method="post" class="edit_contact" id="edit_contact">
				<div class="modal-body">
					<table class="table save_contact_table">
						<tr>
							<td>Name</td>
							<td><input class="form-control" type="text" name="contact_name" id="contact_name" value="" placeholder="Name" /></td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td><input class="form-control" type="text" minlength="10" name="contact_phone" max="10" min="10" maxlength="10" id="contact_phone" value="" placeholder="Phone" /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input class="form-control" type="text" name="contact_email" id="contact_email" value="" placeholder="Email" /></td>
						</tr>
						<tr>
							<td>Group</td>
							<td>
								<select name="edit_grp_list" id="edit_grp_list" class="form-control my_grp_list">
									<option value="">Select Contact Group</option>
									<option value="">Loading...</option>
								</select>
							</td>
						</tr>
					</table>
					<div class="form-group text-center">
						<button class="btn btn_cmmn_red" type="button">Save Contact</button>
					</div>
					<span id="form_validation_msg"></span>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		// to Edit contact
		$("#edit_cont").on('click',function(){
		 
			var user_id = <?php echo $logged_in_user['user_id']; ?>;
			var contact_length = $("input[name=checked_cont_id]:checked").length;
			if(contact_length > 1){
				alert('Please select one contact at a time to edit.');
				return false;
			}else{

				var contact_id = $("input[name=checked_cont_id]:checked").val();
				jQuery.ajax({
					type:"POST",
					url: "/gmt/Save_contact/edit_one_contact",
					dataType: 'json',
					data: { user_id: user_id,
							contact_id: contact_id
							},
					success: function(res){
						if(res.status_code == 200){
							$.each(res.data, function(key, val) {
								$('#contact_name').val(val['cont_name']);
								$('#contact_phone').val(val['cont_mob']);
								$('#contact_email').val(val['cont_email']);
			            		$('<option selected value="'+val['cgrp_id']+'">'+val['cgrp_group_name']+'</option>').appendTo('.my_grp_list');
				            });
						}else{
							$.each(res.data, function(key, val) {
				            	alert(JSON.stringify(val));
				            });
						}
					},
					error: function(){
						console.log('Somthing went wrong');
					}
				});
			}
		});

		$(".btn_cmmn_red").on('click',function(){
			var user_id 		= <?php echo $logged_in_user['user_id']; ?>;
			var contact_id 		= $("input[name=checked_cont_id]:checked").val();
			var cont_group_id	= $("#edit_grp_list").val();
			var contact_name	= $("#contact_name").val();
			var contact_phone	= $("#contact_phone").val();
			var contact_email	= $("#contact_email").val();
			$('#form_validation_msg').empty();
			if(validateEmail(contact_email) == false){
				$('<p style="color:#ed4343;"><strong>Email id is not valid.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
	        }else if(validatePhoneNumber(contact_phone) == false){
				$('<p style="color:#ed4343;"><strong>Mobile Number is not valid.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
	        }

	        if(user_id == '' || contact_id == '' || cont_group_id == '' || 
	        	contact_name == '' || contact_phone == '' || contact_email == ''){
	        	$('<p style="color:#ed4343; font-size:14px;"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
	        }else{

				jQuery.ajax({
					type:"POST",
					url: "/gmt/Save_contact/edit_contact",
					dataType: 'json',
					data: {
						user_id			: user_id,
						contact_id		: contact_id,
						cont_group_id	: cont_group_id,
						contact_name	: contact_name,
						contact_phone	: contact_phone,
						contact_email	: contact_email
					},
					success: function(res){
						if(res.status_code == 200){
							$('<p style="color:#00ff00;"><strong>Contact edited successfully.</strong></p>').appendTo('#form_validation_msg');
						}else{
							$('<p style="color:#00ff00;"><strong>Nothing changeed, save successfully.</strong></p>').appendTo('#form_validation_msg');
						}
					},
					error: function(res) {
						console.log('Somthing went wrong.');
					}
				});
			}
		});

		// to Delete contact
		$("#delete_row").on('click',function(){
		 // $("#contact_list_table").load(function(){
			var user_id = <?php echo $logged_in_user['user_id']; ?>;
			var contact_id = $("input[name=checked_cont_id]:checked").map(function() {return this.value;}).get().join(',');
			
			if(confirm('Are you sure you want to delete this Contact?')){
				jQuery.ajax({
					type:"POST",
					url: "/gmt/Save_contact/delete_contact",
					dataType: 'json',
					data: { user_id: user_id,
							contact_id: contact_id
							},
					success: function(res){
						if(res.status_code == 200){
							$.each(res.data, function(key, val) {
				            	alert(val);
				            });
						}else{
							$.each(res.data, function(key, val) {
				            	alert(val);
				            });
						}
					},
					error: function(){
						console.log('Somthing went wrong');
					}
				});
			}
		});

		// to load vehicle types
		$('.my_grp_list').one('click', function(){
			var user_id = <?php echo $logged_in_user['user_id']; ?>;
			jQuery.ajax({
				type:"POST",
				url: "/gmt/Save_contact/listGroup",
				dataType: 'json',
				data: {
					user_id: user_id,
				},
				success: function(res){
					if(res.status_code == 200){
						$('.my_grp_list').empty();
						$('<option value="">Select Contact Group</option>').appendTo('.my_grp_list');
						$.each(res.data, function(key, val) {
			            	// $.each(val, function(k, v){
			                    $('<option value="'+val['group_id']+'">'+val['group_name']+'</option>').appendTo('.my_grp_list');
			                // });
			            });
					}else{
						console.log('No response.');
					}
				},
			    error: function(){
			    	console.log('Somthing went wrong');
			    }
			});
		});

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
	});
</script>