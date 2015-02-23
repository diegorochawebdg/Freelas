jQuery(document).ready(function(){  
	jQuery('#blog-pagination a').live('click', function(e){  	  
		e.preventDefault();  	  
		var link = jQuery(this).attr('href');  
		jQuery('#blog-items-holder').html('<div class="loading-more-posts"><img src="'+DryAJAX.ThemePath+'/images/ajax-loader-blog.gif" alt=""/></div>');		
		jQuery('#main-blog-holder').load(link+' #blog-items-holder', function(){
			jQuery("#news-items li:visible").filter(":nth-child(3n)").css("margin-right", "0px");
			
			jQuery('span.previous').parent().addClass('right');
	
			jQuery('span.next').parent().addClass('left');
			
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
	});  
}); 