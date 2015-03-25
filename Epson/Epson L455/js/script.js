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
    jQuery('header .parallax-layer').parallax({
        mouseport: jQuery('.parallax-area'),
        xparallax: false
    });

    //Appear
    jQuery('.animated').appear();

    //Fade in Down
    jQuery('header hgroup, header .ecotank, p.vendedor-txt, section#versatil-e-completa .txt, .wifi, .wifi-direct, .epson-connect-txt div, .email-print, .cloud-print').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInDown');
    });
    /*jQuery('header hgroup, header .ecotank, p.vendedor-txt, section#versatil-e-completa .txt, .conexao-wifi, .wifi, .wifi-direct img, .epson-connect-txt div, .email-print, .cloud-print').on('disappear', function(e, $all_appeared_elements) {
        jQuery(this).removeClass('fadeInDown');
    });*/
    //Fade in Left
    jQuery('.conexao-wifi').on('appear', function(e, $all_appeared_elements) {
            jQuery(this).addClass('fadeInLeft');
        });
    /*Fade In Right*/
    jQuery('.recarregue').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInRight');
    });
    /*jQuery('.recarregue').on('disappear', function(e, $all_appeared_elements) {
        jQuery(this).removeClass('fadeInRight');
    });*/

    /*Fade In Right Big*/
    jQuery('.economica, .l455, .multifuncional-convencional').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInRight');
    });
    /*jQuery('.economica, .l455, .multifuncional-convencional').on('disappear', function(e, $all_appeared_elements) {
        jQuery(this).removeClass('fadeInRight');
    });*/

    /*Fade In Up*/
    jQuery('section#versatil-e-completa strong').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('fadeInUp');
    });
    /*jQuery('section#versatil-e-completa strong').on('disappear', function(e, $all_appeared_elements) {
        jQuery(this).removeClass('fadeInUp');
    });*/

    //RollIn
    jQuery('.impressoes-tinta .animacao1, .impressoes-tinta .animacao2, .impressoes-tinta .animacao3').on('appear', function(e, $all_appeared_elements) {
        jQuery(this).addClass('rollIn');
    });
    /*jQuery('.impressoes-tinta .animacao1, .impressoes-tinta .animacao2, .impressoes-tinta .animacao3').on('disappear', function(e, $all_appeared_elements) {
        jQuery(this).removeClass('rollIn');
    });*/
});