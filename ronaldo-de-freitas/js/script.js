function carregaConteudo(request_url){
			$.ajax({
				url: request_url,
				success: function(data){
				$('#atuacao-conteudo').hide().fadeIn();
				$('#atuacao-conteudo').html(data); // Load data into a <div> as HTML
			   // alert(post_url);
				}
			});
	}


$(document).ready(function(){
	//Banner	
	$("#slider").easySlider({
		auto: true,
		continuous: true,
		controlsShow: false,
		speed:1200,
		pause: 5000
	});
	//preview convenios
	$("#banner-convenios").easySlider({
		auto: true,
		continuous: true,
		nextId: "slider1next",
		prevId: "slider1prev",
		controlsShow: true,
		pause: 5000
	});
	//galeria
	$("#galeria-slider").easySlider({
		auto: true,
		continuous: true,
		nextId: "slider2next",
		prevId: "slider2prev",
		pause: 5000
	});
	
	//FancyBox
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
	$("#menu-atuacao a").click(function(e) {
        e.preventDefault();
    });
	
	carregaConteudo("http://www.ronaldodefreitas.com.br/wp-content/themes/ronaldo-de-freitas/call.php");
	
	//Mudar Url
	$(".home-btn").click(function(e) {
		document.location.hash = "home";
	});
	$(".sobre-btn").click(function(e) {
		document.location.hash = "sobre";
	});
	$(".areas-btn").click(function(e) {
		document.location.hash = "areas_de_atuacao";
	});
	$(".consultorio-btn").click(function(e) {
		document.location.hash = "consultorio";
	});
	$(".convenios-btn").click(function(e) {
		document.location.hash = "convenios";
	});
	$(".contato-btn").click(function(e) {
		document.location.hash = "contato";
	});
});

//Magic Anchor
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

	//Menu flutuante
	$(function() {
		$(window).scroll(function() {
			if($(this).scrollTop() <= 120) {
			$('#menu-float').fadeOut();	
			} else {
				$('#menu-float').fadeIn();
			}
	});
	
	//Mostrar o post nas áreas de atuação
	$.ajaxSetup({cache:false});
	$("#menu-atuacao a").click(function(){
		var post_url = $(this).attr("href");
		//var post_id = $(this).attr("rel");		
		carregaConteudo(post_url);
	});
});
