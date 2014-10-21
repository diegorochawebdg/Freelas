var $y = jQuery.noConflict()
$y(document).ready(function(){	
	$y("#corpo-content-bottom li,#content-top li").hover(function() {
		$y(this).find(".box-tooltip").fadeIn("slow");
	}, function() {
		$y(this).find(".box-tooltip").stop(true, true).fadeOut("fast");
	});
});
var $z = jQuery.noConflict()
$z(document).ready(function() {
	$z('div.try:eq(0)> .resposta:gt(0)').hide(); 
	$z('div.try:eq(0)> .bot-pergunta').hover(function() {
		$z(this).next('.resposta:hidden').slideDown('slow')
		.siblings('.resposta:visible').slideUp('slow');
	});
});