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

});