<?php get_header(); ?>
<div class="ow-overlay"></div>
<div class="dryThemePopupHolder">  
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $image_thumb = get_post_meta($post->ID, "single_image_thumb", true);
            $vimeo_thumb = get_post_meta($post->ID, "single_vimeo_thumb", true);
            $html_thumb = get_post_meta($post->ID, "single_html_thumb", true);
            $has_thumb = '0';

            if ($image_thumb != '') {
                $single_thumb = '<img class="top-round" src="' . $image_thumb . '" alt="" />';
                $has_thumb = '1';
            }

             if ($vimeo_thumb != '') {
				$is_vimeo = strstr($vimeo_thumb, 'vimeo.com/');
				if($is_vimeo == false){							
				$get_vimeo_thumb = explode('youtube.com/watch?v=', $vimeo_thumb);
				$single_thumb = '<div class="youtube">             
							<input type="hidden" class="youtube_source" value="'.$get_vimeo_thumb[1].'"/> 											
                                </div>';														
				}else{					
				$get_vimeo_thumb = explode('vimeo.com/', $vimeo_thumb);				
				$single_thumb = '<div class="vimeo">
                        	<input type="hidden" class="vimeo_source" value="'.$get_vimeo_thumb[1].'"/>       
                                </div>';
				}
                $has_thumb = '1';
				}            

            if ($html_thumb != '') {
                $single_thumb = str_replace("&", "&amp;", $html_thumb);
                $has_thumb = '1';
            }

            if ($has_thumb == '0') {
                $single_thumb = '';
            }
            ?>
            <article class="modal">   
                <div class="single-top-thumb"><?php echo do_shortcode($single_thumb); ?></div>
                <div class="article-content">
                    <a class="popup-close">
                        <div class="image-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/close_icon.png" alt="" class="absolute" />
                        </div>
                    </a>
                    <h1 class="single-h1-title"><?php the_title(); ?></h1>
                    <div class="title-line-separator"></div>
                    <span class="category block">
                        <?php
                        $cat_list = '';
                        foreach ((get_the_category()) as $category) {
                            if ($category->cat_name != 'Uncategorized') {
                                $cat_list .= ' ' . $category->cat_name . ',';
                            }
                        }
                        if ($cat_list != '') {
                            $cat_list .=';';
                            $cat_list = explode(',;', $cat_list);
                            if ($cat_list[0] != '') {
                                echo 'In' . $cat_list[0];
                            }
                        }
                        ?>
                    </span>                    		
                    <?php the_content(); ?> 
                    <div class="right tags"><?php the_tags(); ?></div>
                    <div class="clear"></div>
                    <?php wp_link_pages('before=<div id="page-links">&after=</div>'); ?>						
                </div>
                <div class="posts-navigation">
                    <div class="left"><?php previous_post_link('%link', 'PREVIOUS'); ?></div>
                    <div class="right"><?php next_post_link('%link', 'NEXT'); ?></div>
                    <div class="clear">&nbsp;</div>
                </div>
                <?php if (comments_open()) : ?>
                    <div class="comments-holder clear">
                        <?php comments_template(); ?>
                    </div>
                    <div class="comments-pagination-wrapper">
                        <div class="comments-pagination">
                            <?php paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;')); ?> 
                        </div>
                    </div>
                <?php endif; ?>
                <div class="pop-up-footer">	
                    <div class="pop-up-copyright"><?php echo get_theme_mod('copyright_text', '&copy; DryThemes - Built with love and passion'); ?></div>
                </div>
                <div class="clear"></div>
            </article>
        <?php endwhile; ?>			
    <?php endif; ?>
</div>
<?php get_footer(); ?>