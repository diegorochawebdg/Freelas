<?php get_header(); ?>

<!-- INÍCIO DO CONTEÚDO -->
<div id="banner">
    <div class="container">
        <div id="slider">
        	<!--CAREGGA TODAS AS IMAGENS DO SLIDER ATRAVES DO CUSTOM FIELDS-->
        	<?php 
				$slider_home_img1 = get_post_meta(6, 'slider_home_img1', true); 
				$slider_home_img2 = get_post_meta(6, 'slider_home_img2', true); 
				$slider_home_img3 = get_post_meta(6, 'slider_home_img3', true); 
			?>
            <ul>
                <li><img src="<?php echo $slider_home_img1; ?>" /></li>
                <li><img src="<?php echo $slider_home_img2; ?>" /></li>
                <li><img src="<?php echo $slider_home_img3; ?>" /></li>
            </ul>
        </div>
    </div>
</div>
    <div id="conteudo">
        <div class="container">
            <div class="bloco">
                <h2>Sobre</h2>
                <?php $sobre = get_post_meta(6, 'sobre', true); ?>
                <p><a href="javascript:void(0)" onClick="goToByScroll('sobre')"><?php echo $sobre; ?></a></p>
            </div>
            <div class="bloco bloco-centro">
                <h2>Áreas de Atuação</h2>
                <?php $areas_de_atuacao = get_post_meta(6, 'areas_de_atuacao', true); ?>
                <a href="javascript:void(0)" onClick="goToByScroll('areas')">
                    <ul>
						<?php echo $areas_de_atuacao; ?>
                    </ul>
                </a>
            </div>
            <div class="bloco">
                <h2>Convênios</h2>
                <!--CAREGA TODAS AS IMAGENS DOS CONVENIOS ATRAVES DO CUSTOM FIELDS-->
				<?php 
                    $slider_convenios_img1 = get_post_meta(6, 'slider_convenios_img1', true); 
                    $slider_convenios_img2 = get_post_meta(6, 'slider_convenios_img2', true); 
                    $slider_convenios_img3 = get_post_meta(6, 'slider_convenios_img3', true);
					$slider_convenios_img4 = get_post_meta(6, 'slider_convenios_img4', true); 
                ?>
                <div id="banner-convenios">
                    <ul>
                        <li><a href="javascript:void(0)" onClick="goToByScroll('convenios')"><img src="<?php echo $slider_convenios_img1; ?>" width="116" /> <img src="<?php echo $slider_convenios_img2; ?>" width="116" /></a></li>
                        <li><a href="javascript:void(0)" onClick="goToByScroll('convenios')"><img src="<?php echo $slider_convenios_img3; ?>" width="116" /> <img src="<?php echo $slider_convenios_img4; ?>" width="116" /></a></li>
                    </ul>
                </div>
                <?php $convenios_txt = get_post_meta(6, 'convenios_txt', true); ?> 
                <p><a href="javascript:void(0)" onClick="goToByScroll('convenios')"><?php echo $convenios_txt; ?></a></p>
            </div>
        </div>
    </div>
    <!--FECHAMENTO DA DIV QUE ESTÁ NO OUTRO ARQUIVO-->
</div>
<div id="sobre">
    <div class="container">
        <div id="foto">
        	<!--CARREGA A IMAGEM ATRAVEZ DE CUSTOM FIELDS-->
        	<?php $sobre_img = get_post_meta(22, 'sobre_img', true); ?>
        	<img src="<?php echo $sobre_img; ?>" alt="Dr. Ronaldo de Freitas" />
        </div>
        <div id="texto">
            <!--EXIBE O CONTEUDO DO POST-->
            <?php
				$sobre_post_id = 22;
				$sobre_post = get_post($sobre_post_id);
				echo $sobre_post->post_content;
			?>
        </div>            
    </div>
