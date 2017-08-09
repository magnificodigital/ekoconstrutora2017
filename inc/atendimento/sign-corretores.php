<section id="signcorretores">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 border-right">
				<div class="formWrapper">
					<h3>Cadastre-se</h3>
					<p>Envie a sua mensagem e faça parte de nossa equipe de vendas.</p><br />

					<?php $prefix = "cadastrocorretor_"; ?>

					<form class="form" name="cadastrocorretores" id="cadastrocorretores" action="" method="post">
						<div id="step1" class="active">						
							<label for="<?php echo $prefix; ?>nome">
								<input type="text" name="<?php echo $prefix; ?>nome" placeholder="Nome:">
							</label>
							<!--
							<label for="<?php echo $prefix; ?>sobrenome">
								<input type="text" name="<?php echo $prefix; ?>sobrenome" placeholder="Sobrenome:">
							</label>-->
							<label for="<?php echo $prefix; ?>email">
								<input type="text" class="email" name="<?php echo $prefix; ?>email" placeholder="E-mail:">
							</label>
							<div class="message"></div>
							<button type="button" id="next">Próximo passo</button>
						</div>
						<div id="step2">
							<label for="<?php echo $prefix; ?>cpf">
								<input type="text" name="<?php echo $prefix; ?>cpf" placeholder="CPF:" class="focus cpf">
							</label>
							<!--
							<label for="<?php echo $prefix; ?>sobrenome">
								<input type="text" name="<?php echo $prefix; ?>sobrenome" placeholder="Oi:">
							</label>-->
							<label for="<?php echo $prefix; ?>telefone">
								<input type="text" name="<?php echo $prefix; ?>telefone" placeholder="Telefone:" class="tel">
							</label>
							<button type="button" id="send">Enviar</button>
							<span id="back">voltar</span>	
							<div class="message"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="formWrapper">
					<?php if (!is_user_logged_in()) : ?>
					<h3>Entrar</h3>
					<p>Entre e tenha acesso a conteúdos exclusivos para aumentar as suas vendas.</p><br />
					<?php
						$args = array(
							'redirect' => get_bloginfo('url').'/admin/',
							'remember' => false,
						);
					?>
					<?php wp_login_form($args); ?>
					<?php else :

					$user_id = get_current_user_id();
					$user_meta = get_userdata($user_id);
					$user_roles = $user_meta->roles;

					foreach ($user_roles as $role) {
						if ($role == 'corretor') {
							$url = get_bloginfo('url').'/area-do-corretor/';
						} elseif ($role == 'investidor') {
							$url = get_bloginfo('url').'/area-do-investidor/';
						} else {
							$url = get_bloginfo('url').'/admin';
						}
					}

					?>
						<h3 class="login">Você já está logado</h3>
						<p><a href="<?php echo $url; ?>"><i class="fa fa-home" aria-hidden="true"></i> Clique aqui para ir ao painel</a></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>