jQuery(document).ready(function() {
    jQuery('.popup-close, .ow-overlay').click(function(){		
        if( 'referrer' in document && typeof document.referrer != undefined) {
			var url_parts = document.referrer.split("/");
			var url =  url_parts[0] + "//" + url_parts[2];
			
			if(window.location.href.indexOf(url) == -1)
			{
			   jQuery.removeCookie('scrollTop');
			}
			
			window.location = popup_handler.SiteUrl;
		}
    });
	
	jQuery('.popup-close').hover(function(){
				jQuery(this).find('img').css({
					'margin-top':'-26px'
				});
			}, function() {
				jQuery(this).find('img').css({
					'margin-top':'0px'
				});
			});
});