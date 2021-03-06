<?php $logged_in_user = $this->session->userdata('logged_in_user');	?>
<!-- HOME STARTS -->
<section id="home_outer" class="home_outer">
	
	<!-- HOME Landing section -->
	<section class="laning_wrp">
		<section class="landing-slider">
			<div class="overlay"></div>

			<div class="owl-carousel_1"> <!-- home owl starts -->

			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_1.jpg">
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_2.jpg">
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_1.jpg">
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_2.jpg">
			    </div>

			</div><!-- home owl ends -->

			<div class="owl-controls_">
				<div class="owl-nav_">
					<div class="owl-prev_c" style=""><img src="<?php echo base_url('assets/');?>images/prev.png"></div>
					<div class="owl-next_c" style=""><img src="<?php echo base_url('assets/');?>images/next.png"></div>
				</div>
			</div>

			<div class="home-form">
				<form id="home_enq" name="home_enq" action="<?php if($logged_in_user['user_id']){ echo site_url('userdashboard/place_transporter_order'); }else{ echo site_url('user/signin'); } ?>" class="home_form">
					<div class="container">
						<div class="row">
							<article class="col-sm-12">
								<center class="Hom-form_head">
									<h1>Post your need here</h1>
								</center>
							</article>
						</div>
						<div class="row">
							<article class="col-sm-3 col-md-offset-1">
								<div class="form-group">
								    <span class="location">
								    	<select type="text" class="form-control pick-state" id="location_1" required="">
									    	<option value="">Select Pickup Location</option>
									    	<option value="">Loading...</option>
									    </select>
								    </span>
								</div>
							</article>
							<article class="col-sm-3">
								<div class="form-group">
								    <span class="location">
								    	<select type="text" class="form-control drop-state" id="location_2" required="">
									    	<option class="">Select Drop Location</option>
									    	<option value="">Loading...</option>
									    </select>
								    </span>
								</div>
							</article>
							<article class="col-sm-3">
								<div class="form-group">
								    <span class="vehicle_home">
								    	<select type="text" class="form-control service-list" id="vehicle" required="">
									    	<option class="">Select Service Type</option>
									    	<option value="pm-5">Packers and Movers</option>
									    	<option value="cp-6">Crane Provider</option>
									    	<option value="cs-8">Container Suppliers</option>
											<option value="ca-9">Commission Agent</option>
											<option value="fo-10">Fleet Owners</option>
											<option value="tnls-11">Transporter and Logistics</option>
											<option value="trop-12">Trolley Provider</option>
											<option value="tanp-13">Tanker Provider</option>
									    </select>
								    </span>
								</div>
							</article>
							<article class="col-sm-2">
								<div class="form-group">
								    <input type="submit" class="form-control home-button" id="home_submit" value="Next">
								</div>
							</article>
						</div>
					</div>
				</form>
			</div>

		</section>
		
		<a class="goto_btn">
			<img src="<?php echo base_url('assets/');?>images/v.png">
		</a>
			
	</section>
	<!-- HOME Landing section -->


	<!-- about section starts -->
	<section id="about" class="about_wrp">
		<div class="container">
			<div class="row">
				<article class="col-md-12">
					<section class="about-1">
						<div class="row">
							<article class="col-sm-5 col-xs-4"></article>
							<article class="col-sm-6 col-xs-12">
								<div class="about-content">
									<h1>About <i>Getmy</i><span>TRUCK</span></h1>
									<p>We are the leaders in online goods transport services by connecting customers and transporters across India. Our objective is to make the transportation of your goods simple and efficient by providing cutting edge technology that is secure, economical and user friendly.</p>
									<a href="<?php echo site_url('aboutus'); ?>">Read more ...</a>
								</div>
							</article>
						</div>
					</section>
				</article>
			</div>
		</div>
	</section>
	<!-- about section ends -->


	<!-- How it works starts -->
	<section id="how_it_works" class="howit_works">
		<div class="container">
			<div class="row">
				<article class="col-md-12">
					<center>
						<h1>How it <span>Works</span></h1>
					</center>
				</article>
			</div>

			<div class="row">
				<article class="col-md-12">
					<div>
						<ul class="howitworks_ul">
							<li>
								<div>
									<img src="<?php echo base_url('assets/');?>images/mouse.png" class="img-responsive">
								</div>
								<h5>BOOK ONLINE</h5>
								<p>Submit the details of pickup and drop from  mobile app or in website.</p><p>&nbsp;</p>
							</li>
							<li>
								<div>
									<img src="<?php echo base_url('assets/');?>images/board.png" class="img-responsive">
								</div>
								<h5>GET QUATATION</h5>
								<p>Get quotations from available vendors, select the best of the rates &amp; services.</p><p>&nbsp;</p>
							</li>
							<li>
								<div>
									<img src="<?php echo base_url('assets/');?>images/trck.png" class="img-responsive truck">
								</div>
								<h5>PICKUP &amp; DELIVER</h5>
								<p>Super-fast pickup and delivery by the trusted transporter or service providers with minimum waiting time.</p><br>
							</li>
							<li>
								<div>
									<img src="<?php echo base_url('assets/');?>images/search.png" class="img-responsive">
								</div>
								<h5>TRACK ANYTIME</h5>
								<p>You can track any time of your drivers with our GPS technology while your product is on road.</p><br>
							</li>
						</ul>
					</div>
				</article>
			</div>
		</div>

	</section>
	<!-- How it works starts -->

	<!-- how it works slider -->
	<section class="hw_it_slider">
			<div class="slider-hwit_wrp">
				<div class="owl-carousel_2"> <!-- how it works owl starts -->

			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_3.jpg">
			    	<div class="slide_content">
			    		<h1><i>Getmy</i><span>TRUCK</span> How it Works</h1>
			    		<p>First you need to submit pickup and drop location and also dimensions of your preferred cargo, once the vehicle  is confirmed vendor details are shared. You can track your driver through the GPS while they do the delivery of your product.</p>
			    	</div>
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_4.jpg">
			    	<div class="slide_content">
			    		<h1><i>Getmy</i><span>TRUCK</span> How it Works</h1>
			    		<p>First you need to submit pickup and drop location and also dimensions of your preferred cargo, once the vehicle  is confirmed vendor details are shared. You can track your driver through the GPS while they do the delivery of your product.</p>
			    	</div>
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_3.jpg">
			    	<div class="slide_content">
			    		<h1><i>Getmy</i><span>TRUCK</span> How it Works</h1>
			    		<p>First you need to submit pickup and drop location and also dimensions of your preferred cargo, once the vehicle  is confirmed vendor details are shared. You can track your driver through the GPS while they do the delivery of your product.</p>
			    	</div>
			    </div>
			    <div class="item">
			    	<img src="<?php echo base_url('assets/');?>images/slide_4.jpg">
			    	<div class="slide_content">
			    		<h1><i>Getmy</i><span>TRUCK</span> How it Works</h1>
			    		<p>First you need to submit pickup and drop location and also dimensions of your preferred cargo, once the vehicle  is confirmed vendor details are shared. You can track your driver through the GPS while they do the delivery of your product.</p>
			    	</div>
			    </div>

			   

			</div><!-- how it works owl ends -->
			<div class="owl-controls_">
				<div class="owl-nav_">
					<div class="owl-prev_c" style=""><img src="<?php echo base_url('assets/');?>images/prev.png"></div>
					<div class="owl-next_c" style=""><img src="<?php echo base_url('assets/');?>images/next.png"></div>
				</div>
			</div>
		</div>

		 
