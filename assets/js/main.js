// main js
$(document).ready(function(){

	// adding active class to main menu
	$('.bottom-menu li a').on('click', function(){
		$('.bottom-menu li a').removeClass('active');
		$(this).addClass('active');

	});
	// ===========


	// mobile menu actions
	$('.mobile-menu-icn i').on('click', function(){
		$(this).toggleClass('fa-bars fa-times');
		$('.mobile-menu-wrp').slideToggle(300);
	});
	// ===========


	// sign in form validation
	$('.signin').on('click',function(){
		var name = $('#email_phn').val();
		var paswrd = $('#paswrd').val();
		if (name == "") {
			 $('#email_phn').focus();
			 return false
		}
		else if (paswrd == "") {
			 $('#paswrd').focus();
			 return false
		}
	});
	// ==============

	// ===== 
	// Search order date picker
	$(function(){
	    $("#datepicker").datepicker();
	});

	// Search order date picker
	$(function(){
	    $("#schedule_date").datepicker();
	});

	// date picker for packer and mover place order
	$(function(){
		$("#pm_schedule_date").datepicker();
	});
	
	// date picker for crane provider
	$(function(){
		$("#crane_schedule_date").datepicker();
	});

	// sign up as tabs

	$('.signUpAs_each span').on('click', function(){
		$(this).parent().parent('li').siblings().removeClass('active');
		$(this).parent().parent('li').addClass('active');
		
	});
		
		// home slider
	var owl_1 = $('.owl-carousel_1');
	// owl.owlCarousel();

	owl_1.owlCarousel({
	    loop:true,
	    // margin:10,
	    autoplay:true,
	    autoplayTimeout:4000,
	    autoplaySpeed:1500,
	    navSpeed:true,
	    navSpeed:1000,
	    nav:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})
	 

  	$('.owl-next_c').click(function() {
	    owl_1.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.owl-prev_c').click(function() {
	    owl_1.trigger('prev.owl.carousel');
	})




	// home slider
	var owl_2 = $('.owl-carousel_2');
	// owl.owlCarousel();

	owl_2.owlCarousel({
	    loop:true,
	    // margin:10,
	    autoplay:true,
	    autoplayTimeout:4000,
	    autoplaySpeed:1500,
	    navSpeed:true,
	    navSpeed:1000,
	    nav:false,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})

	$('.owl-next_c').click(function() {
	    owl_2.trigger('next.owl.carousel');
	})
	// Go to the previous item
	$('.owl-prev_c').click(function() {
	    owl_2.trigger('prev.owl.carousel');
	})




	// home animated button
	$(".goto_btn").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#about").offset().top +20
	    }, 1000);
	});

    $("a#add_more").click(function(){
		var ddd = $(".addmore_wrp ul li:first-child").clone();
		ddd.find('.custom-combobox').remove();
		ddd.find('input[type="text"]').val(' ');
		
		$('.addmore_wrp ul').append(ddd);
		$( ".From_city" ).combobox();
		$( ".To_city" ).combobox();
    });

    $("a.remove_more_btn").click(function(){
    	$(".addmore_wrp ul li:last-child").not(".addmore_wrp ul li:first-child").remove();
    });

	// refresh img animation
    var angle = 180;
    
    $(document).on("click", ".refresh", function() {	
       
        $(".img").css ({
            '-webkit-transform': 'rotate(' + angle + 'deg)',
            '-moz-transform': 'rotate(' + angle + 'deg)',
            '-o-transform': 'rotate(' + angle + 'deg)',
            '-ms-transform': 'rotate(' + angle + 'deg)',
        });
        angle+=180; 
    });
	
});






