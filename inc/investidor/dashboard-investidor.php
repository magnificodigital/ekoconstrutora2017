<section id="realtor-area">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12">
			<?php get_template_part('inc/investidor/sidebar','investidor'); ?>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12">
			<div class="content-wrapper">
			<?php if (is_page('area-do-investidor')) {
				//echo '<h1>Materiais</h1>';
				get_template_part('inc/investidor/materiais','investidor');
			} elseif (is_page('meus-dados-investidor')) {
				get_template_part('inc/investidor/meus-dados','investidor');
			} ?>
		</div>
	</div>
</section>