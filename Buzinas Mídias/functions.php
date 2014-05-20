<?php
// <editor-fold defaultstate="collapsed" desc="Enqueue Scripts And Styles">


function load_scripts_and_style() {
    wp_register_style('google_fonts_style', 'http://fonts.googleapis.com/css?family=Armata');
    wp_enqueue_style('google_fonts_style');
    
    function localize_dry_vars() {
        return array(
            'SiteUrl' => site_url('/')
        );
    }
    
    wp_enqueue_script('dry_variables_script', get_template_directory_uri() . '/js/popup_handler.js', array('jquery'), '1.0.0');
    wp_localize_script('dry_variables_script', 'popup_handler', localize_dry_vars());

//Initialize once to optimize number of cals to get template directory url method
    $base_theme_url = get_template_directory_uri();

//register and load styles which is used on every pages       
    wp_register_style('clear_style', $base_theme_url . '/css/clear.css');
    wp_enqueue_style('clear_style');
    wp_register_style('colors_style', $base_theme_url . '/css/colors.css');
    wp_enqueue_style('colors_style');
    wp_register_style('default_style', $base_theme_url . '/css/default.css');
    wp_enqueue_style('default_style');
    wp_register_style('columns_style', $base_theme_url . '/css/columns.css');
    wp_enqueue_style('columns_style');
    wp_register_style('common_style', $base_theme_url . '/css/common.css');
    wp_enqueue_style('common_style');
    wp_register_style('main_theme_style', $base_theme_url . '/style.css');
    wp_enqueue_style('main_theme_style');
    wp_register_style('carouFredSel_style', $base_theme_url . '/css/carouFredSel.css');
    wp_enqueue_style('carouFredSel_style');
    wp_register_style('typography_style', $base_theme_url . '/css/typography.css');
    wp_enqueue_style('typography_style');
    wp_register_style('standard_wp_style', $base_theme_url . '/css/wp.css');
    wp_enqueue_style('standard_wp_style');
    wp_register_style('responsive_style', $base_theme_url . '/css/responsive.css');
    wp_enqueue_style('responsive_style');

//JavaScript
    wp_enqueue_script('jquery', '', '', '', '', true);
    wp_enqueue_script('pagination-handler', $base_theme_url . '/js/pagination_handler.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.hashtag', $base_theme_url . '/js/jquery.hashtag.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.dryMenu', $base_theme_url . '/js/jquery.dryMenu.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.carouFredSel-6.1.0-packed', $base_theme_url . '/js/jquery.carouFredSel-6.1.0-packed.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.mousewheel.min', $base_theme_url . '/js/jquery.mousewheel.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.touchSwipe.min', $base_theme_url . '/js/jquery.touchSwipe.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.ba-throttle-debounce.min', $base_theme_url . '/js/jquery.ba-throttle-debounce.min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.easing.1.3', $base_theme_url . '/js/jquery.easing.1.3.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.myHint', $base_theme_url . '/js/jquery.myHint.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.omniwindow', $base_theme_url . '/js/jquery.omniwindow.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.center', $base_theme_url . '/js/jquery.center.js', array('jquery'), '', true);
    wp_enqueue_script('portfolio', $base_theme_url . '/js/portfolio.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.vticker-min', $base_theme_url . '/js/jquery.vticker-min.js', array('jquery'), '', true);
    wp_enqueue_script('jquery.tweets', $base_theme_url . '/js/jquery.tweets.js', array('jquery'), '', true);
    wp_enqueue_script('getStyle', $base_theme_url . '/js/getStyle.js', array('jquery'), '', true);
    wp_enqueue_script('backgroundImageFix', $base_theme_url . '/js/backgroundImageFix.js', array('jquery'), '', true);
    wp_enqueue_script('savePosition', $base_theme_url . '/js/savePosition.js', array('jquery'), '', true);
	wp_enqueue_script('smallMenu', $base_theme_url . '/js/smallMenu.js', array('jquery'), '', true);
    wp_enqueue_script('main', $base_theme_url . '/js/main.js', array('jquery'), '', true);

    if (is_single()) {
        wp_register_style('comments_style', $base_theme_url . '/css/comments.css');
        wp_enqueue_style('comments_style');
        wp_register_style('single_style', $base_theme_url . '/css/single.css');
        wp_enqueue_style('single_style');
        wp_dequeue_script('jquery.dryMenu', $base_theme_url . '/js/jquery.dryMenu.js', array('jquery'), '', true);
        wp_enqueue_script('single', $base_theme_url . '/js/single.js', array('jquery'), '', true);
    }
    
    if (is_singular()) {
        wp_dequeue_script('jquery.dryMenu', $base_theme_url . '/js/jquery.dryMenu.js', array('jquery'), '', true);
        if (get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_head', 'load_scripts_and_style');

function init_theme_scripts() {
//Initialize once to optimize number of cals to get template directory url method
    $base_theme_url = get_template_directory_uri();
    wp_register_style('doc-loader_style', $base_theme_url . '/css/doc-loader.css');
    wp_enqueue_style('doc-loader_style');
}
add_action('init', 'init_theme_scripts');
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Register custom 'portfolio' post type">
add_action('init', 'create_portfolio');
function create_portfolio() {
    $portfolio_args = array(
        'label' => 'Portfolio',
        'singular_label' => 'Portfolio',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title', 'editor', 'comments', 'custom-fields', 'thumbnail'),
        'taxonomies' => array('category', 'post_tag')
    );
    register_post_type('portfolio', $portfolio_args);
}
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Register custom 'static' post type">
add_action('init', 'create_static');
function create_static() {
    $static_content_arg = array(
        'label' => 'Static',
        'singular_label' => 'Static',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title', 'editor', 'comments', 'custom-fields'),
        'taxonomies' => array('category', 'post_tag')
    );
    register_post_type('static', $static_content_arg);
}
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Add support to theme for Portfolio thumbnails">
add_theme_support('post-thumbnails', array('portfolio'));
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Portfolio filter">
add_action('init', 'create_portfolio_taxonomies');
function create_portfolio_taxonomies() {
    $labels = array(
        'name' => 'Filter',
        'singular_name' => 'Filter',
        'search_items' => 'Search Filter',
        'all_items' => 'All Filter',
        'parent_item' => 'Parent Filter',
        'parent_item_colon' => 'Parent Filter:',
        'edit_item' => 'Edit Filter',
        'update_item' => 'Update Filter',
        'add_new_item' => 'Add New Filter',
        'new_item_name' => 'New Genre Filter',
        'menu_name' => 'Filter',
    );
    register_taxonomy('portfolio_filter', array('portfolio'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-filter'),
    ));
}
// </editor-fold>
//<editor-fold defaultstate="collapsed" desc="Columns short code">
function col($atts, $content = null) {
    extract(shortcode_atts(array(
                "size" => 'one',
                "class" => ''
                    ), $atts));
    switch ($size) {
        case "one":
            $return = '<div class="one ' . $class . '">
                    ' . do_shortcode($content) . '
                    </div><div class="clear"></div>';
            break;
        case "one_half_last":
            $return = '<div class="one_half last ' . $class . '">' . do_shortcode($content) . '</div><div class="clear"></div>';
            break;
        case "one_third_last":
            $return = '<div class="one_third last ' . $class . '">' . do_shortcode($content) . '</div><div class="clear"></div>';
            break;
        case "two_third_last":
            $return = '<div class="two_third last ' . $class . '">' . do_shortcode($content) . '</div><div class="clear"></div>';
            break;			
		case "one_fourth_last":
            $return = '<div class="one_fourth last ' . $class . '">' . do_shortcode($content) . '</div><div class="clear"></div>';
            break;
		case "three_fourth_last":
            $return = '<div class="three_fourth last ' . $class . '">' . do_shortcode($content) . '</div><div class="clear"></div>';
            break;	
        default:
            $return = '<div class="' . $size . ' ' . $class . '">' . do_shortcode($content) . '</div>';
    }
    return $return;
}
add_shortcode("col", "col");
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Page description short code">
function description($atts, $content = null) {
    extract(shortcode_atts(array(
                "class" => ''
                    ), $atts));
    $return = '<p class="info ' . $class . '">' . do_shortcode($content) . '</p>';
    return $return;
}
add_shortcode("description", "description");
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Slider holder short code">
function slider($atts, $content = null) {
    extract(shortcode_atts(array(
                "name" => 'slider',
                "auto" => 'true',
                "pagination" => 'true',
                "hover_pause" => 'true',
                "speed" => '500'
                    ), $atts));    
    
    return '<script> var ' . $name . '_speed="' . $speed . '"; 
                     var ' . $name . '_auto="' . $auto . '"; 
                     var ' . $name . '_pagination="' . $pagination . '"; 
                     var ' . $name . '_hover="' . $hover_pause . '"; 
            </script>
        <ul id = ' . $name . ' class = "text-slider slides center-text">
' . do_shortcode($content) . '
</ul>
<div class = "' . $name . '_pagination carousel_pagination left"></div>
<div class = "clear"></div>';
}
add_shortcode("slider", "slider");
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Slider Image short code">
function slide($atts, $content = null) {
    extract(shortcode_atts(array(
                "img" => '',
                "href" => ''
                    ), $atts));
    if ($href != ''){
    return '<li><a href="'.$href.'"><img src = "' . $img . '" alt = "" /></a></li>';
    }else{   
    return '<li><img src = "' . $img . '" alt = "" /></li>';
    }
}
add_shortcode("slide", "slide");
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Return values of portfolio filter">
function drop_cats($cat) {
    $category = '';
    $term_list = wp_get_post_terms($cat, 'portfolio_filter', array("fields" => "slugs"));
    foreach ($term_list as $c) {
        $category .= $c . ' ';
    }
    $category.=';';
    $category = explode(';', $category);
    if ($category[0] == ';') {
        $category[0] = '';
    }
    return $category[0];
}
// </editor-fold> 
// <editor-fold defaultstate="collapsed" desc="Portfolio short code">
function portfolio($atts, $content = null) {
    global $post;
    $return = '';
    $count = 0;
    $return .= '<ul id = "filter"><li class = "all current">ALL</li>';
// User category list
    $args = array('taxonomy' => 'portfolio_filter');
    foreach (get_categories($args) as $category) {
        $return.= '<li class = "' . $category->slug . '">' . $category->name . '</li>';
    }
//End user category list 
    $return .= '</ul><ul id = "work-items">';
    $args = array('post_type' => 'portfolio', 'posts_per_page' => -1);
    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();
        $count++;
        $last = $count % 3;
        if ($last == '0') {
            $last = 'last';
        } else {
            $last = '';
        }
        $show_category = '';
        $cat_list = '';
        foreach ((get_the_category()) as $category) {
            if ($category->cat_name != 'Uncategorized') {
                $cat_list .= $category->cat_name . ' / ';
            }
        }
        if ($cat_list != '') {
            $cat_list .=';';
            $cat_list = explode(' / ;', $cat_list);
            if ($cat_list[0] != '') {
                $show_category = $cat_list[0];
            }
        }
        if (has_post_thumbnail($post->ID)) {
            $portfolio_post_thumb = get_the_post_thumbnail();
        } else {
            $portfolio_post_thumb = '<img src = "' . get_template_directory_uri() . '/images/no_photo.jpg" alt = "" />';
        }
        $return.= '<li class = "' . drop_cats($post->ID) . '">
<div class = "photo-holder">
<a href = "' . get_permalink($post->ID) . '">
<img class = "portfolio-plus" src = "' . get_template_directory_uri() . '/images/plus.png" alt = "" />
</a>
' . $portfolio_post_thumb . '
</div>
<h2><a href = "' . get_permalink($post->ID) . '">' . get_the_title($post->ID) . '</a></h2>
<span class = "sub-info">' . $show_category . '</span>
<div class = "clear"></div>
</li>';
    endwhile;
    $return.= '</ul><div class = "clear"></div>';
    return $return;
}
add_shortcode("portfolio", "portfolio");
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Add the Meta Box to "Single" and "Portfolio" post type"> 
function add_single_custom_meta_box() {
    add_meta_box(
            'single_custom_meta_box', // $id  
            'Post Preference', // $title   
            'show_single_custom_meta_box', // $callback  
            'post', // $page  
            'normal', // $context  
            'high'); // $priority  
    add_meta_box(
            'single_custom_meta_box', // $id  
            'Portfolio Preference', // $title   
            'show_single_custom_meta_box', // $callback  
            'portfolio', // $page  
            'normal', // $context  
            'high'); // $priority  
	add_meta_box(
            'single_custom_meta_box', // $id  
            'Static Content Preference', // $title   
            'show_single_custom_meta_box', // $callback  
            'static', // $page  
            'normal', // $context  
            'high'); // $priority  
}
add_action('add_meta_boxes', 'add_single_custom_meta_box');
// Field Array Post Page 
$prefix = 'single_';
$single_custom_meta_fields = array(
    array(
        'label' => 'IMAGE',
        'desc' => 'Image which can be displayed above the "Single Post" content (optional)<br />For example: http://your-site-here.com/images/your-image.jpg',
        'id' => $prefix . 'image_thumb',
        'type' => 'text'
    ),
     array(
        'label' => 'VIMEO / YOUTUBE',
        'desc' => 'Video content which can be displayed on "Single Post" (optional)<br />For example:<br/>http://vimeo.com/1185749 or<br />http://www.youtube.com/watch?v=XXXXXX',
        'id' => $prefix . 'vimeo_thumb',
        'type' => 'text'
    ),
    array(
        'label' => 'HTML / SLIDER SHORTCODE',
        'desc' => 'HTML code or Slider Shortcode snippet which can be included on "Single Post" (optional)',
        'id' => $prefix . 'html_thumb',
        'type' => 'textarea'
    )
);
// The Callback  
function show_single_custom_meta_box() {
    global $single_custom_meta_fields, $post;
// Use nonce for verification  
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';
// Begin the field table and loop  
    echo '<table class="form-table">';
    foreach ($single_custom_meta_fields as $field) {
// get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);
// begin a table row with  
        echo '<tr> 
                <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th> 
                <td>';
        switch ($field['type']) {
// case items will go here  
// text  
            case 'text':
                echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="50" /> 
        <br /><span class="description">' . $field['desc'] . '</span>';
                break;
//textarea
            case 'textarea':
                echo '<textarea name="' . $field['id'] . '" id="' . $field['id'] . '" cols="60" rows="4">' . $meta . '</textarea> 
        <br /><span class="description">' . $field['desc'] . '</span>';
                break;
        } //end switch  
        echo '</td></tr>';
    } // end foreach  
    echo '</table>'; // end table  
}
// Save the Data  
function save_single_custom_meta($post_id) {
    global $single_custom_meta_fields;
// verify nonce  
    if (isset($_POST['custom_meta_box_nonce'])) {
        if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
        }
    }
// check autosave  
// Stop WP from clearing custom fields on autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
// Prevent quick edit from clearing custom fields
    if (defined('DOING_AJAX') && DOING_AJAX)
        return;
// check permissions  
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
// loop through fields and save the data  
    foreach ($single_custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = null;
        if (isset($_POST[$field['id']])) {
            $new = $_POST[$field['id']];
        }
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach  
}
add_action('save_post', 'save_single_custom_meta');
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Add the Meta Box to "default" Page"> 
function add_custom_meta_box() {
    add_meta_box(
            'custom_meta_box', // $id  
            'Page Preference', // $title   
            'show_custom_meta_box', // $callback  
            'page', // $page  
            'normal', // $context  
            'high'); // $priority  
}
add_action('add_meta_boxes', 'add_custom_meta_box');
// Field Array Post Page 
$prefix = 'page_';
$custom_meta_fields = array(
	array(
        'label' => 'Show Page Title',
        'desc' => 'Display/hide title section.',
        'id' => $prefix . 'title',
        'type' => 'select',
        'options' => array(
            'one' => array(
                'label' => 'YES',
                'value' => 'yes'
            ),
            'two' => array(
                'label' => 'NO',
                'value' => 'no'
            )
        )
    ),
    array(
        'label' => 'Title description',
        'desc' => 'Description for page title',
        'id' => $prefix . 'title_description',
        'type' => 'text'
    ),
     array(
        'label' => 'Title Color',
        'desc' => '',
        'id' => $prefix . 'title_color',
        'type' => 'text'
    ),
    array(
        'label' => 'Title Description Color',
        'desc' => '',
        'id' => $prefix . 'title_description_color',
        'type' => 'text'
    ),
    array(
        'label' => 'Page Background Color',
        'desc' => '',
        'id' => $prefix . 'background_color',
        'type' => 'text'
    ),
    array(
        'label' => 'Page Background Image URL',
        'desc' => '',
        'id' => $prefix . 'background_img',
        'type' => 'text'
    ),
    array(
        'label' => 'Background Image Position',
        'desc' => '',
        'id' => $prefix . 'img_position',
        'type' => 'select',
        'options' => array(
            'one' => array(
                'label' => 'Left Top',
                'value' => 'left top'
            ),
            'two' => array(
                'label' => 'Left Center',
                'value' => 'left center'
            ),
            'three' => array(
                'label' => 'Left Bottom',
                'value' => 'left bottom'
            ),
            'four' => array(
                'label' => 'Center Top',
                'value' => 'center top'
            ),
            'five' => array(
                'label' => 'Center Center',
                'value' => 'center center'
            ),
            'six' => array(
                'label' => 'Center Bottom',
                'value' => 'center bottom'
            ),
            'seven' => array(
                'label' => 'Right Top',
                'value' => 'right top'
            ),
            'eight' => array(
                'label' => 'Right Center',
                'value' => 'right center'
            ),
            'nine' => array(
                'label' => 'Right Bottom',
                'value' => 'right bottom'
            )
        )
    ),
    array(
        'label' => 'Background Image Repeat',
        'desc' => '',
        'id' => $prefix . 'img_repeat',
        'type' => 'select',
        'options' => array(
            'one' => array(
                'label' => 'No Repeat',
                'value' => 'no-repeat'
            ),
            'two' => array(
                'label' => 'Repeat-X',
                'value' => 'repeat-x'
            ),
            'three' => array(
                'label' => 'Repeat-Y',
                'value' => 'repeat-y'
            ),
            'four' => array(
                'label' => 'Repeat All',
                'value' => 'repeat'
            )
        )
    )
);
// The Callback  
function show_custom_meta_box() {
    global $custom_meta_fields, $post;
// Use nonce for verification  
    echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';
// Begin the field table and loop  
    echo '<table class="form-table">';
    foreach ($custom_meta_fields as $field) {
// get value of this field if it exists for this post  
        $meta = get_post_meta($post->ID, $field['id'], true);		
// begin a table row with  
        echo '<tr> 
                <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th> 
                <td>';
        switch ($field['type']) {
// case items will go here  
// checkbox  
            case 'checkbox':
                echo '<input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/> 
        <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
                break;
// text  
            case 'text':
                if ($field['id'] == 'page_title_color') {
                    echo '<div id="colorTitleSelector"><div></div></div>
                      <input style="display:none" type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="50" /> 
                        <br /><span class="description">' . $field['desc'] . '</span>';
                } elseif ($field['id'] == 'page_title_description_color') {
                    echo '<div id="colorTitleDescriptionSelector"><div></div></div>
                      <input style="display:none" type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="50" /> 
                        <br /><span class="description">' . $field['desc'] . '</span>';
                }elseif ($field['id'] == 'page_background_color') {
                    echo '<div id="colorBackgroundSelector"><div></div></div>
                      <input style="display:none" type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="50" /> 
                        <br /><span class="description">' . $field['desc'] . '</span>';
                }
                else {
                    echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="50" /> 
        <br /><span class="description">' . $field['desc'] . '</span>';
                }
                break;
// select  
            case 'select':
                echo '<select name="' . $field['id'] . '" id="' . $field['id'] . '">';
                foreach ($field['options'] as $option) {
                    echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="' . $option['value'] . '">' . $option['label'] . '</option>';
                }
                echo '</select><br /><span class="description">' . $field['desc'] . '</span>';
                break;
        } //end switch  
        echo '</td></tr>';
    } // end foreach  
    echo '</table>'; // end table  
}
// Save the Data  
function save_custom_meta($post_id) {
    global $custom_meta_fields;
// verify nonce  
    if (isset($_POST['custom_meta_box_nonce'])) {
        if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) {
            return $post_id;
        }
    }
// check autosave  
// Stop WP from clearing custom fields on autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;
// Prevent quick edit from clearing custom fields
    if (defined('DOING_AJAX') && DOING_AJAX)
        return;
// check permissions  
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }
// loop through fields and save the data  
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = null;
        if (isset($_POST[$field['id']])) {
            $new = $_POST[$field['id']];
        }
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach  
}
add_action('save_post', 'save_custom_meta');
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Contact Form short code">
function contact($atts, $content = null) {
    return '<div class="contact-form">                
			<ul id="contact-form">
				<li class="right-35 name-holder">
					<input type="text" id="name" />
				</li>
				<li class="right-35 email-holder">
					<input type="email" id="contact-email" />
				</li>
				<li class="right-35 message-holder">
					<textarea rows="4" cols="50" id="message"></textarea>
				</li>
                <li class="newsletter">
                    <input type="checkbox" id="newsletter" name="newsletter" checked="checked" value="sim">
                    <label for="newsletter">Desejo receber newsletters da Buzina Mídias Digitais</label>
                </li>
				<li>
					<button onClick="SendMail()" id="send-message">ENVIAR</button>   
				</li>
			</ul>
                    <div class="clear"></div>					
                </div>
                <div class="clear"></div>					
                <div class="sending-message-status-holder"><span id="sending-message-status">&nbsp;</span></div>';
}
add_shortcode("contact", "contact");
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="AJAX Handlers">
include('inc/ajax-handlers.php');
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="BR short code">
function br($atts, $content = null) {
    return '<br />';
}
add_shortcode("br", "br");
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Full Width in Single Post short code">
function full_width($atts, $content = null) {
    extract(shortcode_atts(array(
                "class" => ''
                    ), $atts));
    $return = '</div><div class="full-width ' . $class . '">' . do_shortcode($content) . '</div><div class="article-content">';
    return $return;
}
add_shortcode("full_width", "full_width");
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Vimeo short code">
function vimeo($atts, $content = null) {
    extract(shortcode_atts(array(
                "src" => ''
                    ), $atts));
    $return = '';
    $vimeo = explode('vimeo.com/', $src);
    $return = '<div class="vimeo">
			<input type="hidden" class="vimeo_source" value="'.$vimeo[1].'"/>              
                  </div>';
    return $return;
}

add_shortcode("vimeo", "vimeo");
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Youtube short code">
function youtube($atts, $content = null) {
    extract(shortcode_atts(array(
                "src" => ''
                    ), $atts));
    $return = '';
    $youtube = explode('youtube.com/watch?v=', $src);
				$return = '<div class="youtube">  
							<input type="hidden" class="youtube_source" value="'.$youtube[1].'"/>    									
                                </div>';		
    return $return;
}

add_shortcode("youtube", "youtube");
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Cut portfolio text">
function substrwords($input, $length, $ellipses = true, $strip_html = true) {
//strip tags, if desired
    if ($strip_html) {
        $input = strip_tags($input);
    }
//no need to trim, already shorter than trim length
    if (strlen($input) <= $length) {
        return $input;
    }
//find last space within length
    $last_space = strrpos(substr($input, 0, $length), ' ');
    $trimmed_text = substr($input, 0, $last_space);
//add ellipses (...)
    if ($ellipses) {
        $trimmed_text .= ' ...';
    }
    return $trimmed_text;
}
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Include admin CSS and JS on "page"">
include('admin/page-custom-admin.php');
// </editor-fold>
// // <editor-fold defaultstate="collapsed" desc="Theme Options">
include('admin/custom-admin.php');
// </editor-fold>
//  <editor-fold defaultstate="collapsed" desc="Load custom admin page css">
function load_wp_admin_style() {
    wp_register_style('wp_custom_admin_css', get_template_directory_uri('template_url') . '/admin/css/custom-admin.css', false, '1.0.0');
    wp_enqueue_style('wp_custom_admin_css');
}
add_action('admin_enqueue_scripts', 'load_wp_admin_style');
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="WP stuff">
function dry_widgets_init() {
    unregister_sidebar('sidebar');
}
add_action('widgets_init', 'dry_widgets_init', 11);
if (function_exists('automatic-feed-links')) {
    add_theme_support('automatic-feed-links');
}
// </editor-fold>
//<editor-fold defaultstate="collapsed" desc="Wordpress Standard Items (Empty Implementation)">
add_editor_style('css/dry-editor-style.css');
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="Custom error handler">
add_filter('wp_die_handler', 'get_dry_die_handler');
function get_dry_die_handler() {
    return 'dry_die_handler';
}
function dry_die_handler($message, $title = '', $args = array()) {
    $errorTemplate = get_theme_root() . '/' . get_template() . '/error.php';
    if (!is_admin() && file_exists($errorTemplate)) {
        $defaults = array('response' => 500);
        $r = wp_parse_args($args, $defaults);
        $have_gettext = function_exists('__');
        if (function_exists('is_wp_error') && is_wp_error($message)) {
            if (empty($title)) {
                $error_data = $message->get_error_data();
                if (is_array($error_data) && isset($error_data['title']))
                    $title = $error_data['title'];
            }
            $errors = $message->get_error_messages();
            switch (count($errors)) :
                case 0 :
                    $message = '';
                    break;
                case 1 :
                    $message = "<p>{$errors[0]}</p>";
                    break;
                default :
                    $message = "<ul>\n\t\t<li>" . join("</li>\n\t\t<li>", $errors) . "</li>\n\t</ul>";
                    break;
            endswitch;
        } elseif (is_string($message)) {
            $message = "<p>$message</p>";
        }
        if (isset($r['back_link']) && $r['back_link']) {
            $back_text = $have_gettext ? '&laquo; Back' : '&laquo; Back';
            $message .= "\n<p><a href='javascript:history.back()'>$back_text</a></p>";
        }
        if (empty($title))
            $title = $have_gettext ? 'WordPress &rsaquo; Error' : 'WordPress &rsaquo; Error';
        require_once($errorTemplate);
        die();
    } else {
        _default_wp_die_handler($message, $title, $args);
    }
}
//</editor-fold>
// <editor-fold defaultstate="collapsed" desc="About item short code">
function about_item($atts, $content = null) {
    extract(shortcode_atts(array(
                "img" => '#',
                "name" => '',
                "position" => ''
                    ), $atts));
    $return = '<div class="about-item-holder">
               <img class="about-image block" src="' . $img . '" alt="" />               
               <h2>' . $name . '</h2>
               <div class="sub-info">' . $position . '</div>               
               ' . do_shortcode($content) . '
               </div>';
    return $return;
}
add_shortcode("about_item", "about_item");
// </editor-fold>   
// <editor-fold defaultstate="collapsed" desc="About social item holder short code">
function social($atts, $content = null) {
    extract(shortcode_atts(array(
                "href" => '#',
                "img" => '#'
                    ), $atts));
    $return = '<div class="social-about">' . do_shortcode($content) . '</div>';
    return $return;
}
add_shortcode("social", "social");
// </editor-fold>    
// <editor-fold defaultstate="collapsed" desc="Social item short code">
function social_item($atts, $content = null) {
    extract(shortcode_atts(array(
                "href" => '#',
                "img" => '#'
                    ), $atts));
    $return = '<a href="' . $href . '"><img src="' . $img . '" alt="" /></a>';
    return $return;
}
add_shortcode("social_item", "social_item");
// </editor-fold>   
// <editor-fold defaultstate="collapsed" desc="Service item short code">
function service_item($atts, $content = null) {
    extract(shortcode_atts(array(
                "img" => '#',
                "title" => ''
                    ), $atts));
    $return = '<li>
                <img class="service-short-code-image" src="' . $img . '" alt="" />                
                <span class="service-title">
                ' . $title . '
                </span>                
                <p class="display-table">' . do_shortcode($content) . '</p>
</li>';
    return $return;
}
add_shortcode("service_item", "service_item");
// </editor-fold>      
// <editor-fold defaultstate="collapsed" desc="Service item holder short code">
function service($atts, $content = null) {
    extract(shortcode_atts(array(
                "class" => ''
                    ), $atts));
    $return = '<ul class="service-short-code-holder ' . $class . '">
                
                ' . do_shortcode($content) . '
</ul>';
    return $return;
}
add_shortcode("service", "service");
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Custom Header And Background Support">
if (current_theme_supports('custom-header')) {
    $default_custom_header_settings = array(
        'default-image' => '',
        'random-default' => false,
        'width' => 0,
        'height' => 0,
        'flex-height' => false,
        'flex-width' => false,
        'default-text-color' => '',
        'header-text' => true,
        'uploads' => true,
        'wp-head-callback' => '',
        'admin-head-callback' => '',
        'admin-preview-callback' => '',
    );
    add_theme_support('custom-header', $default_custom_header_settings);
}
if (current_theme_supports('custom-background')) {
    $default_custom_background_settings = array(
        'default-color' => '',
        'default-image' => '',
        'wp-head-callback' => '_custom_background_cb',
        'admin-head-callback' => '',
        'admin-preview-callback' => ''
    );
    add_theme_support('custom-background', $default_custom_background_settings);
}
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Register theme menu">
add_action('init', 'register_wp_show_off_menu');
function register_wp_show_off_menu() {
    register_nav_menu('custom_menu', 'Main Menu');
}
// </editor-fold>
// <editor-fold defaultstate="collapsed" desc="Helper">
function encode($input) {
    $temp = '';
    $length = strlen($input);
    for ($i = 0; $i < $length; $i++) {
        $temp .= '%' . bin2hex($input[$i]);
    }
    return $temp;
}
// </editor-fold>
?>