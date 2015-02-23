jQuery(window).load(function (){
    jQuery('.novo-menu').find('li').first().addClass('active');
    setTimeout(function() {
        jQuery('body').trigger('resize');
    }, 200);
	
	if( 'referrer' in document && typeof document.referrer != undefined) {
	   var url_parts = document.referrer.split("/");
	   var url =  url_parts[0] + "//" + url_parts[2];
	   
	   if(window.location.href.indexOf(url) == -1)
	   {
		  jQuery.removeCookie('scrollTop');
	   }
    }
	if(jQuery.cookie("scrollTop")){
		jQuery('html, body').animate({
			scrollTop: jQuery.cookie("scrollTop")
		});
	}
});
jQuery(window).bind('scroll resize', function() {	
    if (jQuery(window).scrollTop() + 30 >= jQuery('.main-menu').offset().top) {
        jQuery('.main-menu').addClass('fixed');		
    } else if (jQuery(window).scrollTop() < jQuery('.main-menu').next().offset().top - 70.5) {		
        jQuery('.main-menu').removeClass('fixed');
    }
	
    var currentSection = null;
	
    jQuery('.section').each(function(){
        var element = jQuery(this).attr('id');		
        if(jQuery(window).scrollTop() >= jQuery('#'+element).offset().top - 71)
        {
            currentSection = element;
        }
    });
	
    jQuery('.main-menu nav li').removeClass('active').find('a[href="#'+currentSection+'"]').parent().addClass('active');
	
	jQuery('select.small_menu option:selected').removeAttr('selected');
	jQuery('select.small_menu option[value="#'+currentSection+'"]').attr('selected', 'selected');
	
	jQuery.cookie("scrollTop", jQuery(window).scrollTop());
});  
jQuery('.main-menu nav li a').click(function() {
    jQuery('html, body').animate({
        scrollTop: jQuery(this.hash).offset().top
        }, 800);
    return false;
});