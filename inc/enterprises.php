<section id="enterprises">

	<div class="row-enterprises">

		<!--Lançamentos-->
		<div id="lancamentos" class="cat-open cat-enterprise selected">
			<div class="img-wrapper"></div>
			<div class="name-category">Lançamentos</div>
			<style type="text/css">
				#lancamentos .img-wrapper {
					background-image: url('<?php bloginfo('template_url'); ?>/images/lancamento.jpg');
				}
			</style>
		</div>

		<!--Prontos para morar-->
		<div id="prontosparamorar" class="cat-open cat-enterprise selected">
			<div class="img-wrapper"></div>
			<div class="name-category">Prontos para morar</div>
			<style type="text/css">
				#prontosparamorar .img-wrapper {
					background-image: url('<?php bloginfo('template_url'); ?>/images/prontosparamorar.jpg');
				}
			</style>
		</div>

		<!--Comerciais-->
		<div id="comerciais" class="cat-open cat-enterprise selected">
			<div class="img-wrapper"></div>
			<div class="name-category">Comerciais</div>
			<style type="text/css">
				#comerciais .img-wrapper {
					background-image: url('<?php bloginfo('template_url'); ?>/images/comercial.jpg');
				}
			</style>
		</div>

		<!--Em obra-->
		<div id="emobra" class="cat-open cat-enterprise selected">
			<div class="img-wrapper"></div>
			<div class="name-category">Em obra</div>
			<style type="text/css">
				#emobra .img-wrapper {
					background-image: url('<?php bloginfo('template_url'); ?>/images/emobras.jpg');
				}
			</style>
		</div>


		<?php
		$args = array(
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'banner',
			'showposts' => 1,
			'tax_query' => array(
		    	array(
			    	'taxonomy' => 'local',
			    	'field' => 'slug',
			    	'terms' => 'empreendimento'
			    )
			)
		); 
		$loop = new WP_Query($args);
		if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

		$imovel = get_field('link_imovel');
		$id = $imovel->ID;
		$name = $imovel->post_title;
		$logo = get_field('logo_banner',get_the_ID());
		$linkpersonalizado = get_field('link_personalizado_banner',get_the_ID());

		if (isset($linkpersonalizado) && !empty($linkpersonalizado)) {
			$url = $linkpersonalizado;
		} else {
			$url = get_permalink($id);
		} ?>

		<!--Campanha-->
		<a href="<?php echo $url; ?>" class="hidden-xs">
			<div id="campanha" class="cat-enterprise selected hidden-xs">
				<div class="img-wrapper"></div>
				<figure id="banner_<?php echo $id; ?>" class="calltoaction">
					<?php if (isset($logo) && !empty($logo)) : ?>
					<div class="img-calltoaction">
						<img src="<?php echo $logo; ?>" alt="<?php echo $name; ?>">
					</div>
					<?php endif; ?>
					<?php the_content(); ?>
					<?php $aparecelogo = get_field('aparecer_logo',get_the_ID()); ?>
					<?php if (isset($aparecelogo) && !empty($aparecelogo)) {
						echo '<style type="text/css">';
						foreach ($aparecelogo as $device) {
							if ($device == 'desktop') {
								echo '@media only screen and (min-width: 768px) {#banner_'.$id.' .img-calltoaction {display: block;}}';
							} elseif ($device == 'mobile') {
								echo '@media only screen and (max-width: 768px) {#banner_'.$id.' .img-calltoaction {display: block;}}';
							}
						}
						echo '</style>';
					} ?>		
				</figure>

				<?php if (wp_is_mobile()) {
					$thumb = get_field('imagem_mobile',get_the_ID());
				} else {
					$thumb = get_field('imagem_desktop',get_the_ID());
				} ?>

				<style type="text/css">
					#campanha .img-wrapper {background-image: url('<?php echo $thumb; ?>');}
				</style>
			</div>
		</a>

		<?php endwhile; endif; wp_reset_query(); ?>

		

		<div id="lancamentos-grid" class="row-enterprises-selected">
			<div class="grid-enterprises">
				<div class="owl-carousel owl-theme">
					<?php 
					$lancamento = array(
					    'orderby' => 'date',
					    'order' => 'DESC',
					    'post_type' => 'imovel',
					    'showposts' => 50,
					    'tax_query' => array(
					    	array(
						    	'taxonomy' => 'status',
						    	'field' => 'slug',
						    	'terms' => 'lancamento'
						    )
						)
					); 
					$loop = new WP_Query($lancamento);
					if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

					<!--imóvel-->
					<div class="item">
						<?php get_template_part('inc/single-grid-enterprise'); ?>
					</div>

					<?php endwhile; else : ?>
					<p>Nenhum imóvel encontrado.</p>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div>
			</div>
		</div>

		<div id="prontosparamorar-grid" class="row-enterprises-selected">
			<div class="grid-enterprises">
				<div class="owl-carousel owl-theme">

					<?php 
					$prontos = array(
					    'orderby' => 'date',
					    'order' => 'DESC',
					    'post_type' => 'imovel',
					    'showposts' => 50,
					    'tax_query' => array(
					    	array(
						    	'taxonomy' => 'status',
						    	'field' => 'slug',
						    	'terms' => 'pronto-para-morar',
							)
						)
					); 
					$loop = new WP_Query($prontos);

					if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

					<!--imóvel-->
					<div class="item">
						<?php get_template_part('inc/single-grid-enterprise'); ?>
					</div>

					<?php endwhile; else : ?>
					<p>Nenhum imóvel encontrado.</p>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div>
			</div>
		</div>

		<div id="comerciais-grid" class="row-enterprises-selected">
			<div class="grid-enterprises">
				<div class="owl-carousel owl-theme">

					<?php 
					$comerciais = array(
					    'orderby' => 'date',
					    'order' => 'DESC',
					    'post_type' => 'imovel',
					    'showposts' => 50,
					    'tax_query' => array(
					    	array(
						    	'taxonomy' => 'status',
						    	'field' => 'slug',
						    	'terms' => 'comercial',
						    ),
						)
					); 
					$loop = new WP_Query($comerciais);

					if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

					<div class="item">
						<!--imóvel comercial-->
						<?php get_template_part('inc/single-grid-enterprise'); ?>
					</div>

					<?php endwhile; else : ?>
					<p>Nenhum imóvel encontrado.</p>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div>
			</div>
		</div>

		<div id="emobra-grid" class="row-enterprises-selected">
			<div class="grid-enterprises">
				<div class="owl-carousel owl-theme">

					<?php 
					$emobras = array(
					    'orderby' => 'date',
					    'order' => 'DESC',
					    'post_type' => 'imovel',
					    'showposts' => 50,
					    'tax_query' => array(
						    array(
						    	'taxonomy' => 'status',
						    	'field' => 'slug',
						    	'terms' => 'em-obras',
						    )
						)
					); 
					$loop = new WP_Query($emobras);

					if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

					<!--imóvel-->
					<div class="item">
						<?php get_template_part('inc/single-grid-enterprise'); ?>
					</div>

					<?php endwhile; else : ?>
					<p>Nenhum imóvel encontrado.</p>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div>
			</div>
		</div>



		<!--Segundo banner-->
		<?php
		$args = array(
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'banner',
			'showposts' => 1,
			'tax_query' => array(
		    	array(
			    	'taxonomy' => 'local',
			    	'field' => 'slug',
			    	'terms' => 'empreendimento'
			    )
			)
		); 
		$loop = new WP_Query($args);
		if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

		$imovel = get_field('link_imovel');
		$id = $imovel->ID;
		$name = $imovel->post_title;
		$logo = get_field('logo_banner',get_the_ID());
		$linkpersonalizado = get_field('link_personalizado_banner',get_the_ID());

		if (isset($linkpersonalizado) && !empty($linkpersonalizado)) {
			$url = $linkpersonalizado;
		} else {
			$url = get_permalink($id);
		} ?>

		<!--Campanha-->
		<a href="<?php echo $url; ?>" class="hidden-sm hidden-md hidden-lg">
			<div id="campanha2" class="cat-enterprise selected hidden-sm hidden-md hidden-lg">
				<div class="img-wrapper"></div>
				<figure id="banner_<?php echo $id; ?>" class="calltoaction">
					<?php if (isset($logo) && !empty($logo)) : ?>
					<div class="img-calltoaction">
						<img src="<?php echo $logo; ?>" alt="<?php echo $name; ?>">
					</div>
					<?php endif; ?>
					<?php the_content(); ?>
					<?php $aparecelogo = get_field('aparecer_logo',get_the_ID()); ?>
					<?php if (isset($aparecelogo) && !empty($aparecelogo)) {
						echo '<style type="text/css">';
						foreach ($aparecelogo as $device) {
							if ($device == 'desktop') {
								echo '@media only screen and (min-width: 768px) {#banner_'.$id.' .img-calltoaction {display: block;}}';
							} elseif ($device == 'mobile') {
								echo '@media only screen and (max-width: 768px) {#banner_'.$id.' .img-calltoaction {display: block;}}';
							}
						}
						echo '</style>';
					} ?>		
				</figure>
				<style type="text/css">
					#campanha2 .img-wrapper {background-image: url('<?php the_post_thumbnail_url(); ?>');}
				</style>
			</div>
		</a>

		<?php endwhile; endif; wp_reset_query(); ?>



	</div>
</section>