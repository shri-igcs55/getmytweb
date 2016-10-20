<!-- ### SELECT STATION PAGE ### -->
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
							<div class="tab-pane fade in active" id="plc_crn_statns">
								<div class="row">
				    				<article class="col-md-12">
				    					<div class="section_head">
											<h1>Select <span>Station</span></h1>
										</div>
				    				</article>
				    			</div>
				    			<div class="row">
				    				<article class="col-md-12">
				    					<div class="">
				    						<div id="" class="">
				    							<form action="" method="post" class="save_stations" id="save_stations">
												<?php $station_limit = 3; // set it dynamic only, Assign here only?>												
												<input type="hidden" name="station_limit" value="<?php echo $station_limit?>">
												<input type="hidden" name="station_count" value="<?php echo ((count($ObjStation->data)==0 ? 1 : count($ObjStation->data)+1)>$station_limit ? $station_limit : count($ObjStation->data)+1);?>">
					    							
													
													
													
													<div class="addmore_wrp">
										    			<ul class="list-unstyled select_station_list">
														<?php foreach($ObjStation->data as $station):?>
																
															<li>
										    					<div class="row">
																	<article class="col-md-4">
																		<div class="form-group">
																		    <label for="From_State">From State<sup>*</sup></label>
																		    <label><?php echo $station->from_state?></label>
																		</div>
																	</article>
																	<article class="col-md-4">
																		<div class="form-group">
																		    <label for="From_City">From City, District<sup>*</sup></label>
																	     	 <label><?php echo $station->from_city?></label>
																		</div>
																	</article>																	
																</div>
																<div class="row">
																	<article class="col-md-4">
																		<div class="form-group">
																		    <label for="To_State">To State<sup>*</sup></label>
																		     <label><?php echo $station->to_state?></label>
																		</div>
																	</article>
																	<article class="col-md-4">
																		<div class="form-group">
																		    <label for="To_City">To City, District<sup>*</sup></label>
																	     	 <label><?php echo $station->to_city?></label>
																		</div>
																	</article>
																</div>
										    				</li>
															
														
														<?php endforeach;?>
														
														<?php
														if($station_limit != count($ObjStation->data)):?>
										    				<li class="default">
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
																</div>
										    				</li>
														<?php endif;?>
															
															
										    			</ul>
														<span class="error"></span>
														<a class="add_more_btn add_more_station">+ add more</a>														
										    		</div><br><br>
													
								
								
					    								
					    							
					    							<ul class="btn-list list-inline">
					    								<li>
					    									<button type="submit" class="btn btn_cmmn_red">Save State</button>
					    								</li>					    								
					    							</ul>
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
	$(document).ready(function(){
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
		
		
		$("a.add_more_station").click(function(){
			if($('input[name=station_limit]').val()==$('input[name=station_count]').val()){
				$('.error').html('You can not add more station');
				return false;
			}
				
			var ddd = $(".addmore_wrp ul li:last-child").clone();			
			ddd.find('.custom-combobox').remove();
			ddd.find('input[type="text"]').val(' ');
			
			$('.addmore_wrp ul').append(ddd);
			$( ".From_city" ).combobox();
			$( ".To_city" ).combobox();
			$('input[name=station_count]').val(parseInt($('input[name=station_count]').val())+1);
		});
		
		/*
		$("a.remove_more_station").click(function(){
			$('.error').html(' ');
			$(".addmore_wrp ul li.default:last-child").not(".addmore_wrp ul li.default:first-child").remove();
			if($('input[name=station_count]').val()!=1){
				$('input[name=station_count]').val(parseInt($('input[name=station_count]').val())-1);
			}
		});
		*/
		
		$('form#save_stations').submit(function(ev){
			//e.preventDefault(); // avoid to execute the actual submit of the form.			
			$.ajax({
				type: "POST",
				url: "/gmt/select_station/select_station",
				data: $(this).serialize(), // serializes the form's elements.
				success: function(data)
				{					
					location.reload();
				}
			});
			ev.preventDefault();
		});
	});
</script>