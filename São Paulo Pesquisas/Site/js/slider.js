var $s = jQuery.noConflict()
$s(document).ready(function(){	
	$s("#content-bottom ul").bxSlider({
		moveSlides:  	1,
        pager:          true,
		controls:       true,
        adaptiveHeight: false,
        infiniteLoop: 	true,
        auto:           true
	});	
});