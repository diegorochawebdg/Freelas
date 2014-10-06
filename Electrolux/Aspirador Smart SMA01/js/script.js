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
});