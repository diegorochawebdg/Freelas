jQuery(document).ready(function() {
jQuery("#work-items li:visible").filter(":nth-child(3n)").css("margin-right", "0px");
	jQuery('ul#filter li').click(function() {		
		jQuery('ul#filter li.current').removeClass('current');
		var filterVal = jQuery(this).attr("class");
                jQuery(this).addClass('current');
				
		if(filterVal == 'all') {
			jQuery('ul#work-items li, img.absolute').animate({opacity: 1}, 1000);
		} else {
			
			jQuery('ul#work-items li').each(function() {
				if(!jQuery(this).hasClass(filterVal)) {
					jQuery(this).animate({opacity: 0.1}, 1000);
					if (jQuery.browser.msie  && parseInt(jQuery.browser.version, 10) === 8) {
					jQuery(this).find(".photo-holder").css("position", "static");													
					jQuery(this).find("img.absolute").animate({opacity: 0.1}, 1000);													
					}
				} else {
					jQuery(this).animate({opacity: 1}, 1000);
					if (jQuery.browser.msie  && parseInt(jQuery.browser.version, 10) === 8) {
					jQuery(this).find(".photo-holder").css("position", "static");													
					jQuery(this).find("img.absolute").animate({opacity: 1}, 1000);
					}
				}
			});
		}
		return false;
		
	});
});