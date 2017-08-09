<?php get_header(); ?>
<div id="page-404">
	<div class="container">
		<header>
			<h1>404!</h1>
			<?php //get_template_part('inc/breadcrumbs'); ?>
		</header>
		<p>Ops, não foi possível encontrar a página solicitada!</p>
		<a id="gotohome" href="<?php bloginfo('url'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Ir para home</a>
	</div>
</div>
<?php get_footer(); ?>