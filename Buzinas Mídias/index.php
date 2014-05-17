<?php get_header(); ?>
<?php
$first_page = 0;
$args=array('post_type'=>'page', 'posts_per_page'=>'-1', 'orderby'=>'menu_order', 'order'=>'ASC');
 $loop = new WP_Query($args);
 if ($loop->have_posts()) : 
         while ($loop->have_posts()) : $loop->the_post(); 	
    $first_page++;
    $option = $post->post_content;
    //Get custom field value
    $page_background_color = get_post_meta($post->ID, "page_background_color", true);
    $page_background_img = get_post_meta($post->ID, "page_background_img", true);
    $page_title = get_post_meta($post->ID, "page_title", true);
    $page_title_description = get_post_meta($post->ID, "page_title_description", true);
    $page_title_color = get_post_meta($post->ID, "page_title_color", true);
    $page_title_description_color = get_post_meta($post->ID, "page_title_description_color", true);
  //$slug = strtolower($post->post_title);
  //$slug = str_replace(' ', '_', $slug);
    
	$slug = $post->ID;
	
	//Check value for custom fields
    if ($page_background_color == '') {
        $page_background_color = '#D82546';
    }
    if ($page_title_color == '') {
        $page_title_color = '#ffffff';
    }
    if ($page_background_img != '') {
        $div_holder = '<div id="np-' . $slug . '" class="section" style="background-color:' . $page_background_color . '; 
                        background-image:url(' . $page_background_img . '); 
                        background-repeat:' . get_post_meta($post->ID, "page_img_repeat", true) . '; 
                        background-position:' . get_post_meta($post->ID, "page_img_position", true) . '; 
                        ">';
    } else {
        $div_holder = '<div id="np-' . $slug . '" class="section" style="background-color:' . $page_background_color . '">';
    }
    if ($page_title != 'no') {
        $div_title = '<div class="page-title">                      
                      <h2 class="page-title" style="color:' . $page_title_color . '">' . get_the_title($post) . '</h2><div class="title-description" style="color:' . $page_title_description_color . '">' . $page_title_description . '</div>
                      <div class="title-line-separator"></div>
                      </div>';
    } else {
        $div_title = '';
    }
    echo $div_holder;
    echo '<div ';
    post_class("block content-960 center-relative");
    echo '> ';
    echo $div_title;
    //Check if page is "Blog"      
    $template = get_post_meta($post->ID, '_wp_page_template', true);
    if ($template == 'blog.php') {

	echo '<div id="main-blog-holder"><div id="blog-items-holder">';
			$wp_query->query('post_type=post&paged=' . $paged);
if (have_posts()) :
$option = '<ul id="news-items">';
    while (have_posts()) : the_post();
        $option .= '<li class="one_third">                                                               
				<p class="title">
				<a href="' . get_permalink($post->ID) . '">' . substrwords(get_the_title(), 25) . '</a>
				</p>
				<span class="category">' . get_the_time('F d, Y', $post->ID) . '</span>
                                <div class="blog-front-content">' . substrwords(get_the_content(), 120) . '</div>
				<a class="read-more" href="' . get_permalink($post->ID) . '">
                                    CONTINUE LENDO
				</a>				
			</li>';
    endwhile;
    $option .='</ul>';
	echo do_shortcode($option);
endif;

?>
<div id="blog-pagination" class="clear center-text">   
<?php posts_nav_link(' ', '<span class="next">Next</span>', '<span class="previous">Previous</span>'); ?>	
    <div class="clear"></div>
</div>
<?php
        echo '</div></div>';
    } else {
        echo do_shortcode($option);
    }
    echo '</div>';
    echo '</div>';
    if ($first_page == '1') {
        ?>
        <!--Navigation Menu-->
        <div class="main-menu absolute">           
            <nav class="center-relative">
        <?php if (get_option('dry_menu_logo')): ?>
                    <link rel="shortcut icon" href="<?php echo get_option('dry_fav_icon'); ?>" /> 		
                    <a class="left" href="<?php echo(site_url('/')); ?>">
                        <img class="logo" src="<?php echo get_option('dry_menu_logo'); ?>" alt="Buzina Mídias Digitais" title="Retornar para a página inicial" />
                    </a>
        <?php endif; ?>
                <aside class="right">
                <?php
                $menu_name = 'custom_menu';
                if (has_nav_menu($menu_name)) {
                    $locations = get_nav_menu_locations();
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $menu_list = '<ul id="menu-' . $menu_name . '">';
                    $menu_counter = 0;
                    global $menu_counter;
                    foreach ((array) $menu_items as $key => $menu_item) {
                        $menu_counter++;
                        $title = $menu_item->title;
                        $url = $menu_item->url;						
                       //$slug = strtolower($menu_item->title);
                       //$slug = str_replace(' ', '_', $slug);					   
					   $slug = get_page_by_title($title);
					   $slug = $slug->ID;
                        $type = $menu_item->type;
                        if ($type != 'custom') {
                            $menu_list .= '<li><a href="#np-' . $slug . '">' . $title . '</a></li>';
                        } else {
                            $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                        }
                    }
                    $menu_list .= '</ul>';
                } else {
                    $menu_list = '<ul class="novo-menu">';
                    $pages = get_pages(array('sort_column' => 'menu_order'));
                    foreach ($pages as $page) {
                        //$slug = strtolower($page->post_title);
                        //$slug = str_replace(' ', '_', $slug);
						
						$slug = $page->ID;
						
                        $menu_list .= '<li><a href="#np-' . $slug . '">' . $page->post_title . '</a></li>';
                    }
                    $menu_list .='</ul>';
                }
                echo $menu_list;
                ?>
                </aside>
            </nav>
        </div>  
                    <?php
            }
			endwhile;
			endif;	
			?>    
			
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1)) : ?><?php endif; ?>    
            <?php get_footer(); ?>