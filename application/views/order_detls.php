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
									<h1>View Order</h1>
								</div>
		    				</article>
		    			</div>
						<div class="tab-content order_wrpr">
					    	
					    	<div class="tab-pane fade" id="order_detailes">

			    				<div class="order_row">
				    				<div class="row">
				    					<article class="col-sm-6">
				    						<h4>Order ID: <span class="order_no">567238</span></h4>
				    					</article>
				    					<article class="col-sm-6 text-right">
				    						<h4>Date: <span class="order_date">25 Sep 2016</span></h4>
				    					</article>
				    				</div>
				    			</div>
				    			<div class="order_row">
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Vehicle Type</label>
				    						<p>EICHER PRO 1059</p>
				    					</article>
				    					<article class="col-sm-4 ">
				    						<label>Quantity</label>
				    						<p>5 Tons</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>No. Vehicle</label>
				    						<p>2 nos</p>
				    					</article>
				    				</div>

				    				<div class="gat_vertcl"></div>
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Address form where service required</label>
				    						<p>4th Block, Rajajinagar, Bangalore</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>Address form where service required</label>
				    						<p>Kurubara Halli, Mysore</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>Total Distance</label>
				    						<p>147 km</p>
				    						
				    					</article>
				    				</div>

				    				<div class="gat_vertcl"></div>
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Service require for </label>
				    						<p>Packing &amp; Unpacking Service Transportation</p>
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
				    						<label>Customer Name</label>
				    						<p>Deepak</p>
				    					</article>
				    					<article class="col-sm-4 ">
				    						<label>Email ID</label>
				    						<p>deepak.kd@gmail.com</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>Mobile Number</label>
				    						<p>+91 9876569865</p>
				    					</article>
				    				</div>
				    				<div class="gat_vertcl"></div>
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Customer Address</label>
				    						<p>Indglobal Consultancy Solutions
				    						1st Floor, No. 60 and 61,
				    						Dr Rajkumar Road, Prakashnagar,
				    						Bangalore-560021.</p>
				    					</article>
				    				</div>
				    			</div>
				    			<div class="order_row">
				    				<center><h4><span>Material Details</span></h4></center>
				    				<div class="row">
				    					<article class="col-sm-4">
				    						<label>Material Type</label>
				    						<p>Office Furniture</p>
				    					</article>
				    					<article class="col-sm-4 ">
				    						<label>Length (in Feet)</label>
				    						<p>10 feet</p>
				    					</article>
				    					<article class="col-sm-4">
				    						<label>Weight (Approx.)</label>
				    						<p>5 Tonne</p>
				    					</article>
				    				</div>
				    				<div class="gat_vertcl"></div>
				    				<div class="row">
				    					<article class="col-sm-12">
				    						<label>Material Description</label>
				    						<p>Nam vehicula ligula eget elit accumsan, nec porttitor enim pharetra. Suspendisse faucibus dapibus placerat. Nam cursus vestibulum ex, eu scelerisque dui porta vel. Donec a purus blandit, luctus orci eget, fringilla ipsum. Cras at arcu nec est vehicula mollis. Nam sed nisi finibus, mollis mauris sit amet, congue risus. Vivamus sit amet nibh malesuada, imperdiet enim sit amet, aliquam erat. Nunc pulvinar nibh nec libero placerat, non mattis justo vehicula.</p>
				    					</article>
				    				</div>
				    			</div>
				    			<div class="row">
				    				<article class="col-sm-12">
				    					<input data-toggle="tab" href="#order_listing" type="button" name="cancel_order" id="cancel_butn" value="Cancel">
				    					<input type="button" name="rate_order" id="rate_butn" value="Rate it Now">
				    				</article>
				    			</div>

					    	</div>
					    	<div class="tab-pane fade in active" id="order_listing">
				    			<div class="order_listing">
				    				<div class="row">
				    					<article class="col-md-10">
				    						<div class="row">
							    				<article class="col-sm-3">
							    					<label>Order ID</label>
							    					<h4><span class="order_no">547238</span></h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>Customer Name</label>
							    					<h4>Deepak</h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>Vehicle Type</label>
							    					<h4>EICHER PRO 1059</h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>Quantity</label>
							    					<h4>5 Tons</h6>
							    				</article>
							    			</div>
							    			<br>
							    			<div class="row">
							    				<article class="col-sm-3">
							    					<label>Date</label>
							    					<h4>25 Sep 2016</h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>From City</label>
							    					<h4>5 Tons</h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>To City</label>
							    					<h4>Mysore</h6>
							    				</article>
							    				<article class="col-sm-3">
							    					<label>No. of Vehicles</label>
							    					<h4>2 nos</h6>
							    				</article>
							    			</div>
				    					</article>
				    					<article class="col-md-2">
				    						<a id="view_rate_btn" data-toggle="tab" href="#order_detailes">View &amp; Rate</a>
				    					</article>
				    				</div>
				    			</div>
					    	</div>
					    </div>
					</section>
				</article>
			</div>
		</div>
	</section>
</section>
<!-- place order crane starts -->