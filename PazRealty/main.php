<!DOCTYPE html>
<html>
  	<head>
  		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<link href="<?php echo Yii::app()->baseUrl;?>/www/frontend/css/reset.css" rel="stylesheet">
    	<link href="<?php echo Yii::app()->baseUrl;?>/www/frontend/css/style.css?t=1" rel="stylesheet">
    	<link href="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/fancybox/jquery.fancybox.css" rel="stylesheet">
    	<script src="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/jquery.js"></script>
    	<script src="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/jquery.cycle.all.js"></script>
    	<script src="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/fancybox/jquery.fancybox.js"></script>
    	<script src="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/html5shiv.js"></script>
    	<script src="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/maskedinput.js"></script>
    	<script src="<?php echo Yii::app()->baseUrl;?>/www/frontend/js/scripts.js?t=1"></script>
    	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    	<script type="text/javascript">
			var baseUrl = '<?php echo Yii::app()->request->baseUrl; ?>';
    	</script>
  	</head>
  	<body>
  		<header>
  			<div class="container">
  				<div class="navbar">
  					<div class="logo">
  						<div class="curva"></div>
  						<?php echo CHtml::link(CHtml::image(Yii::app()->createUrl('www/frontend/images/logotipo.png')), Yii::app()->homeUrl); ?>
  					</div>
	  				<ul>
			        	<!--li><?php echo CHtml::link('A PAZ REALTY', array('/pagina')); ?></li>
			        	<li class="sep"></li-->
			        	<li><?php echo CHtml::link('IMÓVEIS', array('/busca')); ?></li>
			        	<li class="sep"></li>
			        	<li><?php echo CHtml::link('CONTATO', array('/site/contato')); ?></li>
			        	<li class="sep"></li>
			        	<li><?php echo CHtml::link('CENTRAL DE VENDAS', Yii::app()->createUrl('site/informacoes'), array('class'=>'fancy')); ?></li>
			        	<li class="sep"></li>
			        	<li><?php echo CHtml::link('FAQ', array('/site/faq')); ?></li>
                        <li class="sep"></li>
                        <li class="portal"><?php echo CHtml::link('PORTAL DO CLIENTE', 'http://www.uau.com.br/PortalUAU_Site/AbrePortal.aspx?Empresa=MA5m%2bkPP0HY%3d', array('target'=>'_blank')); ?></li>
                        <li class="sep"></li>
                        <li><a href="http://www.pazrealty.com.br/painel-usuario/" target="_blank" title="Portal de parcerias">PORTAL DE PARCERIAS</a></li>
                        <?php if(isset($_GET['dev'])): ?>
                            <li class="login">
                                <?php
                                $login = new FormLogin;
                                $form=$this->beginWidget('CActiveForm', array('action'=>array('/cliente/default/login'))); ?>
                                    <?php echo $form->textField($login, 'username', array('placeholder'=>'login')); ?>
                                    <?php echo $form->passwordField($login, 'password', array('placeholder'=>'senha')); ?>
                                    <?php echo CHtml::submitButton('Enviar', array('class'=>'btn-img go')); ?>
                                <?php $this->endWidget(); ?>
                            </li>
                        <?php endif; ?>
			    	</ul>
	  			</div>	
	  			<div class="clear"></div>
	  			<div class="etapas">
	  				<li class="breve"><?php echo CHtml::link('Breve Lançamento', array('/brevelancamento')); ?></li>
	  				<li class="lancamento"><?php echo CHtml::link('Lançamento', array('/lancamento')); ?></li>
	  				<li class="obra"><?php echo CHtml::link('Em Obra', array('/emobras')); ?></li>
	  				<li class="pronto"><?php echo CHtml::link('Pronto<br />para Morar', array('/prontoparamorar')); ?></li>
	  			</div>
	  		</div>
  		</header>
  		
  		<?php if(isset($this->breadcrumbs)): ?>
	  		<div class="container">
	  			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					'separator'=>' \ '
				)); ?>
	  		</div>
	  	<?php endif; ?>
  		
  		<?php echo $content; ?>
  		
  		<footer>
  			<div class="links">
  				<div class="container">
  					<ul>
		  				<li><h3>Institucional</h3></li>
		  				<?php
		  				$paginas = Pagina::model()->ordered()->findAll();
						foreach($paginas as $p)
							echo '<li>'.CHtml::link($p->titulo, $p->url).'</li>';
		  				?>
		  			</ul>
		  			<ul>
		  				<li><h3>Empreendimentos</h3></li>
		  				<li><?php echo CHtml::link('Breve lançamento', array('/brevelancamento')); ?></li>
		  				<li><?php echo CHtml::link('Lançamento', array('/lancamento')); ?></li>
		  				<li><?php echo CHtml::link('Em obras', array('/emobras')); ?></li>
		  				<li><?php echo CHtml::link('Pronto para morar', array('/prontoparamorar')); ?></li>
		  			</ul>
		  			<!---ul>
		  				<li><h3>Programas Especiais</h3></li>
		  				<li><?php echo CHtml::link('Primeiro cliente', '#'); ?></li>
		  				<li><?php echo CHtml::link('Vendas institucionais', '#'); ?></li>
		  			</ul-->
		  			<ul>
		  				<li><h3>Contatos</h3></li>
		  				<li><?php echo CHtml::link('Fale conosco', array('/site/contato')); ?></li>
		  				<li><?php echo CHtml::link('Ofereça seu terreno', array('/site/ofereca')); ?></li>
		  				<li><?php echo CHtml::link('Trabalhe conosco', array('/site/trabalhe')); ?></li>
		  			</ul>
		  			<div class="mundo">
		  				<div div class="last">
		  					<h3><?php echo CHtml::link('PAZ Chile', 'http://www.paz.cl/', array('target'=>'_blank')); ?></h3>
		  					<?php echo CHtml::link(CHtml::image(Yii::app()->createUrl('www/frontend/images/img-chile.png')), 'http://www.paz.cl/', array('target'=>'_blank')); ?>
		  				</div>
		  				<div>
		  					<h3><?php echo CHtml::link('PAZ Peru', 'http://www.pazcentenario.com.pe/', array('target'=>'_blank')); ?></h3>
		  					<?php echo CHtml::link(CHtml::image(Yii::app()->createUrl('www/frontend/images/img-peru.png')), 'http://www.pazcentenario.com.pe/', array('target'=>'_blank')); ?>
		  				</div>
		  			</div>
		  			<div class="clear"></div>
		  			<div class="copy">
		  				<?php echo Config::keySearch('endereco');?>
		  				<br /><br />
	  					Copyright <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?>. 
	  					Todos direitos reservados. Termos de Uso. Política de Privacidade.
	  				</div>
  				</div>
  			</div>
  			<div class="clear"></div>
  		</footer>
  		<div class="leads">
			<div class="container">
				<ul>
					<li class="telefone"><a><span>LIGUE AGORA</span>(11) 0800 111 5555</a></li>
					<li class="info"><?php echo CHtml::link('<span>INFORMAÇÕES</span> POR EMAIL', Yii::app()->createUrl('site/informacoes', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); ?></li>
					<li class="ligamos"><?php echo CHtml::link('<span>LIGAMOS</span> PARA VOCÊ', Yii::app()->createUrl('site/ligamos', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); ?></li>
				</ul>
				<div class="corretor">
					<div>
						<?php /*echo CHtml::link('<span>CORRETOR</span> ON-LINE', Yii::app()->createUrl('site/chat', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); */?>
						<a class="fancy-corretor" href="http://houste.hypnobox.com.br/atendimento/index.php?id_produto=529"><span>CORRETOR</span> ON-LINE</a>
						<span class="curva"></span>
					</div>
					<div class="bg-red"></div>
				</div>
			</div>
		</div>
        <!--=========================-->
        <!--=========================-->
        <!--Cópia Footer Lead -->
        <!--<div class="leads">
			<div class="container">
				<ul>
					<li class="telefone"><a><span>LIGUE AGORA</span>(11) 4195-5836</a></li>
					<li class="info"><?php echo CHtml::link('<span>INFORMAÇÕES</span> POR EMAIL', Yii::app()->createUrl('site/informacoes', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); ?></li>
					<li class="ligamos"><?php echo CHtml::link('<span>LIGAMOS</span> PARA VOCÊ', Yii::app()->createUrl('site/ligamos', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); ?></li>
					<li class="agende"><?php echo CHtml::link('<span>AGENDE VISITA</span> COM CORRETOR', Yii::app()->createUrl('site/agende', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); ?></li>
				</ul>
				<div class="corretor">
					<div>
						<?php echo CHtml::link('<span>CORRETOR</span> ON-LINE', Yii::app()->createUrl('site/chat', array('empreendimento'=>$this->id_empreendimento)), array('class'=>'fancy')); ?>
						<span class="curva"></span>
					</div>
					<div class="bg-red"></div>
				</div>
			</div>
		</div>-->
        <!--=========================-->
        <!--=========================-->
        <script type="text/javascript">
            (function(){
                var cdt = document.createElement('script'); cdt.type = 'text/javascript'; cdt.async = true;
                cdt.src = ('http:' == document.location.protocol ? 'http://www.fess.com.br/' : 'https://fess.websiteseguro.com/') + 'cdt/_scripts/cdt.min.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(cdt, s);
            })();
        </script>
          <!-- <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-48961429-1', 'pazrealty.com.br');
            ga('send', 'pageview');

        </script>-->
               <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-57051228-1', 'auto');
              ga('send', 'pageview');
        </script>
    
 
    </body>
</html>

