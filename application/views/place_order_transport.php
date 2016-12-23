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
											<h1>Place Order for <span>Transporter / Logistic Service</span></h1>

											<div class="radio_grp row">
												<div class="col-sm-4">
													<input type="radio" name="radio" id="radio1" class="radio" checked/>
													<label for="radio1">Transporter / Logistic</label>
												</div>

												<div class="col-sm-4">
													<input type="radio" name="radio" id="radio2" class="radio"/>
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
				    					<div class="transporter">
										    <div id="" class="logestic_form">
										    	<form id="trans_ordr" name="trans_ordr" action="" class="plc_ord_frm pace_order_crn_form">
										    		<div class="addmore_wrp">
										    			<ul>
										    				<li>
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
																	     	<select id="From_city" name="from_city[]" class="from-city From_city form-control">
																			    <option value="">Select City District</option>
																			</select>
																		</div>
																	</article>
																	<article class="col-md-4">
																		<div class="form-group">
																		    <label for="From_location">From Where in City (Area)<sup>*</sup></label>
																		    <input type="text" id="from_location" name="from_location[]" class="where-in-city form-control" required disabled="">
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
																	     	<select id="To_city" name="to_city[]" class="from-city To_city form-control">
																			    <option value="">Select City District</option>
																			</select>
																		</div>
																	</article>
																	<article class="col-md-4">
																		<div class="form-group">
																		    <label for="to_location">To Where in City (Area)<sup>*</sup></label>
																		    <input type="text" id="to_location" name="to_location[]" class="where-in-city form-control" required disabled="">
																		</div>
																	</article>
																</div>
										    				</li>
										    			</ul>
														<a id="add_more" class="add_more_btn">+ add more</a>
														<a id="remove_more" class="remove_more_btn">remove</a>
										    		</div><br><br>
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
															    <input type="text" class="form-control" id="mobile" required min="10" max="10" minlength="10" maxlength="10" >
															</div>
														</article>
										    		</div>
											    	<div class="row">
														<article id="mt" class="col-md-6">
															<div class="form-group">
															    <label for="material">Material Type<sup>*</sup></label>
															    <select id="material" class="material form-control" required title="Select Material Type">
															    	<option value="">Select Material Type</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article id="othr_mt" hidden="" class="col-md-3">
															<div class="form-group">
																<label for="mtr_typ">&nbsp;</label>
															    <input name="mtr_typ" type="text" class="form-control" id="mtr_typ" placeholder="Other Material Type" required>
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
															    <input maxlength="5" type="text" class="form-control" id="nag" pattern="[0-9]*">
															</div>
														</article>
														<article class="col-md-6">
															<div class="form-group">
															    <label for="weight">Weight (Estimate in Tons)</label>
															    <input type="text" class="form-control" id="weight">
															</div>
														</article>
													</div>

													<div class="row">
														<article id="vt" class="col-md-6">
															<div class="form-group">
															    <label for="vehicle_type">Vehicle Type<sup>*</sup></label>
															    <select id="vehicle_type" class="vehicle form-control" required title="Select Vehicle Type">
															    	<option value="">Select Vehicle Type</option>
															    	<option value="">Loading...</option>
															    </select>
															</div>
														</article>
														<article id="othr_vt" hidden="" class="col-md-3">
															<div class="form-group">
																<label for="vhl_typ">&nbsp;</label>
															    <input name="vhl_typ" type="text" class="form-control" id="vhl_typ" placeholder="Other Vehicle Type" required>
															</div>
														</article>
														<article class="col-md-3">
															<div class="form-group">
															    <label for="vehicle_no">No. of Vehicle<sup>*</sup></label>
															    <input type="text" class="form-control" id="vehicle_no" required pattern="[1-9]*" value="1">
															</div>
														</article>
														<article class="col-md-3">
															<div class="form-group">
															    <label for="schedule_date">Schedule Date<sup>*</sup></label>
															    <input type="text" class="form-control" id="schedule_date" required>
															</div>
														</article>
													</div>

													<div class="row">
														<!-- <article class="col-md-3">
															<div class="form-group">
															    <label for="pick_point">Pickup Points<sup>*</sup></label>
															    <input type="number" class="form-control" id="pick_point" required>
															</div>
														</article>
														<article class="col-md-3">
															<div class="form-group">
															    <label for="drop_point">Drop Points<sup>*</sup></label>
															    <input type="number" class="form-control" id="drop_point" required>
															</div>
														</article> -->
														
													</div>
													<div class="row">
														<article class="col-md-12 text-center">
															<input type="button" id="plc-ord-sbmit" class="form-control plc-ord-sbmit" value="Place Order">
														</article>
													</div>
													<!-- color:#37b1d8; -->
													<span id="form_validation_msg"></span>
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

<style>
.addmore_wrp ul li{
	margin-bottom: 30px;
}
</style>

<!-- place order transporter starts -->

<script type="text/javascript">
	$('#material').change(function() {
	    var selected = $(this).val();
	    if(selected == '1'){
	    	$('#mt').attr('class', 'col-md-3');
	    	$('#othr_mt').show();
	    }
	    else{
	    	$('#mt').attr('class', 'col-md-6');
	    	$('#othr_mt').hide();
	    }
	});
	/*$('#vehicle_type').change(function() {
	    var selected = $(this).val();
	    if(selected == '1'){
	    	$('#vt').attr('class', 'col-md-3');
	    	$('#othr_vt').show();
	    }
	    else{
	    	$('#vt').attr('class', 'col-md-6');
	    	$('#othr_vt').hide();
	    }
	});*/

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
    
  } );
