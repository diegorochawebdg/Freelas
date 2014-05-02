<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pages.css"

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
                    
                    <div class="et-learn-more et-open clearfix">
                        <h3 class="heading-more open">Transporte Rodoviário<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                <?php

                                    $rodoviaria_img = array();
                                    for($x=1;$x<=10;$x++)
                                    {
                                        if(get_field('rodoviaria_' . $x))
                                        {
                                            $rodoviaria                    = get_field('rodoviaria_' . $x);
                                            $rodoviaria_img[$x-1]["image"] = $rodoviaria['sizes']['thumbnail'];
                                            $rodoviaria_img[$x-1]["title"] = $rodoviaria['title'];
                                            $rodoviaria_img[$x-1]["link"]  = $rodoviaria['sizes']['large'];
                                        }
                                        else
                                        {
                                            break;
                                        }
                                    }
                                ?>
                                <?php foreach($rodoviaria_img as $rodoviaria): ?>

                                    <li><a href="<?php  echo $rodoviaria["link"] ?>"><img src="<?php  echo $rodoviaria["image"] ?>" alt="" title="<?php echo $rodoviaria["title"] ?>"></a></li>

                                <?php endforeach; ?>
                                <div class="clear"></div>
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more">Transporte pesado<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                teste
                            </ul>
                        </div>
                    </div>
                   <!-- <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Guindastes<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Empilhadeiras<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Remoção de máquinas<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Caminhões muncks<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Içamentos<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Pórticos hidráulicos<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Estudo de rigging<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Escoltas<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="et-learn-more clearfix">
                        <h3 class="heading-more open">Plataforma hidráulica<span class="et_learnmore_arrow"><span></span></span></h3>
                        <div class="learn-more-content" style="display: block;">
                            <ul>
                                
                            </ul>
                        </div>
                    </div>-->
                </div>
                

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->
        
        <div class="lightbox">
            <div class="lightbox-content">
                <a href="#" title="Fechar" class="fechar">Fechar</a>
                <?php
                   $images = get_field( 'rodoviaria_1' );
                   if( $images ):
                ?>                                                  
                    <img src="<?php echo $image[ 'sizes' ][ 'large' ]; ?>" alt="" title="" width="<?php echo $image['width'] ?>" heigth="<?php echo $image['height'] ?>">
                <?php
                    endif;
                ?>
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