<?php the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="campaign">
	<p><?php the_content(); ?></p>
	<br />
	<?php 
	if (has_post_thumbnail()) {
		the_post_thumbnail();
	} ?>
</div>

<!--
<div class="goals-wrapper">
	<header>
		<div class="row">
			<div class="col-xs-6">
				<h2>Nível 1 - VENDA 1 UNIDADE</h2>
			</div>
			<div class="col-xs-6">
				<p>Prêmio: <strong>R$ 3.000,00</p>
			</strong>
		</strong>
	</header>
	<section>
		<div class="row no-margin">
			<div class="col-md-6 col-sm-6 col-xs-6 no-padding active-percentage">
				<p class="percentage">100%</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
				<p class="total-sales">1 unidade vendida</p>
			</div>
		</div>
	</section>
</div>

<div class="goals-wrapper">
	<header>
		<div class="row">
			<div class="col-xs-6">
				<h2>Nível 1 - VENDA 1 UNIDADE</h2>
			</div>
			<div class="col-xs-6">
				<p>Prêmio: <strong>R$ 3.000,00</p>
			</strong>
		</strong>
	</header>
	<section>
		<div class="row no-margin">
			<div class="col-md-6 col-sm-6 col-xs-6 no-padding active-percentage">
				<p class="percentage">100%</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
				<p class="total-sales">1 unidade vendida</p>
			</div>
		</div>
	</section>
</div>

<div class="goals-wrapper">
	<header>
		<div class="row">
			<div class="col-xs-6">
				<h2>Nível 1 - VENDA 1 UNIDADE</h2>
			</div>
			<div class="col-xs-6">
				<p>Prêmio: <strong>R$ 3.000,00</p>
			</strong>
		</strong>
	</header>
	<section>
		<div class="row no-margin">
			<div class="col-md-6 col-sm-6 col-xs-6 no-padding active-percentage">
				<p class="percentage">100%</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
				<p class="total-sales">1 unidade vendida</p>
			</div>
		</div>
	</section>
</div>

-->