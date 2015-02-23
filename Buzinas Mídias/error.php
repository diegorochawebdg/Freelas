<?php get_header(); ?>
<?php wp_dequeue_script('jquery.dryMenu', $base_theme_url . '/js/jquery.dryMenu.js', array('jquery'), '', true); ?>
<div class="ow-overlay"></div>
<div class="dryThemePopupHolder">    
    <article class="modal">                  
        <div class="article-content">
            <a class="popup-close">
                <div class="image-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/close_icon.png" alt="" class="absolute">
                </div>
            </a>
            <h1><?php echo $message; ?></h1>
            <div class="title-line-separator"></div>
            <span class="category block">                        
            </span>                    		                        
        </div>				
        <div class="pop-up-footer">	
            <div class="pop-up-copyright"><?php echo get_theme_mod('copyright_text', '&copy; DryThemes - Built with love and passion'); ?></div>
        </div>
        <div class="clear"></div>
    </article>		
</div>
<?php get_footer(); ?>