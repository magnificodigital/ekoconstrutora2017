<h1><?php the_title(); ?></h1>
<div class="row">
<?php
$iduser = get_current_user_id();
//Pegar os empreendimentos do corretor
$empreendimentos = get_field('empreendimento','user_'.$iduser);
$args = array(
    'orderby' => 'date',
    'order' => 'DESC',
    'post_type' => 'imovel',
    'showposts' => 500
);
$is = get_posts($args);
foreach ($is as $i) :
	if (isset($empreendimentos) && !empty($empreendimentos)) : 
		foreach ($empreendimentos as $empreendimento) :
			if ($i->ID == $empreendimento->ID) : ?>
				<div class="col-md-6 col-sm-12">
					<div class="grid-materiais">
						<h2><?php echo $i->post_title; ?></h2>
						<?php
						$materiais = array(
						    'orderby' => 'date',
						    'order' => 'DESC',
						    'post_type' => 'material-investidor'
						);
						$files = get_posts($materiais);
						foreach ($files as $file) :	
							$imovel = get_field('imovel',$file->ID);
							$url = get_field('arquivo',$file->ID);
							if ($imovel->ID == $empreendimento->ID) : ?>
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3">
									<a href="<?php echo $url; ?>" target="_blank">
										<i class="fa fa-file" aria-hidden="true"></i>	
									</a>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-9">
									<p><span><?php echo $file->post_title; ?></span></p>
									<p><?php echo $file->post_content; ?></p>
								</div>
							</div>
							<?php endif;
						endforeach; ?>
					</div>
				</div>
			<?php endif;
		endforeach;
	endif;
endforeach; ?>
</div>