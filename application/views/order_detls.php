<!-- place order crane starts -->
<section class="place_orderwrp custmer_reg">
	<section class="place_order_crane">
		<div class="container">
			<div class="row">

				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); 
						$u_id=$logged_in_user['user_id']; 
						//print_r($logged_in_user);
					?>
				</article>

				<article class="col-md-9">
					<section class="place_order_main order_outr">
						<div class="row">
		    				<article class="col-md-12">
		    					<div class="section_head">
									<h1>View Pending Order </h1>
								</div>
		    				</article>
		    			</div>
		    			<span id="form_validation_msg"></span>
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
	    					 	elseif($orderObj->order_from_lift == 3):$lift_status ="Don't Know";
	    					 	endif;
	    					 	if($orderObj->order_to_lift == 2): 	  $to_lift_status= "Yes";
	    					 	elseif($orderObj->order_to_lift == 1):$to_lift_status= "No";
	    					 	elseif($orderObj->order_to_lift == 3):$to_lift_status="Don't Know";
	    						endif;
	    						?>

								<div class="tab-content order_wrpr order_id_<?php echo $orderObj->order_id?>">
								<div class="row">
									<div class="col-sm-12">
										<h4 class="order_small_head"><?php echo "Order for ".$orderObj->order_place_for; ?></h4>
									</div>
								</div>
								<div class="tab-pane fade" id="order_detailes_<?php echo $orderObj->order_id?>">
				    				<div class="order_row">
					    				<div class="row">
					    					<article class="col-sm-6">
					    						<h4>Order ID: <span class="order_no"><?php echo $orderObj->order_id?></span></h4>
					    					</article>
					    					<article class="col-sm-6 text-right">
					    						<h4>Schedule Date: <span class="order_date"><?php echo $orderObj->order_schedule_date?></span></h4>
					    					</article>
					    				</div>
					    			</div>
					    			<?php /*<div class="order_row">
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
					    			</div>*/ ?>
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
											<?php } ?>
										</div>
										<?php if($orderObj->order_place_for_id == 5){?>
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
										<?php } /*elseif ($orderObj->order_place_for_id == 6) { ?>
											<!-- This space is for above code if -->
											<div class="gat_vertcl"></div>
						    				<div class="row cities">
												<article class="col-sm-4">
						    						<label>Address where service required</label>
						    						<p><?php echo $orderObj->from_address?></p>
						    					</article>
											</div>
										<?php }*/?>
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
						    				}else if($orderObj->order_place_for_id == 5){ ?>
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
						    					<article class="col-sm-6">
						    						<label>Material / Goods Description</label>
						    						<p><?php echo $material_work_goods_description; if(!empty($orderObj->other_work_desc)) echo " - ".$orderObj->other_work_desc; ?></p>
						    					</article>
						    					<article class="col-sm-6">
						    						<label>Weight in Tons</label>
						    						<p><?php echo $orderObj->weight;?></p>
						    					</article>
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
						    						<label>Weight (Approx.)</label>
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
							    						<p><?php echo $orderObj->crane_work_type ?></p>
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
					    			<div class="row">
					    				<article class="col-sm-12">
					    					<input data-toggle="tab" type="button" name="cancel_order" id="cancel_butn" value="Back">
											<?php if($logged_in_user['user_type'] > 4):?>
												<input type="button" name="rate_order" id="rate_butn" value="Give Quotation" data-toggle="modal" data-target="#getQuotationModal">
											<?php endif; /*if(9==$quation_details->order_status): ?>
												<input type="button" name="save_contact" class="pull-right save_contact" value="Save Contact" data-toggle="modal" data-target="#saveContactModal">
											<?php endif;*/?>
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
									    			<?php }elseif($orderObj->order_place_for_id == 5){ ?>
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
													<?php }elseif($orderObj->order_place_for_id == 6){ ?>
										    				<?php $intLoop = 0; $city_index = 1;
															foreach($orderObj->from_city as $fromCity):?>
																<article class="col-sm-6" style="height: 60px;">
																	<label>City(<?php echo $city_index?>)</label>
																	<h4><?php echo $fromCity?></h4>
																</article>
																<?php /*<article class="col-sm-3" style="height: 60px;">
																	<label>To City(<?php echo $city_index?>)</label>
																	<h4><?php echo $orderObj->to_city[$intLoop++]?></h4>
																</article>*/ ?>
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
							<?php 
							endforeach;
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
<!-- #### GET QUOTATION MODAL ### -->
<div class="modal fade" id="getQuotationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="modal-title text-center" id="myModalLabel">Quotation Format</h2>
			</div>
			<div class="modal-body">
				<form action="javascript:void(0);">
					<input type="hidden" name="quoted_order_id" value="0">
					<?php if($logged_in_user['user_type'] == 6){ ?>
						<!-- FOR CRANE -->
						<div class="first_form">
							<table class="table">
								<tr>
									<td class="col-md-3">
										<div class="radio">
											<input type="radio" id="per_hour" class="custom_radio" name="rate_trans" value="Per Hour Basis">
											<label for="per_hour" class="custom_radio_label">Per Hour Basis</label>
										</div>
									</td>
									<td class="col-md-3">
										<div class="radio">
											<input type="radio" id="per_day" class="custom_radio" name="rate_trans"  value="Per Day Basis">
											<label for="per_day" class="custom_radio_label">Per Day Basis</label>
										</div>
									</td>
									<td class="col-md-3">
										<div class="radio">
											<input type="radio" id="contract_basis" class="custom_radio" name="rate_trans" value="Contract Basis">
											<label for="contract_basis" class="custom_radio_label">Contract Basis</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<ul class="list-inline">
											<li><input type="text" id=est_range_amnt class="form-control" placeholder="Amount" name="quoted_rate"></li>
										</ul>
									</td>
								</tr>
							</table>
						</div>
					<?php }else if($logged_in_user['user_type'] == 5 || $logged_in_user['user_type'] > 7){ ?>
						<!-- FOR PACKER AND MOVER / TRANSPORTER -->
						<div class="second_form">
							<table class="table">
								<tr>
									<td class="col-md-6">
										<div class="radio">
											<input type="radio" id="estimate_rate" class="custom_radio" name="rate_trans" checked value="Estimated Rate">
											<label for="estimate_rate" class="custom_radio_label">Estimated Rate</label>
										</div>
									</td>
									<td class="col-md-6">
										<div class="radio">
											<input type="radio" id="beetween_range" class="custom_radio" name="rate_trans" value="Between Range">
											<label for="beetween_range" class="custom_radio_label">Between Range</label>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<label id="amt_label" for="min_amnt" class="control-label">Estimated Amount (Ex. 8000)</label>
										<input type="text" id=est_range_amnt class="form-control" placeholder="Amount" name="quoted_rate">
									</td>
									<?php /*<td>
										<label for="max_amnt" class="control-label">Maximum Amount</label>
										<input type="text" id="max_amnt" class="form-control" placeholder="10000">
									</td>*/ ?>
								</tr>
							</table>
						</div>
					<?php } ?>
					<div class="form-group text-center form_message">
						<span></span>
					</div>
					<div class="form-group text-center">
						<button class="btn btn_cmmn_red" id="quote_order_btn" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- $re = '/^([0-9-]+)$/m';
$str = '159-951-66';

preg_match_all($re, $str, $matches);

// Print the entire match result
print_r($matches); -->

<!-- <script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			type: "POST",
			url: "/gmt/Book_history/book_history",
			cache: false,
			dataType: 'json',
			success:function(result){
					if (result.status_code == 200)
					{
						console.log(result.data);
						/*var orderData = result.data;
						//alert(orderData[0]['first_name']);
						
						var orderObj = $('.place_order_main');
						$.each(result.data, function(multipleKey,multipleObject) {	
							var multipleCities = '';
							$.each(multipleObject, function(key, value) {
								//console.log(key+':'+value);
								
								if(key=='from_city'){
									multipleCities ='<article class="col-sm-3"><label>From City</label><h4>'+value+'</h4></article>';										
								}
								else if(key=='to_city'){
									multipleCities +='<article class="col-sm-3"><label>To City</label><h4>'+value+'</h4></article>';								
								}
								else if(value!=0){
									orderObj.find('.'+key).html(value);
								}
							})
							//alert(multipleCities);
							$('.cities').append(multipleCities);							
						})*/
						
					}else{
						console.log(result.data);
						/*$('#form_validation_msg').empty();
						$.each(result.data, function(key, val) {
							$('<p><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
						});*/
					}
			},
		})
	});
