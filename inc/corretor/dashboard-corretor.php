<section id="realtor-area">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<?php get_template_part('inc/corretor/sidebar','corretor'); ?>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="content-wrapper">
				
				<?php if (is_page('area-do-corretor')) : ?>
				<h1>Campanhas</h1>
				<?php
				$args = array(
					'orderby' => 'date',
					'order' => 'DESC',
					'post_type' => 'campanha',
				); 
				$loop = new WP_Query($args);

				if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

				<div class="campaign">
					<a href="<?php echo get_the_permalink(); ?>"><h2><?php echo get_the_title(); ?></h2></a>
					<p><?php the_content(); ?></p>
					<a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

				<?php if (is_singular('campanha')) {
					get_template_part('inc/corretor/single','campanha');
				} elseif (is_page('meus-dados')) {
					get_template_part('inc/corretor/meus-dados','corretor');
				} elseif (is_page('ultimas-vendas')) {
					get_template_part('inc/corretor/ultimas-vendas');
				} elseif (is_page('materiais')) {
					get_template_part('inc/corretor/materiais','corretor');
				} ?>
				
			<br />
		</div>
	</div>
</section>