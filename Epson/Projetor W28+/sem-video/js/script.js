jQuery(document).ready(function() {
	jQuery('a').click(function(e) {
        if(jQuery(this).attr('href', '#')){
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
     /*=================================
    =            Analytics            =
    =================================*/
    /*Hotspots*/
    $('.hotspots a').hover(function() {
        var theTitle = $(this).parent().parent().parent().parent().find('.hotspots-content img').attr('title');
        _gaq.push(['_trackEvent', 'Hotspots', theTitle]);
    });
});