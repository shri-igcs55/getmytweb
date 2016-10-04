<!-- 	CUSTOMER REGISTRATION -->
<section class="custmer_reg">
	<div class="container">
		<div class="row">
			<article class="col-md-3">
				<?php include_once('comman/left_sidebar.php'); ?>
			</article>

			<article class="col-md-9">
				<div class="tab-content">
					
					<div id="edit_tab10">
						<div class="form_wrp" style="padding: 40px 75px 271px;">
							<form class="transporter-form" action="">
								<div class="section_head">
									<h1>Reset Your <span>Password</span></h1>
								</div>
								<br>
								<br>
								<div class="row">
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_F_name">New Password<sup>*</sup></label>
										    <input type="password" class="form-control" id="e_F_name" required>
										</div>
									</article>
									<article class="col-md-6">
										<div class="form-group">
										    <label for="e_L_name">Confirm Password<sup>*</sup></label>
										    <input type="password" class="form-control" id="e_L_name">
										</div>
									</article>
								</div>

								<div class="row">
									<article class="col-md-12">
										<div class="form-group">
										    <input type="submit" class="form-control" id="e_paswrd" value="Save">
										</div>
									</article>
								</div>
							</form>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>
<!-- 	CUSTOMER REGISTRATION ENDS-->
<script type="text/javascript">
	$(document).ready(function(){
		$('.customer_update_profile').load(function(){
			var user_id = <?php echo $u_id; ?>;
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
			            	// $.each(val, function(k, v){
			                    $('<option value="'+val['vid']+'">'+val['vtype']+'</option>').appendTo('.vehicle');
			                // });
			            });
					}else{
						alert('No Response for user profile. Please Contact Admin.');
						window.location ='<?php echo site_url('userdashboard/place_transporter_order'); ?>';
						console.log('No Response. Please Contact Admin.');
					}
				},
				error: function(){
					console.log('Something went wrong.');
				}
			}); // ajax
		}); // section load

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


		
	}); // doc ready 
</script>