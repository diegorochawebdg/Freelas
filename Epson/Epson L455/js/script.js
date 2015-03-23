$(document).ready(function() {
	$('a').click(function(event) {
        if($(this).attr('href', '#')){
            event.preventDefault();
        }
    });

    //Hotspots
    $('.hotspots li.item1').hover(function() {
    	$(this).parent().parent().parent().children('.hotspots-content').children('.item1').stop().fadeIn('fast');
    }, function() {
    	$(this).parent().parent().parent().children('.hotspots-content').children('.item1').stop().fadeOut('fast');
    });

    $('.hotspots li.item2').hover(function() {
    	$(this).parent().parent().parent().children('.hotspots-content').children('.item2').stop().fadeIn('fast');
    }, function() {
    	$(this).parent().parent().parent().children('.hotspots-content').children('.item2').stop().fadeOut('fast');
    });

    //Animate
    var intervalo = window.setInterval(abastecimento, 2000);
    function abastecimento() {
        $('header .mao-animacao').toggleClass('active');
    }

    //Appear
    $('.animated').appear();

    //Fade in Down
    $('header hgroup, header .ecotank, p.vendedor-txt, section#versatil-e-completa .txt, .conexao-wifi, .wifi, .wifi-direct img, .epson-connect-txt div, .email-print, .cloud-print').on('appear', function(event, $all_appeared_elements) {
        $(this).addClass('fadeInDown');
    });
    $('header hgroup, header .ecotank, p.vendedor-txt, section#versatil-e-completa .txt, .conexao-wifi, .wifi, .wifi-direct img, .epson-connect-txt div, .email-print, .cloud-print').on('disappear', function(event, $all_appeared_elements) {
        $(this).removeClass('fadeInDown');
    });

    /*Fade In Right*/
    $('.recarregue').on('appear', function(event, $all_appeared_elements) {
        $(this).addClass('fadeInRight');
    });
    $('.recarregue').on('disappear', function(event, $all_appeared_elements) {
        $(this).removeClass('fadeInRight');
    });

    /*Fade In Right Big*/
    $('.economica, .l455, .multifuncional-convencional').on('appear', function(event, $all_appeared_elements) {
        $(this).addClass('fadeInRight');
    });
    $('.economica, .l455, .multifuncional-convencional').on('disappear', function(event, $all_appeared_elements) {
        $(this).removeClass('fadeInRight');
    });

    /*Fade In Up*/
    $('section#versatil-e-completa strong').on('appear', function(event, $all_appeared_elements) {
        $(this).addClass('fadeInUp');
    });
    $('section#versatil-e-completa strong').on('disappear', function(event, $all_appeared_elements) {
        $(this).removeClass('fadeInUp');
    });

    //RollIn
    $('.impressoes-tinta .animacao1, .impressoes-tinta .animacao2, .impressoes-tinta .animacao3').on('appear', function(event, $all_appeared_elements) {
        $(this).addClass('rollIn');
    });
    $('.impressoes-tinta .animacao1, .impressoes-tinta .animacao2, .impressoes-tinta .animacao3').on('disappear', function(event, $all_appeared_elements) {
        $(this).removeClass('rollIn');
    });
});