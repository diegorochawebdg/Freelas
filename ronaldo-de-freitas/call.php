<?php
	require("../../../wp-config.php");	
	$post_id  = $_REQUEST['p'];
	if(empty($_REQUEST['p'])){	
		$query = "SELECT br_posts.*,br_term_relationships.* FROM br_term_relationships 			
					INNER JOIN  br_terms ON br_term_relationships.term_taxonomy_id = br_terms.term_id
					INNER JOIN br_posts ON  br_term_relationships.object_id = br_posts.ID
					WHERE br_terms.slug = 'areas_de_atuacao' ORDER BY br_posts.post_date DESC  LIMIT 1";		
	}else{
		$query = "SELECT * FROM br_posts WHERE ID = ".$post_id; 
	}
	if(@$res=mysql_query($query)){
		$count = @mysql_affected_rows();
		while($row=mysql_fetch_assoc($res)){
			$dados[]=$row;
		}
			
	}
	
	//print_r($dados);

?>
<div class="galeria">
<?php $post_img = get('post_img'); ?>
<!-- <img src="<?php /*?><?php bloginfo('template_directory'); ?><?php */?>/images/cirurgia-foto-01.jpg" />-->
<img src="<?php echo $post_img; ?>" style="max-width:222px; height:auto;" />
</div>
<h2><?= $dados[0]['post_title'] ?></h2>
<p><?= $dados[0]['post_content'];?></p>
               
