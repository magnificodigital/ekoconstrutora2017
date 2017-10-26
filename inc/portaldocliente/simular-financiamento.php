<?php $prefix = "simulefinanciamento_"; ?>

<section class="central-attendance">
	<div class="container">
		<div class="row">
			<form id="<?php echo $prefix; ?>form" name="<?php echo $prefix; ?>form" class="form" method="post">
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
						<label for="rendafamiliar">
							<input type="text" name="rendafamiliar" placeholder="Renda Familiar:" />
						</label>
						<label for="rendafamiliar">
							<p>Possui FGTS: Trabalhei por mais de 3 anos sob o regime de FGTS.</p>
							<span id="rendafamiliarsim" class="option">Sim</span>
							<span id="rendafamiliarnao" class="option active">Não</span>
						</label>
						<label for="valorfgts">
							<input type="text" name="valorfgts" id="<?php echo $prefix; ?>valorfgts" placeholder="Valor do FGTS:" required disabled />
						</label>
						<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
						<?php if (empty($token)): ?>
						<input type="hidden" name="assunto" value="Nova conversão - Simule seu Financiamento - <?php bloginfo('name'); ?>">
						<?php endif; ?>
						<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Simular Financiamento">
						<div class="resposta"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="form-desc">
					<h3 class="title">Dados para Simulação</h3>
					<p>Para fazer a simulação, por favor preencha os campos abaixo. Se desejar, preencha apenas as opções obrigatórias.</p>
					<button type="button">Simule agora</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</section>