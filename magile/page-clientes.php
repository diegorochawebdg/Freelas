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
                <div class="logos-clientes">
                    <?php if( have_rows('clientes_repeater') ): ?>
                        <ul>
                            <?php while( have_rows('clientes_repeater') ): the_row();
                                $image = get_sub_field('logotipo');
                            ?>
                                <li><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>">
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="clear"></div>
                </div>
                <!--End Logos-->
                

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->

		<?php get_footer(); ?>