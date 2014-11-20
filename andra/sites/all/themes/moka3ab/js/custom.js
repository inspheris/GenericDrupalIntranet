(function($){
	$(window).load(function() {
		$('#slider').nivoSlider({
			pauseTime: 5000,
			effect: 'fade',
			pauseOnHover: false,
			controlNav: false,
			directionNav: false
		});
		
		$(".not-front .block-views-latest-offers-block .content").slideUp();
		$(".context-ville h1").fadeIn(3000);
		$( ".not-front .block-views-latest-offers-block h2" ).click(function() {
			$(".not-front .block-views-latest-offers-block .content").slideToggle();
			$(".context-ville h1").fadeToggle();
		});
		
		
	});
 })(jQuery)