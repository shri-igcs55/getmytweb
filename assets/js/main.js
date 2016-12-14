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
	    $("#datepicker,#schedule_date,#pm_schedule_date,#crane_schedule_date,#pickup_date").datepicker(
	    	{
	    		dateFormat: 'dd-mm-yy'
	    	}).val();
	});

	// Search order date picker
	// $(function(){
	//     $("#schedule_date").datepicker();
	// });

	// date picker for packer and mover place order
	// $(function(){
	// 	$("#pm_schedule_date").datepicker();
	// });
	
	// date picker for crane provider
	// $(function(){
	// 	$("#crane_schedule_date").datepicker();
	// });

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

	// to get group list
	$("#contact_list_table").load(function(){
        var user_id = $('#u_id').val();
        
        jQuery.ajax({
	    	type:"POST",
			url: "/gmt/Save_contact/listGroup",
			dataType: 'json',
	        data: { user_id: user_id },
			success: function(res){
				if(res.status_code == 200){
					
					var option = '<tr><td colspan="5"> No Data</td></tr>';
		            $.each(res.data, function(key, val) {
		            	option +='<tr><td><div class="checkbox"><input type="checkbox" id="add6"><label for="add6"></label></div></td><td>Sreekanth</td><td>9876543210</td><td>sreee52648@gmail.com</td><td>Transport</td></tr>';
		            });
		            $('.contactlisthead').html(option);
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
   		$('#form_validation_msg').empty();
   		var captcha 		= objCurrentSection.find('#captcha').val();
        var captcha_word 	= $('input:hidden[name=hidden_captcha]').val();
        
        var first_name		= objCurrentSection.find("#F_name").val();		
		var last_name 		= objCurrentSection.find("#L_name").val();
        var user_mob		= objCurrentSection.find("#M_number").val();
        var user_email 		= objCurrentSection.find("#E_mail").val();
        var user_pass		= objCurrentSection.find("#password").val();
        var c_pass			= objCurrentSection.find("#c_pass").val();
        var address1		= objCurrentSection.find("#C_addrss").val();
        var address2		= objCurrentSection.find("#C_addrss_2").val();
        // var country 		= $("#Country").val();
        var state			= objCurrentSection.find("#State").val();
        var district		= objCurrentSection.find("#District").val();
        var city			= objCurrentSection.find("#City").val();
        var pin				= objCurrentSection.find("#Pincode").val();
        var pkg_id			= objCurrentSection.find("#pkg_id").val();
        var user_type		= objCurrentSection.find("#user_type").val();

        // This four field are in company customer form
        var designation		= objCurrentSection.find("#Designatn").val();
        var firm_name 		= objCurrentSection.find("#FirmName").val();
        var company_type	= objCurrentSection.find("#C_type").val();
        var company_pan		= objCurrentSection.find("#email_phn").val();

        if(designation == 'Other'){
        	var other_designation_new = objCurrentSection.find("#dsg_typ").val();
        }else{
        	var designation	= objCurrentSection.find("#Designatn").val();
        }
        
        if(company_type == 1){
        	var other_company_type_new = objCurrentSection.find("#cmp_typ").val();
        }else{
        	var company_type = objCurrentSection.find("#C_type").val();
        }
        
        if(first_name == '' || user_mob == '' || user_pass == '' || address1 == '' || 
        	state == '' || district == '' || city == '' || pin == '' || captcha == '' ){
        	$('<p style="color:#ed4343;"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(firm_name == '' || company_pan == ''){
        	$('<p style="color:#ed4343;"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(other_designation_new == '' || designation == ''){
        	$('<p style="color:#ed4343;"><strong>Designation field must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(other_company_type_new == '' || company_type == ''){
        	$('<p style="color:#ed4343;"><strong>Company Type field must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
		else if(captcha !== captcha_word){
			$('<p style="color:#ed4343;"><strong>Captcha code is wrong.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(objCurrentSection.find("input[name=check1]").prop('checked') === false){
        	$('<p style="color:#ed4343;"><strong>Please Read and Accept our Terms of Service and Privacy Policy.</strong></p>').appendTo('#form_validation_msg');
		}else{
			var cust_comp_reg = objCurrentSection.closest('.active').find('form').serialize();
			// alert(cust_comp_reg);
			$.ajax({
		        type: "POST",
		        url : "/gmt/User/user_signup",
		        data: cust_comp_reg,
		        success: function(res) {
		            if (res.status_code == 200)
		            {
		              	$('#form_validation_msg').empty();
			            $('<p style="color:#00ff00;"><strong>Registered Successfully</strong></p>').appendTo('#form_validation_msg');
		              	$('.reg_form')[0].reset();
		              	
		              	jQuery.ajax({
					    	type:"POST",
							url: "/gmt/User/user_signin",
							dataType: 'json',
					        data: { 
					        	email_mob: user_email,
					        	password : user_pass
					        	// utype_id : role
					        },
							success: function(res){
								if(res.status_code == 200){
									window.location = site_url+'userdashboard';
								}else{
									$.each(res.data, function(key, val) {
						            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
						            });
								}
							},
					        error: function(){
					        	console.log('Somthing went wrong while login.');
					        }
						});

		            }else{
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            });
		            }
	          	},
		        error: function(){
		        	console.log('Somthing went wrong while registration.');
		        }
	        });
	    }
    });


    /* update user profile cust_up_prof trans_update update_user_profile */
    $(".update_user_profile").click(function(event) {
   		
   		var objCurrentSection = $('.update_my_info div.active');       		
   		$('#form_validation_msg').empty();
   		
   		var first_name		= objCurrentSection.find("#e_F_name").val();		
		var last_name 		= objCurrentSection.find("#e_L_name").val();
        var address1		= objCurrentSection.find("#c_c_addrss").val();
        var address2		= objCurrentSection.find("#c_c_addrss_2").val();
        var state			= objCurrentSection.find("#e_state").val();
        var district		= objCurrentSection.find("#e_district").val();
        var city			= objCurrentSection.find("#e_city").val();
        var pin				= objCurrentSection.find("#e_pincode").val();
        var tin				= objCurrentSection.find("#TinNo").val();
        var stax			= objCurrentSection.find("#sTAX").val();
        
        // This four field are in company customer form
        var designation		= objCurrentSection.find("#e_designatn").val();
        var firm_name 		= objCurrentSection.find("#FirmName").val();
        var company_type	= objCurrentSection.find("#e_company_type").val();
        var pan				= objCurrentSection.find("#e_pan_no").val();
        
        if(first_name == '' || address1 == '' || state == '' || district == '' || city == '' || 
        	pin == '' || tin == '' || stax == '' || address2 == '' || last_name == ''){
        	$('<p style="color:#ed4343;"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else if(designation == '' || firm_name == '' || company_type == '' || pan == ''){
        	$('<p style="color:#ed4343;"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else{
        	var cust_comp_reg = objCurrentSection.closest('.update_my_info div.active').find('form').serialize();
			// alert(JSON.stringify(cust_comp_reg));
			$.ajax({
		        type: "POST",
		        url : "/gmt/User/user_update_profile",
		        data: cust_comp_reg,
		        success: function(res) {
		            if (res.status_code == 200)
		            {
		              	$('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('<p style="color:#00FF00;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            	}
			            });
		            }else{
			            $('#form_validation_msg').empty();
			            $.each(res.data, function(key, val) {
			            	$('<p style="color:#ed4343;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
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

   	// View profile view only
   	// $("#left_sidebar").load(function(){
   	// update profile view only
   	if($("#edit_profile").is(':visible')){

		jQuery.ajax({
			type 	: "POST",
			url  	: "/gmt/View_profile/view_profile",
			dataType: "json",
			data	: {
				user_id : ''
			},
			success: function(res){
				if(res.status_code == 200){
					$('.cust_up_prof')[0].reset();
					$.each(res.data, function(key, val) {
						$.each(val, function(k, v){
							if(k=='c_id'){
								$('#e_state').append($("<option selected value='"+val['state']+"'>"+val['state']+"</option>"));
								$('#e_district').append($("<option selected value='"+val['district']+"'>"+val['district']+"</option>"));
								$('#e_city').append($("<option selected value='"+val['c_id']+"'>"+val['city']+"</option>"));
							}else if(k=='designation_id'){
								if(val['designation_id'] != 0){
									$('#e_designatn').append($("<option selected value='"+val['designation_id']+"'>"+val['designation']+"</option>"));
								}else{
									$('#e_designatn').append($("<option selected value=''>Select Designation</option>"));
								}
								if(val['ctype_id'] != 0){
									$('#e_company_type').append($("<option selected value='"+val['ctype_id']+"'>"+val['company_type']+"</option>"));
								}else{
									$('#e_company_type').append($("<option selected value=''>Select Company Type</option>"));
								}
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
	} // section load

   	// PROFILE Menu HIDE AND SHOW
   	$('#myProfile').click(function(){
   		$('.myProfileMenu').slideToggle();
   	});
   	// Contact Menu HIDE AND SHOW
   	$('#myContact').click(function(){
   		$('.myContactMenu').slideToggle();
   	});

	$(".submit_contact").click(function(event) {
   		
   		$('#form_validation_msg').empty();
   		
   		var full_name	= $("#name").val();
		var user_email 	= $("#emailid").val();
        var user_mob	= $("#user_mob").val();
        var contact_msg	= $("#contact_msg").val();
        
        if(full_name == '' || user_email == '' || user_mob == '' || contact_msg == ''){
        	$('<p style="color:#ed4343; font-size:14px;"><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
        }
        else{
        	var cust_contact_msg = $('#contactus').serialize();
			$.ajax({
		        type: "POST",
		        url : "/gmt/contact_us/contact_us",
		        data: cust_contact_msg,
		        success: function(res) {
		            if (res.status_code == 200)
		            {
		              	$.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('<p style="color:#00ff00; font-size:14px;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            	}
			            });
			            $('.contactus')[0].reset();
		            }else{
			            $.each(res.data, function(key, val) {
			            	if(key == 'message'){
			            		$('<p style="color:#ed4343; font-size:14px;"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
			            	}
			            });
			            $('.contactus')[0].reset();
		            }
	          	},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
	        });
	    }
    });
}); // Document ready close