<?php
	$current_user = wp_get_current_user();
	$id = get_current_user_id();
	$user = get_userdata($id);
?>
<aside>
	<ul>
		<li><i class="fa fa-user" aria-hidden="true"></i> Olá, <?php echo $user->first_name; ?></li>
	</ul>
	<ul>
		<li><a href="<?php bloginfo('url'); ?>/area-do-investidor/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		<li><a href="<?php bloginfo('url'); ?>/area-do-investidor/meus-dados-investidor/"><i class="fa fa-male" aria-hidden="true"></i> Meus Dados</a></li>
		<li><a href="<?php echo wp_logout_url(get_bloginfo('url').'/admin/'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
	</ul>
</aside>