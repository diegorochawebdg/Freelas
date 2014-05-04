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
                <!--End Titles-->
                
                <!--Left-->
                <div class="one_half">
                    <div class="contato">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; ?>
                        <?php endif; ?>

                        <div class="form">
                            <form name="contato" method="post" action="http://www.rafaelbianco.com/rbmail.php" autocomplete="off">
                                <input type="text" name="nome" id="nome" value="Nome:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                <input type="text" name="email" id="email" value="E-mail:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                <input type="text" name="empresa" id="empresa" value="Empresa:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                <input type="text" name="tel" id="tel" value="Telefone:" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                <textarea onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">Mensagem:</textarea>
                                <button type="submit" title="Enviar">Enviar</button>
                                
                                
                                <input type="hidden" name="recipient" value="diego.webdg@gmail.com">
                                <input type="hidden" name="redirect" value="http://www.rafaelbianco.com.br/projetos/magile/contato/">
                                <input type="hidden" name="subject" value="Contato | Magile Transportes">
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--End of Left-->
                
                <!--Right-->
                <div class="one_half_last in_contact">
                    <div class="contato">
                        <h2>Telefone</h2>
                        <a href="tel:01136217922" class="tel-number">(11) 3621-7922</a>
                        <a href="mailto:contato@magiletransportes.com.br" class="mail-to">contato@magiletransportes.com.br</a>

                        <h2>Endereço:</h2>
                        <p>Rua Cachoeira do Sul, 378 - São Paulo - SP</p>
                        <div class="map">
                            <?php
                                $location = get_field('localizacao');
                                if( ! empty($location) ):
                                ?>
                                <div id="map" style="width: 100%; height: 276px;"></div>
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
                    </div>
                </div>
                <!--End of Right-->
                
                
                

			</div> <!-- end #content-area -->

		</div> <!-- end .container -->

		<?php get_footer(); ?>