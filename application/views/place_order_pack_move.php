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
				    					<div class="tab-content">
											<!-- tab two starts -->
										    <div id="place_packer" class="fade in">
										    	<form action="" class="pace_order_crn_form">

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
														<article class="col-md-8">
															<div class="form-group">
															    <label for="detail_address_from">Detail Address from Where Service is required<sup>*</sup></label>
															    <input type="text" class="form-control" id="detail_address_from" required>
															</div>
														</article>
														<article class="col-md-4">
															<div class="row">
																<article class="col-xs-8">
																	<label class="labl">Lift Facility<sup>*</sup></label>
																	<br><br>
																	<div class="checkbox">
																	  	<input id="from_lift_radio1" type="radio" name="check1" value="check1" required>
																	  	<label for="from_lift_radio1">Yes </label>
																	  	<input id="from_lift_radio2" type="radio" name="check1" value="check1" required>
																	  	<label for="from_lift_radio2">No </label>
																	</div>
																</article>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-8">
															<div class="form-group">
															    <label for="detail_address_to">Detail Address to Where Service is Provide<sup>*</sup></label>
															    <input type="text" class="form-control" id="detail_address_to" required>
															</div>
														</article>
														<article class="col-md-4">
															<div class="row">
																<article class="col-xs-12">
																	<label class="labl">Lift Facility<sup>*</sup></label>
																	<br><br>
																	<div class="checkbox">
																	  	<input id="to_lift_radio3" type="radio" name="check1-1" value="check1" required>
																	  	<label for="to_lift_radio3">Yes </label>
																	  	<input id="to_lift_radio4" type="radio" name="check1-1" value="check1" required>
																	  	<label for="to_lift_radio4">No </label>
																	  	<input id="to_lift_radio5" type="radio" name="check1-1" value="check1" required>
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
															    <label for="work_description_pm">Description of Work<sup>*</sup></label>
															    <textarea id="work_description_pm" class="form-control" required></textarea>
															</div>
														</article>
													</div>

													<div class="row">
														<article class="col-md-12 text-center">
															<input type="button" id="pm_plc_ord" class="form-control pm_plc_ord" value="Place Order" required>
														</article>
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


	});
</script>