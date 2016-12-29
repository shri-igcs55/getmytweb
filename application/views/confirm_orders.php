<!-- place order crane starts -->
<section class="place_orderwrp custmer_reg">
	<section class="place_order_crane">
		<div class="container">
			<div class="row">

				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); 
						$u_id=$logged_in_user['user_id']; 
						$logged_in_user_parent_id = $logged_in_user['user_type_parent_id'];
						// print_r($logged_in_user);
					?>
				</article>

				<article class="col-md-9">
					<section class="place_order_main order_outr">
						<div class="row">
		    				<article class="col-md-12">
		    					<div class="section_head">
									<h1>View Confirmed Order </h1>
								</div>
		    				</article>
		    			</div>		    			
						<?php 
						if(!isset($orderObj->data->message)){
							if(isset($orderObj->data)):
							foreach($orderObj->data as $orderObj):
								if($orderObj->order_place_for_id == 5){
									$material_work_goods_description = $orderObj->pm_goods_description;
								}elseif($orderObj->order_place_for_id == 6) {
									$material_work_goods_description = $orderObj->crane_work_type;
								}elseif($orderObj->order_place_for_id == 7) {
									$material_work_goods_description = $orderObj->material_type;
								}
								if($orderObj->order_from_lift == 2):	$lift_status = "Yes";
	    					 	elseif($orderObj->order_from_lift == 1):$lift_status = "No";
	    					 	elseif($orderObj->order_from_lift == 3):$lift_status = "Don't Know";
	    					 	endif;
	    					 	if($orderObj->order_to_lift == 2): 		$to_lift_status = "Yes";
	    					 	elseif($orderObj->order_to_lift == 1): 	$to_lift_status = "No";
	    					 	elseif($orderObj->order_to_lift == 3): 	$to_lift_status = "Don't Know";
	    						endif;
	    						?>

								<div class="tab-content order_wrpr order_id_<?php echo $orderObj->order_id?>">
								<div class="row">
									<div class="col-sm-12">
										<h4 class="order_small_head"><?php echo "Order for ".$orderObj->order_place_for; ?>
										<?php 
										if($logged_in_user['user_type_parent_id'] != 2){
											if($orderObj->is_owner == 1){
												echo "&nbsp&nbsp<b>(Your Own Order)</b>";
											}
										}
										?>
										</h4>
									</div>
								</div>
								<div class="tab-pane fade" id="order_detailes_<?php echo $orderObj->order_id?>">
				    				<div class="order_row">
					    				<div class="row">
										
												<?php if($logged_in_user_parent_id != 2 && $orderObj->status_id_fk==5 && $orderObj->is_owner==0){ ?>
													<article class="col-sm-6">
													<h4>Request from Customer:</h4>
													</article>
													<article class="col-sm-6 text-right">
													<h4>Do you have vehicle available or not?</h4>
													<input name="order_confirm" class="order_confirm_cancle" type="button" value="Yes">
													<input name="order_decline" class="order_confirm_cancle"   type="button" value="No">
													</article>
												<?php }?>
									
					    					<article class="col-sm-6">
					    						<h4>Order ID: <span class="order_no"><?php echo $orderObj->order_id?></span></h4>
					    					</article>
					    					<article class="col-sm-6 text-right">
					    						<h4>Schedule Date: <span class="order_date"><?php echo $orderObj->order_schedule_date?></span></h4>
					    					</article>
					    				</div>
					    			</div>
									
									
					    			<!-- <div class="order_row">
					    				<center><h4><span>Customer Details</span></h4></center>
					    				<div class="row">
					    					<article class="col-sm-4">
					    						<label>First Name</label>
					    						<p><?php echo $orderObj->first_name?></p>
					    					</article>
					    					<article class="col-sm-4 ">
					    						<label>Last Name</label>
					    						<p><?php echo $orderObj->last_name?></p>
					    					</article>
					    					<article class="col-sm-4">
					    						<label>Mobile Number</label>
					    						<p><?php echo $orderObj->mobile?></p>
					    					</article>
					    				</div>
					    			</div> -->
					    			<div class="order_row">
					    				<center><h4><span>Pickup-Drop Details</span></h4></center>
					    				<div class="row cities">
											<?php if($orderObj->order_place_for_id == 7){
											$intLoop = 0; $city_index = 1;
												foreach($orderObj->from_city as $fromCity):?>
													<article class="col-sm-4" style="height: 60px;">
														<label>From City(<?php echo $city_index?>)</label>
														<p><?php echo $fromCity?></p>
													</article>
												<?php $city_index++; endforeach;
											echo '</div><div class="row cities">';
												foreach($orderObj->from_city as $fromCity):?>
													<article class="col-sm-4" style="height: 60px;">
														<label>To City(<?php echo $city_index?>)</label>
														<p><?php echo $orderObj->to_city[$intLoop++]?></p>
													</article>
											<?php $city_index++; endforeach;
											}elseif($orderObj->order_place_for_id == 5){?>
												<?php $intLoop = 0;
												foreach($orderObj->from_city as $fromCity):?>
													<?php if($orderObj->order_place_for_id == 5){?>
														<article class="col-sm-4">
											    			<label>Service require for </label>
										    				<p><?php if(!empty($orderObj->service_type_name)) echo $orderObj->service_type_name; if(!empty($orderObj->other_service_for)) echo " - ".$orderObj->other_service_for ?></p>
										    			</article>
									    			<?php }?>
													<article class="col-sm-4" style="height: 60px;">
														<label>From City</label>
														<p><?php echo $fromCity?></p>
													</article>
													<article class="col-sm-4" style="height: 60px;">
														<label>To City</label>
														<p><?php echo $orderObj->to_city[$intLoop++]?></p>
													</article>
												<?php endforeach;?>
											<?php }elseif($orderObj->order_place_for_id == 6){?>
												<?php $intLoop = 0;
												foreach($orderObj->from_city as $fromCity):?>
													<article class="col-sm-4" style="height: 60px;">
														<label>City</label>
														<p><?php echo $fromCity?></p>
													</article>
													<article class="col-sm-4">
							    						<label>Address where service required</label>
							    						<p><?php echo $orderObj->from_address?></p>
							    					</article>
												<?php endforeach;?>
											<?php } /*else{?>
											<?php $intLoop = 0;
												foreach($orderObj->from_city as $fromCity):?>
													<?php if($orderObj->order_place_for_id == 5){?>
													<article class="col-sm-4">
										    			<label>Service require for </label>
									    				<p><?php echo $orderObj->service_type_name?></p>
									    			</article>
									    			<?php }?>
													<article class="col-sm-4" style="height: 60px;">
														<label>From City</label>
														<p><?php echo $fromCity?></p>
													</article>
													<article class="col-sm-4" style="height: 60px;">
														<label>To City</label>
														<p><?php echo $orderObj->to_city[$intLoop++]?></p>
													</article>
											<?php endforeach;?>
											<?php }*/?>
										</div>
										<?php if($orderObj->order_place_for_id == 5 || $orderObj->order_place_for_id == 6){?>
											<div class="gat_vertcl"></div>
						    				<div class="row cities">
												<article class="col-sm-4">
						    						<label>Address form where service required</label>
						    						<p><?php echo $orderObj->from_address?></p>
						    					</article>
						    					<article class="col-sm-4">
						    						<label>Address to where service required</label>
						    						<p><?php echo $orderObj->to_address?></p>
						    					</article>
						    					<?php /*<article class="col-sm-3">
						    						<label>Service require for </label>
						    						<p><?php echo $orderObj->service_type_name?></p>
						    					</article>*/ ?>
											</div>
										<?php }?>
										<div class="gat_vertcl"></div>
					    				<div class="row cities">
											<?php if($orderObj->order_place_for_id == 7){
											$intLoopArea = 0; $city_area_index = 1;
											foreach($orderObj->pickup_area_location as $pickup_area_location):?>
												<article class="col-sm-4" style="height: 60px;">
						    						<label>From Where in City area(<?php echo $city_area_index?>)</label>
						    						<p><?php echo $pickup_area_location?></p>
						    					</article>
						    					<article class="col-sm-4" style="height: 60px;">
						    						<label>To Where in City area(<?php echo $city_area_index?>)</label>
						    						<p><?php echo $orderObj->drop_area_location[$intLoopArea++]?></p>
						    					</article>
						    				<?php $city_area_index++; endforeach;
						    				}else{?>
											<?php $intLoopArea = 0;
											foreach($orderObj->pickup_area_location as $pickup_area_location):?>
												<article class="col-sm-4" style="height: 60px;">
						    						<label>From Where in City area</label>
						    						<p><?php echo $pickup_area_location?></p>
						    					</article>
						    					<article class="col-sm-4" style="height: 60px;">
						    						<label>To Where in City area</label>
						    						<p><?php echo $orderObj->drop_area_location[$intLoopArea++]?></p>
						    					</article>
						    				<?php endforeach;?>
											<?php }?>
										</div>
										<div class="row cities">
											<?php if($orderObj->order_place_for_id == 5){?>
				    							<article class="col-sm-6">
						    						<label>From No. of Floor &amp; Lift availability</label>
						    						<p><?php echo "Floor No.- ".$orderObj->order_from_floor." Lift- ".$lift_status;
						    						?></p>
						    					</article>
						    					<article class="col-sm-6">
						    						<label>To No. of Floor &amp; Lift availability</label>
						    						<p><?php echo "Floor No.- ".$orderObj->order_to_floor." Lift- ".$to_lift_status;
						    						?></p>
						    					</article>
							    			<?php }?>
							    		</div>
					    			</div>
					    			<?php if($orderObj->order_place_for_id == 6 || $orderObj->order_place_for_id == 5){?>
				    					<div class="order_row">
						    				<center><h4><span>Other Details</span></h4></center>
					    					<div class="row">
						    					<?php /*<article class="col-sm-12">
						    						<label>Material / Goods Description</label>
						    						<p><?php echo $material_work_goods_description;?></p>
						    					</article>*/ ?>
						    					<article class="col-sm-6">
						    						<label>Material / Goods Description</label>
						    						<p><?php echo $material_work_goods_description; if(!empty($orderObj->other_work_desc)) echo " - ".$orderObj->other_work_desc; ?></p>
						    					</article>
						    					<?php if($orderObj->order_place_for_id == 6){?>
							    					<article class="col-sm-6">
							    						<label>Weight (In Tons)</label>
							    						<p><?php echo $orderObj->weight;?></p>
							    					</article>
							    				<?php }?>
						    				</div>
						    			</div>
					    			<?php }?>
									
					    			<?php if($orderObj->order_place_for_id == 7){ ?>
						    			<div class="order_row">
						    				<center><h4><span>Vehicle Details</span></h4></center>
						    				<div class="row">
						    					<article class="col-sm-3">
						    						<label>Vehicle Type</label>
						    						<p><?php echo $orderObj->vehicle_type; if(!empty($orderObj->other_vehicle)) echo " - ".$orderObj->other_vehicle;?></p>
						    					</article>
						    					<article class="col-sm-4">
						    						<label>No. of Vehicle</label>
						    						<p><?php echo $orderObj->vehicle_qty?></p>
						    					</article>
						    					<?php /*<article class="col-sm-4">
							    					<label>Order Pickup Points</label>
							    					<p><?php echo $orderObj->order_pickup_points ?></p>
							    				</article>*/ ?>
						    				</div>
						    				<div class="gat_vertcl"></div>
						    				<?php /*<div class="row">
							    				<article class="col-sm-3">
							    					<label>Order Drop Points</label>
							    					<p><?php echo $orderObj->order_drop_points ?></p>
							    				</article>
						    				</div>*/ ?>
						    			</div>
						    			<div class="order_row">
						    				<center><h4><span>Material / Goods Details</span></h4></center>
						    				<div class="row">
						    					<article class="col-sm-4">
						    						<label>Material / Goods Type</label>
						    						<p><?php echo $orderObj->material_type; if(!empty($orderObj->other_material)) echo " - ".$orderObj->other_material;?></p>
						    					</article>
						    					<article class="col-sm-4 ">
						    						<label>Length (in Feet)</label>
						    						<p><?php echo $orderObj->length?></p>
						    					</article>
						    					<article class="col-sm-4">
						    						<label>Weight (In tons)</label>
						    						<p><?php echo $orderObj->weight?></p>
						    					</article>
						    				</div>
						    				<div class="gat_vertcl"></div>
						    				<div class="row">
						    					<article class="col-sm-4 ">
						    						<label>Item Quantity (Nag)</label>
						    						<p><?php echo $orderObj->item_qty?></p>
						    					</article>
						    				</div>
						    				<div class="gat_vertcl"></div>
						    				<div class="row">
						    					<?php if($orderObj->order_place_for_id == 6){?>
						    					<article class="col-sm-12">
						    						<label>Material / Goods Description</label>
						    						<p><?php echo $orderObj->crane_work_type?></p>
						    					</article>
						    					<?php }elseif($orderObj->order_place_for_id == 5){?>
						    					<article class="col-sm-12">
						    						<label>Material / Goods Description</label>
						    						<p><?php echo $orderObj->pm_goods_description?></p>
						    					</article>
						    					<?php }?>
						    				</div>
						    			</div>
					    			<?php }?>
									
									<?php if($logged_in_user_parent_id == 2){ ?>
						    			<div class="order_row">
						    				<center><h4><span>Order Price</span></h4></center>
						    				<div class="row">
						    					<article class="col-sm-3">
						    						<label>Price</label>						    						
						    					</article>
												<article class="col-sm-3">
						    						<p><?php echo $orderObj->odr_qtn_amount?> <?php if(!empty($orderObj->odr_amt_basis)){ echo '('.$orderObj->odr_amt_basis.')'; }?></p>						    						
						    					</article>
												
						    				</div>
										</div>
									<?php }?>
									<?php if($logged_in_user_parent_id != 2){ ?>
						    			<div class="order_row">
						    				<center><h4><span>Given Quotation</span></h4></center>
						    				<div class="row">
						    					<article class="col-sm-3">
						    						<label>Quatation Price</label>
						    					</article>
												<article class="col-sm-3">
						    						<p><?php echo $orderObj->odr_qtn_amount?> <?php if(!empty($orderObj->odr_amt_basis)){ echo '('.$orderObj->odr_amt_basis.')'; }?>)</p>
						    					</article>
						    				</div>
										</div>
									<?php }?>
										
										
									<div class="order_row">
										<center><h4><span>Contact Details</span></h4></center>
										<div class="row">
											<article class="col-sm-5">
												<label>Name:</label>
											</article>
											<article class="col-sm-7">
												<p class="contact_name"><?php echo $orderObj->first_name?> - <?php echo $orderObj->last_name?></p>
											</article>
											<article class="col-sm-5">
												<label>Phone:</label>
											</article>
											<article class="col-sm-7">
												<p class="contact_number"><?php echo $orderObj->mobile?></p>
											</article>
											<article class="col-sm-5">
												<label>Email:</label>
											</article>
											<article class="col-sm-7">
												<p class="contact_email"><?php echo $orderObj->email?></p>
											</article>
										</div>
									</div>
										
										
					    			<div class="row">
					    				<article class="col-sm-12">
					    					<input data-toggle="tab" type="button" name="cancel_order" id="cancel_butn" value="Back">
											
												
												<input type="button" name="save_contact" class="pull-right save_contact" value="Save Contact" data-toggle="modal" data-target="#saveContactModal">
											
					    				</article>
					    			</div>
						    	</div>
						    	<div class="tab-pane fade in active order_listing_wp" id="order_listing">
					    			<div class="order_listing">
					    				<div class="row">
					    					<article class="col-md-10">
					    						<div class="row">																				
								    				<article class="col-sm-3">
								    					<label>Order ID</label>
								    					<h4><span class="order_no"><?php echo $orderObj->order_id?></span></h4>
								    					<input type="hidden" name="del_order_text" value="<?php echo $orderObj->order_id; ?>">
								    				</article>
								    				<article class="col-sm-3">
								    					<label>Schedule Date</label>
								    					<h4><?php echo $orderObj->order_schedule_date?></h4>
								    				</article>
								    				<?php if($orderObj->order_place_for_id == 7){ ?>
									    				<article class="col-sm-3">
									    					<label>Material / Goods Type</label>
									    					<h4><?php echo $orderObj->material_type?></h4>
									    				</article>
									    				<article class="col-sm-3">
									    					<label>Item Quantity</label>
									    					<h4><?php echo $orderObj->item_qty?></h4>
									    				</article>
									    			<?php }else{ ?>
									    				<?php $intLoop = 0; $city_index = 1;
														foreach($orderObj->from_city as $fromCity):?>
															<article class="col-sm-3" style="height: 60px;">
																<label>From City(<?php echo $city_index?>)</label>
																<h4><?php echo $fromCity?></h4>
															</article>
															<article class="col-sm-3" style="height: 60px;">
																<label>To City(<?php echo $city_index?>)</label>
																<h4><?php echo $orderObj->to_city[$intLoop++]?></h4>
															</article>
														<?php $city_index++; endforeach;?>
													<?php } ?>
								    			</div>
								    			<br>
								    			<?php if($orderObj->order_place_for_id == 7){ ?>
									    			<div class="row">
									    				<?php /*<article class="col-sm-3">
									    					<label>Order Pickup Points</label>
									    					<h4><?php echo $orderObj->order_pickup_points ?></h4>
									    				</article>
									    				<article class="col-sm-3">
									    					<label>Order Drop Points</label>
									    					<h4><?php echo $orderObj->order_drop_points ?></h4>
									    				</article>*/ ?>
									    				<article class="col-sm-3">
									    					<label>Vehicle Type</label>
									    					<h4><?php echo $orderObj->vehicle_type?></h4>
									    				</article>
														<article class="col-sm-3">
									    					<label>No. of Vehicles</label>
									    					<h4><?php echo $orderObj->vehicle_qty?></h4>
									    				</article>
								    				</div>
									    			<div class="row cities">
														<?php $intLoop = 0; $city_index = 1;
															foreach($orderObj->from_city as $fromCity):?>
																<article class="col-sm-3" style="height: 60px;">
																	<label>From City(<?php echo $city_index?>)</label>
																	<h4><?php echo $fromCity?></h4>
																</article>
																<article class="col-sm-3" style="height: 60px;">
																	<label>To City(<?php echo $city_index?>)</label>
																	<h4><?php echo $orderObj->to_city[$intLoop++]?></h4>
																</article>
														<?php $city_index++; endforeach;?>
													</div>
												<?php } ?>
					    					</article>
											<div class="row">	
						    					<article class="col-md-2">
													<label>Status</label>
													<p><?php echo $orderObj->order_status?></p>
						    					</article>
												<article class="col-md-2">
						    						<?php //if($logged_in_user['user_type'] <= 4):?>
														<a id="view_rate_btn" data-toggle="tab" href="#order_detailes_<?php echo $orderObj->order_id?>">View</a>
														<?php /*if($logged_in_user['user_type'] < 4):?>
														<a id="del_order_btn_<?php echo $orderObj->order_id?>" class="del_order_btn" data-toggle="tab" href="<?php echo $orderObj->order_id ?>">Remove</a>
														<?php endif;*/ /* else: ?>
															<a id="view_rate_btn" data-toggle="tab" href="#order_detailes_<?php echo $orderObj->order_id?>">View &amp; Quote</a>
														<?php endif;*/?>
														
							    					</article>
												</div>
						    				</div>
						    			</div>
							    	</div>
									
									<div class="form-group text-center form_message_orderwise">
										<span></span>
									</div>
					
					
								</div>	
								<br/>
							<?php endforeach;
								endif;
						}else{
							echo '<h5>'.$orderObj->data->message.'</h5>';
						}
						?>
					</section>
				</article>
			</div>
		</div>
	</section>
