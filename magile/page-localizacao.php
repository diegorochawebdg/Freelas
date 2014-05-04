<?php get_header(); ?>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pages.css">

<style>
    #content-area p{
        font-size:16px;
        margin-bottom: 20px;
    }
</style>

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
                <div class="localizacao">
                    <?php
                        $location = get_field('localizacao');
                        if( ! empty($location) ):
                        ?>
                        <div id="map" style="width: 100%; height: 500px;"></div>
                        <script src='http://maps.googleapis.com/maps/api/js?sensor=false' type='text/javascript'></script>

                        <script type="text/javascript">
                            function load() {
                            var lat = <?php echo $location['lat']; ?>;
                            var lng = <?php echo $location['lng']; ?>;
                            var latlng = new google.maps.LatLng(lat, lng);
                            var myOptions = {
                            zoom: 14,
                            center: latlng,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                           };
                            var map = new google.maps.Map(document.getElementById("map"), myOptions);
                            var marker = new google.maps.Marker({
                            position: map.getCenter(),
                            map: map
                           });
                        }
                           load();
                        </script>
                    <?php endif; ?> 
                </div>
                <!--End Logos-->
                

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->

		<?php get_footer(); ?>