</script>
<script type="text/javascript">
	$(document).ready(function(){

		$('#radio2').on('change', function () {
			var url = '<?php echo site_url('/userdashboard/place_packer_mover_order') ?>';
			if (url) { // require a URL
		    	window.location = url; // redirect
		    }
		    return false;
		});
		$('#radio3').on('change', function () {
			var url = '<?php echo site_url('/userdashboard/place_crane_order') ?>';
			if (url) { // require a URL
		    	window.location = url; // redirect
		    }
		    return false;
		});

		$('.addmore_wrp').on('click','.from-state',function(){
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
		$('.addmore_wrp').on('change','.from-state',function(event){
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

		// Ajax post for submiting registration form
	   	$(".plc-ord-sbmit").click(function(event) {
	   		var objCurrentSection = $('.transporter div.logestic_form');
			$('#form_validation_msg').empty();
			event.preventDefault();
	   		
	   		var user_id 			= objCurrentSection.find("#uid").val();
	        var first_name			= objCurrentSection.find("#F_name").val();
	        var last_name			= objCurrentSection.find("#L_name").val();
	        var user_mob			= objCurrentSection.find("#mobile").val();
	        var from_city 			= objCurrentSection.find("select[name='from_city[]']");
	        var from_location 		= objCurrentSection.find("input[name='from_location[]']");
	        var to_city 			= objCurrentSection.find("select[name='to_city[]']");
	        var to_location 		= objCurrentSection.find("input[name='to_location[]']");

	        var material_type 		= objCurrentSection.find("#material").val();
	        var other_material_type = objCurrentSection.find("#mtr_typ").val();

	        var no_of_quantity 		= objCurrentSection.find("#nag").val();
	        var weight 				= objCurrentSection.find("#weight").val();
	        
	        var feet 				= objCurrentSection.find("#length").val();

	        var vehicle_type 		= objCurrentSection.find("#vehicle_type").val();
	        var other_vehicle_type 	= objCurrentSection.find("#vhl_typ").val();

	        var no_of_vehicle 		= objCurrentSection.find("#vehicle_no").val();
	        var pickup_points 		= objCurrentSection.find("#pick_point").val();
			var destination_points 	= objCurrentSection.find("#drop_point").val();
	        var sechdule_date	 	= objCurrentSection.find("#schedule_date").val();
	        
			if(validatePhoneNumber(user_mob) == false){
				$('<p style="color:#ed4343;"><strong>Mobile Number is not valid.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
			}else if(validateWeight(weight) == false){
	        	$('<p style="color:#ed4343;"><strong>Weight is not valid.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
			}else if(validateNag(no_of_quantity) == false){
	        	$('<p style="color:#ed4343;"><strong>Nag (Quantity) is not valid.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
			}else if(validateLength(feet) == false){
	        	$('<p style="color:#ed4343;"><strong>Length is not valid.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
			}
			var array_from_city = new Array();
			var array_from_location = new Array();
			var array_to_city = new Array();
			var array_to_location = new Array();
			
			from_city.each(function(index,val1){
				if($(this).val()=='' || from_location.eq(index).val()=='' || to_city.eq(index).val()=='' || to_location.eq(index).val()==''){	
					$('<p style="color:red"><strong>Select City and Locations</strong></p>').appendTo('#form_validation_msg');
					return false;
				}
				else
				{
					array_from_city[index] = $(this).val();
					array_from_location[index] = from_location.eq(index).val();
					array_to_city[index] = to_city.eq(index).val();
					array_to_location[index] = to_location.eq(index).val();
				}
			});
			
			if(no_of_quantity == '' && weight == ''){
				$('<p style="color:red"><strong>Any one field must not be empty from Nag & Weight.</strong></p>').appendTo('#form_validation_msg');
				return false;
			}
	        else if(user_id == '' || first_name == '' || last_name == '' || user_mob == '' || material_type == '' || vehicle_type == '' || no_of_vehicle == '' || sechdule_date == '' ){
			    $('<p style="color:red"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        	return false;
			}
	        else{

		        $.ajax({
			        type: "POST",
			        url: "/gmt/Enquiry_form/enquiry_form",
			        cache: false,
			        dataType: 'json',
			        data: {
			        	user_id				: user_id,
						odr_by_fname		: first_name,
						odr_by_lname		: last_name,
						odr_by_mob 			: user_mob,
						from_city			: array_from_city,
						from_location		: array_from_location,
						to_city				: array_to_city,
						to_location			: array_to_location,
						material_type		: material_type,
						other_material_type	: other_material_type,
						no_of_quantity		: no_of_quantity,
						weight				: weight,
						feet				: feet,
						vehicle_type		: vehicle_type,
						other_vehicle_type	: other_vehicle_type,
						no_of_vehicle		: no_of_vehicle,
						pickup_points		: pickup_points,
						destination_points	: destination_points,
						sechdule_date		: sechdule_date
			       	},
			        success: function(res) {
			            if (res.status_code == 200)
			            {
			              	$('#form_validation_msg').empty();
				            $('<p style="color:#00ff00"><strong>Order placed Successfully.</strong></p>').appendTo('#form_validation_msg');
			              	$('.plc_ord_frm')[0].reset();
				            /*$.each(res.data, function(key, val) {
				            	$.each(val, function(k, v){
				                    $('<li>'+v+'</li>').appendTo('#test');
				                });
				            });*/
			            }else{
				            $('#form_validation_msg').empty();
				            $.each(res.data, function(key, val) {
				            	$('<p style="color:red"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
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