</section>
<!-- place order crane starts -->

<!-- #### SAVE CONTACT MODAL ### -->
<div class="modal fade" id="saveContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title text-center" id="myModalLabel">Save Contact</h2>
			</div>
			<div class="modal-body">
				<form id="sv_cont" name="sv_cont" class="transporter-form save_contact_form" action="">
					<table class="table save_contact_table">
						<tr>
							<td>Name</td>
							<td class="contact_name"></td>
						</tr>
						<tr>
							<td>Phone No.</td>
							<td class="contact_number"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td class="contact_email"></td>
						</tr>
						<tr>
							<td>Group</td>
							<td>
							<select id="group" class="group_list form-control trans_plc_ord" required>
								<option value="">Select Group</option>
								<option value="">Loading...</option>
							</select>
							</td>
						</tr>
					</table>
					<div class="form-group text-center">						
						<button class="btn btn_cmmn_red sv_cont chg_pass" type="button">Save Contact</button>
					</div>
					<span id="form_validation_msg"></span>
					<input name="contact_name" type="hidden" class="form-control contact_name" id="contact_name" required>
					<input name="contact_number" type="hidden" class="form-control contact_number" id="contact_number" required>
					<input name="contact_email" type="hidden" class="form-control contact_email" id="contact_email">
					<input type="hidden" name="u_id" id="u_id" value="<?php echo $logged_in_user['user_id']; ?>">
			    </form>
			</div>
		</div>
	</div>
