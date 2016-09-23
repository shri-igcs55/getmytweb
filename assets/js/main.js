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




/*$(document).ready(function(){
		
		

});*/