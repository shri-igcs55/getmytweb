<!-- place order transporter starts -->

<section class="place_orderwrp custmer_reg">
	<section class="place_order_crane">
		<div class="container">
			<div class="row">

				<article class="col-md-3">
					<?php include_once('comman/left_sidebar.php'); ?>
				</article>

				<article class="col-md-9">
					<section class="place_order_main">
						<div class="tab-content">
					    	<div class="tab-pane fade in active" id="plc_crn_home">
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="section_head">
											<h1>Place Order for <span>Transporter / Logestic Service</span></h1>
										</div>
				    				</article>
				    			</div>
				    			
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="transporter">
										    <div id="" class="logestic_form">
										    	<form action="" class="plc_ord_frm pace_order_crn_form">
										    		<div class="addmore_wrp">
										    			<ul>
										    				<li>
										    					<div class="row">
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="State">From State<sup>*</sup></label>
																		    <select id="State" class="state form-control" required>
																		    	<option value="">Select State</option>
																		    	<option value="">Loading...</option>
																		    </select>
																		</div>
																	</article>
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="District">From District<sup>*</sup></label>
																		    <select id="District" class="district form-control" required disabled="" title="Select State First">
																		    	<option value="">Select District</option>
																		    </select>
																		</div>
																	</article>
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="City">From City<sup>*</sup></label>
																		    <select id="from_city" class="from_city form-control" required disabled="" title="Select District First">
																		    	<option value="">Select City</option>
																		    </select>
																		</div>
																	</article>
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="location">From where in city<sup>*</sup></label>
																		    <input type="text" id="from_location" class="city form-control" required  title="Select District First">
																		    	
																		</div>
																	</article>
																</div>
																<div class="row">
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="State">To State<sup>*</sup></label>
																		    <select id="State" class="state form-control" required>
																		    	<option value="">Select State</option>
																		    	<option value="">Loading...</option>
																		    </select>
																		</div>
																	</article>
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="District">To District<sup>*</sup></label>
																		    <select id="District" class="district form-control" required disabled="" title="Select State First">
																		    	<option value="">Select District</option>
																		    </select>
																		</div>
																	</article>
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="City">To City<sup>*</sup></label>
																		    <select id="to_city" class="to_city form-control" required disabled="" title="Select District First">
																		    	<option value="">Select City</option>
																		    </select>
																		</div>
																	</article>
																	<article class="col-md-3">
																		<div class="form-group">
																		    <label for="location">To where in city<sup>*</sup></label>
																		    <input type="text" id="to_location" class="city form-control" required title="Select District First">
																		    	
																		    
																		</div>
																	</article>
																</div>
										    				</li>
										    			</ul>
														<a id="add_more" class="add_more_btn">+ add more</a>
														<a id="remove_more" class="remove_more_btn">remove</a>
										    		</div><br><br>
											    	<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="material">Material Type<sup>*</sup></label>
															    <!-- <input type="text" class="form-control" id="F_name" required> -->
															    <select id="material" class="material form-control" required title="Select Material Type">
															    	<option value="">Select Material Type</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="length">Length ( In Feet )</label>
															    <input type="text" class="form-control" id="length">
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="nag">Nag (Quantity)</label>
															    <input type="number" class="form-control" id="nag" required>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="weight">Weight</label>
															    <input type="text" class="form-control" id="weight" required>
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="vehicle_type">Vehicle Type<sup>*</sup></label>
															    <!-- <input type="text" class="form-control" id="F_name" required> -->
															    <select id="vehicle_type" class="vehicle form-control" required title="Select Vehicle Type">
															    	<option value="">Select Vehicle Type</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="vehicle_no">No. of Vehicle<sup>*</sup></label>
															    <input type="number" class="form-control" id="vehicle_no" required>
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-3">
															<div class="form-group">
															    <label for="pick_point">Pickup Points<sup>*</sup></label>
															    <input type="number" class="form-control" id="pick_point" required>
															</div>
														</article>
														<article class="col-md-3">
															<div class="form-group">
															    <label for="drop_point">Destination Point<sup>*</sup></label>
															    <input type="number" class="form-control" id="drop_point" required>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="schedule_date">Schedule Date<sup>*</sup></label>
															    <input type="text" class="form-control" id="schedule_date" required>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-12 text-center">
															<input type="button" id="plc-ord-sbmit" class="form-control plc-ord-sbmit" value="Place Order">
														</article>
													</div>
													<!-- color:#37b1d8; -->
													<span id="form_validation_msg" style="color:red;"></span>
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

