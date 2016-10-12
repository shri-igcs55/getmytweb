<!-- place order crane starts -->
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
											<h1>Place Order for <span>Crane Provider</span></h1>

											<div class="radio_grp row">
												<div class="col-sm-4">
													<input type="radio" name="radio" id="radio1" class="radio"/>
													<label for="radio1">Transporter / Logestic</label>
												</div>

												<div class="col-sm-4">
													<input type="radio" name="radio" id="radio2" class="radio"/>
													<label for="radio2">Packer and Mover</label>
												</div>

												<div class="col-sm-4">	
													<input type="radio" name="radio" id="radio3" class="radio" checked />
													<label for="radio3">Crane Service</label>
												</div>
											</div>

										</div>
				    				</article>
				    			</div>
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="tab-content crane">
				    						<!-- tab two starts -->
										    <div id="place_crane" class="fade in provider">
										    	<form id="crane_ordr" name="crane_ordr" action="" class="pace_order_crn_form plc_ord_crane">
											    	<div class="row">
														<article class="col-md-4">
															<div class="form-group">
															    <label for="F_name">First Name<sup>*</sup></label>
															    <input type="text" class="form-control" id="F_name" required value="">
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="L_name">Last Name<sup>*</sup></label>
															    <input type="text" class="form-control" id="L_name" required value="">
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="mobile">Mobile<sup>*</sup></label>
															    <input type="number" class="form-control" id="mobile" required value="">
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-4">
															<div class="form-group">
															    <label for="From_State">State<sup>*</sup></label>
															    <select id="From_State" class="from-state form-control trans_plc_ord" required>
															    	<option value="">Select State</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="From_City">City, District<sup>*</sup></label>
														     	<select id="From_city" name="from_city" class="from-city form-control">
																    <option value="">Select City District</option>
																</select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="From_location">Where in City (Area)<sup>*</sup></label>
															    <input type="text" name="from_location" id="from_location" class="where-in-city form-control" required disabled="" value="">
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-4">
															<div class="form-group">
															    <label for="To_State">To State<sup>*</sup></label>
															    <select id="To_State" class="from-state trans_plc_ord form-control" required>
															    	<option value="">Select State</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="To_City">To City, District<sup>*</sup></label>
														     	<select id="To_city"  name="to_city"  class="from-city form-control">
																    <option value="">Select City District</option>
																</select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="to_location">To Where in City (Area)<sup>*</sup></label>
															    <input type="text" id="to_location"  name="to_location"  class="where-in-city form-control" required disabled="">
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="crane_service_from_location">From Address (Where Service is required)<sup>*</sup></label>
															    <input type="text" class="form-control" id="crane_service_from_location" required value="">
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="crane_service_to_location">To Address (Where Service is required)<sup>*</sup></label>
															    <input type="text" class="form-control" id="crane_service_to_location" required value="">
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-4 work">
															<div class="form-group">
															    <label for="crane_work_description">Description of Work<sup>*</sup></label>
															    <select id="crane_work_description" class="crane_work_description form-control" required>
															    	<option value="">Select Work type</option>
															    </select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="weight">Weight (Estimate) <sup>*</sup></label>
															    <input type="text" class="form-control" id="weight" required value="">
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="crane_schedule_date">Schedule Date<sup>*</sup></label>
															    <input type="text" class="form-control crane_schedule_date" id="crane_schedule_date" required value="">
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-12 text-center">
															<input type="button" id="crane_plc_ord" class="form-control crane_plc_ord" value="Place Order" required>
														</article>
														<!-- color:#37b1d8; -->
														<span id="form_validation_msg"></span>
													</div>
													<input type="hidden" name="uid" id="uid" value="<?php echo $logged_in_user['user_id']; ?>">
										    	</form>
										    </div>
										    <!-- tab one ends -->
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
<script>
	$( function() {
	    $.widget( "custom.combobox", {
	      	_create: function() {
	        	this.wrapper = $( "<span>" )
	          	.addClass( "custom-combobox" )
	          	.insertAfter( this.element );
		 
		        this.element.hide();
		        this._createAutocomplete();
		        this._createShowAllButton();
	     	},
	 
	      	_createAutocomplete: function() {
	        	var selected = this.element.children( ":selected" ),
	          	value = selected.val() ? selected.text() : "";
	 
	        	this.input = $( "<input>" )
	          	.appendTo( this.wrapper )
	          	.val( value )
	          	.attr( "title", "" )
	          	.attr( "disabled", true)
	          	.addClass( "form-control custom-combobox-input ui-corner-left" )
	          	.autocomplete({
		            delay: 0,
		            minLength: 0,
		            source: $.proxy( this, "_source" )
	          	})
	          	.tooltip({
		            classes: {
		            	"ui-tooltip": "ui-state-highlight"
		            }
	          	});
	 
		        this._on( this.input, {
		          	autocompleteselect: function( event, ui ) {
		            	ui.item.option.selected = true;
		            	this._trigger( "select", event, {
		              		item: ui.item.option
		            	});
		          	},
		 	        autocompletechange: "_removeIfInvalid"
		        });
	      	},
	 
	      	_createShowAllButton: function() {
	        	var input = this.input,
	          	wasOpen = false;
	 
	        	$( "<a>" )
	          	.attr( "tabIndex", -1 )
	          	.attr( "title", "Show All Items" )
	          	.tooltip()
	          	.appendTo( this.wrapper )
	          	.button({
		            icons: {
		              primary: "ui-icon-triangle-1-s"
		            },
	            	text: false
	          	})
	          	.removeClass( "ui-corner-all" )
	          	.addClass( "custom-combobox-toggle ui-corner-right" )
	          	.on( "mousedown", function() {
	            	wasOpen = input.autocomplete( "widget" ).is( ":none" );
	          	})
	          	.on( "click", function() {
	            	input.trigger( "focus" );
	 
		            // Close if already visible
		            if ( wasOpen ) {
		              return;
		            }
	 
		            // Pass empty string as value to search for, displaying all results
		            input.autocomplete( "search", "" );
	          	});
	      	},
	 
	      	_source: function( request, response ) {
	        	var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
	        	response( this.element.children( "option" ).map(function() {
	          		var text = $( this ).text();
	          		if ( this.value && ( !request.term || matcher.test(text) ) )
	            		return {
	              			label: text,
	              			value: text,
	              			option: this
	            		};
	        	}) );
	      	},
	 
	      	_removeIfInvalid: function( event, ui ) {
	 
		        // Selected an item, nothing to do
		        if ( ui.item ) {
		          return;
		        }
	 
		        // Search for a match (case-insensitive)
		        var value = this.input.val(),
	          	valueLowerCase = value.toLowerCase(),
	          	valid = false;
	        	this.element.children( "option" ).each(function() {
		          	if ( $( this ).text().toLowerCase() === valueLowerCase ) {
		            	this.selected = valid = true;
		            	return false;
		          	}
	        	});
	 
		        // Found a match, nothing to do
		        if ( valid ) {
		          return;
		        }
	 
		        // Remove invalid value
		        this.input
	          	.val( "" )
	          	.attr( "title", value + " didn't match any item" )
	          	.tooltip( "open" );
	        	this.element.val( "" );
	        	this._delay(function() {
	          		this.input.tooltip( "close" ).attr( "title", "" );
	        	}, 2500 );
	        	this.input.autocomplete( "instance" ).term = "";
	      	},
	 
	      	_destroy: function() {
		        this.wrapper.remove();
		        this.element.show();
	      	}
	    });
	 
	    $( "#From_city" ).combobox();
	    $( "#To_city" ).combobox();
});
</script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#radio1').on('change', function () {
			var url = '<?php echo site_url('/userdashboard/place_transporter_order') ?>';
			if (url) { 
		    	window.location = url; 
		    }
		    return false;
		});
		$('#radio2').on('change', function () {
			var url = '<?php echo site_url('/userdashboard/place_packer_mover_order') ?>';
			if (url) { 
		    	window.location = url; 
		    }
		    return false;
		});


		$('.from-state').one('click',function(){
			
			var obj = $(this).closest('.row');
			jQuery.ajax({
				type:"GET",
				url: "/gmt/Indian_city_dropdown/state_dropdown",
				success: function(res){
					if(res.status_code == 200){
						obj.find('.custom-combobox-input').empty();
						obj.find('.custom-combobox-input').val('');
						obj.find('.custom-combobox-input').removeAttr('disabled');					
						obj.find('.where-in-city').removeAttr('disabled');
						obj.find('.from-city').empty();
						obj.find('.from-city').val('');
						obj.find('.from-state').empty();
						$('<option value="">Select State</option>').appendTo(obj.find('.from-state'));
						$.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<option value="'+v+'">'+v+'</option>').appendTo(obj.find('.from-state'));
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
		
		// to get state list
		$(".from-state").change(function(event){
	        var state = $(this).find("option:selected").text();
	        var obj = $(this).closest('.row');
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/Indian_city_dropdown/city_district_list",
				dataType: 'json',
		        data: { state: state },
				success: function(res){
					if(res.status_code == 200){
						obj.find('.custom-combobox-input').empty();
						obj.find('.custom-combobox-input').val('');
						obj.find('.custom-combobox-input').removeAttr('disabled');					
						obj.find('.where-in-city').removeAttr('disabled');
						obj.find('.from-city').empty();
						obj.find('.from-city').val('');
						var option ='<option value="">Select District City</option>';
			            $.each(res.data, function(key, val) {
			            	option +='<option value="'+val['id']+'">'+val['city']+', '+val['district']+'</option>';
			            });
			            $('.tab-content div.active').find(obj.find('.from-city')).html(option);
					}else{
						console.log('No response.');
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// to get description of work gmt/User/work_desc_list
		$(".crane_work_description").one('click',function(){
			var objDescWork = $(this).closest('.work');
			jQuery.ajax({
				type: "GET",
				url: '/gmt/User/work_desc_list',
				success: function(res){
					if(res.status_code == 200){
						objDescWork.find('.crane_work_description').empty();
						objDescWork.find('.crane_work_description').val('');
						$('<option value="">Select Work type</option>').appendTo(objDescWork.find('.crane_work_description'));
						$.each(res.data, function(key, val){
							// $.each(val, function(k, v){
								$('<option value="'+val['wdid']+'">'+val['wdtype']+'</option>').appendTo(objDescWork.find('.crane_work_description'));
							// });
						});
					}else{
						console.log('Somthing went wrong.');
					}
				},
				error: function(){
					console.log('Somthing went wrong.');
				}
			});
		});

		// to submit crane place order
		$(".crane_plc_ord").click(function(event){
			var objCraneProvider= $('.crane div.provider');

			var user_id 		= objCraneProvider.find("#uid").val();
			// var user_type_id	= objCraneProvider.find("#user_type_id").val();
			var user_type_id	= '3';

			var odr_by_fname 	= objCraneProvider.find("#F_name").val();
			var odr_by_lname	= objCraneProvider.find("#L_name").val();
			var odr_by_mob		= objCraneProvider.find("#mobile").val();
			
			var from_state		= objCraneProvider.find("#From_State").val();
			var from_city		= objCraneProvider.find("#From_city").val();
			var from_location	= objCraneProvider.find("#from_location").val();
			var from_address	= objCraneProvider.find("#crane_service_from_location").val();
			
			var to_state		= objCraneProvider.find("#To_State").val();
			var to_city			= objCraneProvider.find("#To_city").val();
			var to_location		= objCraneProvider.find("#to_location").val();
			var to_address		= objCraneProvider.find("#crane_service_to_location").val();

			var weight			= objCraneProvider.find("#weight").val();
			var desc_of_work	= objCraneProvider.find("#crane_work_description").val();
			var sechdule_date	= objCraneProvider.find("#crane_schedule_date").val();
			        	
			if(user_id == '' || user_type_id == '' || odr_by_fname == '' || odr_by_lname == '' ||
				odr_by_mob == '' || from_state == '' || from_city == '' || from_location == '' || 
				weight == '' ||	desc_of_work == '' || sechdule_date == '' || to_state == '' || 
				to_city == '' || to_location == '' || to_address == '' ){
				$('#form_validation_msg').empty();
			    $('<p style="color:#ed4343;><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        }
	        else{

		        $.ajax({
			        type: "POST",
			        url: "/gmt/Enquiry_form_crain/enquiry_form_crain",
			        cache: false,
			        dataType: 'json',
			        data: {
			        		user_id 		: user_id,
							user_type_id 	: user_type_id,
							odr_by_fname 	: odr_by_fname,
							odr_by_lname	: odr_by_lname,
							odr_by_mob		: odr_by_mob,
							from_state 		: from_state,
							from_city 		: from_city,
							from_location 	: from_location,
							from_address 	: from_address,
							to_state 		: to_state,
							to_city 		: to_city,
							to_location 	: to_location,
							to_address	 	: to_address,
							weight 			: weight,
							desc_of_work	: desc_of_work,
							sechdule_date	: sechdule_date
			        	},
			        success: function(res){
			        	if(res.status_code == 200){
			        		$('#form_validation_msg').empty();
				            $('<p style="color:#00ff00;><strong>Order placed Successfully.</strong></p>').appendTo('#form_validation_msg');
			              	$('.plc_ord_crane')[0].reset();
				            /*$.each(res.data, function(key, val) {
				            	$.each(val, function(k, v){
				                    $('<li>'+v+'</li>').appendTo('#test');
				                });
				            });*/
			            }else{
				            $('#form_validation_msg').empty();
				            $.each(res.data, function(key, val) {
				            	$('<p style="color:#ed4343;><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
				            });
			        	}
			        },
			        error: function(){
			        	console.log('Something went wrong.');
			        }
				});
			}
		});
	});
</script>