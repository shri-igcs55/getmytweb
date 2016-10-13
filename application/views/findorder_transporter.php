<!-- *** FIND ORDER PAGE FOR TRANSPORTER *** -->
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
		    				<div class="tab-pane fade in active" id="plc_crn_home">
		    					<div class="row">
				    				<article class="col-md-12">
				    					<div class="section_head">
											<h1>Find Order for <span>Transporter/Logistics</span></h1>
										</div>
				    				</article>
				    			</div>
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="find-order-page">
				    						<div id="" class="">
				    							<form action="javascript:void(0);" class="pace_order_crn_form">
				    								<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="from_stn_logistics">From Station</label>
															    <select name="" id="from_stn_logistics" class="form-control">
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="to_station_logistics">To Station</label>
															    <select name="" id="to_station_logistics" class="form-control">
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    </select>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="vehicle_type">Vehicle Type</label>
															    <select name="" id="vehicle_type" class="form-control">
															    	<option>ABCDEF</option>
															    	<option>GHIJKL</option>
															    	<option>MNOPQR</option>
															    	<option>STUVWXYZ</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="weight">Weight</label>
															    <input type="text" class="form-control" id="weight">
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="feet_in_length">Feet(in Length)</label>
															    <input type="text" class="form-control" id="feet_in_length">
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="pickup_date">Date</label>
															    <input type="text" class="form-control calander_bgimage" id="pickup_date">
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-12 text-center">
															<input type="submit" id="cus-reg-sbmit" class="form-control" value="Search Order" required>
														</article>
													</div>
				    							</form>
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