<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pages.css">

<div id="content-full">
	<div id="hr">
		<div id="hr-center">
			<div id="intro">
				<div class="center-highlight">

					<div class="container">

						<?php get_template_part('includes/breadcrumbs'); ?>

					</div> <!-- end .container -->
				</div> <!-- end .center-highlight -->
			</div>	<!-- end #intro -->
		</div> <!-- end #hr-center -->
	</div> <!-- end #hr -->

	<div class="center-highlight">
		<div class="container">

			<div id="content-area" class="clearfix">
                
                <!--Titles-->
                <h1>Equipamentos e serviços</h1>
                <h2><?php the_title(); ?></h2>
                <!--End Titles-->
                
                <!--Columns-->
                <?php 
                    $first = get_field('first_column'); 
                    if( $first ) { 
                        echo $first; 
                    ?>
                <?php } ?>
                
                <?php 
                    $second = get_field('second_column'); 
                    if( $second ) { 
                        echo $second; 
                    ?>
                <?php } ?>
                
                <?php 
                    $third = get_field('third_column'); 
                    if( $third ) { 
                        echo $third; 
                    ?>
                <?php } ?>
                
                <?php 
                    $fourth = get_field('fourth_column'); 
                    if( $fourth ) { 
                        echo $fourth; 
                    ?>
                <?php } ?>
                <!--End Columns-->
                
                <div class="linha"></div>
                
                <h2>Equipamentos</h2>
                
                <div class="tabs">
                    
                    <?php do_shortcode('[learn_more caption="Content Closed"] Content [/learn_more]'); ?>
                    
                    <!--Transporte Rodoviário-->
                    <div class="et-learn-more et-open clearfix">
                        <h3 class="heading-more open">Transporte Rodoviário<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('rodoviario_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('rodoviario_repeater') ): the_row();
                                            $image = get_sub_field('galeria_rodoviario');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                    <!--End Transporte Rodoviário-->
                    
                    <!--Transporte Pesado-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Transporte Pesado<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('pesado_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('pesado_repeater') ): the_row();
                                            $image = get_sub_field('galeria_pesado');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                    <!--End Transporte Pesado-->
                    
                    <!--Guindastes-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Guindastes<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('guindastes_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('guindastes_repeater') ): the_row();
                                            $image = get_sub_field('galeria_guindastes');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Guindastes-->
                    
                    <!--Empilhadeiras-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Empilhadeiras<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('empilhadeiras_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('empilhadeiras_repeater') ): the_row();
                                            $image = get_sub_field('galeria_empilhadeiras');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Empilhadeiras-->
                    
                    <!--Remoção de máquinas-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Remoção de máquinas<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('remocao_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('remocao_repeater') ): the_row();
                                            $image = get_sub_field('galeria_remocao');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Remoção de máquinas-->
                    
                    <!--Caminhões Muncks-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Caminhões Muncks<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('muncks_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('muncks_repeater') ): the_row();
                                            $image = get_sub_field('galeria_muncks');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Caminhões Muncks-->
                    
                    <!--Içamentos-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Içamentos<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('icamentos_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('icamentos_repeater') ): the_row();
                                            $image = get_sub_field('galeria_icamentos');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Içamentos-->
                    
                    <!--Pórticos hidráulicos-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Pórticos hidráulicos<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('porticos_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('porticos_repeater') ): the_row();
                                            $image = get_sub_field('galeria_porticos');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Pórticos hidráulicos-->
                    
                    <!--Estudo de rigging-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Estudo de rigging<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('rigging_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('rigging_repeater') ): the_row();
                                            $image = get_sub_field('galeria_rigging');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Estudo de rigging-->
                    
                    <!--Escoltas-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Escoltas<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('escoltas_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('escoltas_repeater') ): the_row();
                                            $image = get_sub_field('galeria_escoltas');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Escoltas-->
                    
                    <!--Plataforma hidráulica-->
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Plataforma hidráulica<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php if( have_rows('plataforma_repeater') ): ?>
                                    <ul>
                                        <?php while( have_rows('plataforma_repeater') ): the_row();
                                            $image = get_sub_field('galeria_plataforma');
                                        ?>
                                            <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="clear"></div>
                            </ul>    
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!--End Plataforma hidráulica-->
                    
                   
                </div>
                

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->
        
        <div class="lightbox">
            <div class="lightbox-content">
                <a href="#" title="Fechar" class="fechar">Fechar</a>
                <img src="" alt="" title="" width="" heigth="">
            </div>
        </div>
        
        

		<?php get_footer(); ?>
        
        <script type="text/javascript">
            jQuery(document).ready(function(e){
                /*Lightbox*/
                function lightboxMargin() {
                    var lightboxWidth  = jQuery(".lightbox .lightbox-content img").width() / 2;
                    var lightboxHeight = jQuery(".lightbox .lightbox-content img").height() / 2;

                    var lightboxMarginTop  = "-" + parseFloat(lightboxHeight) + "px";
                    var lightboxMarginLeft = "-" + parseFloat(lightboxWidth) + "px";
                    jQuery(".lightbox .lightbox-content").css("margin-top", lightboxMarginTop);
                    jQuery(".lightbox .lightbox-content").css("margin-left", lightboxMarginLeft);
                }
                lightboxMargin();
                jQuery(".lightbox .lightbox-content").css("width", jQuery(".lightbox .lightbox-content img").width());
                jQuery(".lightbox .lightbox-content").css("height", jQuery(".lightbox .lightbox-content img").height());

                jQuery(window).resize(function(e){
                    lightboxMargin();
                });

                jQuery(".fechar").click(function(e){
                    e.preventDefault;
                    jQuery(this).parent().parent().fadeOut(300);
                });
                jQuery(".lightbox").click(function(e){
                    e.preventDefault;
                    jQuery(this).fadeOut(300);
                });

                jQuery(".tabs li a").click(function(e){
                    setTimeout(lightboxMargin, 500);
                    e.preventDefault();

                    var detalhesLink = jQuery(this).attr("href");
                    jQuery(".lightbox .lightbox-content img").attr("src", detalhesLink);
                    jQuery(".lightbox").fadeIn(300);
                    var maxHeightImg = jQuery(window).height() - 50;
                    jQuery(".lightbox .lightbox-content img").css({maxHeight:maxHeightImg});
                });
                /*End of Lightbox*/
            });
        </script>