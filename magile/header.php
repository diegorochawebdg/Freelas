<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie6style.css" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('img#logo, #search-form, #featured, span.date, .footer-widget ul li, span.overlay, a.readmore, a.readmore span, #recent-posts a#left-arrow, #recent-posts a#right-arrow, h4#recent, div#breadcrumbs, #sidebar h4');</script>
<![endif]-->
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie7style.css" />
<![endif]-->
<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie8style.css" />
<![endif]-->

<script type="text/javascript">
	document.documentElement.className = 'js';
</script>
    
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans:400,500,700' rel='stylesheet' type='text/css'>
<!--End of Google Fonts-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>
<body<?php if (is_home()) { if (get_option('deepfocus_featured') == 'on') echo(' id="home-featured"'); else echo(' id="home"'); } ?> <?php body_class(); ?>>
	<div id="top">
		<div class="container">
			<div id="header">
                <!--Menu Logo & items-->
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php $logo = (get_option('deepfocus_logo') <> '') ? get_option('deepfocus_logo') : get_template_directory_uri().'/images/logo.png'; ?>
					<img src="<?php echo esc_url($logo); ?>" alt="Transportes Magile" title="Voltar para a página inicial" id="logo"/>
				</a>
                
                <h2 class="sub">Conduzindo excelência, <br>transportando qualidade.</h2>
                
                <img src="<?php bloginfo('template_directory'); ?>/images/grupo-gergo.png" width="103" height="76" alt="Grupo Gergo" title="Grupo Gergo" class="grupo-gergo">
                <img src="<?php bloginfo('template_directory'); ?>/images/iso9001-footer.png" width="81" height="76" alt="Grupo Gergo" title="Grupo Gergo" class="grupo-gergo" style="margin-right: 15px;">
                <!--End of Menu Logo & items-->
                
                <!--Menu-->
				<div id="menu" class="clearfix">
                    <?php
                        wp_nav_menu( array(
                            'menu' => 'meu_menu',
                            'theme_location' => 'meu_menu',
                            'menu_class' => 'nav sf-js-enabled',
                            'echo' => true,
                            'menu_id' => 'primary'
                        ) );
                    ?>
                    <a href="#" id="mobile_nav" class="closed">Menu rápido<span></span>
                        
                    </a>
				</div>
                <!--End of Menu-->
                
			</div> <!-- end #header -->
		</div> <!-- end .container -->
	</div> <!-- end #top -->