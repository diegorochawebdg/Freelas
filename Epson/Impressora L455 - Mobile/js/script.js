$(document).ready(function($) {
	//Slider
	$('section#slider ul').bxSlider({
		pager: false
	});

	/*================================
    =            Animated            =
    ================================*/
    jQuery('.animated').appear();

    //Fade in Left
    jQuery('.left').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInLeft');
    });

    /*Fade In Right*/
    jQuery('.right').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInRight');
    });

    /*Fade In Up*/
    jQuery('.up').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInUp');
    });
    
    //Fade in Down
    jQuery('.down').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInDown');
    });

     /*=================================
    =            Analytics            =
    =================================*/
    $('a.appstore').click(function(event) {
        _gaq.push(['_trackEvent', 'Link', 'Apple App Store']);
    }); 
    $('a.google-play').click(function(event) {
        _gaq.push(['_trackEvent', 'Link', 'Google Play Store']);
    });
    $('a.bx-prev').click(function(event) {
        _gaq.push(['_trackEvent', 'Slider', 'Foto anterior']);
    });
    $('a.bx-next').click(function(event) {
        _gaq.push(['_trackEvent', 'Slider', 'Próxima foto']);
    });    
});