<!-- ====================================carouse ends -->

		<section class="hw_it_reg">
			<div class="">
				<ul class="hw_it_reg_ul">
					<li>
						<div class="reg_each">
							<img src="<?php echo base_url('assets/');?>images/reg_1.jpg" class="img-responsive">
							<div class="overlay_r">
								<h4>For Customers</h4>
								<img src="<?php echo base_url('assets/');?>images/reg_custmr.png" class="img-responsive">
								<a href="<?php echo site_url('user/customer'); ?>">Register</a>
							</div>
						</div>
					</li>
					<li>
						<div class="reg_each">
							<img src="<?php echo base_url('assets/');?>images/reg_2.jpg" class="img-responsive">
							<div class="overlay_r">
								<h4>for Transporter &amp; logistics</h4>
								<img style="padding-top: 5px;" src="<?php echo base_url('assets/');?>images/reg_truck.png" class="img-responsive">
								<a href="<?php echo site_url('user/transporter_logistic'); ?>">Register</a>
							</div>
						</div>
					</li>
					<li>
						<div class="reg_each">
							<img src="<?php echo base_url('assets/');?>images/reg_3.jpg" class="img-responsive">
							<div class="overlay_r">
								<h4>For Packers &amp; Movers</h4>
								<img src="<?php echo base_url('assets/');?>images/reg_movers.png" class="img-responsive">
								<a href="<?php echo site_url('user/packer_mover'); ?>">Register</a>
							</div>
						</div>
					</li>
					<li>
						<div class="reg_each">
							<img src="<?php echo base_url('assets/');?>images/reg_4.jpg" class="img-responsive">
							<div class="overlay_r">
								<h4>For Crane Providers</h4>
								<img src="<?php echo base_url('assets/');?>images/reg_crane.png" class="img-responsive">
								<a href="<?php echo site_url('user/crane_provider'); ?>">Register</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>

	</section>
	<!-- how it works slider -->

	<!-- Happy Customers starts -->
	<!-- <section id="happy_cusmr" class="happy_cusmr-wrp">
		<div class="container">
			<div class="row">
				<article class="col-md-12">
					<section id="dg-container" class="dg-container">
						<div class="dg-wrapper">
							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_1.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 1</h5>
									<span>MBBS</span>
								</div>
							</a>

							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_2.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 2</h5>
									<span>MBBS</span>
								</div>
							</a>

							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_3.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 3</h5>
									<span>MBBS</span>
								</div>
							</a>
							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_3.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 4</h5>
									<span>MBBS</span>
								</div>
							</a>
							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_3.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 5</h5>
									<span>MBBS</span>
								</div>
							</a>
							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_3.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 6</h5>
									<span>MBBS</span>
								</div>
							</a>
							<a href="#" >
								<img src="<?php echo base_url('assets/');?>images/custmr_3.png" alt="image01" class="img-responsive">
								<div class="slider_3d_contnt">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis . </p>
									<h5>Dr, Njaan 7</h5>
									<span>MBBS</span>
								</div>
							</a>

						</div>
						<nav>	
							<span class="dg-prev"><img src="<?php echo base_url('assets/');?>images/left_red.png" class="img-responsive"></span>
							<span class="dg-next"><img src="<?php echo base_url('assets/');?>images/right_red.png" class="img-responsive"></span>
						</nav>
					</section>
				</article>
			</div>
		</div>
	</section> -->
	<!-- Happy Customers ends -->



	<!-- get my app starts -->
	<section class="get_my_app_wrp" id="get_my_app">
		<div class="">
			<div class="container">
				<div class="row">
					<article class="col-md-6 col-sm-4"></article>
					<article class="col-md-6 col-sm-8">
						<div class="app_content_wrp">
							<h1>Use <i>Getmy</i><span>TRUCK</span>on the go!</h1>
							<h4>Enter your mobile number details to get our android app link in SMS.</h4>
							<div class="row">
								<article class="col-sm-6">
									<div class="form-group my_app_input">
									    <span><input type="text" class="form-control" id="my_app" required></span>
									</div>
								</article>

								<article class="col-sm-6">
									<div class="form-group my_app_submit">
									    <input type="submit" class="form-control" id="my_app_submit" value="Ge App Link" required>
									</div>
								</article>
							</div>
							<a href="#">
								<img src="<?php echo base_url('assets/');?>images/android-app.png">
							</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- get my app ends -->


</section>
<!-- HOME ENDS -->
<script type="text/javascript">
	$(document).ready(function(){

		$('.pick-state').one('click',function(){
			//alert("working");
			var obj = $(this).closest('.row');
			jQuery.ajax({
				type:"GET",
				url: "/gmt/Indian_city_dropdown/state_dropdown",
				success: function(res){
					if(res.status_code == 200){
						obj.find('.pick-state').empty();
						$('<option value="">Select Pickup Location</option>').appendTo(obj.find('.pick-state'));
						$.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<option value="'+v+'">'+v+'</option>').appendTo(obj.find('.pick-state'));
			                });
			            });
					}else{
						console.log('No response.');
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		$('.drop-state').one('click',function(){
			//alert("working");
			var obj = $(this).closest('.row');
			jQuery.ajax({
				type:"GET",
				url: "/gmt/Indian_city_dropdown/state_dropdown",
				success: function(res){
					if(res.status_code == 200){
						obj.find('.drop-state').empty();
						$('<option value="">Select Drop Location</option>').appendTo(obj.find('.drop-state'));
						$.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<option value="'+v+'">'+v+'</option>').appendTo(obj.find('.drop-state'));
			                });
			            });
					}else{
						console.log('No response.');
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

	});
</script>