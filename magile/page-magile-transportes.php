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
                
                <!--Title-->
                <h1><?php the_title(); ?></h1>
                <!--End Title-->
                
                <!--Txt | Gallery-->
                <div class="txt-gallery">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                        endwhile; ?>
                    <?php endif; ?>
                </div>
                <!--End Txt | Gallery-->
                <div class="clear"></div>
                
                <!--Missão visão e valores-->
                <div class="boxes">
                    <div class="item first">
                        <?php 
                            $missao = get_field('missao'); 
                            if( $missao ) { 
                                echo $missao; 
                            ?>
                        <?php } ?>
                    </div>
                    <div class="space"></div>
                    <div class="item">
                        <?php 
                            $visao = get_field('visao'); 
                            if( $visao ) { 
                                echo $visao; 
                            ?>
                        <?php } ?>
                    </div>
                    <div class="space"></div>
                    <div class="item last">
                        <?php 
                            $valores = get_field('valores'); 
                            if( $valores ) { 
                                echo $valores; 
                            ?>
                        <?php } ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--End of Missão visão e valores-->
                
                <!--Certificados-->
                <div class="certificados">
                    <?php 
                        $internacional = get_field('certificado_internacional'); 
                        if( $internacional ) { 
                            echo $internacional; 
                        ?>
                    <?php } ?>
                    
                    <?php 
                        $nacional = get_field('certificado_nacional'); 
                        if( $nacional ) { 
                            echo $nacional; 
                        ?>
                    <?php } ?>
                    
                    <?php 
                        $abrinq = get_field('certificado_abrinq'); 
                        if( $abrinq ) { 
                            echo $abrinq; 
                        ?>
                    <?php } ?>
                    
                    <div class="clear"></div>
                </div>
                <!--End Certificados-->
                

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->
        
        <div class="lightbox">
            <div class="lightbox-content">
                <a href="#" title="Fechar" class="fechar">Fechar</a>
                <img src="" alt="" title="" width="" heigth="">
            </div>
        </div>
        
        

		<?php get_footer(); ?>