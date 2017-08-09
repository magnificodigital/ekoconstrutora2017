<?php

	$prefix = "dadoscorretor_";
	$current_user = wp_get_current_user();
	$id = get_current_user_id();
	$user = get_userdata($id);

?>
<div class="row">
	<form id="<?php echo $prefix; ?>form" name="<?php echo $prefix; ?>form" method="post" class="form">
		<div class="col-md-6 col-sm-6 col-xs-12">
			<label for="<?php echo $prefix; ?>nome">
				<input type="text" name="<?php echo $prefix; ?>nome" placeholder="Nome:" value="<?php echo $user->first_name; ?>">
			</label><br />
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<label for="<?php echo $prefix; ?>sobrenome">
				<input type="text" name="<?php echo $prefix; ?>sobrenome" placeholder="Sobrenome:" value="<?php echo $user->last_name; ?>">
			</label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<label for="<?php echo $prefix; ?>email">
				<input type="text" name="<?php echo $prefix; ?>email" placeholder="E-mail:" value="<?php echo $user->user_email; ?>">
			</label>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<label for="<?php echo $prefix; ?>telefone">
				<input type="text" name="<?php echo $prefix; ?>telefone" placeholder="Telefone:" value="<?php the_field('telefone', 'user_'.$id); ?>" class="tel">
			</label>
		</div>
		<div class="col-sm-6 col-xs-12">
			<button id="salvadados" type="button">Salvar Dados</button>
			<div class="message"></div>
		</div>
		<input type="hidden" name="<?php echo $prefix ?>id" value="<?php echo get_current_user_id(); ?>">
	</form>
	
</div>