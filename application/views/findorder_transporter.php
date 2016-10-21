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
				    							<form method="POST" action="<?php echo site_url('/UserDashboard/view_search_result');?>" class="pace_order_crn_form">
				    								<div class="row">
														<article class="col-md-6 from_state_article">
															<div class="form-group select_from_state">
															    <label for="From_State">From State<sup>*</sup></label>
															    <select id="From_State" name="From_State" class="from-state form-control trans_plc_ord">
															    	<option value="">Select State</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="From_City">From City, District<sup>*</sup></label>
														     	<select id="From_city" name="From_city" class="from-city From_city form-control">
																    <option value="">Select City District</option>
																</select>
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-6 from_state_article">
															<div class="form-group select_from_state">
															    <label for="To_State">To State<sup>*</sup></label>
															    <select id="To_State" name="To_State" class="from-state trans_plc_ord form-control">
															    	<option value="">Select State</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="To_City">To City, District<sup>*</sup></label>
														     	<select id="To_city" name="To_city" class="from-city To_city form-control">
																    <option value="">Select City District</option>
																</select>
															</div>
														</article>
													</div>
				    								
													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="vehicle_type">Vehicle Type</label>
															    <select id="vehicle_type" name="vehicle_type" class="vehicle form-control" title="Select Vehicle Type">
															    	<option value="">Select Vehicle Type</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="weight">Weight</label>
															    <input type="text" class="form-control" id="weight" name="weight">
															</div>
														</article>
													</div>
													<div class="row">
														<article class="col-md-6">
															<div class="form-group">
															    <label for="feet_in_length">Feet(in Length)</label>
															    <input type="text" class="form-control" id="feet_in_length" name="feet_in_length">
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="pickup_date">Date</label>
															    <input type="text" class="form-control calander_bgimage" name="pickup_date" id="pickup_date">
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
<!-- place order transporter starts -->
<script>
// this code is for auto complete in place order page after login
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

	$( ".From_city" ).combobox();
	$( ".To_city" ).combobox();
});
</script>
<script type="text/javascript">
	
	$('.pace_order_crn_form').on('click','.from-state',function(){
		if(!$(this).hasClass('clicked'))
				$(this).addClass('clicked');
			else
				return false;
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
	$('.pace_order_crn_form').on('change','.from-state',function(event){
		//$(".from-state").change(function(event){
		//alert('test');
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
		            	// $.each(val, function(k, v){
		                    option +='<option value="'+val['id']+'">'+val['city']+', '+val['district']+'</option>';
		                // });
		            });
		            $('.tab-content div.active').find(obj.find('.from-city')).html(option);
		            // $('.form_wrp').find('.district').html(option);
				}else{
					console.log('No response.');
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});
	});

</script>