</script> -->
<script type="text/javascript">
$('input[type=radio][name=rate_trans]').on('change', function(){
    var str = "";
    if (this.value == 'er') {
        var str = "Estimated Rate (Ex. 8000)";
        $( "#amt_label" ).text( str );
    }
    else if (this.value == 'br') {
    	var str = "Beetween Rage (Ex. 8000-8500)";
        $( "#amt_label" ).text( str );
    }
});

</script>
<script type="text/javascript">
$(document).ready(function(){

	$('input[name="cancel_order"]').click(function(){		
		$(this).closest('.tab-pane').removeClass('active in');
		$(this).closest('.tab-content').find('.order_listing_wp').addClass('active in');
	})

	$('.del_order_btn').click(function(){
		
		if(confirm('Are you sure you want to delete this order?')){
			var order_id = $(this).closest('.order_wrpr').find('input[name=del_order_text]').val();
		
			$.ajax({
				type: "POST",
		        url : "/gmt/Delete_document/delete_order",
		        data: {
		        	order_id: order_id
		        },

		        success: function(res) {
		        	
		        	if (res.status_code == 200)
		            {
		              	
		              	$('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('<p style="color:#00FF00;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            		alert(val);
			            		location.reload();
			            	}
			            });
		            }else{
			            
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('<p style="color:#ed4343;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            	}
			            });
		            }
	          	},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
	        });
		}
	})
	
	
	//<!-- Added by Bhavesh -->
	$('input[name=rate_order]').click(function(){
		$('input[name=quoted_order_id]').val($(this).closest('.order_wrpr').find('span.order_no').html());
	})
	$('#quote_order_btn').click(function(){
		
			var priceSlab = $('input[type=radio][name=rate_trans]:checked').val();			
			var quoted_rate = $('input[name=quoted_rate]').val();
			$('.form_message span').html('');
			var number = new RegExp(/^[0-9.,-]+$/);	
							
			if(!number.test(quoted_rate)){
				$('.form_message span').html('<p style="color:red"><strong>Price should contain only number, dash </strong></p>');
				return false;
			}
			
			var order_id = $('input[name=quoted_order_id]').val();			
		
			$.ajax({
				type: "POST",
		        url : "/gmt/Quotation/rateToOrder",
		        data: {
		        	order_id: order_id,
		        	quoted_rate: quoted_rate,
					odr_amt_basis:priceSlab
		        },

		        success: function(res) {
		        	
		        	if (res.status_code == 200)
		            {		              	
		              	$('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
								$('.form_message span').html('<p style="color:#00FF00;"><strong>'+val+'</strong></p>');
								$('.order_id_'+order_id+' .form_message_orderwise').html('<p style="color:#00FF00;"><strong>'+val+'</strong></p>');			
								setTimeout(function(){ $('.order_id_'+order_id).slideUp(); }, 4000);
							}
			            });
		            }else{
			            
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('.form_message span').html('<p style="color:#ed4343;"><strong>'+val+'</strong></p>');
								$('.order_id_'+order_id).find('.form_message_orderwise').show();
			            	}
			            });
		            }
	          	},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
	        });
		});
	
	//<!-- End by Bhavesh -->
	
	
	
	
})
</script>			