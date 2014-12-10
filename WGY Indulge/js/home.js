window.mySlider;

$(document).ready(function() {

	//Prevent Default
	$('a').click(function(event) {
		if($(this).attr('href') == '#'){
			event.preventDefault();
		}
	});

	//Change background
	var distance = $('#about-us').offset().top, $window = $(window);

	$window.scroll(function() {
	    if ( $window.scrollTop() >= distance ) {
	        $('body').addClass('another-bg');
	    } else{
	    	if($('body').hasClass('another-bg')){
	    		$('body').removeClass('another-bg');
	    	}
	    }
	});

	//Facebook|Instagram Slider's			
	var settings = function() {
		var settings1 = {
			minSlides: 	1,
			maxSlides: 	1,
			moveSlides: 1,
			slideWidth: 331,
			pager: 		false
		};
		var settings2 = {
			minSlides: 	3,
			maxSlides: 	3,
			moveSlides: 1,
			slideWidth: 331,
			pager: 		false
		};
		return ($(window).width()<630) ? settings1 : settings2;
	}

	mySlider = $('.facebook-slider').bxSlider(settings());
	$(window).resize(tourLandingScript);

	function tourLandingScript() {
		window.mySlider.reloadSlider(settings());
	}

	var settingsInstagram = function() {
		var settings3 = {
			minSlides: 	1,
			maxSlides: 	1,
			moveSlides: 1,
			slideWidth: 331,
			pager: 		false
		};
		var settings4 = {
			minSlides: 	3,
			maxSlides: 	3,
			moveSlides: 1,
			slideWidth: 331,
			pager: 		false
		};
		return ($(window).width()<630) ? settings3 : settings4;
	}

	mySliderInstagram = $('.instagram-slider').bxSlider(settingsInstagram());
	$(window).resize(tourLandingScriptInstagram);

	function tourLandingScriptInstagram() {
		window.mySliderInstagram.reloadSlider(settingsInstagram());
	}

		

	

	//Menu Click's
	$('#about a[title="About Us"]').click(function(event) {
		$('html, body').animate({scrollTop: $('#about-us').offset().top}, 'slow');
	});
	$('#about a[title="Our Services"]').click(function(event) {
		$('html, body').animate({scrollTop: $('#our-services').offset().top}, 'slow');
	});
	$('#about a[title="Insider"]').click(function(event) {
		$('html, body').animate({scrollTop: $('#insider').offset().top}, 'slow');
	});

});