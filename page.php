<?php get_header();

$areacorretor = get_page_by_path('area-do-corretor');
$areainvestidor = get_page_by_path('area-do-investidor');

global $post; ?>

	<?php if (is_page('personalize')) : ?>
	<?php get_template_part('inc/personalize'); ?>
	<?php else : ?>

	<div id="page"
		<?php if (is_page('busca')) : ?>
			class="page-search"
		<?php elseif (is_page('fale-conosco') || is_page('seja-um-fornecedor') || is_page('venda-seu-terreno') || is_page('trabalhe-conosco') || is_page('perguntas-frequentes') || is_page('centrais-de-vendas') || is_page('area-do-corretor') || is_page('area-do-investidor') || is_page('simule-seu-financiamento') || is_page('empreendimentos') ||  $post->post_parent == $areainvestidor->ID || $post->post_parent == $areacorretor->ID) : ?>
			class="bgGray"
		<?php endif; ?>>

		<?php
			if (is_page('central-de-atendimento') || is_page('portal-do-cliente')) {
				$img = true;
			} else {
				$img = false;
			}

			if (is_page('quem-somos')) {
				get_template_part('inc/quemsomos','header');
			}

		?>

		<div class="container">
			<?php if ($img == true) : ?>
				<br />
				<!-- aqui eu tmb posso colocar o thumbnail, ai o usuario escolhe por pagina -->
				<img src="<?php bloginfo('template_url'); ?>/images/central-atendimento.jpg" alt="<?php the_title(); ?>">
			<?php endif;

			if (!is_page('area-do-corretor') && !is_page('area-do-investidor') && $post->post_parent != $areainvestidor->ID && $post->post_parent != $areacorretor->ID) : ?>
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
			<?php endif; ?>
			<div id="content" class="content">
				<?php

					//Página busca
					if (is_page('busca')) { ?>

					<form id="buscaavancada" class="form">
						<div class="row">
							<div class="col-md-2 hidden-sm"></div>
							<div class="col-md-8 col-sm-12">
								<div class="row">
									<div class="col-md-6">
										<label>
											<input type="text" name="nome" placeholder="* Nome:" required class="required" />
										</label>
										<label>
											<input type="text" name="email" placeholder="* E-Mail:" required class="required" />
										</label>
										<label>
											<p class="message"></p>
										</label>
										
										<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
										<?php if (empty($token)): ?>
										<input type="hidden" name="assunto" value="Nova conversão - Busca Avançada - <?php bloginfo('name'); ?>">
										<?php endif; ?>
										<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Busca Avançada">
										<div class="resposta"></div>
									</div>
									<div class="col-md-6">
										<h4>Preencha para começarmos</h4>
										<p>Para encontrarmos o empreendimento que é a sua cara, por favor preencha os campos ao lado.</p>
										<button type="button">Encontrar agora</button>
									</div>
								</div>
							</div>
						</div>
					</form>

					<?php get_template_part('inc/search','advanced'); ?>

					<?php 

					} elseif (is_page('area-do-corretor') || $post->post_parent == $areacorretor->ID) {
						get_template_part('inc/corretor/dashboard','corretor');
					} elseif (is_page('area-do-investidor') || $post->post_parent == $areainvestidor->ID) {
						get_template_part('inc/investidor/dashboard','investidor');
					} else { 
						the_content();
					} ?>

			</div>
		</div>

		<?php

		//Central de Atendimento
		if (is_page('central-de-atendimento') || is_page('codigo-de-conduta') || is_page('guia-de-compras')) {
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('conheca-nossos-empreendimentos')) {
			get_template_part('inc/enterprises');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('fale-conosco')) {
			get_template_part('inc/atendimento/fale-conosco');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('seja-um-fornecedor')) {
			get_template_part('inc/atendimento/seja-um-fornecedor');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('venda-seu-terreno')) {
			get_template_part('inc/atendimento/venda-seu-terreno');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('trabalhe-conosco')) {
			get_template_part('inc/atendimento/trabalhe-conosco');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('corretores-e-imobiliarias')) {
			get_template_part('inc/atendimento/sign','corretores');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('perguntas-frequentes')) {
			get_template_part('inc/atendimento/faq');
			get_template_part('inc/atendimento/icons');
		} elseif (is_page('centrais-de-vendas')) {
			get_template_part('inc/atendimento/centraisdevendas');
			get_template_part('inc/atendimento/icons');

		//Portal do Cliente
		} elseif (is_page('portal-do-cliente') || is_page('campanhas-e-promocoes') || is_page('manual-do-empreendimento')) {
			get_template_part('inc/portaldocliente/icons');
		} elseif (is_page('pesquisa-de-satisfacao')) {
			get_template_part('inc/portaldocliente/pesquisa');
			get_template_part('inc/portaldocliente/icons');
		} elseif (is_page('simule-seu-financiamento')) {
			get_template_part('inc/portaldocliente/simular-financiamento');
			get_template_part('inc/portaldocliente/icons');
		}

		elseif (is_page('empreendimentos')) {
			get_template_part('inc/empreendimentos');
		} elseif (is_page('quem-somos')) {
			get_template_part('inc/quemsomos','content');
		}
		?>
	</div>

	<?php endif; ?>

<?php get_footer(); ?>
