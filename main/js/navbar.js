$(window).scroll(function() {
    if ($(document).scrollTop() < 100) {
        $('.navbar-top').removeClass('artist-header_shrink');
    }
    if ($(document).scrollTop() > 100) {
	   $('.navbar-top').addClass('artist-header_shrink');
	}
});


$('#body').bind('mousewheel DOMMouseScroll', function (event) {           
     if (event.originalEvent.wheelDelta/ 120 > 0) {
          //up
	  // alert('up');
// 	  $('.navbar-top').removeClass('artist-header_shrink');
     }
     else {
          //down
	  // alert('down');
	     if ($(document).scrollTop() > 100) {
	         $('.navbar-top').addClass('artist-header_shrink');
	     }
     }
});

$(document).ready(function() {
 	if ($(document).scrollTop() > 100) {
	   $('.navbar-top').addClass('artist-header_shrink');
	}
});
    