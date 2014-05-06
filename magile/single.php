<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/novidades.css">

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

				<div id="left-area">
                    
                    <h2 style="color: #F8E026; font-size: 36px; text-transform: uppercase; margin-bottom: 25px;">Novidades</h2>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <!--Post Content-->
                                    <div class="post-content single">
                                        <!--Post Thumbnail-->
                                        <?php
                                            if ( has_post_thumbnail() ) {?>
                                                <div class="post-thumb">
                                                    <?php the_post_thumbnail(array(185,185)); ?>
                                                </div>
                                        <?php } ?>
                                        <!--End Post Thumbnail-->
                                    
                                        <h1 style="font-size: 20px; text-transform: uppercase; color: #FFF; margin-bottom: 10px;"><?php the_title(); ?></h1>
                                        <div class="postado-por">
                                            <?php get_template_part('includes/postinfo'); ?>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                    <!--End Post Content-->
                                    <div class="clear"></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    
                    
                    </div> <!-- end #left-area -->

				<?php get_sidebar(); ?>

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->

		<?php get_footer(); ?>