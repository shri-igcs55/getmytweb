<!-- place order crane starts -->
<section class="place_orderwrp custmer_reg">
	<section class="place_order_crane">
		<div class="container">
			<div class="row">

				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); $u_id = $logged_in_user['user_id']; ?>
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
						
					    	
					    	
							
				<?php foreach($orderObj->data as $orderObj):?>
						<div class="tab-content order_wrpr">
							<div class="tab-pane fade" id="order_detailes_<?php echo $orderObj->order_id?>">

			    				<div class="order_row">
				    				<div class="row">
				    					<article class="col-sm-6">
				    						<h4>Order ID: <span class="order_no"><?php echo $orderObj->order_id?></span></h4>
				    					</article>
				    					<article class="col-sm-6 text-right">
				    						<h4>Date: <span class="order_date"><?php echo $orderObj->plc_odr_schedule_date?></span></h4>
				    					</article>
				    				</div>
				    			</div>
				    			<div class="order_row">
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Vehicle Type</label>
				    						<p><?php echo $orderObj->vehicle_type?></p>
				    					</article>
				    					<article class="col-sm-4 ">
				    						<label>Item Quantity</label>
				    						<p><?php echo $orderObj->item_qty?></p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>No. Vehicle</label>
				    						<p><?php echo $orderObj->vehicle_qty?></p>
				    					</article>
				    				</div>

				    				<div class="gat_vertcl"></div>
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Address form where service required</label>
				    						<p>-</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>Address form where service required</label>
				    						<p>-</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>-</label>
				    						<p>-</p>
				    						
				    					</article>
				    				</div>

				    				<div class="gat_vertcl"></div>
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Service require for </label>
				    						<p>-</p>
				    					</article>
				    					<article class="col-sm-4">
				    						
				    					</article>
				    					<article class="col-sm-4">
				    						
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
				    					<article class="col-sm-12">
				    						<label>Material Description</label>
				    						<p><?php echo $orderObj->work_type?></p>
				    					</article>
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
							    					<h4><span class="order_no"><?php echo $orderObj->order_id?></span></h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>Material Type</label>
							    					<h4><?php echo $orderObj->material_type?></h4>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>Vehicle Type</label>
							    					<h4><?php echo $orderObj->vehicle_type?></h4>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>Quantity</label>
							    					<h4><?php echo $orderObj->item_qty?></h6>
							    				</article>
							    			</div>
							    			<br>
							    			<div class="row">							    				
							    				<article class="col-sm-3">
							    					<label>From City</label>
							    					<h4>-</h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>To City</label>
							    					<h4>-</h6>
							    				</article>
												<article class="col-sm-3">
							    					<label>Date</label>
							    					<h4><?php echo $orderObj->plc_odr_schedule_date?></h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>No. of Vehicles</label>
							    					<h4><?php echo $orderObj->vehicle_qty?></h6>
							    				</article>
							    			</div>
											<div class="row cities">
											<?php 
												$intLoop = 0;
												foreach($orderObj->from_city as $fromCity):?>
													<article class="col-sm-3">
														<label>From City</label>
														<h4><?php echo $fromCity?></h6>
													</article>
													<article class="col-sm-3">
														<label>To City</label>
														<h4><?php echo $orderObj->to_city[$intLoop++]?></h6>
													</article>
											<?php endforeach;?>
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
					<?php endforeach;?>
						
							
					    
					</section>
				</article>
			</div>
		</div>
	</section>
</section>
<!-- place order crane starts -->
<!--<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			type: "POST",
			url: "/gmt/Book_history/book_history",
			cache: false,
			dataType: 'json',
			success:function(result){
					if (result.status_code == 200)
					{
						var orderData = result.data;
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
						})
						
					}else{
						$('#form_validation_msg').empty();
						$.each(result.data, function(key, val) {
							$('<p><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
						});
					}
			},
		})
	});
</script>-->
<script>
$(document).ready(function(){
	$('input[name="cancel_order"]').click(function(){		
		$(this).closest('.tab-pane').removeClass('active in');
		$(this).closest('.tab-content').find('.order_listing_wp').addClass('active in');
	})
})
</script>
						