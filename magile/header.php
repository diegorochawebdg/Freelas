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
                <!--End of Menu Logo & items-->
                
				<div id="menu" class="clearfix">
					<ul id="primary" class="nav sf-js-enabled">
															<li class="current_page_item"><a href="http://www.rafaelbianco.com.br/projetos/magile/">Home</a></li>
							
							<li class="page_item page-item-2"><a href="http://www.rafaelbianco.com.br/projetos/magile/?page_id=2">Página de Exemplo</a></li>

								<li class="cat-item cat-item-1"><a href="http://www.rafaelbianco.com.br/projetos/magile/?cat=1" title="Ver todos os posts arquivados em Sem categoria">Sem categoria</a>
</li>
	<li class="cat-item cat-item-2"><a href="http://www.rafaelbianco.com.br/projetos/magile/?cat=2" title="Ver todos os posts arquivados em Slider">Slider</a>
</li>
				    </ul>
				</div> <!-- end #menu -->
			</div> <!-- end #header -->
		</div> <!-- end .container -->
	</div> <!-- end #top -->