<!-- place order transporter starts -->

<script type="text/javascript">
	$(document).ready(function(){
		// Ajax post for submiting registration form
   	$(".plc-ord-sbmit").click(function(event) {
   		var objCurrentSection = $('.transporter div.logestic_form');       		
   		
   		// var user_id 			= objCurrentSection.find("#user_id").val();
        // var from_city 			= objCurrentSection.find("#from_city").val();
        var user_id 			= '1';
        var from_city 			= '9';
        var from_location 		= objCurrentSection.find("#from_location").val();
        // var to_city 			= objCurrentSection.find("#to_city").val();
        var to_city 			= '10';
        var to_location 		= objCurrentSection.find("#to_location").val();
        var material_type 		= objCurrentSection.find("#material").val();
        var no_of_quantity 		= objCurrentSection.find("#length").val();
        var weight 				= objCurrentSection.find("#nag").val();
        var feet 				= objCurrentSection.find("#weight").val();
        var vehicle_type 		= objCurrentSection.find("#vehicle_type").val();
        var no_of_vehicle 		= objCurrentSection.find("#vehicle_no").val();
        var pickup_points 		= objCurrentSection.find("#pick_point").val();
		var destination_points 	= objCurrentSection.find("#drop_point").val();
        var sechdule_date	 	= objCurrentSection.find("#schedule_date").val();
        
        if(user_id == '', from_city == '', from_location == '', to_city == '', 
        	to_location == '', material_type == '', vehicle_type == '', no_of_vehicle == '', pickup_points == '', destination_points == '', sechdule_date == '' ){
        	$('#form_validation_msg').empty();
		    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        /*else if(designation == '',firm_name == '',company_type == '',company_pan == ''){
        	$('#form_validation_msg').empty();
		    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
		else if(captcha !== captcha_word){
        	$('#form_validation_msg').empty();
		    $('<p><strong>Captcha code is wrong.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(objCurrentSection.find("input[name=check1]").prop('checked') === false){
		   	$('#form_validation_msg').empty();
			$('<p><strong>Please Read and Accept our Terms of Service and Privacy Policy.</strong></p>').appendTo('#form_validation_msg');
		}*/
		else{

	        $.ajax({
		        type: "POST",
		        url: "/gmt/Enquiry_form/enquiry_form",
		        cache: false,
		        dataType: 'json',
		        data: {
		        	/*first_name 	: first_name,
					last_name 	: last_name,
					user_mob 	: user_mob,
					user_email 	: user_email,
					user_pass	: user_pass,
					c_pass 		: c_pass,
					address1 	: address1,
					address2 	: address2,
					state 		: state,
					district 	: district,
					city 		: city,
					pin 		: pin,
					pkg_id 		: pkg_id,
					user_type 	: user_type,
					designation : designation,
					firm_name 	: firm_name,
					company_type: company_type,
					pan 		: company_pan*/

					user_id				: user_id,
					from_city			: from_city,
					from_location		: from_location,
					to_city				: to_city,
					to_location			: to_location,
					material_type		: material_type,
					no_of_quantity		: no_of_quantity,
					weight				: weight,
					feet				: feet,
					vehicle_type		: vehicle_type,
					no_of_vehicle		: no_of_vehicle,
					pickup_points		: pickup_points,
					destination_points	: destination_points,
					sechdule_date		: sechdule_date
		       	},
		        success: function(res) {
		            if (res.status_code == 200)
		            {
		              	$('#form_validation_msg').empty();
			            $('<p><strong>Order placed Successfully.</strong></p>').appendTo('#form_validation_msg');
		              	$('.plc_ord_frm')[0].reset();
			            /*$.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<li>'+v+'</li>').appendTo('#test');
			                });
			            });*/
		            }else{
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	$('<p><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            });
		            }
	          	},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
	        });
	    }
    });
	});
</script>