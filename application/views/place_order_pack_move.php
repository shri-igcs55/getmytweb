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
											<h1>Place Order for <span>Packers & Movers</span></h1>

											<div class="radio_grp row">
												<div class="col-sm-4">
													<input type="radio" name="radio" id="radio1" class="radio"/>
													<label for="radio1">Transporter / Logestic</label>
												</div>

												<div class="col-sm-4">
													<input type="radio" name="radio" id="radio2" class="radio" checked />
													<label for="radio2">Packer and Mover</label>
												</div>

												<div class="col-sm-4">	
													<input type="radio" name="radio" id="radio3" class="radio"/>
													<label for="radio3">Crane Service</label>
												</div>
											</div>

										</div>
				    				</article>
				    			</div>
				    			
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="tab-content packer">
											<!-- tab two starts -->
										    <div id="place_packer" class="fade in mover">
										    	<form action="" class="pace_order_crn_form plc_ord_pm">
										    		<input type="hidden" name="uid" id="uid" value="<?php echo $logged_in_user['user_id']; ?>">
											    	<div class="row">
														<article class="col-md-4">
															<div class="form-group">
															    <label for="F_name">First Name<sup>*</sup></label>
															    <input type="text" class="form-control" id="F_name" required>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="L_name">Last Name<sup>*</sup></label>
															    <input type="text" class="form-control" id="L_name" required>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="mobile">Mobile<sup>*</sup></label>
															    <input type="number" class="form-control" id="mobile" required>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-4">
															<div class="form-group">
															    <label for="From_State">From State<sup>*</sup></label>
															    <select id="From_State" class="from-state form-control trans_plc_ord" required>
															    	<option value="">Select State</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="From_City">From City, District<sup>*</sup></label>
														     	<select id="From_city" class="from-city form-control">
																    <option value="">Select City District</option>
																</select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="From_location">From Where in City (Area)<sup>*</sup></label>
															    <input type="text" id="from_location" class="where-in-city form-control" required disabled="">
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
														     	<select id="To_city" class="from-city form-control">
																    <option value="">Select City District</option>
																</select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="to_location">To Where in City (Area)<sup>*</sup></label>
															    <input type="text" id="to_location" class="where-in-city form-control" required disabled="">
															</div>
														</article>
													</div>
													
													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="detail_address_from">Detail Address from Where Service is required<sup>*</sup></label>
															    <input type="text" class="form-control" id="detail_address_from" required>
															</div>
														</article>
														<article class="col-md-6">
															<div class="row">
																<article class="col-md-4">
																	<div class="form-group">
																	    <label for="detail_address_from">From Floor<sup>*</sup></label>
																	    <select id="f_floor" class="from-city form-control" required>
																	    	<option value="G">Ground</option>
																		    <?php for($ff=1; $ff<=50;$ff++){ ?><option value="<?php echo $ff; ?>"><?php echo $ff; ?></option><?php }
																		    ?>
																		</select>
																	</div>
																</article>
																<article class="col-xs-8">
																	<label class="labl">Lift Facility<sup>*</sup></label>
																	<br><br>
																	<div class="checkbox">
																	  	<input id="from_lift_radio1" type="radio" name="check1" value="2" required>
																	  	<label for="from_lift_radio1">Yes </label>
																	  	<input id="from_lift_radio2" type="radio" name="check1" value="1" required>
																	  	<label for="from_lift_radio2">No </label>
																	  	<input id="to_lift_radio6" type="radio" name="check1" value="3" required>
																	  	<label for="to_lift_radio6">Do Not Known </label>
																	</div>
																</article>
															</div>
														</article>
														
													</div>
													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="detail_address_to">Detail Address to Where Service is Provide<sup>*</sup></label>
															    <input type="text" class="form-control" id="detail_address_to" required>
															</div>
														</article>
														<article class="col-md-6">
															<div class="row">
																<article class="col-md-4">
																	<div class="form-group">
																	    <label for="detail_address_from">To Floor<sup>*</sup></label>
																	    <select id="t_floor" class="from-city form-control" required>
																		    <option value="G">Ground</option>
																		    <?php for($tf=0; $tf<=50;$tf++){ ?><option value="<?php echo $tf; ?>"><?php echo $tf; ?></option><?php }
																		    ?>
																		</select>
																	</div>
																</article>
																<article class="col-xs-8">
																	<label class="labl">Lift Facility<sup>*</sup></label>
																	<br><br>
																	<div class="checkbox">
																	  	<input id="to_lift_radio3" type="radio" name="check1-1" value="2" required>
																	  	<label for="to_lift_radio3">Yes </label>
																	  	<input id="to_lift_radio4" type="radio" name="check1-1" value="1" required>
																	  	<label for="to_lift_radio4">No </label>
																	  	<input id="to_lift_radio5" type="radio" name="check1-1" value="3" required>
																	  	<label for="to_lift_radio5">Do Not Known </label>
																	</div>
																</article>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-8">
															<div class="form-group">
															    <label for="service">Service required for<sup>*</sup></label>
															    <select id="service" class="form-control service" required>
															    	<option value="">Select Service Type</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-4">
															<div class="form-group">
															    <label for="pm_schedule_date">Schedule Date<sup>*</sup></label>
															    <input type="text" class="form-control" id="pm_schedule_date" required>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-12">
															<div class="form-group">
															    <label for="work_description_pm">Description of Goods<sup>*</sup></label>
															    <textarea id="work_description_pm" class="form-control" required></textarea>
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-12 text-center">
															<input type="button" id="pm_plc_ord" class="form-control pm_plc_ord" value="Place Order" required>
														</article>
														<!-- color:#37b1d8; -->
														<span id="form_validation_msg" style="color:red;"></span>
													</div>

										    	</form>
										    </div>
										    <!-- tab two ends -->
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
		$('#radio3').on('change', function () {
			var url = '<?php echo site_url('/userdashboard/place_crane_order') ?>';
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
						obj.find('.from-city').empty();
						obj.find('.from-city').val('');
						obj.find('.where-in-city').removeAttr('disabled');
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

		// to placed order for packer mover
		$(".pm_plc_ord").click(function(event) {
	   		var objPMSection = $('.packer div.mover');       		
	   		
	   		var user_id 				= objPMSection.find("#uid").val();
	        var odr_by_fname			= objPMSection.find("#F_name").val();
	        var odr_by_lname			= objPMSection.find("#L_name").val();
	        var odr_by_mob				= objPMSection.find("#mobile").val();
	        var from_state 				= objPMSection.find("#From_State").val();
	        var from_city 				= objPMSection.find("#From_city").val();
	        var from_location 			= objPMSection.find("#from_location").val();
	        var to_state				= objPMSection.find("#To_State").val();
	        var to_city 				= objPMSection.find("#To_city").val();
	        var to_location 			= objPMSection.find("#to_location").val();
	        
	        // var user_type_id 			= objPMSection.find("#material").val();
	        var user_type_id 			= '3';
	        var detailed_from_address 	= objPMSection.find("#detail_address_from").val();
	        var shift_floor_from 		= objPMSection.find("#f_floor").val();
	        var from_lift_facility 		= $("input[name=check1]:checked").val();
	        var detailed_to_address 	= objPMSection.find("#detail_address_to").val();
	        var shift_floor_to 			= objPMSection.find("#t_floor").val();
	        var to_lift_facility 		= $("input[name=check1-1]:checked").val();
			var service_for 			= objPMSection.find("#service").val();
	        var sechdule_date	 		= objPMSection.find("#pm_schedule_date").val();
	        var desc_of_goods			= objPMSection.find("#work_description_pm").val();
	        
	        if(user_id == '' || odr_by_fname == '' || odr_by_lname == '' || odr_by_mob == '' || from_state == '' || from_city == '' || from_location == '' || to_state == '' || to_city == '' || to_location == '' || detailed_from_address == '' || shift_floor_from == '' || from_lift_facility == '' || detailed_to_address == '' || shift_floor_to == '' || to_lift_facility == '' || service_for == '' || sechdule_date == '' || desc_of_goods == '' ){
	        	$('#form_validation_msg').empty();
			    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        }
	        else{

		        $.ajax({
			        type: "POST",
			        url: "/gmt/Enquiry_form_pm/enquiry_form_pm",
			        cache: false,
			        dataType: 'json',
			        data: {
			        	user_id					: user_id,
			        	user_type_id			: user_type_id,
						odr_by_fname			: odr_by_fname,
						odr_by_lname			: odr_by_lname,
						odr_by_mob 				: odr_by_mob,
						from_state				: from_state,
						from_city				: from_city,
						from_location			: from_location,
						to_state				: to_state,
						to_city					: to_city,
						to_location				: to_location,
						detailed_from_address	: detailed_from_address,
						shift_floor_from		: shift_floor_from,
						from_lift_facility		: from_lift_facility,
						detailed_to_address		: detailed_to_address,
						shift_floor_to			: shift_floor_to,
						to_lift_facility		: to_lift_facility,
						service_for				: service_for,
						sechdule_date			: sechdule_date,
						desc_of_goods			: desc_of_goods
			       	},
			        success: function(res) {
			            if (res.status_code == 200)
			            {
			              	$('#form_validation_msg').empty();
				            $('<p><strong>Order placed Successfully.</strong></p>').appendTo('#form_validation_msg');
			              	$('.plc_ord_pm')[0].reset();
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