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
	$( function() {
	    $( "#datepicker" ).datepicker();
	} );

	// sign up as tabs

	$('.signUpAs_each span').on('click', function(){
		$(this).parent().parent('li').siblings().removeClass('active');
		$(this).parent().parent('li').addClass('active');
		
	});
		

});




// refresh img animation
$(document).ready(function() {
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




$(document).ready(function(){

		// to get state list
		jQuery.ajax({
			type:"GET",
			url: "/gmt/Indian_city_dropdown/state_dropdown",
			success: function(res){
				if(res){
					// $('#State').empty();
		            $.each(res.data, function(key, val) {
		            	$.each(val, function(k, v){
		                    $('<option value="'+v+'">'+v+'</option>').appendTo('#State');
		                });
		            });
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});

		// to get state list
		$("#State").change(function(event){
			event.preventDefault();
	        var state = $( "#State option:selected" ).text();
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/Indian_city_dropdown/district_dropdown",
				dataType: 'json',
		        data: { state: state },
				success: function(res){
					if(res){
						$('#District').empty();
						$('<option value="">Select District</option>').appendTo('#District');
			            $.each(res.data, function(key, val) {
			            	$.each(val, function(k, v){
			                    $('<option value="'+v+'">'+v+'</option>').appendTo('#District');
			                });
			            });
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// to get state list
		$("#District").change(function(event){
			event.preventDefault();
	        var state = $( "#State option:selected" ).text();
	        var district = $( "#District option:selected" ).text();
	        jQuery.ajax({
		    	type:"POST",
				url: "/gmt/Indian_city_dropdown/city_dropdown",
				dataType: 'json',
		        data: { 
		        	state: state,
		        	district: district
		        },
				success: function(res){
					if(res){
						$('#City').empty();
						$('<option value="">Select City</option>').appendTo('#City');
			            $.each(res.data, function(key, val) {
			            	$('<option value="'+val['id']+'">'+val['city']+'</option>').appendTo('#City');
			            });
					}
				},
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
			});
		});

		// Ajax post for refresh captcha image.
       	$("#img").click(function() {
        	jQuery.ajax({
                type: "POST",
                url: base_url+"user/captcha_refresh",
                success: function(res) {
                    if (res)
                    {
                        jQuery("#image").html(res);
                    }
                },
		        error: function(){
		        	console.log('Somthing went wrong');
		        }
            });
        }); // Captcha refresh function close

       	// Ajax post for submiting registration form
       	$("#cus-indv-reg-sbmit").click(function(event) {
	        event.preventDefault();

	        var captcha = $('#captcha').val();
	        var captcha_word = "<?php echo $word; ?>";
	        var first_name = $("#F_name").val();
	        var last_name = $("#L_name").val();
	        var user_mob = $("#M_number").val();
	        var user_email = $("#E_mail").val();
	        var user_pass = $("#password").val();
	        var c_pass = $("#c_pass").val();
	        var address1 = $("#C_addrss").val();
	        var address2 = $("#C_addrss_2").val();
	        // var country = $("#Country").val();
	        var state = $("#State").val();
	        var district = $("#District").val();
	        var city = $("#City").val();
	        var pin = $("#Pincode").val();
	        var pkg_id = $("#pkg_id").val();
	        var user_type = $("#user_type").val();

	        if($("#check1").prop('checked') == false){
			   	$('#form_validation_msg').empty();
				$('<p><strong>Please Read and Accept our Terms of Service and Privacy Policy.</strong></p>').appendTo('#form_validation_msg');
			}else if(first_name == '', user_mob == '', user_pass == '', address1 == '', 
	        	country == '', state == '', district == '', city == '', pin == '', 
	        	captcha == '' ){
	        	$('#form_validation_msg').empty();
			    $('<p><strong>All * marked fields must not be empty.</strong></p>').appendTo('#form_validation_msg');
	        }else if(captcha != captcha_word){
	        	$('#form_validation_msg').empty();
			    $('<p><strong>Captcha code is wrong.</strong></p>').appendTo('#form_validation_msg');
	        }else{

		        $.ajax({
			        type: "POST",
			        url: "/gmt/User/user_signup",
			        cache: false,
			        dataType: 'json',
			        data: {
			        	first_name : first_name,
						last_name : last_name,
						user_mob : user_mob,
						user_email : user_email,
						user_pass : user_pass,
						c_pass : c_pass,
						address1 : address1,
						address2 : address2,
						state : state,
						district : district,
						city : city,
						pin : pin,
						pkg_id : pkg_id,
						user_type : user_type
			       	},
			        success: function(res) {
			            if (res.status_code == 200)
			            {
			              	$('#form_validation_msg').empty();
				            $('<p><strong>Registered Successfully.</strong></p>').appendTo('#form_validation_msg');
			              	document.getElementById("cust_indv").reset();
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

});