<!-- place order crane starts -->
<section class="place_orderwrp custmer_reg">
	<section class="place_order_crane">
		<div class="container">
			<div class="row">

				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); $u_id=$logged_in_user['user_id']; ?>
				</article>

				<article class="col-md-9">
					<section class="place_order_main order_outr">
						<div class="row">
		    				<article class="col-md-12">
		    					<div class="section_head">
									<h1>View Order </h1>
								</div>
		    				</article>
		    			</div>

						<?php 
						if(!isset($orderObj->data->message)):
							foreach($orderObj->data as $orderObj):?>
								<div class="tab-content order_wrpr">
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
					    			<div class="order_row">
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
					    			</div>
					    			<div class="order_row">
					    				<center><h4><span>Pickup-Drop Details</span></h4></center>
					    				<div class="row cities">
											<?php $intLoop = 0; $city_index = 1;
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
											<?php $city_index++; endforeach;?>
										</div>
										<?php if($orderObj->order_place_for_id == 5){?>
											<div class="gat_vertcl"></div>
						    				<div class="row cities">
												<article class="col-sm-4">
						    						<label>Address form where service required</label>
						    						<p>-</p>
						    					</article>
						    					<article class="col-sm-4">
						    						<label>Address to where service required</label>
						    						<p>-</p>
						    					</article>
						    					<article class="col-sm-3">
						    						<label>Service require for </label>
						    						<p>-</p>
						    					</article>
											</div>
										<?php }?>
										<div class="gat_vertcl"></div>
					    				<div class="row cities">
											<?php $intLoopArea = 0; $city_area_index = 1;
											foreach($orderObj->pickup_area_location as $pickup_area_location):?>
												<article class="col-sm-4" style="height: 60px;">
						    						<label>From Where in City area(<?php echo $city_area_index?>)</label>
						    						<p><?php echo $pickup_area_location?></p>
						    					</article>
						    					<?php $city_area_index++; endforeach;
										echo '</div><div class="row cities">';
												foreach($orderObj->pickup_area_location as $pickup_area_location):?>
						    					<article class="col-sm-4" style="height: 60px;">
						    						<label>To Where in City area(<?php echo $city_area_index?>)</label>
						    						<p><?php echo $orderObj->drop_area_location[$intLoopArea++]?></p>
						    					</article>
						    				<?php $city_area_index++; endforeach;?>
										</div>
					    			</div>
					    			<div class="order_row">
					    				<center><h4><span>Vehicle Details</span></h4></center>
					    				<div class="row">
					    					<article class="col-sm-3">
					    						<label>Vehicle Type</label>
					    						<p><?php echo $orderObj->vehicle_type?></p>
					    					</article>
					    					<article class="col-sm-4">
					    						<label>No. of Vehicle</label>
					    						<p><?php echo $orderObj->vehicle_qty?></p>
					    					</article>
					    					<article class="col-sm-4">
						    					<label>Order Pickup Points</label>
						    					<p><?php echo $orderObj->order_pickup_points ?></p>
						    				</article>
					    				</div>
					    				<div class="gat_vertcl"></div>
					    				<div class="row">
						    				<article class="col-sm-3">
						    					<label>Order Drop Points</label>
						    					<p><?php echo $orderObj->order_drop_points ?></p>
						    				</article>
					    					
					    				</div>
					    				<!-- <div class="gat_vertcl"></div>
					    				<div class="row">
					    					
					    				</div> -->
					    				<!-- <div class="gat_vertcl"></div>
					    				<div class="row">
					    					<article class="col-sm-4">
					    						<label></label>
					    						<p></p>
					    					</article>
					    					<article class="col-sm-4">
					    						
					    					</article>
					    					<article class="col-sm-4">
					    						
					    					</article>
					    				</div> -->
					    			</div>
					    			<div class="order_row">
					    				<center><h4><span>Material Details</span></h4></center>
					    				<div class="row">
					    					<article class="col-sm-4">
					    						<label>Material Type</label>
					    						<p><?php echo $orderObj->material_type?></p>
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
					    						<label>Material Description</label>
					    						<p><?php echo $orderObj->crane_work_type?></p>
					    					</article>
					    					<?php }elseif($orderObj->order_place_for_id == 5){?>
					    					<article class="col-sm-12">
					    						<label>Material Description</label>
					    						<p><?php echo $orderObj->pm_goods_description?></p>
					    					</article>
					    					<?php }?>
					    				</div>
					    			</div>
					    			<div class="row">
					    				<article class="col-sm-12">
					    					<input data-toggle="tab" type="button" name="cancel_order" id="cancel_butn" value="Back">
											<?php if($logged_in_user['user_type'] > 4):?>
												<input type="button" name="rate_order" id="rate_butn" value="Rate it Now">											
											<?php endif;?>
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
								    				</article>
								    				<article class="col-sm-3">
								    					<label>Schedule Date</label>
								    					<h4><?php echo $orderObj->order_schedule_date?></h4>
								    				</article>
								    				<article class="col-sm-3">
								    					<label>Material Type</label>
								    					<h4><?php echo $orderObj->material_type?></h4>
								    				</article>
								    				<article class="col-sm-3">
								    					<label>Item Quantity</label>
								    					<h4><?php echo $orderObj->item_qty?></h4>
								    				</article>
								    			</div>
								    			<br>
								    			<div class="row">							    		<article class="col-sm-3">
								    					<label>Order Pickup Points</label>
								    					<h4><?php echo $orderObj->order_pickup_points ?></h4>
								    				</article>
								    				<article class="col-sm-3">
								    					<label>Order Drop Points</label>
								    					<h4><?php echo $orderObj->order_drop_points ?></h4>
								    				</article>
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
					    					</article>
											<div class="row">	
						    					<article class="col-md-2">
													<label>Status</label>
													<p><?php echo $orderObj->order_status?></p>
						    					</article>
												<article class="col-md-2">
						    						<?php if($logged_in_user['user_type'] <= 4):?>
														<a id="view_rate_btn" data-toggle="tab" href="#order_detailes_<?php echo $orderObj->order_id?>">View</a>
														<?php else: ?>
															<a id="view_rate_btn" data-toggle="tab" href="#order_detailes_<?php echo $orderObj->order_id?>">View &amp; Rate</a>
														<?php endif;?>
							    					</article>
												</div>
						    				</div>
						    			</div>
							    	</div>
								</div>	
								<br/>
							<?php endforeach;
						else:
							echo '<h5>'.$orderObj->data->message.'</h5>';
						endif;
						?>
					
					</section>
				</article>
			</div>
		</div>
	</section>
</section>
<!-- place order crane starts -->
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
<script>
$(document).ready(function(){
	$('input[name="cancel_order"]').click(function(){		
		$(this).closest('.tab-pane').removeClass('active in');
		$(this).closest('.tab-content').find('.order_listing_wp').addClass('active in');
	})
})
</script>
						