<section id="newsletter-home">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-md-1 hidden-sm hidden-xs"></div>
					<div class="col-md-3 hidden-sm hidden-xs">
						<div class="mail-img"></div>
					</div>
					<div class="col-md-7 col-sm-12">
						<p class="entry">Quer Receber nossas novidades?</p>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<?php $token = get_option('token_rd'); ?>
				<form id="form-home_newsletter" class="form" method="post">
					<input type="text" name="nome" placeholder="NOME" class="required" required />
					<input type="text" name="email" placeholder="E-MAIL" class="required" required />
					<?php if (empty($token)) : ?>
					<input type="hidden" name="assunto" value="Nova conversão - Newsletter - <?php bloginfo('name'); ?>">
					<?php endif; ?>
					<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
					<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Newsletter">
					<button type="button">Assinar</button>
					<div class="resposta"></div>
				</form>
			</div>
		</div>
	</div>
</section>