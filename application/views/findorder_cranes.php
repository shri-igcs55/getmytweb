<!-- *** FIND ORDER PAGE FOR TRANSPORTER *** -->
<section class="place_orderwrp custmer_reg">
	<section class="find_order">
		<div class="container">
			<div class="row">
				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); $u_id= $logged_in_user['user_id']; ?>
				</article>
				<article class="col-md-9">
					<section class="place_order_main">
		    			<div class="tab-content">
		    				<div class="tab-pane fade in active" id="plc_crn_home">
		    					<div class="row">
				    				<article class="col-md-12">
				    					<div class="section_head">
											<h1>Find Order for <span>Crane Providers</span></h1>
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
															    <label for="select_city">Select City</label>
															    <select name="" id="select_city" class="form-control">
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
															    	<option>Rajajinagar</option>
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
															    <label for="descrip_work">Description Of Work</label>
															    <input type="text" class="form-control" id="descrip_work">
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