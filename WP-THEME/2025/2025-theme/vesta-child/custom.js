var $ = jQuery;

var scrollTop = 0;

jQuery(".login-btn").click(function(e){
    e.preventDefault();
    return false;
});

var gotFControl, controlVal = "";
jQuery(document).on("focus", 'input[type="text"], input[type=email], input[type=number], input[type=tel], input[type=url]', function() {
    jQuery(this).removeClass("selected-form-control"), jQuery(this).hasClass("wpcf7-not-valid") && (gotFControl = this, controlVal = jQuery(this).val()), jQuery(this).removeClass("wpcf7-not-valid"), jQuery(this).next().is("span") && jQuery(this).next().remove()
}), jQuery(document).on("blur", 'input[type="text"], input[type=email], input[type=number], input[type=tel], input[type=url]', function() {
    var a = jQuery(this).val(),
        b = this;
    b == gotFControl && controlVal == a && jQuery(this).addClass("wpcf7-not-valid"), "" != jQuery.trim(a) && jQuery(this).addClass("selected-form-control"), jQuery(this).next().is("span") && jQuery(this).next().remove()
}), jQuery(document).on("focus", "textarea", function() {
    jQuery(this).removeClass("selected-form-control")
}), jQuery(document).on("blur", "textarea", function() {
    var a = jQuery(this).val();
    "" != jQuery.trim(a) && jQuery(this).addClass("selected-form-control")
});
jQuery('.link-type-5').click(function(e) {
    e.preventDefault();
    var go = jQuery('.link-type-5').attr("href");
    jQuery('html, body').animate({
        scrollTop: jQuery(go).offset().top
    }, 1000);
});

function backToTop() {
	if(jQuery(window).scrollTop() > 200){
		jQuery("#back-to-top").fadeIn(200);
	} else{
		jQuery("#back-to-top").fadeOut(200);
	}
	jQuery(window).scroll(function(){
		if(jQuery(window).scrollTop() > 200){
			jQuery("#back-to-top").fadeIn(200);
		} else{
			jQuery("#back-to-top").fadeOut(200);
		}
	});
	
	jQuery('#back-to-top, .back-to-top').click(function() {
		jQuery('html, body').animate({ scrollTop:0 }, 1200);
		return false;
	});
}

backToTop();


window.onload = function() {
    if(location.hash != ''){
        var hash = location.hash;

        if(hash == '#career'){
            hash = '#career-box';
        }
        else if(hash == '#media'){
            hash = '#media-box';
        }
        else if(hash == '#inquiries'){
            hash = '#inquiries-box';
        }
         
        if(jQuery(hash)){
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top - 100
            }, 1000);
        }
    }
};

$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
    $('.main-head').addClass('header-bg');
    } else {
    $('.main-head').removeClass('header-bg');
    }
});

$(function() {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      margin: 30,
      loop: true,
      nav: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
  });