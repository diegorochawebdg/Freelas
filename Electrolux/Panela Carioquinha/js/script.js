//Magic Anchor
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

$(document).ready(function() {
	//Dispositivos de segurança
	var currentClass = 'item1';
    $('.select-links a').click(function(e){
        e.preventDefault();
        var linkClass = $(this).parent().attr('class');
        if(currentClass != linkClass){
            $('.select-links li.' + currentClass).removeClass('active');
            $(this).parent().addClass('active');
            $('.select-content .' + currentClass).stop().fadeOut(200);
            $('.select-content .' + linkClass).stop().delay(200).fadeIn(200);
            currentClass = linkClass;
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

    $('.hotspots li.item3').hover(function() {
    	$(this).parent().parent().parent().children('.hotspots-content').children('.item3').stop().fadeIn('fast');
    }, function() {
    	$(this).parent().parent().parent().children('.hotspots-content').children('.item3').stop().fadeOut('fast');
    });

    //Tampa
    /*$('#header').appear();
    $('#header').on('appear', function(event, $all_appeared_elements) {
        $('#header .tampa').delay(400).addClass('active');
    });
    $('#header').on('disappear', function(event, $all_appeared_elements) {
        $('#header .tampa').removeClass('active');
    });*/
    $('#header .interaction-area').hover(function(e) {
        $('#header .tampa').delay(400).removeClass('active');
    }, function(e){
        $('#header .tampa').delay(400).addClass('active');
    });
});