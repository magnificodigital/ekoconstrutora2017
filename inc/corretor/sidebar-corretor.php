<?php
	$current_user = wp_get_current_user();
	$id = get_current_user_id();
	$user = get_userdata($id);
?>
<aside>
	<ul>
		<li><i class="fa fa-user" aria-hidden="true"></i> Olá, <?php echo $user->first_name; ?></li>
	</ul>
	<ul>
		<li><a href="<?php bloginfo('url'); ?>/area-do-corretor/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		<li><a href="<?php echo wp_logout_url(get_bloginfo('url').'/admin/'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
	</ul>
	<ul>
		<li><a href="<?php bloginfo('url'); ?>/area-do-corretor/meus-dados/">Meus Dados</a></li>
		<li><a href="<?php bloginfo('url'); ?>/area-do-corretor/ultimas-vendas/">Últimas vendas</a></li>
		<li><a href="<?php bloginfo('url'); ?>/area-do-corretor/materiais/">Materiais de Apoio</a></li>
	</ul>
	<ul class="list-style">
		<p>Campanhas em Destaque</p>
		<?php
		$args = array(
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'campanha',
		); 
		$loop = new WP_Query($args);
		if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
	</ul>
	<ul class="list-style">
		
		
	</ul>
</aside>