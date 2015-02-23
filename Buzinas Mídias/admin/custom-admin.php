<?php
/*
 * Register Theme Customizer
 */
add_action('customize_register', 'drytheme_customize_register');
function drytheme_customize_register($wp_customize) {
    $wp_customize->add_section('color_scheme', array(
        'title' => __('General Color Scheme', 'themename'),
        'priority' => 35,
    ));
    $wp_customize->add_setting('body_color', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_color', array(
                'label' => __('Body Text', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'body_color',
            )));
    $wp_customize->add_setting('menu_background_color', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_background_color', array(
                'label' => __('Menu Background', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'menu_background_color',
            )));
    $wp_customize->add_setting('menu_color', array(
        'default' => '#000000',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_color', array(
                'label' => __('Menu Text', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'menu_color',
            )));
    $wp_customize->add_setting('manu_active_page', array(
        'default' => '#D82546',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'manu_active_page', array(
                'label' => __('Menu Active Page', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'manu_active_page',
            )));
    $wp_customize->add_setting('filter_color', array(
        'default' => '#536A97',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'filter_color', array(
                'label' => __('Portfolio Filter Background', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'filter_color',
            )));
    $wp_customize->add_setting('filter_curent', array(
        'default' => '#D01F40',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'filter_curent', array(
                'label' => __('Portfolio Filter Curent', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'filter_curent',
            )));
    $wp_customize->add_setting('portfolio_element_background', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'portfolio_element_background', array(
                'label' => __('Portfolio Item Background', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'portfolio_element_background',
            )));
    $wp_customize->add_setting('portfolio_element_border', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'portfolio_element_border', array(
                'label' => __('Portfolio Item Border', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'portfolio_element_border',
            )));
    $wp_customize->add_setting('portfolio_element_title', array(
        'default' => '#273C66',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'portfolio_element_title', array(
                'label' => __('Portfolio Item Title', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'portfolio_element_title',
            )));
    $wp_customize->add_setting('team_item_title', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'team_item_title', array(
                'label' => __('Team Item Title', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'team_item_title',
            )));
    $wp_customize->add_setting('team_item_position', array(
        'default' => '#686716',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'team_item_position', array(
                'label' => __('Team Item Work Position', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'team_item_position',
            )));
    $wp_customize->add_setting('blog_title', array(
        'default' => '#6C1E2C',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_title', array(
                'label' => __('Blog Title', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'blog_title',
            )));
    $wp_customize->add_setting('blog_date', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_date', array(
                'label' => __('Blog Date', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'blog_date',
            )));
    $wp_customize->add_setting('blog_read_more', array(
        'default' => '#AC1F39',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_read_more', array(
                'label' => __('Blog Read More', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'blog_read_more',
            )));
    $wp_customize->add_setting('contact_fields', array(
        'default' => '#424242',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'contact_fields', array(
                'label' => __('Contact Fields Background', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'contact_fields',
            )));
    $wp_customize->add_setting('contact_submit', array(
        'default' => '#AC1F39',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'contact_submit', array(
                'label' => __('Contact Submit Background', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'contact_submit',
            )));
    $wp_customize->add_setting('footer_color', array(
        'default' => '#1e1e1e',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
                'label' => __('Footer Color', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'footer_color',
            )));
    $wp_customize->add_setting('footer_background', array(
        'default' => '#ffffff',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_background', array(
                'label' => __('Footer Background', 'themename'),
                'section' => 'color_scheme',
                'settings' => 'footer_background',
            )));
    //--------------------------------------------------------------------------
    $wp_customize->add_section('single_color_scheme', array(
        'title' => __('Global Single Page (Pop-Up)', 'themename'),
        'priority' => 36,
    ));
    $wp_customize->add_setting('single_body', array(
        'default' => '#D82545',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'single_body', array(
                'label' => __('Single Body', 'themename'),
                'section' => 'single_color_scheme',
                'settings' => 'single_body',
            )));
    $wp_customize->add_setting('single_add_comment_form', array(
        'default' => '#6C1E2C',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'single_add_comment_form', array(
                'label' => __('Single Comment Form', 'themename'),
                'section' => 'single_color_scheme',
                'settings' => 'single_add_comment_form',
            )));
    
    
    
      $wp_customize->add_setting('single_title', array(
        'default' => '#6C1E2C',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'single_title', array(
                'label' => __('Single Title (global)', 'themename'),
                'section' => 'single_color_scheme',
                'settings' => 'single_title',
            )));
    
    
        
      $wp_customize->add_setting('single_separator', array(
        'default' => '#EC506C',
        'type' => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'single_separator', array(
                'label' => __('Single Separator Line', 'themename'),
                'section' => 'single_color_scheme',
                'settings' => 'single_separator',
            )));
    //--------------------------------------------------------------------------
    $wp_customize->add_section('drythemes_text_section', array(
        'title' => __('Static Theme Text', 'themename'),
        'priority' => 38,
    ));
    $wp_customize->add_setting('copyright_text', array(
        'default' => '&copy; DryThemes - Built with love and passion',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('copyright_text', array(
        'label' => 'Footer Copyright',
        'section' => 'drythemes_text_section',
        'settings' => 'copyright_text',
        'type' => 'text',
        'priority' => 999
    ));
    
    
    //--------------------------------------------------------------------------
    $wp_customize->add_section('dry_image_section', array(
        'title' => __('Images Section', 'themename'),
        'priority' => 37,
    ));
    $wp_customize->add_setting('dry_fav_icon', array(
        'default' => get_template_directory_uri() . '/images/favicon.png',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dry_fav_icon', array(
                'label' => 'Fav Icon',
                'section' => 'dry_image_section',
                'settings' => 'dry_fav_icon',
            )));
    
    
      $wp_customize->add_setting('dry_menu_logo', array(
        'default' => get_template_directory_uri() . '/images/logo.png',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dry_menu_logo', array(
                'label' => 'Menu Logo',
                'section' => 'dry_image_section',
                'settings' => 'dry_menu_logo',
            )));
    
    
          $wp_customize->add_setting('dry_footer_logo', array(
        'default' => get_template_directory_uri() . '/images/footer_logo.png',
        'capability' => 'edit_theme_options',
        'type' => 'option',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'dry_footer_logo', array(
                'label' => 'Footer Logo',
                'section' => 'dry_image_section',
                'settings' => 'dry_footer_logo',
            )));
    //--------------------------------------------------------------------------
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('body_color')->transport = 'postMessage';
    $wp_customize->get_setting('menu_background_color')->transport = 'postMessage';
    $wp_customize->get_setting('menu_color')->transport = 'postMessage';
    $wp_customize->get_setting('manu_active_page')->transport = 'postMessage';
    $wp_customize->get_setting('filter_color')->transport = 'postMessage';
    $wp_customize->get_setting('filter_curent')->transport = 'postMessage';
    $wp_customize->get_setting('portfolio_element_background')->transport = 'postMessage';
    $wp_customize->get_setting('portfolio_element_border')->transport = 'postMessage';
    $wp_customize->get_setting('portfolio_element_title')->transport = 'postMessage';
    $wp_customize->get_setting('team_item_title')->transport = 'postMessage';
    $wp_customize->get_setting('team_item_position')->transport = 'postMessage';
    $wp_customize->get_setting('blog_title')->transport = 'postMessage';
    $wp_customize->get_setting('blog_date')->transport = 'postMessage';
    $wp_customize->get_setting('blog_read_more')->transport = 'postMessage';
    $wp_customize->get_setting('contact_fields')->transport = 'postMessage';
    $wp_customize->get_setting('contact_submit')->transport = 'postMessage';
    $wp_customize->get_setting('footer_color')->transport = 'postMessage';
    $wp_customize->get_setting('footer_background')->transport = 'postMessage';
    $wp_customize->get_setting('single_body')->transport = 'postMessage';
    $wp_customize->get_setting('single_add_comment_form')->transport = 'postMessage';
    $wp_customize->get_setting('single_title')->transport = 'postMessage';
    $wp_customize->get_setting('single_separator')->transport = 'postMessage';    
    $wp_customize->get_setting('copyright_text')->transport = 'postMessage';
    //--------------------------------------------------------------------------
    /*
     * If preview mode is active, hook JavaScript to preview changes
     */
    if ($wp_customize->is_preview() && !is_admin()) {
        add_action('customize_preview_init', 'drytheme_customize_preview_js');
    }
}
/**
 * Bind Theme Customizer JavaScript
 */
function drytheme_customize_preview_js() {
    wp_enqueue_script('drytheme-customizer', get_template_directory_uri() . '/admin/js/custom-admin.js', array('customize-preview'), '20120910', true);
}
/*
 * Set Default Theme Options
 */
if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
    //default theme options params
    update_option("body_color", "#ffffff");
    update_option("menu_background_color", "#ffffff");
    update_option("menu_color", "#000000");
    update_option("manu_active_page", "#D82546");
    update_option("filter_color", "#536A97");
    update_option("filter_curent", "#D01F40");
    update_option("portfolio_element_background", "#ffffff");
    update_option("portfolio_element_border", "#ffffff");
    update_option("portfolio_element_title", "#273C66");
    update_option("team_item_title", "#ffffff");
    update_option("team_item_position", "#686716");
    update_option("blog_title", "#6C1E2C");
    update_option("blog_date", "#ffffff");
    update_option("blog_read_more", "#AC1F39");
    update_option("contact_fields", "#424242");
    update_option("contact_submit", "#AC1F39");
    update_option("footer_color", "#1e1e1e");
    update_option("footer_background", "#ffffff");
    update_option("single_body", "#D82545");
    update_option("single_add_comment_form", "#6C1E2C");
    update_option("single_title", "#6C1E2C");
    update_option("single_separator", "#EC506C");    
    update_option("dry_fav_icon", get_template_directory_uri() . '/images/favicon.png');
    update_option("dry_menu_logo", get_template_directory_uri() . '/images/logo.png');
    update_option("dry_footer_logo", get_template_directory_uri() . '/images/footer_logo.png');
}
/*
 * Generate CSS Styles
 */
add_action('wp_head', 'drytheme_customized_style');
function drytheme_customized_style() {
    echo ('<style type="text/css">');
    generate_css('body', 'color', 'body_color');
    generate_css('.main-menu nav', 'background-color', 'menu_background_color');
    generate_css('.main-menu nav a', 'color', 'menu_color');
    generate_css('div.main-menu nav ul li.active a', 'color', 'manu_active_page');
    generate_css('#filter li', 'background-color', 'filter_color');
    generate_css('#filter li.current', 'background-color', 'filter_curent');
    generate_css('#work-items li', 'background-color', 'portfolio_element_background');
    generate_css('#work-items li', 'border-color', 'portfolio_element_border');
    generate_css('#work-items li h2 a', 'color', 'portfolio_element_title');
    generate_css('div.about-item-holder h2', 'color', 'team_item_title');
    generate_css('div.about-item-holder div.sub-info', 'color', 'team_item_position');
    generate_css('#news-items li p.title a', 'color', 'blog_title');
    generate_css('#news-items li span.category', 'color', 'blog_date');
    generate_css('#news-items li a.read-more', 'background-color', 'blog_read_more');
    generate_css('.contact-form input, .contact-form textarea', 'background-color', 'contact_fields');
    generate_css('.contact-form button', 'background-color', 'contact_submit');
    generate_css('footer', 'color', 'footer_color');
    generate_css('footer', 'background-color', 'footer_background');
    generate_css('article .article-content, .popup-close, .posts-navigation, .comments-holder, .comments-pagination-wrapper, div.pop-up-footer', 'background-color', 'single_body');
    generate_css('#commentform input#author, #commentform input#email, #commentform textarea', 'background-color', 'single_add_comment_form');
    generate_css('article .single-h1-title, article .article-content span.category, .comment-separator, .comment-author, .logged-in-as, .comments-holder a, .separator, .comment-date, #commentform input#submit', 'color', 'single_title');
    generate_css('div.pop-up-copyright, .comments-pagination, .comments-holder ol, .no-comments', 'border-color', 'single_separator');
    echo ('</style>');
}
/*
 * Generate CSS Class - Helper Method
 */
function generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true) {
    $return = '';
    $mod = get_option($mod_name);
    if (!empty($mod)) {
        $return = sprintf('%s { %s:%s; }', $selector, $style, $prefix . $mod . $postfix
        );
        if ($echo) {
            echo $return;
        }
    }
    return $return;
}
?>