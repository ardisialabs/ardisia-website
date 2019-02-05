$(document).ready(function() {
	$("#mobile-menu-popup-button").on("click tap", function(){
		$("#mobile-menu").addClass("show-mobile-menu");
  	});
  	$("#close-button").on("click tap", function(){
 		$("#mobile-menu").removeClass("show-mobile-menu");
  	});
  	
  	$("#open-contact-details").on("click tap", function() {
  		if ($("#open-contact-details").hasClass("show")) {
  			$("#contact-details").removeClass("show");
	  		$("#open-contact-details").removeClass("show");
  		} else {
  			$("#open-contact-details").addClass("show");
  			$("#contact-details").addClass("show");
  		}
	});
});

/**
 *	Returns true when element just bcame visible
 */
function isScrolledIntoView(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
	
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
	
    return elemTop <= docViewBottom;
}


/*
$("#computer").on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function () {
   $("#computer").css("transition", "none");
});
$("#coffee").on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function () {
   $("#coffee").css("transition-delay", "0s");
});
var fire = false;
if ($(window).width() >= 650) {
	if (isScrolledIntoView("#row-2")) {
		$("#computer").addClass("animate-computer ");
		$("#coffee").addClass("coffee-slideUp");
	} else {
		$(window).scroll(function (event) {
			if (fire)
				return;
			if (isScrolledIntoView("#row-2")) {
				// trigger immediately
				$("#computer").addClass("animate-computer-immediately");
				$("#coffee").addClass("coffee-slideUp-immediately");
				fire = true;
			}
		});
	}
}
*/