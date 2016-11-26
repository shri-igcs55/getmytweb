<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
<!-- ### SAVE CONTACT PAGE ### -->
<section class="place_orderwrp custmer_reg">
	<section class="find_order">
		<div class="container">
			<div class="row">
				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); $u_id=$logged_in_user['user_id']; ?>
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
													<a href="javascript:void(0);" class="cmn_edit_delete_btn" data-toggle="modal" data-target="#saveContactModal">EDIT</a>
												</li>
												<li>
													<a href="javascript:void(0);" class="cmn_edit_delete_btn" id="delete_row">DELETE</a>
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
				    											<div class="checkbox">
				    												<input type="checkbox" id="add1" class="select_all_box">
				    												<label for="add1"></label>
				    											</div>
				    										</th>
				    										<th>Name</th>
				    										<th>Phone No.</th>
				    										<th>Email</th>
				    										<th>Group</th>
				    									</tr>
				    								</thead>
				    								<tbody class="contactlisthead">
				    									
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
<script type="text/javascript" src="/gmt/assets/js/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		// to get group list
		$("#view_clist").one('click',function(){
		// $("#contact_list_table").load(function(){
	        var user_id = <?php echo $logged_in_user['user_id']; ?>;
	        alert(user_id);
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/Save_contact/listGroup",
				dataType: 'json',
		        data: { user_id: user_id },
				success: function(res){
					if(res.status_code == 200){
						alert(res.data);
						// var option = '<tr><td colspan="5"> No Data</td></tr>';
			   //          $.each(res.data, function(key, val) {
			   //          	option +='<tr><td><div class="checkbox"><input type="checkbox" id="add6"><label for="add6"></label></div></td><td>Sreekanth</td><td>9876543210</td><td>sreee52648@gmail.com</td><td>Transport</td></tr>';
			   //          });
			   //          $('tbody.contactlisthead').append(option);
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