/* This doc ready is for form submition or view data */
$(document).ready(function(){

	// to get state list
	var loadingStatelist = $('section.custmer_reg');
	var states = $('.tab-content div.active').find('.state');
	//$('.state section.custmer_reg').load(function(){
		
	$('.state').one('click',function(){
		//alert("working");
		jQuery.ajax({
			type:"GET",
			url: "/gmt/Indian_city_dropdown/state_dropdown",
			success: function(res){
				if(res.status_code == 200){
					$(".district").removeAttr("disabled");
					$(".district").removeAttr("title");
					$('.state').empty();
					$('<option value="">Select State</option>').appendTo('.state');
					$.each(res.data, function(key, val) {
		            	$.each(val, function(k, v){
		                    $('<option value="'+v+'">'+v+'</option>').appendTo('.state');
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
	$(".state").change(function(event){
        var state = $(this).find("option:selected").text();
        jQuery.ajax({
	    	type:"POST",
			url: "/gmt/Indian_city_dropdown/district_dropdown",
			dataType: 'json',
	        data: { state: state },
			success: function(res){
				if(res.status_code == 200){
					$(".city").removeAttr("disabled");
					$(".city").removeAttr("title");
					$('.district').val('');
					var option ='<option value="">Select District</option>';
		            $.each(res.data, function(key, val) {
		            	$.each(val, function(k, v){
		                    option +='<option value="'+v+'">'+v+'</option>';
		                });
		            });
		            $('.tab-content div.active').find('.district').html(option);
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

	// to get district list
	$(".district").change(function(event){
		event.preventDefault();
        var state = $('.tab-content div.active').find('.state option:selected').text();
        var district = $(this).find("option:selected").text();
        jQuery.ajax({
	    	type:"POST",
			url: "/gmt/Indian_city_dropdown/city_dropdown",
			dataType: 'json',
	        data: { 
	        	state: state,
	        	district: district
	        },
			success: function(res){
				if(res.status_code == 200){
					$('.city').val('');
					var option ='<option value="">Select City</option>';
		            $.each(res.data, function(key, val) {
		            	option +='<option value="'+val['id']+'">'+val['city']+'</option>';
		            });
					$('.tab-content div.active').find('.city').html(option);
					// $('.form_wrp').find('.city').html(option);
				}else{
					console.log('No response.');
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});
	});

	// to load material types
	$('.material').one('click', function(){
		jQuery.ajax({
			type:"GET",
			url: "/gmt/User/material_type_list",
			success: function(res){
				if(res.status_code == 200){
					$('.material').empty();
					$('<option value="">Select Material Type</option>').appendTo('.material');
					$.each(res.data, function(key, val) {
		            	// $.each(val, function(k, v){
		                    $('<option value="'+val['mid']+'">'+val['mtype']+'</option>').appendTo('.material');
		                // });
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

	// to load service types
	$('.service').one('click', function(){
		jQuery.ajax({
			type:"GET",
			url: "/gmt/Service_dropdown/available_service",
			success: function(res){
				if(res.status_code == 200){
					$('.service').empty();
					$('<option value="">Select Service Type</option>').appendTo('.service');
					$.each(res.data, function(key, val) {
		            	// $.each(val, function(k, v){
		                    $('<option value="'+val['id']+'">'+val['service_type']+'</option>').appendTo('.service');
		                // });
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

	// to load Designation types
	$('.Designatn').one('click', function(){
		jQuery.ajax({
			type:"GET",
			url: "/gmt/user/designation_type_list",
			success: function(res){
				if(res.status_code == 200){
					$('.Designatn').empty();
					$('<option value="">Select Designation Type</option>').appendTo('.Designatn');
					$.each(res.data, function(key, val) {
		            	// $.each(val, function(k, v){
		                    $('<option value="'+val['id']+'">'+val['designation']+'</option>').appendTo('.Designatn');
		                // });
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

	// to get company type
	$('.ctype').one('click', function(){
		jQuery.ajax({
			type:"GET",
			url: "/gmt/User/comp_type_list",
			success: function(res){
				if(res.status_code == 200){
					$('.ctype').empty();
					$('<option value="">Select Company Type</option>').appendTo('.ctype');
					$.each(res.data, function(key, val) {
		            	// $.each(val, function(k, v){
		                    $('<option value="'+val['cid']+'">'+val['ctype']+'</option>').appendTo('.ctype');
		                // });
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

	// to load vehicle types
	$('.vehicle').one('click', function(){
		jQuery.ajax({
			type:"GET",
			url: "/gmt/User/vehicle_list",
			success: function(res){
				if(res.status_code == 200){
					$('.vehicle').empty();
					$('<option value="">Select Vehicle Type</option>').appendTo('.vehicle');
					$.each(res.data, function(key, val) {
		            	// $.each(val, function(k, v){
		                    $('<option value="'+val['vid']+'">'+val['vtype']+'</option>').appendTo('.vehicle');
		                // });
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

	// Ajax post for refresh captcha image.
   	$(".captcha_img").click(function() {
    	jQuery.ajax({
            type: "POST",
            url: base_url+"user/captcha_refresh",
            success: function(res) {
				
				var res = jQuery.parseJSON(res);                    	
				jQuery('input:hidden[name=hidden_captcha]').val(res.word);
				jQuery(".captcha_image").html(res.image);
                
            },
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
        });
    }); // Captcha refresh function close

   	// Ajax post for submiting registration form
   	$(".cus-reg-sbmit").click(function(event) {
   		var objCurrentSection = $('.tab-content div.active');       		
   		
   		var captcha 		= objCurrentSection.find('#captcha').val();
        var captcha_word 	= $('input:hidden[name=hidden_captcha]').val();
        
        var first_name 		= objCurrentSection.find("#F_name").val();
		var last_name 		= objCurrentSection.find("#L_name").val();
        var user_mob 		= objCurrentSection.find("#M_number").val();
        var user_email 		= objCurrentSection.find("#E_mail").val();
        var user_pass 		= objCurrentSection.find("#password").val();
        var c_pass 			= objCurrentSection.find("#c_pass").val();
        var address1 		= objCurrentSection.find("#C_addrss").val();
        var address2 		= objCurrentSection.find("#C_addrss_2").val();
        // var country 		= $("#Country").val();
        var state 			= objCurrentSection.find("#State").val();
        var district 		= objCurrentSection.find("#District").val();
        var city 			= objCurrentSection.find("#City").val();
        var pin 			= objCurrentSection.find("#Pincode").val();
        var pkg_id 			= objCurrentSection.find("#pkg_id").val();
        var user_type 		= objCurrentSection.find("#user_type").val();

        // This four field are in company customer form
        var designation 	= objCurrentSection.find("#Designatn").val();
        var firm_name	 	= objCurrentSection.find("#FirmName").val();
        var company_type	= objCurrentSection.find("#C_type").val();
        var company_pan		= objCurrentSection.find("#email_phn").val();
        
        if(first_name == '' || user_mob == '' || user_pass == '' || address1 == '' || 
        	state == '' || district == '' || city == '' || pin == '' || captcha == '' ){
        	$('#form_validation_msg').empty();
		    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(designation == '' || firm_name == '' || company_type == '' || company_pan == ''){
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
		}else{

	        $.ajax({
		        type: "POST",
		        url: "/gmt/User/user_signup",
		        cache: false,
		        dataType: 'json',
		        data: {
		        	first_name 	: first_name,
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
					pan 		: company_pan
		       	},
		        success: function(res) {
		            if (res.status_code == 200)
		            {
		              	$('#form_validation_msg').empty();
			            $('<p><strong>Registered Successfully.</strong></p>').appendTo('#form_validation_msg');
		              	$('.reg_form')[0].reset();
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
   	/* ================Individual (cus-reg-sbmit) END========================== */

   	// update profile view only
   	$("#left_sidebar").load(function(){
		jQuery.ajax({
			type 	: "POST",
			url  	: "/gmt/View_profile/view_profile",
			dataType: "json",
			data	: {
				user_id : user_id
			},
			success: function(res){
				if(res.status_code == 200){
					$('.cust_up_prof')[0].reset();
					$.each(res.data, function(key, val) {
						$.each(val, function(k, v){
							if(k=='c_id'){
								$('#e_state').append($("<option selected value='"+val['state']+"'>"+val['state']+"</option>"));
								$('#e_district').append($("<option selected value='"+val['dstrt']+"'>"+val['dstrt']+"</option>"));
								$('#e_city').append($("<option selected value='"+val['c_id']+"'>"+val['city']+"</option>"));
							}else if(k=='designation_id'){
								$('#e_designatn').append($("<option selected value='"+val['designation_id']+"'>"+val['designation']+"</option>"));
								$('#e_company_type').append($("<option selected value='"+val['ctype_id']+"'>"+val['company_type']+"</option>"));
							}
							$("input[name$='"+k+"']").val(v);
		                });
		            });
				}else{
					alert('No Response for user profile. Please Contact Admin.');
					window.location = site_url+'userdashboard/place_transporter_order';
					console.log('No Response. Please Contact Admin.');
				}
			},
			error: function(){
				console.log('Something went wrong.');
			}
		}); // ajax
	}); // section load
   	// PROFILE HIDE AND SHOW
   	$('#myProfile').click(function(){
   		$('.myProfileMenu').slideToggle();
   	});

}); // Document ready close