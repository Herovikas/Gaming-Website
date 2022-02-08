 // Animation
AOS.init({
    duration: 1200,
    easing: 'ease-in-out-back'
  });
// animation end 



 // fixed header

  $(window).scroll(function () {
    if ($(window).scrollTop() >= 45) {
        $('.header').addClass('fixed_header');
    } else {
        $('.header').removeClass('fixed_header');
    }
});

// fixed header end

// scroll tab 
$(".section1").click(function() {
	$('html, body').animate({
	scrollTop: $(".mainy1").offset().top
	}, 1000);
	});
	$(".section2").click(function() {
	$('html, body').animate({
	scrollTop: $(".gamer").offset().top
	}, 1000);
	});
	$(".section4").click(function() {
	$('html, body').animate({
	scrollTop: $(".footerbtm").offset().top
	}, 1000);
	});
	$(".section3").click(function() {
	$('html, body').animate({
	scrollTop: $(".contact").offset().top
	}, 1000);
	});
	$(".section5").click(function() {
	$('html, body').animate({
	scrollTop: $(".gamer").offset().top
	}, 1000);
	});
// scroll tab end


// form validation
$(document).on('submit', '#common-form', function (evt) {
    evt.preventDefault();
    var email=$('#email').val();
 	var name=$('#name').val();
  	var password =$('#password').val();

    
             
    	if(email===''){
        $("#email").parents(".form-group").append('<span class="text-danger">Please enter email.</span>');    
    }
        if(name===''){
        $("#name").parents(".form-group").append('<span class="text-danger">Please enter name.</span>');    
    }
        if(password===''){
        $("#password").parents(".form-group").append('<span class="text-danger">Please enter password.</span>');    
    }
});