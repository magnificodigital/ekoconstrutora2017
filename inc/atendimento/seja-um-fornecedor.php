<?php $prefix = "sejaumfornecedor_"; ?>

<section class="central-attendance">
	<div class="container">
		<div class="row">
			<form name="<?php echo $prefix; ?>form" class="form" method="post">
			<div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">				
				
				<div class="row">
					<div class="col-xs-12">
						<label for="nome">
							<input type="text" name="nome" placeholder="Nome:" class="required" />
						</label>
						<label for="email">
							<input type="text" name="email" placeholder="E-mail:" class="required" />
						</label>
						<label for="telefone">
							<input type="text" name="telefone" class="tel" placeholder="Telefone:" />
						</label>
						<label for="celular">
							<input type="text" name="celular" class="tel" placeholder="Celular:" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<label for="<?php echo $prefix; ?>cnpj">
							<input type="text" name="cnpj" placeholder="CNPJ:" required class="cnpj required" />
						</label>
					</div>
					<div class="col-sm-6 col-xs-12">
						<label for="empresa">
							<input type="text" name="empresa" placeholder="Empresa:" class="required" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label for="cargo">
							<input type="text" name="cargo" placeholder="Cargo:" class="required" />
						</label>
						<label for="produto">
							<input type="text" name="produto" placeholder="Produto/Serviço:" class="required" />
						</label>
						<label for="mensagem">
							<textarea name="mensagem" placeholder="Mensagem:" class="required"></textarea>
						</label>
						<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
						<?php if (empty($token)): ?>
						<input type="hidden" name="assunto" value="Nova conversão - Seja um Fornecedor - <?php bloginfo('name'); ?>">
						<?php endif; ?>
						<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Seja um Fornecedor">
						<div class="resposta"></div>
					</div>
				</div>		

			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="form-desc">
					<h3 class="title">Dados para contato</h3>
					<p>Para que nossa equipe entre em contato por favor preencha os campos ao lado, se desejar preencha apenas os campos obrigatórios.</p>
					<button type="button">Enviar</button>
				</div>
			</div>

			</form>
		</div>
	</div>
</section>