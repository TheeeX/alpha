$(document).ready(function() {
 	if ($(document).scrollTop() > 30) {
	   $('.navbar-top').addClass('artist-header_shrink');
	}
});
/* [ stream ] */
$('.navbar-top').click(function(event) {
	$('#stream').toggleClass('active');
	});
