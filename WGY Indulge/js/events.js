window.slider;
$(document).ready(function() {



	//Slider info
	$('.the-slider ul.slide li').hover(function() {
		$(this).children('.info').fadeIn();
	}, function(){
		$(this).children('.info').fadeOut();
	});
	$('.the-slider ul.slide li a.more-info').click(function() {
		$(this).parent().children('.info1').toggleClass('hide');
		$(this).parent().children('.info2').toggleClass('hide');
	});

	/*Slider's Collapse*/
    var currentClass = 'item1';
    $('#gastronomy-slider .slider-sellector ul li a').click(function(e){
        /*debugger;*/
        e.preventDefault();
        var linkClass = $(this).parent().attr('class');
        console.log(linkClass);
        if(currentClass != linkClass){
            $('#gastronomy-slider .slider-sellector li').removeClass('active');
            $(this).parent().addClass('active');
            $('#gastronomy-slider .all-sliders .' + currentClass).hide();
            $('#gastronomy-slider .all-sliders .' + linkClass).show(0, function(){
            });
            currentClass = linkClass;
            resizeSlider();
        }
    });

    var currentClass2 = 'item6';
    $('#nightlife-slider .slider-sellector ul li a').click(function(e){
        /*debugger;*/
        e.preventDefault();
        var linkClass2 = $(this).parent().attr('class');
        if(currentClass2 != linkClass2){
            $('#nightlife-slider .slider-sellector li').removeClass('active');
            $(this).parent().addClass('active');
            $('#nightlife-slider .all-sliders .' + currentClass2).hide();
            $('#nightlife-slider .all-sliders .' + linkClass2).show(0, function(){
            });
            currentClass2 = linkClass2;
            resizeSlider2();
        }
    });



    //Links Slider Only
    var settingsLinks = function() {
		var settingsLinks1 = {
			pager: 				false,
	  		infiniteLoop: 		false,
	  		slideWidth: 		150,
	  		minSlides: 			2,
	  		maxSlides: 			2,
	  		moveSlides: 		1
		};
		var settingsLinks2 = {
			pager: 				false,
	  		infiniteLoop: 		true,
	  		slideWidth: 		160,
	  		minSlides: 			3,
	  		maxSlides: 			3,
	  		moveSlides: 		1
		};
		return ($(window).width()<630) ? settingsLinks1 : settingsLinks2;
	}

	sliderLinks = $('#gastronomy-slider .slider-sellector ul').bxSlider(settingsLinks());
	sliderLinks2 = $('#nightlife-slider .slider-sellector ul').bxSlider(settingsLinks());
	$(window).resize(tourLandingScript);

	function tourLandingScript() {
		window.sliderLinks.reloadSlider(settingsLinks());
		window.sliderLinks2.reloadSlider(settingsLinks());
	}



	//Other sliders only
	var settings = function() {
		var settings1 = {
			minSlides: 	1,
			maxSlides: 	1,
			moveSlides: 1,
			slideWidth: 331,
			pager: 		false
		};
		var settings2 = {
			minSlides: 	3,
			maxSlides: 	3,
			moveSlides: 1,
			slideWidth: 331,
			pager: 		false
		};
		return ($(window).width()<630) ? settings1 : settings2;
	}


	slider1 = $('#gastronomy-slider .item1 .the-slider ul.slide').bxSlider(settings());
	slider2 = $('#gastronomy-slider .item2 .the-slider ul.slide').bxSlider(settings());
	slider3 = $('#gastronomy-slider .item3 .the-slider ul.slide').bxSlider(settings());
	slider4 = $('#gastronomy-slider .item4 .the-slider ul.slide').bxSlider(settings());
	slider5 = $('#gastronomy-slider .item5 .the-slider ul.slide').bxSlider(settings());

	slider6 = $('#nightlife-slider .item6 .the-slider ul.slide').bxSlider(settings());
	slider7 = $('#nightlife-slider .item7 .the-slider ul.slide').bxSlider(settings());
	slider8 = $('#nightlife-slider .item8 .the-slider ul.slide').bxSlider(settings());
	slider9 = $('#nightlife-slider .item9 .the-slider ul.slide').bxSlider(settings());
	slider10 = $('#nightlife-slider .item10 .the-slider ul.slide').bxSlider(settings());
	$(window).resize(resizeSlider);
	$(window).resize(resizeSlider2);

	function resizeSlider() {
		window.slider1.reloadSlider(settings());
		window.slider2.reloadSlider(settings());
		window.slider3.reloadSlider(settings());
		window.slider4.reloadSlider(settings());
		window.slider5.reloadSlider(settings());
	}
	function resizeSlider2() {
		window.slider6.reloadSlider(settings());
		window.slider7.reloadSlider(settings());
		window.slider8.reloadSlider(settings());
		window.slider9.reloadSlider(settings());
		window.slider10.reloadSlider(settings());
	}

	$('a').click(function(event) {
		if($(this).parent().hasClass('active')){
			console.log('works');
			return false;
		}
	});

});