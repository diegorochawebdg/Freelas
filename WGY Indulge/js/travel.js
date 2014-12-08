$(document).ready(function() {

	//Prevent Default
	$('a').click(function(event) {
		if($(this).attr('href') == '#'){
			event.preventDefault();
		}
	});

	//The Slider
	var slider = $('#the-slider').bxSlider({
		adaptiveHeight: 	true,
  		mode: 				'fade',
  		infiniteLoop: 		false
	});

	
	//Datapicker
	$('#arrival, #departure').datepicker();

	//Return to top
	var returnTop = function (){
		$('html, body').animate({scrollTop: $('#themes-slider').offset().top}, 'slow');
	};

	$('a.bx-prev, a.bx-next').click(function(event) {
		returnTop();
	});

	//Slider Clicks
	$('a[title="Themes"').click(function(event) {
		returnTop();
		slider.goToSlide(1);
	});
	$('a[title="Destination"').click(function(event) {
		returnTop();
		slider.goToSlide(2);
	});
	$('.themes a, .destinations a').click(function(event) {
		returnTop();
		slider.goToSlide(3);
	});
	$('.budget a').click(function(event) {
		returnTop();
		slider.goToSlide(5);
	});
	$('.disclaimer input, .disclaimer label').click(function(event) {
		returnTop();
		slider.goToSlide(6);
	});
});