<div id="search-wrapper">
	<header>
		<h2>Vamos começar</h2>
		<p>Selecione as opções que melhor combinam com você.</p>
	</header>

	<div class="options">
		<div class="row">

			<!--Gênero-->
			<div class="col-md-3">
				<p class="title">Gênero</p>
				<div id="genre" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'genre',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Nascimento-->
			<div class="col-md-3">
				<p class="title">Década de Nascimento</p>
				<div id="birth-year" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'birth-year',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span class="number"><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Estado civil-->
			<div class="col-md-3">
				<p class="title">Estado Civil</p>
				<div id="marital-status" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'marital-status',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Estilo de vida-->
			<div class="col-md-3">
				<p class="title">Estilo de Vida</p>
				<div id="life-style" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'life-style',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Finalidade-->
			<div class="col-md-3">
				<p class="title">Qual a finalidade</p>
				<div id="type" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'type',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Localização-->
			<div class="col-md-3">
				<p class="title">Localização</p>
				<div id="city" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'city',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Cômodos-->
			<div class="col-md-3">
				<p class="title">Cômodos</p>
				<div id="rooms" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'rooms',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Moradores-->
			<div class="col-md-3">
				<p class="title">Moradores</p>
				<div id="residents" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'residents',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Dormitórios-->
			<div class="col-md-3">
				<p class="title">Dormitórios</p>
				<div id="bedrooms" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'bedrooms',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Suítes-->
			<div class="col-md-3">
				<p class="title">Suítes</p>
				<div id="suites" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'suites',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Vagas de garagem-->
			<div class="col-md-3">
				<p class="title">Vagas de Garagem</p>
				<div id="garage" class="owl-carousel owl-theme">
					<?php 
					$terms = get_terms(array(
						'taxonomy' => 'garage',
						'hide_empty' => false,
					));
					foreach ($terms as $term) { ?>
					<div class="item" data-option="<?php echo $term->slug; ?>">
						<div class="option">
							<div class="box-content">
								<span><?php echo $term->name; ?></span>
							</div>
						</div>
					</div>
					<?php }	?>
				</div>
			</div>

			<!--Submit-->
			<div class="col-md-3">
				<div class="option">
					<div class="box-content green">
						<span id="submitbusca">Combina comigo</span>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div id="result-search">
	<header>
	<h2>Resultado da busca</h2>
	</header>
	<div id="results">
		
	</div>
</div>