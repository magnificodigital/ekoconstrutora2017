<h1>Últimas Vendas</h1>

<ul class="list-sales">
	<li class="hidden-xs">
		<div class="row">
			<div class="col-md-4"><strong>Empreendimento</strong></div>
			<div class="col-md-3"><strong>Mês/Ano</strong></div>
			<div class="col-md-3"><strong>Valor da Venda</strong></div>
			<div class="col-md-2"><strong>Comissão</strong></div>
		</div>
	</li>

	<?php 
	$args = array(
	    'orderby' => 'date',
	    'order' => 'DESC',
	    'post_type' => 'vendas',
	); 
	$loop = new WP_Query($args);

	if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
		<?php
			$idcorretor = get_current_user_id();
			$corretor = get_field('corretor_venda');
			$imovel = get_field('venda_imovel');
			$valor = get_field('valor_da_venda');
			$comissao = get_field('comissao_venda');
			$comissao = $comissao / 100;
			$resultado = $comissao * $valor;
			if ($corretor['ID'] == $idcorretor) {
		?>
		<li>
			<div class="row">
				<div class="col-md-4"><?php echo $imovel->post_title; ?></div>
				<div class="col-md-3"><?php the_time('F/Y'); ?></div>
				<div class="col-md-3">R$ <?php echo $valor; ?></div>
				<div class="col-md-2">R$ <?php echo $resultado; ?></div>
			</div>
		</li>
		<?php } ?>
	<?php endwhile; endif; ?>
	<?php wp_reset_postdata(); ?>
	
</ul>
