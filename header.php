<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.png">

<title><?php wp_title(); ?></title>	

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.fancybox.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap-datepicker.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/main.css">
<?php else : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/assets/style.min.css">

<!-- Início do script Omnize --> 
<script type="text/javascript">document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:3666});}},false);</script> 
<!-- Fim do script Omnize -->
<?php endif; ?>
<?php wp_head(); ?>

<!--
<script src='https://www.google.com/recaptcha/api.js'></script>-->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1107754155960776');
fbq('track', "PageView");
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1107754155960776&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!--Google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47651710-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47651710-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-47651710-1');
</script>


</head>

<body <?php body_class(); ?>>

<!--Facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=250161018839798";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--Header-->
<header id="header">
	<div class="container">
		<div class="header-wrapper">
			<div class="row">
				<div class="col-md-1 col-sm-1 col-xs-4">
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="logo-site">
						<img src="<?php bloginfo('template_url') ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>" />
					</a>
				</div>
				<div class="col-md-9 col-sm-9">
					<div class="menu-topo_header">
						<?php
						$args = array(
							'menu' => 'topo_header',
							'theme_location' => 'topo_header',
						);
						wp_nav_menu($args);
						?>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-8 block-menu-lateral">
					<button type="button" id="button-menu-lateral"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
				</div>
			</div>
		</div>
	</div>
</header>
<div id="menu_lateral_wrapper">
	<div class="mask"></div>
	<div id="menu-menu_lateral_header">
		<div class="close-menu">
			Menu <i class="fa fa-close pull-right" aria-hidden="true"></i>
		</div>
		<?php 
			if ( is_user_logged_in() ) {
				$user_id = get_current_user_id();
				$user_meta = get_userdata($user_id);
				$user_roles = $user_meta->roles;
				echo '<ul class="logged">';
				echo '<li>Olá, '.$user_meta->first_name.'</li>';
				foreach ($user_roles as $role) {
					//Evita que investidor e corretor acessem paineis errados
					if ($role == 'corretor') {
						echo '<li><a href="'.get_bloginfo('url').'/area-do-corretor/"><i class="fa fa-home" aria-hidden="true"></i> Acesse o painel aqui</a></li>';
					} elseif ($role == 'investidor') {
						echo '<li><a href="'.get_bloginfo('url').'/area-do-investidor/"><i class="fa fa-home" aria-hidden="true"></i> Acesse o painel aqui</a></li>';
					}
				}
				echo '<li><a href="'.wp_logout_url(get_permalink()).'/admin/"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>';
				echo '</ul>';
			}

			$args2 = array(
				'menu' => 'menu_lateral_header',
				'theme_location' => 'menu_lateral_header',
			);
			wp_nav_menu($args2);
		?>
	</div>
</div>
<main id="wrapper-content">