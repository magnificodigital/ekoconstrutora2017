<section id="content-quemsomos">
	<div id="vantagens" class="bgGray">
		<h2>Vantagens</h2>
		<div id="advantages-slider">
			<div class="owl-carousel owl-theme">
				<div class="item">
					<h3>Estrutura e Acabamento</h3>
					<p>A qualidade dos materiais utilizados são notáveis em todos os empreendimentos, não somente pelo bom gosto como também pela durabilidade.</p>
				</div>
				<div class="item">
					<h3>Entrega Garantida</h3>
					<p>Trabalhamos com seriedade para proporcionar aos nossos clientes satisfação e tranquilidade, entregando os projetos com pontualidade e sem pendência.</p>
				</div>
				<div class="item">
					<h3>Financiamento</h3>
					<p>Em parceria com as melhores instituições financeiras do país, garantimos um excelente negócio, dando-lhe toda a assessoria para os processos de compra, além do acompanhamento junto ao agente financeiro.</p>
				</div>
				<div class="item">
					<h3>Localização</h3>
					<p>Este é um dos critérios de qualidade que nos preocupamos. Buscamos locais apropriados para a incorporação dos empreendimentos. Além da atenção em construir perto de uma infra-estrutura completa que valorize o imóvel.</p>
				</div>
				<div class="item">
					<h3>Valorização</h3>
					<p>Toda a qualidade EKO somada ao reconhecimento da empresa faz com que os seus produtos tenham uma ótima valorização no mercado imobiliário.</p>
				</div>
				<div class="item">
					<h3>Satisfação do Cliente</h3>
					<p>Nossos profissionais são treinados para oferecer informações claras e objetivas, além de um acompanhamento personalizado. E é com esta estrutura que estamos conquistando e satisfazendo novos clientes a cada dia.</p>
				</div>
			</div>
		</div>
	</div>
	
	<section id="linhadotempo">
		<div class="container">
			<button type="button" data-target="empreendimentos" class="button-gray">Linha do Tempo</button>
		</div>
	</section>
	
	<?php get_template_part('inc/empreendimentos'); ?>

	<section id="depoimentos">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
					<div class="owl-carousel owl-theme">
						<?php
						$args = array(
							'orderby' => 'date',
							'order' => 'DESC',
							'post_type' => 'depoimentos',
						); 
						$loop = new WP_Query($args);
						if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
						<div class="item">
							<?php the_content(); ?>
							<p class="author"><?php the_title(); ?> - <?php the_time('F / Y'); ?></p>
						</div>
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

</section>

<style type="text/css">
	#grid-development {
		padding-top: 50px;
	}
</style>

