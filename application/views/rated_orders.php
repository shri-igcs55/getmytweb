<script type="text/javascript" src="<?php echo base_url('assets/');?>js/jquery.countdown.min.js"></script>
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
									<h1>View Rated Order </h1>
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
										<h4 class="order_small_head">
										<?php echo "Order for ".$orderObj->order_place_for; ?>
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
										
					    					<article class="col-sm-6">
					    						<h4>Order ID: <span class="order_no"><?php echo $orderObj->order_id?></span></h4>
					    					</article>
					    					<article class="col-sm-6 text-right">
					    						<h4>Schedule Date: <span class="order_date"><?php echo $orderObj->order_schedule_date?></span></h4>
					    					</article>
					    				</div>
					    			</div>
					    			<div class="row">
										<?php if($logged_in_user_parent_id != 2 && $orderObj->status_id_fk==5 && $orderObj->is_owner!=1){ ?>
											<!--<article class="col-sm-6">
											<h4>Request from Customer:</h4>
											</article>-->
											<div class="col-md-12">
												<div class="row rated-row-button">
													<article class="col-sm-6">
														<h4>Do you have vehicle available or not?</h4>
														<h3>Left Time <span class="left_time_<?php echo $orderObj->order_id?>"><?php echo $orderObj->time_left?></span></h3>
													</article>
													<article class="col-sm-6 text-right">
														<input name="order_confirm" class="order_confirm_cancle green-btn" type="button" value="Yes">
														<input name="order_decline" class="order_confirm_cancle"   type="button" value="No">
													</article>
												</div>
											</div>
										<?php }?>
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
					    			</div> */?>
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
										<?php if($orderObj->order_place_for_id == 5/* || $orderObj->order_place_for_id == 6*/){?>
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
						    				}elseif($orderObj->order_place_for_id == 5){?>
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
						    						<label>Length (In Feet)</label>
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
									
									<?php //if($logged_in_user['user_type_parent_id'] == 2){
										if($orderObj->is_owner == 1){									
											if(isset($orderObj->quotation)){
											?>
				    					<div class="order_row">
						    				<center><h4><span>Quotation Details</span></h4></center>
																					
											<?php
												$disabled = '';
												foreach($orderObj->quotation as $quation_details):													
													if(5==$quation_details->order_status){
														$disabled = 'disabled'; break;			
													}

												endforeach;
												foreach($orderObj->quotation as $quation_details):
													$canceled_disabled = '';
												$buttonLable = 'Accept';
													if(5==$quation_details->order_status){													
														$buttonLable = 'Sent';
													}
													if(7==$quation_details->order_status){		
														$canceled_disabled = 'disabled';
														$buttonLable = 'Transporter canceled';
													}
													if(8==$quation_details->order_status){		
														$canceled_disabled = 'disabled';
														$buttonLable = 'Transporter\'s Time out';
													}
												?>
												<div class="row">
													<article class="col-sm-12">
														<p class="col-sm-4">RS. <?php echo $quation_details->order_amount?> <?php if(!empty($quation_details->odr_amt_basis)){ echo '('.$quation_details->odr_amt_basis.')'; }?></p>
														
														<p class="col-sm-8">
															
															<input type="button" class=" accept_order form-control" <?php echo $disabled.' '.$canceled_disabled?> value="<?=$buttonLable?>" data-quoted_user_id="<?php echo $quation_details->user_id?>"><br/><br/>
														</p>
													</article>
												</div>
											<?php endforeach;?>
						    			</div>
											<?php } ?>
										
									<?php }else{ ?>
						    			<div class="order_row">
						    				<center><h4><span>Given Quotation</span></h4></center>
						    				<div class="row">
						    					<article class="col-sm-3">
						    						<label>Quatation Price</label>						    						
						    					</article>
												<article class="col-sm-3">
						    						<p>
													<?php echo $orderObj->odr_qtn_amount?> <?php if(!empty($orderObj->odr_amt_basis)){ echo '('.$orderObj->odr_amt_basis.')'; }?>
													</p>						    						
						    					</article>
												
						    				</div>
										</div>
									<?php }?>
										
					    			<div class="row">
					    				<article class="col-sm-12">
					    					<input data-toggle="tab" type="button" name="cancel_order" id="cancel_butn" value="Back">											
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

													<div class="row">
										<?php if($logged_in_user_parent_id != 2 && $orderObj->status_id_fk==5 && $orderObj->is_owner!=1){ ?>
											<!--<article class="col-sm-6">
											<h4>Request from Customer:</h4>
											</article>-->
											<div col-md-12>
												<div class="row rated-row-button">
													<article class="col-sm-6">
														<h4>Do you have vehicle available or not?</h4>
														<h3>Left Time <span class="left_time_<?php echo $orderObj->order_id?>"><?php echo $orderObj->time_left?></span></h3>
													</article>
													<article class="col-sm-6 text-right">
														<input name="order_confirm" class="order_confirm_cancle green-btn" type="button" value="Yes">
														<input name="order_decline" class="order_confirm_cancle"   type="button" value="No">
													</article>
												</div>
											</div>
											
											<script type="text/javascript">
												var modified_datetime = "<?php echo date("Y/m/d H:i:s", strtotime($orderObj->modified_datetime."+35 minutes"));?>";
												var order_id = "<?php echo $orderObj->order_id?>";
												
												$(".left_time_"+<?php echo $orderObj->order_id?>)
													.countdown(modified_datetime, function(event) {		
													$(this).text(
														event.strftime('%M:%S')
													);
													if($(this).text()=='00:00'){
														$('.order_id_'+order_id+' .form_message_orderwise').html('<p style="color:#ed4343;"><strong>Sorry Time out!!</strong></p>');
														$('.order_id_'+order_id).find('.order_confirm_cancle').attr('disabled','disabled');				setTimeout(function(){ 
															$('.order_id_'+order_id).slideUp();
														},3000);
													}
														
												});
											</script>

										<?php }?>
					    			</div>
											
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
	//<!-- this function for the customer -->
	$('.accept_order').click(function(){
		
			if(!confirm('Are you sure you want to sent request?'))
				return false;
			var currentObj = $(this);
			var transpoter_id = $(this).attr('data-quoted_user_id');
			var order_id = $(this).closest('.order_wrpr').find('input[name=del_order_text]').val();
			
			$.ajax({
				type: "POST",
		        url : "/gmt/Quotation/acceptOrder",
		        data: {
		        	order_id: order_id,transpoter_id: transpoter_id
		        },

		        success: function(res) {
		        	
		        	if (res.status_code == 200)
		            {		              	
		              	$('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
								$('.order_id_'+order_id+' .form_message_orderwise').html('<p style="color:#00FF00;"><strong>'+val+'</strong></p>');
								currentObj.val('Sent');
								currentObj.closest('.order_row').find('input[type=button]').attr('disabled','disabled');
							}
			            });
		            }else{
			            
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('.form_message span').html('<p style="color:#ed4343;"><strong>'+val+'</strong></p>');
			            	}
			            });
		            }
	          	},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
	        });
		});
		
		//<!-- This function is for transportor -->
		$('.order_confirm_cancle').click(function(){
		
			if(!confirm('Are you sure you want to perform this action?'))
				return false;
			var currentObj = $(this);
			var transpoter_id = '<?php echo $logged_in_user['user_id']?>';
			var order_id = $(this).closest('.order_wrpr').find('input[name=del_order_text]').val();
			if($(this).val()=='Yes')
				var order_status = 9; //Vehicle Available and Order Confirm
			else
				var order_status = 7; //Vehicle Not Available
			
			$.ajax({
				type: "POST",
		        url : "/gmt/Quotation/confirmOrder",
		        data: {
		        	order_id: order_id,transpoter_id: transpoter_id,order_status: order_status
		        },

		        success: function(res) {
		        	
		        	if (res.status_code == 200)
		            {		              	
		              	$('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){								
								$('.order_id_'+order_id+' .form_message_orderwise').html('<p style="color:#00FF00;"><strong>'+val+'</strong></p>');			
								setTimeout(function(){ 
									$('.order_id_'+order_id).slideUp();																						
									}, 4000);
								
							}
			            });
		            }else{
			            
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('.order_id_'+order_id+' .form_message_orderwise').html('<p style="color:#00FF00;"><strong>'+val+'</strong></p>');			
									setTimeout(function(){ 
									$('.order_id_'+order_id).slideUp();																						
									}, 4000);
			            	}
			            });
		            }
					
	          	},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
	        });
		});
		
	
	<!-- End by Bhavesh -->
	
	
	
	
})
</script>




			