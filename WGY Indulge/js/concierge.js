$(document).ready(function() {
	//Prevent Default
	$('a').click(function(event) {
		if($(this).attr('href') == '#'){
			event.preventDefault();
		}
	});

	//Toggle Membership
	$('#membership-content .bespoke, #membership-content .indulge').slideToggle('0');

	$('#membership .essential a').click(function(event) {
		$('html, body').animate({scrollTop: $('#membership-content').offset().top}, 'slow');
		if($('#membership-content .essential').is(':hidden')){
			console.log('works');
			$('#membership-content .container div:visible').slideToggle('400', function(){
				$('#membership-content .essential').slideToggle('400');
			});
		}
	});

	$('#membership .bespoke a').click(function(event) {
		$('html, body').animate({scrollTop: $('#membership-content').offset().top}, 'slow');
		if($('#membership-content .bespoke').is(':hidden')){
			console.log('works');
			$('#membership-content .container div:visible').slideToggle('400', function(){
				$('#membership-content .bespoke').slideToggle('400');
			});
		}
	});

	$('#membership .indulge a').click(function(event) {
		$('html, body').animate({scrollTop: $('#membership-content').offset().top}, 'slow');
		if($('#membership-content .indulge').is(':hidden')){
			console.log('works');
			$('#membership-content .container div:visible').slideToggle('400', function(){
				$('#membership-content .indulge').slideToggle('400');
			});
		}
	});
});