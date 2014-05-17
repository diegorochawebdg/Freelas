jQuery(window).load(function() {
	
		var small_menu = '<select class="small_menu">';		
		jQuery('.main-menu aside ul:first').find('li').each(function(){
		var href = jQuery(this).find('a').first().attr('href');
		var title = jQuery(this).find('a').first().text();				
		small_menu += '<option value="'+href+'">'+title+'</option>';  			
		});		
		small_menu += '</select>';		
		jQuery('.main-menu aside ul:first').after(small_menu);
				
	
	
	if (jQuery(document).width() < 750 ){      
	   jQuery('.main-menu aside ul:first, img.logo').hide();	 
	   jQuery('.main-menu aside').width('100%');
	   jQuery('div.main-menu nav').css('border-radius', '0');
	   jQuery('.small_menu').show();
    }else{
	   jQuery('.main-menu aside ul:first, img.logo').show();
	   jQuery('.main-menu aside').width('auto');
	   jQuery('div.main-menu nav').css('border-radius', '0 0 5px 5px');
	   jQuery('.small_menu').hide();   
	   }


jQuery('.small_menu').change(function() {
	var goTo = jQuery(this).val();
	if (goTo.indexOf('http://') != -1){
		window.location.href = goTo;
	}else{
    jQuery('html, body').animate({
        scrollTop: jQuery(goTo).offset().top
        }, 800);
	}
});	   

});

jQuery(window).resize(function(){
	
	if (jQuery(document).width() < 750 ){      
	   jQuery('.main-menu aside ul:first, img.logo').hide();	 
	   jQuery('.main-menu aside').width('100%');
	   jQuery('div.main-menu nav').css('border-radius', '0');
	   jQuery('.small_menu').show();
    }else{
	   jQuery('.main-menu aside ul:first, img.logo').show();
	   jQuery('.main-menu aside').width('auto');
	   jQuery('div.main-menu nav').css('border-radius', '0 0 5px 5px');
	   jQuery('.small_menu').hide();   
	   }
	   
});

