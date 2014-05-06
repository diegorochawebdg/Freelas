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
                    
                    <h1 class="title"><?php the_title(); ?></h1>
                    
                    
                    <?php query_posts("cat=-2&posts_per_page=3&paged=".get_query_var('paged'));?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <li>
                                    <!--Post Thumbnail-->
                                    <?php
                                        if ( has_post_thumbnail() ) {?>
                                            <div class="post-thumb">
                                                <?php the_post_thumbnail(array(185,185)); ?>
                                            </div>
                                            <div class="post-content" style="float:right; width:430px;">
                                        <?php }
                                        else { ?>
                                            <div class="post-content nope">
                                        <?php }
                                    ?>
                                    <!--End Post Thumbnail-->

                                    <!--Post Content-->
                                        <h2><?php the_title(); ?></h2>
                                        <div class="postado-por">
                                            <?php get_template_part('includes/postinfo'); ?>
                                        </div>
                                        <p class="post-excerpt">
                                            <?php 
                                                global $more;
                                                $more = 0;
                                                echo get_excerpt(390); 
                                            ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="readmore" title="Continue Lendo">Continue Lendo</a>
                                    </div>
                                    <!--End Post Content-->
                                    <div class="clear"></div>
                                </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
                    <?php wp_reset_query(); ?>
                    
                    
                    </div> <!-- end #left-area -->

				<?php get_sidebar(); ?>

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->

		<?php get_footer(); ?>