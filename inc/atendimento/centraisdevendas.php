<div id="centraisdevendas">
	<div class="container">
		<div class="owl-carousel owl-theme">
			<?php
			$args = array(
				'orderby' => 'date',
				'order' => 'DESC',
				'post_type' => 'centrais-vendas',
			); 
			$loop = new WP_Query($args);
			if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
			<div class="item">
				<div class="wrapper-central">
					<h3><?php the_title(); ?></h3>
					<p><?php the_field('endereco',get_the_ID()); ?></p>
				</div>
				<span class="exibetelefone" data-telefone="<?php the_field('telefone',get_the_ID()); ?>">Exibir o telefone</span>
			</div>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
			
		</div>
	</div>
</div>