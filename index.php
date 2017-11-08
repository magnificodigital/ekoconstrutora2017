<?php get_header(); ?>
<section id="slidehome">
	<div class="owl-carousel owl-theme">

		<?php
		$args = array(
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'banner',
			'post_status' => array('publish'),
			'tax_query' => array(
		    	array(
			    	'taxonomy' => 'local',
			    	'field' => 'slug',
			    	'terms' => 'home'
			    )
			)
		); 
		$loop = new WP_Query($args);
		if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();

			if (wp_is_mobile()) {
				$thumb = get_field('imagem_mobile',get_the_ID());
				//$thumb = get_the_post_thumbnail_url(get_the_ID(),'banner-mobile');
			} else {
				$thumb = get_field('imagem_desktop',get_the_ID());
				//$thumb = get_the_post_thumbnail_url();
			}

			$botao = get_field('aparecer_botao',get_the_ID());
			$linkpersonalizado = get_field('link_personalizado_banner',get_the_ID());
			$url = $linkpersonalizado;

		?>


		<?php if ($botao == false) : ?>
			<?php if (isset($url) && !empty($url)) : ?>
				<a href="<?php echo $url; ?>">
			<?php endif; ?>
		<?php endif; ?>
		<div class="item" style="background-image: url('<?php echo $thumb; ?>');">

			<?php
			$imovel = get_field('link_imovel');
			$id = $imovel->ID;
			$name = $imovel->post_title;
			$logo = get_field('logo_banner',get_the_ID());

			/*
			if (isset($linkpersonalizado) && !empty($linkpersonalizado)) {
				$url = $linkpersonalizado;
			} else {
				$url = get_permalink($id);
			}*/ ?>

			<figure id="banner_<?php echo $id; ?>" class="calltoaction">
				<?php if (isset($logo) && !empty($logo)) : ?>
				<div class="img-calltoaction">
					<img src="<?php echo $logo; ?>" alt="<?php echo $name; ?>">
				</div>
				<?php endif; ?>
				<?php the_content(); ?>

				<?php if ($botao == true) : ?>
					<?php if (isset($url) && !empty($url)) : ?>
						<a href="<?php echo $url; ?>" class="call">Conheça o empreendimento</a>
					<?php endif; ?>
				<?php endif; ?>
			</figure>
			
		</div>
		<?php if ($botao == false) : ?>
			<?php if (isset($url) && !empty($url)) : ?>
				</a>
			<?php endif; ?>
		<?php endif; ?>

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
		
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
		
	</div>
</section>
<?php get_template_part('inc/newsletter'); ?>
<?php get_template_part('inc/enterprises'); ?>
<section id="search-enterprise">
	<div class="container">
		<button type="button" data-target="search-advanced" class="button-gray">Encontre o seu imóvel</button>
	</div>
</section>
<section id="search-advanced">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-12">
				<div class="list-search">
					<noscript>
						<center>Por favor, habilite o javascript para este recurso funcionar corretamente</center>
					</noscript>
					<h4>Busca Avançada</h4>
					<form id="formsearchadvanced" method="post">
						<ul>
							<?php 
							$taxs = get_object_taxonomies('imovel','objects');
							foreach ($taxs as $tax) {
								if ($tax->name == 'type' ||
									$tax->name == 'bedrooms' ||
									$tax->name == 'state' ||
									$tax->name == 'city' ||
									$tax->name == 'price') { ?>

									<li>
									<span><?php echo $tax->label; ?> <i class="fa fa-angle-down" aria-hidden="true"></i></span>
									<div class="options">
										<?php 
										$terms = get_terms(array(
										    'taxonomy' => $tax->name,
										    'hide_empty' => false,
										));
										foreach ($terms as $term) { ?>

										<label for="<?php echo $term->slug; ?>" class="option">
											<input type="checkbox" name="<?php echo $tax->name; ?>[]" value="<?php echo $term->slug; ?>">
											
											<?php if ($tax->name == 'price') : ?>R$<?php endif; ?>
											<?php echo $term->name; ?>
										</label>		
										<?php }	?>
									</div>
								</li>

							<?php } ?>
							<?php } ?>							
						</ul>
						<button type="button" id="submit"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
					</form>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div id="entraposts"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="blog-home">
	<div class="container">
		<header>
			<h3>Dicas e novidades</h3>
			<a href="<?php bloginfo('url'); ?>/blog/">Ir para blog</a>
		</header>
		<div class="row no-margin">
			<div class="col-md-6 col-sm-12 no-padding">

				<?php 
				$args = array(
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'post',
					'showposts' => 1
				); 
				$loop = new WP_Query($args);

				if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

				<figure class="post post-big">
					<a href="<?php echo get_the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('blog-home-one'); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>"></a>
					<h4 class="title-post"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
				</figure>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>
			<div class="col-md-6 col-sm-12 col-xs-12 no-padding">
				<div class="row no-margin">

					<?php 
					$args = array(
						'orderby' => 'date',
						'order' => 'DESC',
						'post_type' => 'post',
						'showposts' => 2,
						'offset' => 1
					); 
					$loop = new WP_Query($args);

					if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>


					<div class="col-md-12 col-sm-6 col-xs-12 no-padding"">
						<figure class="post">
							<a href="<?php echo get_the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('blog-home'); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>"></a>
							<h4 class="title-post"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
						</figure>
					</div>

					<?php endwhile; else:
						echo "Nenhum post encontrado.";
					endif; ?>
					<?php wp_reset_postdata(); ?>

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>