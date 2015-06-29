jQuery(document).ready(function() {
	jQuery('a').click(function(e) {
        if(jQuery(this).attr('href') == '#'){
            e.preventDefault();
        }
    });

    //Hotspots
    jQuery('.hotspots li.item1').hover(function() {
    	jQuery(this).parent().parent().parent().children('.hotspots-content').children('.item1').addClass('active');
    }, function() {
    	jQuery(this).parent().parent().parent().children('.hotspots-content').children('.item1').removeClass('active');
    });

    //Animate
    $(window).load(function() {
        jQuery('header .parallax-layer').parallax({
            mouseport: jQuery('.parallax-area'),
            xparallax: false
        });
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

    //Hotspots
    /*jQuery('.hotspots li').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('bounceInUp');
    });*/

     /*=================================
    =            Analytics            =
    =================================*/
    $('.parallax-layer').hover(function(event) {
        _gaq.push(['_trackEvent', 'Animação', 'Mão recarregando impressora']);
    }); 
    $('a.appstore').click(function(event) {
        _gaq.push(['_trackEvent', 'Link', 'Apple App Store']);
    }); 
    $('a.google-play').click(function(event) {
        _gaq.push(['_trackEvent', 'Link', 'Google Play Store']);
    });    
    /*Hotspots*/
    $('.hotspots a').hover(function() {
        var theTitle = $(this).parent().parent().parent().parent().find('.hotspots-content img').attr('title');
        _gaq.push(['_trackEvent', 'Hotspots', theTitle]);
    });
});