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
                <h1 style="margin-bottom: 10px;"><?php the_title(); ?></h1>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; ?>
                <?php endif; ?>
                <!--End Titles-->
                
                <!--Logos-->
                <div class="logos">
                    <ul>
                        <?php if( have_rows('clientes_repeater') ): ?>
                            <ul>
                                <?php while( have_rows('clientes_repeater') ): the_row();
                                    $image = get_sub_field('logotipo');
                                ?>
                                    <li><a href="<?php echo $image['sizes']['large']; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="clear"></div>
                    </ul>
                </div>
                <!--End Logos-->
                

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