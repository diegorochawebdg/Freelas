
	<div class="item">
		<div class="left compare">
			<?php echo CHtml::checkBox('compare[]'); ?>
		</div>
		<div class="left">
			<div class="image left">
				<span><?php echo $data->etapa->nome; ?></span>
				<?php echo CHtml::link(CHtml::image($data->imagemCroped(220, 144, 'busca-')), $data->url); ?>
			</div>
			<div class="infos left">
				<h2><?php echo $data->nome; ?></h2>
				<!--p class="dorms"><?php echo $data->labelDormitorios; ?></p-->
				<p><?php echo $data->bairro->nome; ?> / <?php echo $data->cidade->nome; ?> / <?php echo $data->estado->uf; ?></p>
			</div>
		</div>
		<div class="right botoes">
			<?php /*echo CHtml::link('<span>CORRETOR</span> ON-LINE', '#', array('class'=>'corretor'));*/?>
			<a class="corretor fancy-corretor" href="http://houste.hypnobox.com.br/atendimento/index.php?id_produto=529"><span>CORRETOR</span> ON-LINE</a>
			<br clear="all">
			<?php echo CHtml::link('Saiba mais', $data->url, array('class'=>'saiba'));?>
		</div>
	</div>
