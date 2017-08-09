<?php $prefix = "trabalheconosco_"; ?>

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
							<input type="text" name="tel" class="telefone" placeholder="Telefone:" />
						</label>
						<label for="celular">
							<input type="text" name="celular" class="tel" placeholder="Celular:" />
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-12">
						<label for="cep">
							<input type="text" name="cep" class="cep" placeholder="CEP:" class="required" />
						</label>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<label for=">num">
							<input type="text" name="num" placeholder="Nº:" />
						</label>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<label for="complemento">
							<input type="text" name="complemento" placeholder="Complemento:" />
						</label>
					</div>

					<div class="col-xs-12">
						<label for="endereco">
							<input type="text" name="endereco" placeholder="Endereço:" />
						</label>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<label for="estado">
							<input type="text" name="estado" placeholder="Estado:" class="required"  />
						</label>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<label for="cidade">
							<input type="text" name="cidade" placeholder="Cidade:" class="required"  />
						</label>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<label for="bairro">
							<input type="text" name="bairro" placeholder="Bairro:" />
						</label>
					</div>

					<div class="col-md-6 col-sm-12 col-xs-12">
						<label for="areainteresse">
							<input type="text" name="areainteresse" placeholder="Área de interesse:"d />
						</label>
					</div>

					<div class="col-xs-12">
						<label for="descricao">
							<textarea name="descricao" placeholder="Descrição:" required></textarea>
						</label>
						<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
						<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Trabalhe Conosco">
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