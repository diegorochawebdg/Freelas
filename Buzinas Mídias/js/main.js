jQuery(document).ready(function() {
	jQuery('.vimeo').each(function() {
		var vimeo_src_value = jQuery(this).find('.vimeo_source').first().val();	
		jQuery(this).html('<iframe src="http://player.vimeo.com/video/'+vimeo_src_value+'?title=0&amp;portrait=0&amp;badge=0&amp;autoplay=0"></iframe>')
	});
	
	jQuery('.youtube').each(function() {
		var youtube_src_value = jQuery(this).find('.youtube_source').first().val();	
		jQuery(this).html('<iframe src="http://www.youtube.com/embed/'+youtube_src_value+'"></iframe>')
	});
	});
	

jQuery(window).load(function() {
    jQuery('.doc-loader').fadeOut('slow');
	
    addTweets();        
        
    jQuery(".text-slider").each(function(){  
        
        var id = jQuery(this).attr('id');
  
        if(window[id+'_pagination'] == 'true')
        {
            var pagination_value = '.'+id+'_pagination'; 
        }
        else

        {
            var pagination_value = false; 
        }
                                
        var auto_value = window[id+'_auto'];
        if(auto_value == 'false')
        {
            auto_value = false;  
        }else{
            auto_value = true;    
        }
       
        var hover_pause = window[id+'_hover'];
        if(hover_pause == 'true')
        {
            hover_pause = 'resume';
        }
        else{
            hover_pause = false;
        }
               
        var speed_value = window[id+'_speed'];
       
        jQuery('#'+id).carouFredSel({	
            responsive: true,
            width: 'variable',              
            auto: {
                play: auto_value,
                pauseOnHover: hover_pause                
            },        
            pagination: pagination_value,	
            scroll: {
                fx: 'uncover',
                duration: parseFloat(speed_value)
            },
            swipe: {
                onMouse: true,
                onTouch: true
            }, 
            items: {
                height: 'variable'			
            }
        });     
    });                                   

    // Fix for Vimeo and YouTube Video to be Full Screen
    jQuery(".vimeo, .youtube").each(function() {
        var vimeo_width = jQuery(this).width();    
        var vimeo_height = vimeo_width*16*7/(90*2.2);
        jQuery(this).find('iframe').css('height',vimeo_height);    
    }); 
    
    //Fix for Counter - remove "border-right" on last elemnt
    jQuery('.counter-widget').each(function(){
        jQuery(this).find('li').last().removeClass('border-right');
    });
        
    jQuery('.carousel_pagination').each(function(){
        var pagination_width = jQuery(this).width();                
        var windw_width = jQuery('.content-960').width();                
        jQuery(this).css("margin-left", (windw_width-pagination_width)/2);
    });
	
    jQuery('.testimonial-prev, .testimonial-next').hover(function(){
        jQuery(this).find('img').css({
            'margin-top':'-42px'
        });
    }, function() {
        jQuery(this).find('img').css({
            'margin-top':'0px'
        });
    });
	
    jQuery('.social-about a').hover(function(){
        jQuery(this).find('img').css({
            'margin-top':'-37px'
        });
    }, function() {
        jQuery(this).find('img').css({
            'margin-top':'0px'
        });
    });
	
    jQuery('#news-items li a.read-more').hover(function(){
        jQuery(this).find('img').css({
            'margin-top':'-30px'
        });
    }, function() {
        jQuery(this).find('img').css({
            'margin-top':'0px'
        });
    });
	
    jQuery("#news-items li:visible").filter(":nth-child(3n)").css("margin-right", "0px");
        
    displayHints();	
	
    jQuery('.dryThemePopupHolder article').center();
	
    jQuery('span.previous').parent().addClass('right');
	
    jQuery('span.next').parent().addClass('left');
	
    jQuery('#main-blog-holder').css({
        'min-height':jQuery('#main-blog-holder').height()
    });
	
    jQuery('#news-items li a.read-more').hover(function(){
        jQuery(this).find('img').css({
            'margin-top':'-30px'
        });
    }, function() {
        jQuery(this).find('img').css({
            'margin-top':'0px'
        });
    });
	
});
jQuery(window).resize(function(){
    jQuery('.carousel_pagination').each(function(){
        var pagination_width = jQuery(this).width();                   
        var window_width = jQuery('.content-960').width();                		
        jQuery(this).css("margin-left", (window_width-pagination_width)/2);
    });
    jQuery('.dryThemePopupHolder article').center();
	
    // Fix for Vimeo and YouTube Video to be Full Screen
    jQuery(".vimeo, .youtube").each(function() {
        var vimeo_width = jQuery(this).width();    
        var vimeo_height = vimeo_width*16*7/(90*2.2);
        jQuery(this).find('iframe').css('height',vimeo_height);    
    }); 
	
});
//------------------------------------------------------------------------
//Helper Methods -->
//------------------------------------------------------------------------
var displayHints = function()
{
    if(jQuery().attachHint) {		
        jQuery('#name, #author').attachHint('Nome:');
        jQuery('#contact-email, #email').attachHint('Email:');
        jQuery('#message, #comment').attachHint('Mensagem:');
    }
}
var StringFormat = function() {
    var s = arguments[0];
    for (var i = 0; i < arguments.length - 1; i++) {
        var regExpression = new RegExp("\\{" + i + "\\}", "gm");
        s = s.replace(regExpression, arguments[i + 1]);
    }
    return s;
}
var resetInput = function(){
    jQuery('input, textarea').each(function() {
        jQuery(this).val('').text('');
    });	
};
jQuery(".photo-holder").hover(function(){
    jQuery(this).css("opacity",0.8);
    jQuery(this).find('img.portfolio-plus').first().show('normal');	
},
function(){
    jQuery(this).find('img.portfolio-plus').first().hide();
    jQuery(this).css("opacity",1);
});