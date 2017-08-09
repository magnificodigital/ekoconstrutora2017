<?php get_header(); ?>
<style type="text/css">
	/*Thumbnails*/
	<?php
	$c = 1;

	switch ($c) {
	 	case 1:
	 		$thumb = '';
	 		break;
	 	case 2:
	 		$thumb = 'second-post';
	 		break;
	 	case 3:
	 		$thumb = 'third-post';
	 		break;
	 	case 4:
	 		$thumb = 'third-post';
	 		break;
	 	case 5:
	 		$thumb = 'second-post';
	 		break;
	 } 

	if (have_posts()) : while (have_posts()) : the_post(); ?>
		.post-<?php the_ID(); ?> {
			background-image: url('<?php the_post_thumbnail_url($thumb); ?>');
		}
	<?php $c++; ?>		
	<?php endwhile; endif; ?>
</style>
<div id="page" class="blog">
	<div class="container">
		<header>
			<a href="<?php bloginfo('url'); ?>/blog/"><img src="<?php bloginfo('template_url') ?>/images/blogeko.jpg" alt="Blog <?php bloginfo('name'); ?> - <?php echo single_cat_title() ?>" /></a>
			<h1><?php echo single_cat_title() ?></h1>
			<div class="row">
				<div class="col-md-6">
					<h1>Resultados para: <?php echo get_search_query(); ?></h1>
					<p>Fique por dentro de tudo sobre o mercado imobiliário e muitas dicas e novidades para o seu próximo imóvel.</p>
				</div>
			</div>
		</header>
		<section id="home-blog-posts">
			<div class="row">

				<?php

				if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
                elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
                else { $paged = 1; }

				$c = 1;
				if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php
				switch ($c) {
				 	case 1:
				 		$class = 'col-md-12 col-sm-12 col-xs-12';
				 		break;
				 	case 2:
				 		$class = 'col-md-7 col-sm-6 col-xs-12';
				 		break;
				 	case 3:
				 		$class = 'col-md-5 col-sm-6 col-xs-12';
				 		break;
				 	case 4:
				 		$class = 'col-md-5 col-sm-6 col-xs-12';
				 		break;
				 	case 5:
				 		$class = 'col-md-7 col-sm-6 col-xs-12';
				 		break;
				 } 
				?>

				<div class="<?php echo $class; ?>">
					<a href="<?php the_permalink(); ?>">
						<?php
						if ($c == 1) {
							$figureclass = "first-post post";
						} elseif ($c == 4 || $c == 5) {
							$figureclass = "post no-margin-bottom";
						} else {
							$figureclass = "post";
						}
						?>
						<figure class="<?php echo $figureclass; ?>">
							<div class="thumb-image post-<?php the_ID(); ?>"></div>
							<!--<div class="n-category"><?php the_category(', '); ?></div>-->
							<h2><?php the_title(); ?></h2>
							<?php $content = get_the_content(); ?>
							<!--<p><?php echo substr($content,0,100);?>...</p>-->
							<p><?php the_excerpt(); ?></p>
							<p class="author">Postado por <span><?php the_author(); ?></span> • <?php the_time('d F Y'); ?></p>
							<br />
						</figure>
					</a>
				</div>

				<?php $c++;
				endwhile; 
				endif; ?>

				<?php 
				global $wp_query;
				$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
                $big = 999999999;
                $p = array(
                    //'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'base' => @add_query_arg('paged','%#%'),
                    'format' => '?paged=%#%',
                    'current' => $current,
                    'total' => $wp_query->max_num_pages
                );

                echo '<div class="col-xs-12"><div class="navigation">'.paginate_links($p).'</div></div>';

                ?>

				
			</div>
		</section>
	</div>
	<?php get_template_part('inc/newsletter'); ?>
</div>
<?php get_footer(); ?>