<?php get_header(); ?>

	<div id="content-full">
		<div id="home-top"></div>
		<div id="hr">
			<div id="hr-center">
				<div id="intro">
					<div class="center-highlight">

						<div class="container">

							<?php if (get_option('deepfocus_featured') == 'on') get_template_part('includes/featured'); ?>

						</div> <!-- end .container -->
					</div> <!-- end .center-highlight -->
				</div>	<!-- end #intro -->
			</div> <!-- end #hr-center -->
		</div> <!-- end #hr -->

		<div class="center-highlight">
			<div class="container">

				<?php if (get_option('deepfocus_blog_style') == 'false') { ?>
					<?php for ($i=1; $i <= 2; $i++) { ?>
						<?php query_posts('page_id=' . get_pageId(html_entity_decode(get_option('deepfocus_home_page_'.$i)))); while (have_posts()) : the_post(); ?>
							<div class="service">
								<h3 class="hometitle"><?php the_title(); ?></h3>
								<?php global $more;
								$more = 0;
								/*the_content('');*/ 
                                echo get_excerpt(259); ?>
								<a href="<?php the_permalink(); ?>" class="readmore" title="Saiba mais">Saiba mais</a>
							</div> <!-- end .service -->
						<?php endwhile; wp_reset_query(); ?>
					<?php } ?>


					<div class="service" id="blog">
						<div id="blog-top"></div>
						<div id="blog-wrapper">
							<div id="blog-content">
								<h4 class="widgettitle">Novidades</h4>
								<div class="recentscroll">
									<ul>
										<?php query_posts("posts_per_page=".get_option('deepfocus_fromblog_number')."&cat=".get_catId(get_option('deepfocus_blog_cat')));
										if (have_posts()) : while (have_posts()) : the_post(); ?>
											<li class="clearfix">
												<a href="<?php the_permalink(); ?>" class="title"><span><?php truncate_title(30); ?></span></a>
												<span class="postinfo">Publicado em <?php the_time(get_option('deepfocus_date_format')) ?></span>
											</li>
										<?php endwhile; endif; wp_reset_query(); ?>
									</ul> <!-- end ul.nav -->
								</div> <!-- end .recentscroll -->
							</div> <!-- end #blog-center -->
						</div> <!-- end #blog-wrapper -->
                        
                        <div id="controllers2">
							<a href="#" id="cleft-arrow"><?php esc_html_e('Previous','DeepFocus'); ?></a>
							<a href="#" id="cright-arrow"><?php esc_html_e('Next','DeepFocus'); ?></a>
						</div>	<!-- end #controllers2 -->
					</div> <!-- end .service -->

					<div class="clear"></div>


				<?php } else { ?>
					<div id="content-area" class="clearfix">

						<div id="left-area">
							<?php get_template_part('includes/entry'); ?>
						</div> <!-- end #left-area -->

						<?php get_sidebar(); ?>

					</div> <!-- end #content-area -->
				<?php } ?>

			</div> <!-- end .container -->

			<?php get_footer(); ?>