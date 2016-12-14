<!-- *** FIND ORDER PAGE FOR TRANSPORTER *** -->
<section class="place_orderwrp custmer_reg">
	<section class="find_order">
		<div class="container">
			<div class="row">
				<article class="col-md-3"></article>
				<article class="col-md-6">
					<section class="place_order_main">
		    			<div class="tab-content">
		    				<div class="tab-pane fade in active" id="plc_crn_home">
		    					<div class="row">
				    				<article class="col-md-12">
				    					<div class="section_head">
											<h1>Verify your <span>Account to Place / Find Orders</span></h1>
										</div>
				    				</article>
				    			</div>
				    			<div class="row">
				    				<article class="col-md-2"></article>
				    				<article class="col-md-8">
				    					<div class="find-order-page">
				    						<div id="" class="">
				    							<form class="user_verify" action="" id="verify_form" name="verify_form" style="padding-top:0px;">
													<div class="form-group">
													    <label for="text">One Time Password (OTP)<sup>*</sup></label>
													    <input type="text" class="form-control" id="email_phn_otp" name="email_phn_otp" required placeholder="One Time Password (OTP)">
													</div>
													<div class="form-group">
													    <div class="form-group row">
													    	<div class="col-md-6">
													    		<input id="reverify" class="reverify form-control" value="Resend OTP" type="button" disabled=""  />
													    	</div>
													    	<div class="col-md-6">
													    		<input id="verify" class="verify form-control" value="Submit" type="button"  />
													    	</div>
													    </div>
													   <!--  <ul class="list-inline">
													   	<li>
													   		<input id="reverify" class="reverify" value="Resend OTP" type="button" disabled=""  />
													   	</li>
													   	<li>
													   		<input id="verify" class="verify" value="Submit" type="button"  />
													   	</li>
													   </ul> -->
													    <!-- color:#37b1d8; -->
														<span id="form_validation_msg"></span>
													</div>
												</form>
				    						</div>
				    					</div>
				    				</article>
				    				<article class="col-md-2"></article>
				    			</div>
		    				</div>
		    			</div>
					</section>
				</article>
				<article class="col-md-3"></article>
			</div>
		</div>
	</section>
</section>
<!-- place order transporter starts -->
<script type="text/javascript">
	$(document).ready(function(){
		// setTimeout(function() { $("#verify").attr("disabled", "disabled") }, 29999);
		setTimeout(function() { $("#reverify").removeAttr("disabled") }, 30000);
	});
		
	// to forgot
	$(".verify").click(function(event){
		// $("#verify").attr("disabled", true);
		var objCurrentSection = $('.user_verify');       		
   		
   		var email_phn_otp = objCurrentSection.find("#email_phn_otp").val();
		// var password = objCurrentSection.find("#paswrd").val();
		// var role	= objCurrentSection.find("#role").val();
        jQuery.ajax({
	    	type:"POST",
			url: "/gmt/User/verify",
			dataType: 'json',
	        data: { otp : email_phn_otp },
			success: function(res){
				if(res.status_code == 200){
					$('#form_validation_msg').empty();
		    		$.each(res.data, function(key, val) {
		            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
		            });
		    		// location.reload();
		    		setTimeout(function() { $("#reverify").removeAttr("disabled") }, 30000);
			    	window.location = site_url+'userdashboard/place_transporter_order';
				}else{
					$('#form_validation_msg').empty();
		        	$.each(res.data, function(key, val) {
		            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
		            });
		            setTimeout(function() { $("#reverify").removeAttr("disabled") }, 30000);
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});
	});
	$(".reverify").click(function(event){
		$("#reverify").attr("disabled", true);
		var objCurrentSection = $('.user_verify');       		
   		
   		var email_phn_otp = objCurrentSection.find("#email_phn_otp").val();
		// var password = objCurrentSection.find("#paswrd").val();
		// var role	= objCurrentSection.find("#role").val();
        jQuery.ajax({
	    	type:"POST",
			url: "/gmt/User/logined_resend",
			dataType: 'json',
	        data: { otp : email_phn_otp },
			success: function(res){
				if(res.status_code == 200){
					$('#form_validation_msg').empty();
		    		$.each(res.data, function(key, val) {
		            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
		            });
		    		// location.reload();
		    		// setTimeout(function() { $("#reverify").removeAttr("disabled") }, 10000);
			    	window.location = site_url+'userdashboard';
				}else{
					$('#form_validation_msg').empty();
		        	$.each(res.data, function(key, val) {
		            	$('<p style="color:#ed4343"><strong>'+val+'</strong></p>').appendTo('#form_validation_msg');
		            });
		            setTimeout(function() { $("#reverify").removeAttr("disabled") }, 10000);
				}
			},
	        error: function(){
	        	console.log('Somthing went wrong');
	        }
		});
	});
</script>