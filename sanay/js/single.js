$(document).ready(function(e) {
	lightboxMargin();
    
	/*Destaque hover*/
	$(".gallery .large-image, .planta-gallery .large-image,  .andamento-gallery .large-image").hover(function(e) {
        $(this).children(".detalhes-hover").css({opacity:1});
    }, function(e){
		$(this).children(".detalhes-hover").css({opacity:""});
	});
	/*End of Destaque hover*/
    
    
    /*Galery Thumbs - Link*/
    var imageList    = new Array();
    var currentImage = 0;
    $(".gallery .thumbs a").each(function(index, element) {
        imageList[ index ]         = new Object();
        imageList[ index ].id      = index;
        imageList[ index ].element = $(element);
        imageList[ index ].image   = $(element).attr("href");
        imageList[ index ].title   = $(element).attr("title");
    });
    
    $( ".gallery .selectors .prev" ).click( function(e){
        e.preventDefault();
        currentImage--;
        changeImage();
        $(".gallery .viewport").animate({"margin-left": "+=138px"});
    } );
    $( ".gallery .selectors .next" ).click( function(e){
        e.preventDefault();
        currentImage++;
        changeImage();
		$(".gallery .viewport").animate({"margin-left": "-=138px"});
    } );
    imageList[ currentImage ].element.addClass("selected");
    
    $(".gallery .selectors a").click(function(e) {
        e.preventDefault();
        for( key in imageList ) if( $(this).attr("href") == imageList[key].image ) currentImage = imageList[key].id;
        changeImage();
    });
    
    function changeImage(){
        $(".gallery .large-image img").attr("src", imageList[ currentImage ].image);
        $(".gallery .large-image img").attr("title", imageList[ currentImage ].title);
        $(".gallery .large-image img").hide().fadeIn(300);
        $(".gallery .selectors a").removeClass("selected");
        imageList[ currentImage ].element.addClass("selected");
        $(".gallery .large-image a").attr("href", imageList[ currentImage ].image);
        
        if( currentImage == 0 ) {
            $( ".gallery .selectors .prev" ).addClass("selected");
        }
        else{ 
            $( ".gallery .selectors .prev" ).removeClass("selected");
        }
        if( currentImage == (imageList.length - 1) ){ 
            $( ".gallery .selectors .next" ).addClass("selected");
        }
        else{
            $( ".gallery .selectors .next" ).removeClass("selected");
        }
        
        /*Tittle of large image*/
        var largeTitle = imageList[ currentImage ].element.children("img").attr("title");
        if(largeTitle !== 'undefined' && largeTitle !== '' ){
            $(".gallery .large-image span").remove();
            $(".gallery .large-image").append("<span>" + largeTitle + "</span>");
        } else{
            $(".gallery .large-image span").remove();
        }
        /*End of Tittle of large image*/
    }
    
    /*Prev/Next desappear if don't have 4 images*/
	if($(window).width() >= 768){
		if($(".gallery .thumbs li").length <= 4){
			$(".gallery .next, .gallery .prev").addClass("selected");
		}
		if($(".planta-gallery .thumbs li").length <= 4){
			$(".planta-gallery .next, .gallery .prev").addClass("selected");
		}
		if($(".andamento-gallery .thumbs li").length <= 4){
			$(".andamento-gallery .next, .gallery .prev").addClass("selected");
		}
	}
    
    if($(".gallery .thumbs li").length <= 1){
        $(".gallery .selectors").hide();
    }
    if($(".planta-gallery .thumbs li").length <= 1){
        $(".planta-gallery .selectors").hide();
    }
	if($(".andamento-gallery .thumbs li").length <= 1){
        $(".andamento-gallery .selectors").hide();
    }
    /*End of Prev/Next desappear if don't have 4 images*/
    
    
    /*End of Galery Thumbs - Link*/
    
    
    /*Planta Galery Thumbs - Link*/
    var plantaimageList    = new Array();
    var plantacurrentImage = -1;
    $(".planta-gallery .thumbs a").each(function(index, element) {
        if (plantacurrentImage == -1)plantacurrentImage = 0;
        plantaimageList[ index ]         = new Object();
        plantaimageList[ index ].id      = index;
        plantaimageList[ index ].element = $(element);
        plantaimageList[ index ].image   = $(element).attr("href");
        plantaimageList[ index ].title   = $(element).attr("title");
    });
    
    
    $( ".planta-gallery .selectors .prev" ).click( function(e){
        e.preventDefault();
        plantacurrentImage--;
        plantachangeImage();
        $(".planta-gallery .viewport").animate({"margin-left": "+=138px"});
        
    } );
    $( ".planta-gallery .selectors .next" ).click( function(e){
        e.preventDefault();
        plantacurrentImage++;
        plantachangeImage();
        $(".planta-gallery .viewport").animate({"margin-left": "-=138px"});
    } );
    if(plantacurrentImage != -1)plantaimageList[ plantacurrentImage ].element.addClass("selected");
    
    $(".planta-gallery .selectors a").click(function(e) {
        e.preventDefault();
        for( key in plantaimageList ) if( $(this).attr("href") == plantaimageList[key].image ) plantacurrentImage = plantaimageList[key].id;
        plantachangeImage();
    });
    
    function plantachangeImage(){
        $(".planta-gallery .large-image img").attr("src", plantaimageList[ plantacurrentImage ].image);
        $(".planta-gallery .large-image img").attr("title", plantaimageList[ plantacurrentImage ].title);
        $(".planta-gallery .large-image img").hide().fadeIn(300);
        $(".planta-gallery .selectors a").removeClass("selected");
        plantaimageList[ plantacurrentImage ].element.addClass("selected");
        $(".planta-gallery .large-image a").attr("href", plantaimageList[ plantacurrentImage ].image);
        
        
        if( plantacurrentImage == 0 ){ 
            $( ".planta-gallery .selectors .prev" ).addClass("selected");
        }
        else{ 
            $( ".planta-gallery .selectors .prev" ).removeClass("selected");
        }
        if( plantacurrentImage == (plantaimageList.length - 1) ){ 
            $( ".planta-gallery .selectors .next" ).addClass("selected");
        }
        else{ 
            $( ".planta-gallery .selectors .next" ).removeClass("selected");
        }
        
        /*Tittle of large image*/
        var plantalargeTitle = plantaimageList[ plantacurrentImage ].element.children("img").attr("title");
        if(plantalargeTitle !== 'undefined' && plantalargeTitle !== '' ){
            $(".planta-gallery .large-image span").remove();
            $(".planta-gallery .large-image").append("<span>" + plantalargeTitle + "</span>");
        } else{
            $(".planta-gallery .large-image span").remove();
        }
        /*End of Tittle of large image*/
    }
    
    /*End of Planta Galery Thumbs - Link*/
	
	
	
	
	/*andamento Galery Thumbs - Link*/
    var andamentoimageList    = new Array();
    var andamentocurrentImage = -1;
    $(".andamento-gallery .thumbs a").each(function(index, element) {
        if (andamentocurrentImage == -1)andamentocurrentImage = 0;
        andamentoimageList[ index ]         = new Object();
        andamentoimageList[ index ].id      = index;
        andamentoimageList[ index ].element = $(element);
        andamentoimageList[ index ].image   = $(element).attr("href");
        andamentoimageList[ index ].title   = $(element).attr("title");
    });
    
    
    $( ".andamento-gallery .selectors .prev" ).click( function(e){
        e.preventDefault();
        andamentocurrentImage--;
        andamentochangeImage();
        $(".andamento-gallery .viewport").animate({"margin-left": "+=138px"});
        
    } );
    $( ".andamento-gallery .selectors .next" ).click( function(e){
        e.preventDefault();
        andamentocurrentImage++;
        andamentochangeImage();
        $(".andamento-gallery .viewport").animate({"margin-left": "-=138px"});
    } );
    if(andamentocurrentImage != -1)andamentoimageList[ andamentocurrentImage ].element.addClass("selected");
    
    $(".andamento-gallery .selectors a").click(function(e) {
        e.preventDefault();
        for( key in andamentoimageList ) if( $(this).attr("href") == andamentoimageList[key].image ) andamentocurrentImage = andamentoimageList[key].id;
        andamentochangeImage();
    });
    
    function andamentochangeImage(){
        $(".andamento-gallery .large-image img").attr("src", andamentoimageList[ andamentocurrentImage ].image);
        $(".andamento-gallery .large-image img").attr("title", andamentoimageList[ andamentocurrentImage ].title);
        $(".andamento-gallery .large-image img").hide().fadeIn(300);
        $(".andamento-gallery .selectors a").removeClass("selected");
        andamentoimageList[ andamentocurrentImage ].element.addClass("selected");
        $(".andamento-gallery .large-image a").attr("href", andamentoimageList[ andamentocurrentImage ].image);
        
        
        if( andamentocurrentImage == 0 ){ 
            $( ".andamento-gallery .selectors .prev" ).addClass("selected");
        }
        else{ 
            $( ".andamento-gallery .selectors .prev" ).removeClass("selected");
        }
        if( andamentocurrentImage == (andamentoimageList.length - 1) ){ 
            $( ".andamento-gallery .selectors .next" ).addClass("selected");
        }
        else{ 
            $( ".andamento-gallery .selectors .next" ).removeClass("selected");
        }
        
        /*Tittle of large image*/
        var andamentolargeTitle = andamentoimageList[ andamentocurrentImage ].element.children("img").attr("title");
        if(andamentolargeTitle !== 'undefined' && andamentolargeTitle !== '' ){
            $(".andamento-gallery .large-image span").remove();
            $(".andamento-gallery .large-image").append("<span>" + andamentolargeTitle + "</span>");
        } else{
            $(".andamento-gallery .large-image span").remove();
        }
        /*End of Tittle of large image*/
    }
    
    /*End of Planta Galery Thumbs - Link*/
	
	
	
    
    
    /*Lightbox*/
    
    function lightboxMargin() {
        var lightboxWidth  = $(".lightbox .lightbox-content img").width() / 2;
        var lightboxHeight = $(".lightbox .lightbox-content img").height() / 2;
        
        var lightboxMarginTop  = "-" + parseFloat(lightboxHeight) + "px";
        var lightboxMarginLeft = "-" + parseFloat(lightboxWidth) + "px";
        $(".lightbox .lightbox-content").css("margin-top", lightboxMarginTop);
        $(".lightbox .lightbox-content").css("margin-left", lightboxMarginLeft);
    }
    lightboxMargin();
    $(".lightbox .lightbox-content").css("width", $(".lightbox .lightbox-content img").width());
    $(".lightbox .lightbox-content").css("height", $(".lightbox .lightbox-content img").height());
    
    $(window).resize(function(e){
        lightboxMargin();
    });
    
    $(".fechar").click(function(e){
        e.preventDefault;
        $(this).parent().parent().fadeOut(300);
    });
    $(".lightbox").click(function(e){
        e.preventDefault;
        $(this).fadeOut(300);
    });
    
    $(".detalhes-hover").click(function(e){
        setTimeout(lightboxMargin, 200);
        e.preventDefault();
        
        var detalhesLink = $(this).attr("href");
        $(".lightbox .lightbox-content img").attr("src", detalhesLink);
        $(".lightbox").fadeIn(300);
        var maxHeightImg = $(window).height() - 50;
        $(".lightbox .lightbox-content img").css({maxHeight:maxHeightImg});
    });
    /*End of Lightbox*/
    
    /*Hide Gallery if this don't have any images*/
    if($(".gallery .viewport ul li").size() > 0){
        $(".gallery").show();
    } else{
        $(".gallery").hide();
    }
    /*End of Hide Gallery if this don't have any images*/
    
    /*Hide Planta Gallery if this don't have any images*/
    if($(".planta-gallery .viewport ul li").size() > 0){
        $(".planta-gallery").show();
    } else{
        $(".planta-gallery").hide();
    }
    /*End of Hide Planta Gallery if this don't have any images*/
	
	/*Hide Andamento Gallery if this don't have any images*/
    if($(".andamento-gallery .viewport ul li").size() > 0){
        $(".andamento-gallery").show();
    } else{
        $(".andamento-gallery").hide();
    }
    /*End of Hide Planta Gallery if this don't have any images*/
    
    /*Mobile Expand*/
    $(".ficha-tecnica .mobile-expand").click(function(e){
        $(".ficha-tecnica ul").toggleClass("active");
    });
    /*Mobile Expand*/
    
    /*Hide empty Ficha Técnica <li>*/
    $(".ficha-tecnica li span:empty").parent().remove();
    /*End of Hide empty Ficha Técnica <li>*/
    
    /*Remove Image if don't have text*/
    if($(".main-img-txt").find("p").length == 0){
        $(".main-img-txt").remove();
    }
    /*END OF Remove Image if don't have text*/
    
	
});