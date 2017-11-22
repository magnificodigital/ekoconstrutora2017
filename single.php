<?php get_header(); the_post(); ?>
<article id="single-post">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="thumb">
					<?php the_post_thumbnail('',array('title' => 'Foto: '.get_the_title(),'alt' => 'Foto: '.get_the_title())); ?>
				</div>
				<header>
					<p class="cats">Categorias:
						<?php 
							$categoria = get_the_category();
							foreach ($categoria as $cat) {
								$link = get_category_link($cat->term_id);
								echo '<a href="'.$link.'">'.$cat->cat_name.'</a>, ';
							}
						 ?>
					</p>
					<h1><?php the_title(); ?></h1>
					<p class="author">Postado por <?php the_author_posts_link(); ?> • <?php the_time('d F Y'); ?></p>

				</header>
				<?php
					get_template_part('inc/share');
					the_content();
					$form = get_field('codigo_formulario');
					if (isset($form) && !empty($form)) {
						echo '<div class="single-form-wrapper">';
						echo $form;
						echo '</div>';
					}
				?>
			
				<div class="fb-comments" data-href="http://ekoconstrutora.com.br/?p=<?php the_ID(); ?>" data-numposts="5"></div>

			</div>
			<?php get_sidebar(); ?>
		</div>
		<div class="tags">
			<?php the_tags('Tags: '); ?>
		</div>
	</div>
	<?php get_template_part('inc/newsletter'); ?>
	<footer id="single-footer">
		<div class="container">
			<div class="row">

				<?php 
				$args = array(
				    'orderby' => 'date',
				    'order' => 'DESC',
				    'showposts' => 3
				); 
				$loop = new WP_Query($args);

				if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

				<div class="col-md-4 col-sm-4 col-xs-12">
					<a href="<?php the_permalink(); ?>">
						<figure class="post">
							<?php the_post_thumbnail('single-footer', array('alt' => get_the_title(), 'title' => get_the_title())); ?>
							<h3><?php the_title(); ?></h3>
						</figure>
					</a>
				</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>

			</div>
		</div>
	</footer>
</article>
<?php get_footer(); ?>
