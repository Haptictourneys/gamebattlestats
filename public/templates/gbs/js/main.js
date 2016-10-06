// Scroll Event
$(window).scroll(function(){
	if($(this).scrollTop() > 1) {
		$('.header').addClass('navbar-fixed-top');
	} else {
		$('.header').removeClass('navbar-fixed-top');
	}
});