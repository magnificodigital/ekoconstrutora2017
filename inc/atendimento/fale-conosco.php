<?php $token = get_option('token_rd'); ?>
<section class="central-attendance">
	<div class="container">
		<div class="row">
			<div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="row">
					
					<!--
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="service-form whatsapp-email" data-target="whatsapp">
							<div class="service-form-content">
								<i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp<br />
								<i class="fa fa-envelope" aria-hidden="true"></i> E-mail
							</div>
						</div>
					</div>-->

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="service-form ligamos-voce" data-target="ligaremos">
							<div class="service-form-content">
								<i class="fa fa-phone" aria-hidden="true"></i> Ligaremos<br />
								para você
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="service-form exibir-telefone" data-target="agendarvisita">
							<div class="service-form-content">
								<i class="fa fa-calendar" aria-hidden="true"></i> agendar<br />
								uma visita
							</div>
						</div>
					</div>

					<!--
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="service-form agendar-visita">
							<?php $phone = get_option('phone_icon'); ?>
							<div class="service-form-content" id="trocatelefone" data-telefone="<?php echo $phone; ?>">
								exibir<br />
								o telefone
							</div>
						</div>
					</div>-->
				</div>

				<?php $prefix = "whatsapp_"; ?>
				<?php /*
				<div id="wrapper-whatsapp" class="form-wrapper">
					<form id="FaleConosco-WhatsApp" name="FaleConosco-WhatsApp" class="form" method="post">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<label for="nome">
									<input type="text" name="nome" placeholder="Nome:" class="required" required />
								</label>
								<label for="email">
									<input type="text" name="email" placeholder="E-mail:" class="required" required />
								</label>
								<label for="telefone">
									<input type="text" name="telefone" class="tel" placeholder="Telefone:" />
								</label>
								<label for=">celular">
									<input type="text" name="celular" class="tel" placeholder="Celular:" />
								</label>
								<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
								<?php if (empty($token)): ?>
								<input type="hidden" name="assunto" value="Nova conversão - WhatsApp - <?php bloginfo('name'); ?>">
								<?php endif; ?>
								<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - WhatsApp">
								<div class="resposta"></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-desc">
									<h3 class="title">Dados para contato</h3>
									<p>Atendimento solicitado: <strong>Whatsapp/E-mail</strong>, por favor preencha os campos Telefone e Celular para contato, se desejar preencha apenas as opções obrigatórias.</p>
									<!--<div class="g-recaptcha" data-sitekey="6LeKHCwUAAAAAF5jGonUyFhEnlH0QL_7yvukNQ5v"></div--><br />
									<button type="button">Enviar</button>
									
								</div>
							</div>
						</div>
					</form>
				</div> */ ?>


				<?php $prefix = "ligaremos_"; ?>
				<div id="wrapper-ligaremos" class="form-wrapper">
					<form id="FaleConosco-LigaremosParaVoce" name="FaleConosco-LigaremosParaVoce" class="form" method="post">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<label for="nome">
									<input type="text" name="nome" placeholder="Nome:" class="required" required />
								</label>
								<label for="email">
									<input type="email" name="email" placeholder="E-mail:" class="required" required />
								</label>
								<label for="telefone">
									<input type="text" name="telefone" class="tel" placeholder="Telefone:" />
								</label>
								<label for="celular">
									<input type="text" name="celular" class="tel" placeholder="Celular:" />
								</label>
								<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
								<?php if (empty($token)): ?>
								<input type="hidden" name="assunto" value="Nova conversão - Ligamos para você - <?php bloginfo('name'); ?>">
								<?php endif; ?>
								<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Ligamos para você">
								<div class="resposta"></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3 class="title">Dados para contato</h3>
								<p>Atendimento solicitado: <strong>Ligaremos para você</strong>, por favor preencha os campos Telefone e Celular para contato, se desejar preencha apenas as opções obrigatórias.</p>
								<button type="button">Enviar</button>
								
							</div>
						</div>
					</form>
				</div>

				<?php $prefix = "agendarvisita_"; ?>
				<div id="wrapper-agendarvisita" class="form-wrapper">
					<form id="FaleConosco-AgendarVisita" name="FaleConosco-AgendarVisita" class="form" method="post">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<label for="nome">
									<input type="text" name="nome" placeholder="Nome:" class="required" required />
								</label>
								<label for="email">
									<input type="text" name="email" placeholder="E-mail:" class="required" required />
								</label>
								<label for="telefone">
									<input type="text" name="telefone" class="tel" placeholder="Telefone:" />
								</label>
								<label for="celular">
									<input type="text" name="celular" class="tel" placeholder="Celular:" />
								</label>
								<label for="motivo">
									<select name="motivo" required class="required">
										<option value="" selected disabled>Motivo da Visita</option>
										<option value="Compra de Apartamento">Compra de Apartamento</option>
										<option value="Compra de Sala Comercial">Compra de Sala Comercial</option>
										<option value="Venda seu imóvel">Venda seu imóvel</option>
										<option value="Fornecimento de Material">Fornecimento de Material</option>
									</select>
								</label>
								<label for="data">
									<input type="text" class="datepicker" name="data" placeholder="Data:" c required />
								</label>
								<input type="hidden" id="token_rdstation" name="token_rdstation" value="<?php echo $token; ?>">
								<?php if (empty($token)): ?>
								<input type="hidden" name="assunto" value="Nova conversão - Agendar Visita - <?php bloginfo('name'); ?>">
								<?php endif; ?>
								<input type="hidden" id="identificador" name="identificador" value="Site <?php bloginfo('name'); ?> - Agendar Visita">
								<div class="resposta"></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3 class="title">Dados para contato</h3>
								<p>Atendimento solicitado: <strong>Agendar visita</strong>, por favor preencha os campos Telefone e Celular para contato, se desejar preencha apenas as opções obrigatórias.</p>
								<button type="button">Enviar</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</section>