</div>



<script type="text/javascript">
	$(document).ready(function()
	{
		$('input[name="cancel_order"]').click(function(){		
			$(this).closest('.tab-pane').removeClass('active in');
			$(this).closest('.tab-content').find('.order_listing_wp').addClass('active in');
		})
		
		//Appending value to the contact box
		$('input[name=save_contact]').click(function(){
			var currentOrderObj = $(this).closest('.order_wrpr');
			var saveContactForm = $('.save_contact_form');			
			saveContactForm.find('.contact_name').html(currentOrderObj.find('.contact_name').text()).val(currentOrderObj.find('.contact_name').text());
			saveContactForm.find('.contact_number').html(currentOrderObj.find('.contact_number').text()).val(currentOrderObj.find('.contact_number').text());
			saveContactForm.find('.contact_email').html(currentOrderObj.find('.contact_email').text()).val(currentOrderObj.find('.contact_email').text());	
		})		
		//End
		
		
		
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
			var cont_name	= $('#contact_name').val();
			var cont_number	= $('#contact_number').val();
			var cont_email  = $('#contact_email').val();
			var cont_group_id = $("option:selected").val();
									
			if(user_id == '' || cont_name == '' || cont_number == '' || cont_email == '' || cont_group_id == ''){
				
				$('#form_validation_msg').empty();
				$('<p style="color:#ed4343;"><strong>All * fields are required</strong></p>').appendTo('#form_validation_msg');
				return false;
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
							$('<p style="color:#00ff00;"><strong>Contact saved successfully.</strong></p>').appendTo('#form_validation_msg');
							
							setTimeout(function(){ 										
									$('#saveContactModal').modal('hide');
								}, 4000);
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