<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()):the_post(); ?>
<?php

global $post;
$linkvideo = get_field('video');
$embed_360 = get_field('embed_360');
$galeria = acf_photo_gallery('galeria_de_fotos', $post->ID);
$plantas = acf_photo_gallery('plantas', $post->ID);
$latitude = get_field('latitude');
$longitude = get_field('longitude');
$personalize = get_field('personalize');
$vantagens = get_field('vantagens');
$bairro = get_field('existe_bairro');
$chamada = get_field('chamada');
$inicio = get_field('inicio_das_obras');
$entrega = get_field('previsao_de_entrega');
$logo = get_field('logo');
$imagem = get_field('imagem_principal');
$c = 1;
$prices = wp_get_post_terms($post->ID, 'price');
foreach ($prices as $price) {
	$preco = $price->name;
}
?>
<style type="text/css">
	#thumbnail-wrapper {
		<?php if (isset($imagem) && !empty($imagem)) : ?>
		background-image: url('<?php echo $imagem; ?>');
		<?php else : ?>
		background-image: url('<?php the_post_thumbnail_url(); ?>');
		<?php endif; ?>
	}
</style>
<section id="single-enterprise">
	<div id="thumbnail-wrapper"></div>
	<div id="nav-single-wrapper" class="bgGray">
		<nav id="menu-single">
			<div class="container">
				<ul>
					<?php $content = get_the_content(); ?>
					<?php if (isset($content) && !empty($content)) : ?>
					<li><a href="#descricao">Empreendimento</a></li>
					<?php endif; ?>
					<?php if (isset($plantas) && !empty($plantas)) : ?>
					<li><a href="#plantas">Plantas</a></li>
					<?php endif; ?>
					<li><a href="#andamentodaobra">Andamento da Obra</a></li>
					<?php if (isset($latitude) && !empty($latitude) && isset($longitude) && !empty($longitude)) : ?>
					<li><a href="#localizacao">Localização</a></li>
					<?php endif; ?>
					<?php if ($bairro == true) : ?>
					<li><a href="#seubairro">Bairro</a></li>
					<?php endif; ?>
					<?php if ($vantagens == true) : ?>
					<li><a href="#vantagens">Vantagens</a></li>
					<?php endif; ?>
					<li><a href="#faq">Dúvidas Frequentes</a></li>
					<?php if ($personalize == true) : ?>
					<li><a href="#personalize">Personalize</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>
	</div>
	<section class="bgGray" role="empreendimento">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<div class="row">
				<div class="col-md-8">
					<div id="image-video-360" class="box-wrapper no-padding">
						<div id="open-photo" class="active">
							<div class="owl-carousel owl-theme">

							<?php
							    if( count($galeria) ):
							        foreach($galeria as $imagem):
							            $full_image_url = $imagem['full_image_url']; 
							            $full_image_url_thumb = acf_photo_gallery_resize_image($full_image_url, 670, 375); 
								?>
								<div class="item">
									<a href="<?php echo $full_image_url; ?>" data-fancybox="fotos">
										<img src="<?php echo $full_image_url_thumb; ?>" alt="Foto: <?php the_title(); ?>" title="Foto: <?php the_title(); ?>" />
									</a>
								</div>
							<?php endforeach; endif; ?>

							</div>
						</div>
						<?php if (!empty($embed_360)) : ?>
							<div id="open-360">
								<?php echo htmlentities(the_field('embed_360')); ?>
							</div>
						<?php endif; ?>
							
						<div id="open-video">
							<div id="player"></div>
						</div>
						<nav class="controls">
							<span id="photo"></span>
							<?php if (!empty($linkvideo)) : ?>
								<span id="video"></span>
							<?php endif; ?>
							<?php if (!empty($embed_360)) : ?>
								<span id="e-360"></span>
							<?php endif; ?>
						</nav>
					</div>

					<?php if (isset($content) && !empty($content)) : ?>
						<div id="descricao" class="box-wrapper">
							<?php the_content(); ?>
						</div>
					<?php endif; ?>

					<div id="caracteristicas" class="box-wrapper">
						<h2>Principais Características</h2>
						<?php
							$tax = array('metreage','rooms','suites','bedrooms','garage','bathroom','adicionais'); //NESSA ORDEM
							
							$taxonomies = wp_get_object_terms(get_the_ID(),$tax, array('order' => 'ASC'));
							 
							if ( !empty($taxonomies) ) :
							    echo '<ul>';
							    foreach( $taxonomies as $term ) {
						           echo '<li>'.$term->name.'</li>';
						        }
							    echo '</ul>';
							endif;
						?>
					</div>
					<div id="plantas" class="box-wrapper">
						<h2>Plantas</h2>
						<div class="owl-carousel owl-theme">
							<?php
							    if( count($plantas) ):
							        foreach($plantas as $planta):
							            $full_image_url = $planta['full_image_url']; 
							            $full_image_url_thumb = acf_photo_gallery_resize_image($full_image_url, 670, 400); 
								?>
								<div class="item">
									<a href="<?php echo $full_image_url; ?>" data-fancybox="plantas">
										<img src="<?php echo $full_image_url_thumb; ?>" alt="Foto: <?php the_title(); ?>" title="Foto: <?php the_title(); ?>" />
									</a>
								</div>
							<?php endforeach; endif; ?>
						</div>
					</div>
					<div id="andamentodaobra" class="box-wrapper">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<h2>Andamento da Obra</h2>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6">
								<p class="date">Início das Obras: <br />
								<?php echo $inicio; ?></p>
							</div>
							<div class="col-md-2 col-sm-6 col-xs-6">
								<p class="date">Previsão de Entrega:<br />
								<?php echo $entrega; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="progress-box">
									<div class="icon escavacao"></div>
									<p class="name-icon">Escavação</p>
									<p class="progress-number"><?php the_field('andamento_escavacao'); ?>%</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="progress-box">
									<div class="icon fundacao"></div>
									<p class="name-icon">Fundação</p>
									<p class="progress-number"><?php the_field('andamento_fundacao'); ?>%</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="progress-box">
									<div class="icon estrutura"></div>
									<p class="name-icon">Estrutura</p>
									<p class="progress-number"><?php the_field('andamento_estrutura'); ?>%</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="progress-box">
									<div class="icon alvenaria"></div>
									<p class="name-icon">Alvenaria</p>
									<p class="progress-number"><?php the_field('andamento_alvenaria'); ?>%</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="progress-box">
									<div class="icon externo"></div>
									<p class="name-icon">Acabamento Externo</p>
									<p class="progress-number"><?php the_field('andamento_acabamento_externo'); ?>%</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<div class="progress-box">
									<div class="icon interno"></div>
									<p class="name-icon">Acabamento Interno</p>
									<p class="progress-number"><?php the_field('andamento_acabamento_interno'); ?>%</p>
								</div>
							</div>
						</div>
					</div>
					<?php if (isset($latitude) && !empty($latitude) && isset($longitude) && !empty($longitude)) : ?>
						<div id="localizacao" class="box-wrapper">
							<h2>Localização</h2>
							<div id="mapWrapper">
								<div id="map"></div>
							</div>
							<!--
							<div id="localizacao-icons">
								<ul>
									<li><span id="academia" class="localizacao-icon"></span></li>
									<li><span id="banco" class="localizacao-icon"></span></li>
									<li><span id="ensino" class="localizacao-icon"></span></li>
									<li><span id="farmacias" class="localizacao-icon"></span></li>
									<li><span id="hospital" class="localizacao-icon"></span></li>
									<li><span id="padaria" class="localizacao-icon"></span></li>
									<li><span id="shopping" class="localizacao-icon"></span></li>
									<li><span id="mercado" class="localizacao-icon"></span></li>
								</ul>
							</div>
							-->
						</div>
					<?php endif; ?>
					<?php if ($bairro == true) : ?>
					<div id="seubairro" class="box-wrapper">
						<h2>Seu Bairro</h2>
						<div class="grid-neighborhood">
							<div class="row no-margin">

								<?php
								$bairro = get_field('qual_bairro'); 
								$idbairro = $bairro->ID;

								$termos = wp_get_post_terms($idbairro, 'lugares' );
								foreach ( $termos as $termo ) :
								
									$url = get_bloginfo('url');
									$termlink = $url.'/'.$termo->slug.'/'; ?>
									<div class="col-md-4 col-sm-6 col-xs-6 no-padding">
										<figure class="post">
											<p class="title-post"><a href="<?php echo $termlink; ?>"><?php echo $termo->name; ?></a></p>
											<a href="<?php echo $termlink; ?>"><img src="http://placehold.it/330x230" /></a>
										</figure>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php if ($vantagens == true) : ?>
					<div id="vantagens" class="box-wrapper">
						<h2>Vantagens</h2>
						<div class="row">
							<div class="col-md-1 col-sm-2 col-xs-3">
								<div class="icon estrutura-acabamento"></div>
								<div class="icon valorizacao"></div>
								<div class="icon entrega-garantida"></div>
							</div>
							<div class="col-md-5 col-sm-10 col-xs-9">
								<p>Estrutura e Acabamento</p>
								<p>Valorização</p>
								<p>Entrega Garantida</p>
							</div>
							<div class="col-md-1 col-sm-2 col-xs-3">
								<div class="icon satisfacao-cliente"></div>
								<div class="icon localizacao"></div>
								<div class="icon financiamento"></div>
							</div>
							<div class="col-md-5 col-sm-10 col-xs-9">
								<p>Satisfação do Cliente</p>
								<p>Localização</p>
								<p>Financiamento</p>
							</div>
						</div>
					</div>
					<?php endif; ?>

					<div id="faq" class="box-wrapper">
						<h2>Perguntas Frequentes <a href="<?php bloginfo('url'); ?>/perguntas-frequentes/" target="_blank" class="pull-right"><span>ver todas</span></a></h2>
						<ul>
							<?php 
							$args = array(
							    'orderby' => 'date',
							    'order' => 'DESC',
							    'post_type' => 'faq',
							    'tax_query' => array(
								    'taxonomy' => 'categoria',
								    'field' => 'slug',
								    'terms' => array($cat->slug),
								)
							); 
							$posts = get_posts($args);
							foreach ($posts as $post) :
								$terms = get_the_terms($post->ID, 'categoria');
								foreach ($terms as $term) {
									if ($term->slug == "empreendimento") { ?>
										<li>
											<p class="item-faq"><?php echo $post->post_title; ?></p>
											<div class="dropdown">
												<?php echo $post->post_content; ?>
											</div>
										</li>
									<?php }
								}
							?>							
							<?php endforeach; ?>
							<?php wp_reset_query(); ?>
						</ul>
					</div>

					<?php if ($personalize == true) : ?>
					<div id="personalize" class="box-wrapper">
						<center><a href="<?php bloginfo('url'); ?>/personalize/"><img src="<?php bloginfo('template_url') ?>/images/personalize-logo-small.png" alt="Personalize"></a></center>
						<br />
						<br />
						<h2>Deixe sua unidade personalizada</h2>
						<a href="<?php bloginfo('url'); ?>/personalize/" class="conheca">Conheça o Personalize</a>
						<ul>
							<li><strong>Garantia</strong> em todos os serviços executados.</li>
							<li><strong>Evite gastar tempo</strong> buscando orçamentos, Já encontramos o melhor para você.</li>
							<li><strong>Cuidamos de tudo!</strong> Inclusive dos entulhos, Funcionários, qualidade e prazos.</li>
							<li><strong>Corpo técnico qualificado e experiente.</strong></li>
						</ul>
					</div>
					<?php endif; ?>

					<div id="posts" class="box-wrapper">
						<header>
							<h3>Fique por dentro de tudo sobre o mercado imobiliário com muitas dicas e novidades para o seu próximo nível</h3>
							<a href="<?php bloginfo('url'); ?>/blog/">Ir para blog</a>
						</header>
						<div class="row">
							<?php 
							$args = array(
								'showposts' => 2,
							    'orderby' => 'date',
							    'order' => 'DESC',
							    'post_type' => 'post',
							); 
							$posts = get_posts($args);
							foreach ($posts as $post) :
								$url = get_bloginfo('url');
								$postlink = get_permalink($post->ID);
								$thumb = get_the_post_thumbnail($post->ID,'four-post');?>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<figure class="post">
											<a href="<?php echo $postlink; ?>">
												<?php echo $thumb; ?>
												<h4 class="title"><?php echo $post->post_title; ?></h4>
											</a>
										</figure>
									</div>					
							<?php endforeach; ?>
							<?php wp_reset_query(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<aside>
						<div class="content-wrapper">
							<div class="logo-wrapper">
								<img src="<?php echo $logo; ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="content-aside">
								<h3><?php echo $chamada; ?></h3>
								<p>Preencha o formulário a baixo e receba mais informações sobre o empreendimento</p>
								<br />
								<p>A PARTIR DE</p>
								<p class="price">R$ <?php echo $preco; ?></p>
								<br />
								<?php 
									global $post;
									$post_slug = $post->post_name;
									//$formname = 'formlateral_'.$post_slug;
									$formname = 'form_lateral_eko';
									$token = get_option('token_rd');
								?>
								<form id="<?php echo $formname; ?>" name="<?php echo $formname; ?>" class="form">
									<label for="<?php echo $post_slug; ?>_nome">
										<input type="text" name="nome" placeholder="Nome:" class="required" required />
									</label>
									<label for="<?php echo $post_slug; ?>_email">
										<input type="text" name="email" placeholder="E-mail:" class="required" required />
									</label>								
									<label for="<?php echo $post_slug; ?>_telefone">
										<input type="text" name="telefone" placeholder="Telefone:" class="tel" />
									</label>
									<input type="hidden" name="empreendimento" value="<?php the_title(); ?>">
									<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
									<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - <?php the_title(); ?>">
									<div class="resposta"></div>
									<button type="button">Enviar</button>
								</form>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
</section>

<?php if (!empty($linkvideo)) :
$itens = parse_url ($linkvideo);
parse_str($itens['query'], $params);
$idvideo = $params['v']; ?>

<script type="text/javascript">
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	var player;
	function onYouTubeIframeAPIReady() {
		player = new YT.Player('player', {
			height: '375',
			width: '100%',
			videoId: '<?php echo $idvideo; ?>',
			disablekb: 0,
			controls: 0,
			showinfo: 0,
		});
	}
</script>
<script type="text/javascript">
	var latitude = <?php echo $latitude; ?>;
	var longitude = <?php echo $longitude; ?>;
	var map;
	var urulu = {lat: latitude, lng: longitude};
	function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: urulu,
			zoom: 15
		});
		var marker = new google.maps.Marker({
        	position: urulu,
        	map: map
        });
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoLu_JcALG1FIFYTaVDla0BmYRW1xMucM&callback=initMap" async defer></script>
<?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>