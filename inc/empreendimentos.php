<section id="grid-development" <?php if (is_page('quem-somos')) : ?> class="bgGray" <?php endif; ?>>
	<div class="container">
		<ul>

			<?php
			$args = array(
				'orderby' => 'date',
				'order' => 'ASC',
				'post_type' => 'imovel',
				'showposts' => 500
			); 
			$loop = new WP_Query($args);
			if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

			<?php $logo = get_field('logo',get_the_ID()); ?>
			
			<li>
				<div class="development-wrapper">
					<div class="development-year">
						<span><?php echo get_the_time('Y', get_the_ID()); ?></span>
						<div class="linha"></div>
					</div>
					<div class="development-content">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<?php get_template_part('inc/single-grid-enterprise'); ?>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">	
								<div class="development-content-enterprise">
									<div class="development-logo">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<img src="<?php echo $logo; ?>" alt="Logo <?php the_title(); ?>" />
										</a>
									</div>
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>

			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>

		</ul>
	</div>
</section>