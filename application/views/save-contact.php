<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
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
													<a href="javascript:void(0);" class="cmn_edit_delete_btn" data-toggle="modal" data-target="#saveContactModal" id="edit_cont">EDIT</a>
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
																		<input class="edit_val_checked" type="hidden" name="contactid_<?php echo $orderObj->cont_id; ?>" id="contactid_<?php echo $orderObj->cont_id; ?>" value="<?php echo $orderObj->cont_id; ?>">
																		<input class="edit_val_checked_id" type="hidden" name="contactid_<?php echo $orderObj->group_id; ?>" id="contactid_<?php echo $orderObj->group_id; ?>" value="<?php echo $orderObj->group_id; ?>">
																		<label for="add<?php echo $orderObj->cont_id; ?>"></label>
																	</div>
																</td>
																<td><?php echo $orderObj->cont_name; ?></td>
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
			<div class="modal-body">
				<table class="table save_contact_table">
					<tr>
						<td>Name</td>
						<td>Santhosh</td>
					</tr>
					<tr>
						<td>Phone No.</td>
						<td>9876543210</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>santhosh@gmail.com</td>
					</tr>
					<tr>
						<td>Group</td>
						<td>
							<select name="" id="" class="form-control">
								<option value="">Transport</option>
								<option value="">Truck</option>
							</select>
						</td>
					</tr>
				</table>
				<div class="form-group text-center">
					<button class="btn btn_cmmn_red" type="submit">Save Contact</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){

		// to Edit contact
		$("#edit_cont").on('click',function(){
		// $("#contact_list_table").load(function(){
			var user_id = <?php echo $logged_in_user['user_id']; ?>;
			var contact_length = $("input[name=checked_cont_id]:checked").length();
			if(contact_length > 1){
				alert('Please select one contact.');
			}else{

				var contact_id = $("input[name=checked_cont_id]:checked").val();
				// var cont_group_id = $('.');
				
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