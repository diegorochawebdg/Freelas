<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/home.css" />
	
	<!-- Content -->
    <div id="content" style="padding-bottom:0 !important">
    	
    	<!-- Content Menu -->
    	<div class="content-menu" style="margin: 30px 0 25px 0;">
        	<div class="content-center">
                <div class="page-margin">
                    
                    <!--Default View-->
                    <div class="default-view">
                        <ul>
                            <li class="futuro-lancamento borders animate"><a href="<?php echo home_url(); ?>/category/futuro-lancamento/" title="Futuro Lançamento">Futuro Lançamento</a></li>
                            <li class="lancamento borders animate"><a href="<?php echo home_url(); ?>/category/lancamentos/" title="Lançamento">Lançamento</a></li>
                            <li class="obra borders animate"><a href="<?php echo home_url(); ?>/category/em-obra/" title="Em obra">Em obra</a></li>
                            <li class="entregues borders animate"><a href="<?php echo home_url(); ?>/category/entregues/" title="Entregues">Entregues</a></li>
                            <li class="bairro borders animate" ><a href="<?php echo home_url(); ?>/category/bairro/" title="Por bairro">Por bairro</a></li>
                            <li class="corretor borders" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" title="Fale agora com nosso corretor online"><a href="#">Fale agora com nosso <strong>corretor online</strong></a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!--End of Default View-->
                    
                    <!--Set the Selected Menu-->
                    <?php if( is_category('lancamentos')) { ?>
                    
                        <?php echo '<div class="selected-menu" style="left:24.5%;"></div>' ?>
                        <style>
                            .obra, .futuro-lancamento, .entregues, .bairro{opacity:0.4;}
                            .lancamento{opacity:1 !important;}
                        </style>
                    
                    <?php } else if( is_category('em-obra') ) { ?>
                        
                        <?php echo '<div class="selected-menu" style="left:8.5%;"></div>' ?>
                        <style>
                            .lancamento, .futuro-lancamento, .entregues, .bairro{opacity:0.4;}
                            .obra{opacity:1 !important;}
                        </style>
                
                    <?php } else if( is_category('futuro-lancamento') ) { ?>
                
                        <?php echo '<div class="selected-menu" style="left:40.5%;"></div>' ?>
                        <style>
                            .lancamento, .obra, .entregues, .bairro{opacity:0.4;}
                            .futuro-lancamento{opacity:1 !important;}
                        </style>
                    
                    <?php } else if( is_category('bairro') ) { ?>
                
                        <?php echo '<div class="selected-menu" style="left:72.5%;"></div>' ?>
                        <style>
                            .lancamento, .obra, .entregues, .futuro-lancamento{opacity:0.4;}
                            .bairro{opacity:1 !important;}
                        </style>
                    
                    <?php } else if( is_category('entregues') ) { ?>
                
                        <?php echo '<div class="selected-menu" style="left:56.5%;"></div>' ?>
                        <style>
                            .lancamento, .obra, .bairro, .futuro-lancamento{opacity:0.4;}
                            .entregues{opacity:1 !important;}
                        </style>
                
                    <?php } ?> 
                    
                    <!--End of Set the Selected Menu-->
                    
                    
                    <!--Mobile View-->
                    <div class="mobile-view">
                        <div class="corretor borders">
                            <a href="#" onclick="corretorDefault('http://houste.hypnobox.com.br/atendimento/entrar.php?id_produto=10&gclid=&referencia=Direto&id_parceiro=', 'Fale com nosso corretor', '563', '556')" title="Fale agora com nosso corretor online">Fale agora com nosso corretor online</a>
                        </div>
                        <ul>
                            <li class="futuro-lancamento borders"><a href="<?php echo home_url(); ?>/category/futuro-lancamento/" title="Futuro Lançamento">Futuro <br>Lançamento</a></li>
                            <li class="lancamento borders"><a href="<?php echo home_url(); ?>/category/lancamentos/" title="Lançamento">Lançamento</a></li>
                            <li class="obra borders"><a href="<?php echo home_url(); ?>/category/em-obra/" title="Em obra">Em obra</a></li>
                            <li class="entregues borders"><a href="<?php echo home_url(); ?>/category/entregues/" title="Entregues">Entregues</a></li>
                            <li class="bairro borders"><a href="http://www.sanay.com.br/category/bairro/" title="Por bairro">Por bairro</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!--End of Mobile View-->
                    
                </div>
           </div>
    	</div>
    	<!-- End of Content Menu -->
    	
        <!--Array dos posts-->
        <div class="destaques" style="padding-bottom:50px;">
        	<div class="content-center">
                <div class="page-margin">
                
                    <h2>
                        <?php $category = get_the_category(); echo $category[0]->cat_name; ?>
                    </h2>
                    
                    <?php if( is_category('bairro') ) { ?>
                        
                    <h2>Por bairro:</h2>
                    
                        <!--Bairros Selector-->
                        <select id="bairros-list-content">
                            <option selected>Selecione aqui o bairro desejado:</option>
                            <?php
                                $bairros_list = array( 'numberposts' => -1, 'category' => $category_post->term_id );
                                $myposts = get_posts( $bairros_list );
                                
                                if(count($myposts) > 0) 
                                { 	
                                    foreach( $myposts as $post ) :	setup_postdata($post); 
                                    
                                        $args1 = array(
                                           'post_type' => 'attachment',
                                           'numberposts' => -1,
                                           'post_status' => null,
                                           'post_parent' => $post->ID
                                        );
                                        $attachments = get_posts( $args1 );
                                    
                                    ?>
                                    
                                    <option><?php echo get_field("bairro"); ?></option>
                                    
                                     <?php 
                                    endforeach;
                                    } 
                                    else { 
                                        echo "<p class='nenhum-encontrado'>Nenhum empreendimento encontrado.</p>";
                                    }
                                ?>
                        </select>
                        <!--End of Bairros Selector-->
                    <?php } ?>
                    
                    
                    <!--Destaques Slider-->
                    <div class="destaques-slider">
                        <div class="viewport">
                            <ul id="destaques-list">
                    
                               
                                    <?php if( is_category('lancamentos')) { ?>
                                        <?php
                                            $category_post = get_category_by_slug('lancamentos');
                                        ?>
                                    
                                    <?php } else if( is_category('em-obra') ) { ?>
                                        
                                        <?php
                                            $category_post = get_category_by_slug('em-obra');
                                        ?>
                                
                                    <?php } else if( is_category('futuro-lancamento') ) { ?>
                                
                                        <?php
                                            $category_post = get_category_by_slug('futuro-lancamento');
                                        ?>
                                
                                    <?php } else if( is_category('entregues') ) { ?>
                                
                                        <?php
                                            $category_post = get_category_by_slug('entregues');
                                        ?>
                                
                                    <?php } ?> 
                                
                                    <?php
                                    $args = array( 'numberposts' => -1, 'category' => $category_post->term_id );
                                    $myposts = get_posts( $args );
                                    
                                    if(count($myposts) > 0) 
                                    { 	
                                        foreach( $myposts as $post ) :	setup_postdata($post); 
                                        
                                            $args1 = array(
                                               'post_type' => 'attachment',
                                               'numberposts' => -1,
                                               'post_status' => null,
                                               'post_parent' => $post->ID
                                            );
                                            $attachments = get_posts( $args1 );
                                        
                                        ?>
                                        
                                        <li>
                                            <div class="destaque-img">
                                                <?php echo the_post_thumbnail('home-category'); ?>
                                                
                                                <span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
                                            </div>
                                            <div class="destaque-info">
                                                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                                <span><?php echo get_field("bairro"); ?></span>
                                                <p><?php echo get_field("description"); ?></p>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" title="Mais detalhes">Mais detalhes</a>
                                            <a href="<?php the_permalink(); ?>" title="Veja mais detalhes" class="link-padding detalhes-hover transition"></a>
                                        </li>
                                        
                                         <?php 
                                        endforeach;
                                        } 
                                        else { 
                                            echo "<p class='nenhum-encontrado'>Nenhum empreendimento encontrado.</p>";
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        
                    </div>
                    <!--Destaques Slider-->
                    
                </div>
            </div>
        </div>
        <!--END OF Array dos posts-->
    	
    	
    	
	</div>
    <!-- End of Content -->

<?php get_footer(); ?>

<!-- Scripts - Yes, on the end -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(e){
    
    /*Main Menu hover*/
    jQuery(".content-menu .obra, .content-menu .lancamento, .content-menu .futuro-lancamento, .content-menu .entregues, .content-menu .bairro").hover(function(e){
        jQuery(this).css({backgroundColor:"#003C4E", opacity:"1" });
    }, function(e){
        jQuery(this).css({backgroundColor:"", opacity:""});
    });
    jQuery(".submenu-empreendimentos a").hover(function(e){
        jQuery(this).parent().css({opacity:1});
    }, function(e){
        jQuery(this).parent().css({opacity:""});
    });
    /*End of Main Menu hover*/
    
    /*Get the url of select from Bairros*/
    var optionValue = jQuery("#bairros-list-content").val();
    jQuery("#bairros-list-content").change(function(e){
        if(jQuery(this).find(':selected').val() !== 'Selecione aqui o bairro desejado:'){
            optionValue = jQuery("#bairros-list-content").val();
            optionValue = optionValue.replace(/\s+/g, '+');
            window.location = site_url + '?s=' + optionValue;
        }
    });
    /*End of Get the url of select from Bairros*/
    
    
});
</script>
<!-- End of Scripts -->