</div>
<div id="areas">
    <div class="container">
        <h1>Áreas de Atuação</h1>
        
        <div id="atuacao">
            <div id="menu-atuacao">
                <ul>
					<?php
                    
						$args = array( 'numberposts' => 50, 'offset'=> 0, 'category' => 4 );
						$myposts = get_posts( $args );
						
						if(count($myposts) > 0) 
						{ 	
							foreach( $myposts as $post ) :	setup_postdata($post); ?>
							<li><a href="wp-content/themes/ronaldo-de-freitas/call.php?p=<?= get_the_ID() ?><?php // the_permalink(); ?>" ><?php the_title(); ?></a></li>
							<?php 
							endforeach;
						} else { 
							echo "<li>Nenhum conteúdo publicado.</li>";
						}
                    ?>
                </ul>
            </div>
            <div id="atuacao-conteudo">
               
            </div>
        </div>
    </div>
</div>

<div id="consultorio">
    <div class="container">
        <h1>Consultório</h1>
            <div id="galeria-set">
            <?php
				$consultorio_post_id = 32;
				$consultorio_post = get_post($consultorio_post_id);
				echo $consultorio_post->post_content;
			?>
        </div>
        <div id="endereco">
            <!--CARREGA O ENDEREÇO DO CONSULTORIO PELO CUSTOM FIELDS-->
            <?php $consultorio_endereco = get_post_meta(32, 'consultorio_endereco', true); ?>
            <?php echo $consultorio_endereco; ?>
        </div>
        <a href="http://goo.gl/maps/KtGMu" id="como-chegar"><img src="<?php bloginfo('template_directory'); ?>/images/como-chegar.jpg" /></a>
    </div>
</div>
<div id="convenios">
    <div class="container">
        <h1>Convênios</h1>
        <p>Na clínica são atendidos os convênios:</p>
        <?php 
			$convenios_img1 = get_post_meta(38, 'convenios_img1', true); 
			$convenios_img2 = get_post_meta(38, 'convenios_img2', true); 
			$convenios_img3 = get_post_meta(38, 'convenios_img3', true);
			$convenios_img4 = get_post_meta(38, 'convenios_img4', true); 
			$convenios_img5 = get_post_meta(38, 'convenios_img5', true); 
			$convenios_img6 = get_post_meta(38, 'convenios_img6', true); 
			$convenios_img7 = get_post_meta(38, 'convenios_img7', true); 
			$convenios_img8 = get_post_meta(38, 'convenios_img8', true); 
			$convenios_img9 = get_post_meta(38, 'convenios_img9', true);  
		?>
        <div id="convenioset">
            <ul>
                <li><img src="<?php echo $convenios_img1; ?>" alt="Convênio Amil" /></li>
                <li><img src="<?php echo $convenios_img2; ?>" alt="Itaú Porto Seguro" /></li>
                <li><img src="<?php echo $convenios_img3; ?>" alt="Convênio Petrobras" /></li>
                <li><img src="<?php echo $convenios_img4; ?>" alt="Convênio Sabesprev" /></li>
                <li><img src="<?php echo $convenios_img5; ?>" alt="Convênio Sulamerica" /></li>
                <li><img src="<?php echo $convenios_img6; ?>" alt="Convênioo Bradesco" /></li>
                <li><img src="<?php echo $convenios_img7; ?>" alt="Convênio Lincx" /></li>
                <li><img src="<?php echo $convenios_img8; ?>" alt="Convênio Allianz" /></li>
                <li><img src="<?php echo $convenios_img9; ?>" alt="Convênio Notredame" /></li>
            </ul>
            <p style="text-align:center;">Entre outros convênios. Atendemos por Reembolso.</p>
        </div>
    </div>
</div>
<div id="contato">
    <div class="container">
        <h1>Contato <span>(11) 3262-2834</span></h1>
        <form name="contato" class="formulario-contato">
            <input id="nome" type="text" name="nome" value="Nome*" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
            <input id="email" type="text" name="email" value="E-mail*" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
            <input id="tel" type="text" name="telefone" value="Telefone" class="meio" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />
            <input id="cidade" type="text" name="cidade" value="Cidade" class="meio" style="float:right;" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
            <textarea id="mensagem" name="mensagem" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" style="overflow:auto; resize: none;">Mensagem*</textarea>
            <p>*Campos obrigatórios</p>       
            <input id="enviar" type="submit" value="Enviar" class="enviar" />
        </form>


<?php get_footer(); ?>