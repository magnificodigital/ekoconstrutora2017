</main>
<footer id="footer">
	<div id="first-row">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="row no-margin">
						<div class="col-sm-3 no-padding">
							<?php $phone = get_option('phone_icon'); ?>
							<a href="#" class="trocatelefone" data-telefone="<?php echo $phone; ?>"><div class="phone-img"></div></a>
						</div>
						<div class="col-sm-9 hidden-xs no-padding">
							<a href="#" class="trocatelefone" data-telefone="<?php echo $phone; ?>">
								<span class="tel line1">Para exibir</span><br />
								<span class="tel line2">Clique aqui</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="row no-margin">
						<div class="col-sm-3 no-padding">
							<a href="<?php bloginfo('url'); ?>/central-de-atendimento/fale-conosco/"><div class="call-img"></div></a>
						</div>
						<div class="col-sm-9 hidden-xs no-padding">
							<a href="<?php bloginfo('url'); ?>/central-de-atendimento/fale-conosco/">
								<span class="line1">Ligamos</span><br />
								<span class="line2">para você</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="row no-margin">
						<div class="col-sm-4 no-padding">
							<a href="<?php bloginfo('url'); ?>/central-de-atendimento/fale-conosco/"><div class="mail-img"></div></a>
						</div>
						<div class="col-sm-8 hidden-xs no-padding">
							<a href="<?php bloginfo('url'); ?>/central-de-atendimento/fale-conosco/">
								<span class="line1">Atendimento</span><br />
								<span class="line2">por e-mail</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3">
					<div class="row no-margin">
						<div class="col-sm-3 no-padding">
							<a href="https://api.whatsapp.com/send?phone=5511940082635&text="><div class="whatsapp-img"></div></a>
						</div>
						<div class="col-sm-9 hidden-xs no-padding">
							<a href="https://api.whatsapp.com/send?phone=5511940082635&text=" target="_blank">
								<span class="line1">Atendimento</span><br />
								<span class="line2">por WhatsApp</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="second-row">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<?php
                        $url_face = get_option('facebook_icon');
                        $url_insta = get_option('instagram_icon');
                        $url_youtube = get_option('youtube_icon');
                        $endereco = get_option('address_icon');
                    ?>
                    <?php if (isset($url_face) && !empty($url_face)) : ?>
					<a href="<?php echo $url_face; ?>" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<?php endif; ?>
					<?php if (isset($url_insta) && !empty($url_insta)) : ?>
					<a href="<?php echo $url_insta; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<?php endif; ?>
					<?php if (isset($url_youtube) && !empty($url_youtube)) : ?>
					<a href="<?php echo $url_youtube; ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					<?php endif; ?>
				</div>
				<div class="col-md-1 col-sm-1 hidden-xs">
					<div class="icon-map"></div>
				</div>
				<div class="col-md-8 col-sm-8">
					<?php if (isset($endereco) && !empty($endereco)) : ?>				
					<div class="address"><?php echo $endereco; ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div id="third-row">
		<div class="container">
			<?php if (!is_home()) : ?>
			<?php get_template_part('inc/breadcrumbs'); ?>
			<?php endif; ?>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
					<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/images/eko_logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<ul>
						<li><a href="<?php bloginfo('url') ?>/quem-somos/">EKO Construtora</a></li>
						<li><a href="<?php bloginfo('url') ?>/central-de-atendimento/fale-conosco/">Agende uma visita</a></li>
						<li><a href="<?php bloginfo('url') ?>/central-de-atendimento/">Central de Atendimento</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<ul>
						<li><a href="<?php bloginfo('url') ?>/investidores/">Investidores</a></li>
						<li><a href="<?php bloginfo('url') ?>/portal-do-cliente/">Portal do cliente</a></li>
						<li><a href="<?php bloginfo('url') ?>/empreendimentos/">Todos os Imóveis</a></li>
					</ul>
				</div>
				<!--<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<ul>
						<li><a href="#">Em construção</a></li>
						<li><a href="#">Lançamento</a></li>
						<li><a href="#">Prontos para morar</a></li>
					</ul>
				</div>-->
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<ul>
						<li><a href="<?php bloginfo('url') ?>/central-de-atendimento/corretores-e-imobiliarias/">Corretores e imobiliárias</a></li>
						<li><a href="<?php bloginfo('url') ?>/blog/">Blog</a></li>
						<li><a href="http://ekoconstrutora.com.br/mapa/" target="_blank">Mapa</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap-datepicker.pt-BR.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scrollreveal.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<?php else : ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/scripts.min.js"></script>
<?php endif; ?>


<script type ='text/javascript' src="https://d335luupugsy2.cloudfront.net/js/integration/stable/rd-js-integration.min.js"></script>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/1f43a906-f1a1-427f-bb5d-30ea68ae49f5-loader.js"></script>


<?php if (is_singular('imovel')) : //Sidebar fixa ?>
<script type="text/javascript">
$(function(){
	var aside = $('#single-enterprise aside').offset().top;
	var aside = aside - ($('#header').height() + 0);
	var element = $('#single-enterprise aside .content-wrapper');
	/*var margin = $('#posts').css('margin-bottom');*/
	$(window).scroll(function(){
		if ($(window).width() > 990) {
			var welement = $('#single-enterprise aside .content-wrapper').width();
			var str = $('#footer').offset().top;
			str = str.toString();
			str = str.substring(0,(str.length - 5));

			/*margin = margin.toString();
			margin = margin.substring(0,(margin.length - 2));
			margin = parseInt(margin);*/

			var topo = $('#single-enterprise').outerHeight() - element.outerHeight() - aside;
			alturawindow = window.innerHeight;
			scrolltop = $(this).scrollTop();
			scrolltop = scrolltop + alturawindow;

			if ($(this).scrollTop() > aside) {

				if (scrolltop >= str) {
					element.css('width', welement);
					element.css('position','absolute');
					element.css('top',topo);

				} else {
					element.removeAttr('style');
					element.css('width', welement);
					element.addClass('fixed');
				}

			} else {
				element.removeClass('fixed');
				element.removeAttr('style');
			}

		} else {
			element.removeClass('fixed');
			element.removeAttr('style');
		}	
	});	
});

$(function(){
	var header = $('#menu-single');
	var offset = $('#nav-single-wrapper').offset().top;
	$(window).scroll(function(){
		if ($(this).scrollTop() > offset) { 
			header.addClass('fixed');
		} else {
			header.removeClass('fixed');
		}
	});
});
</script>
<?php endif; ?>
<?php if (is_page('quem-somos') || is_page('personalize') || is_singular('imovel')) : ?>
<script type="text/javascript">
function scrollBanner() {
	var scrollPos;
	var headerText = document.querySelector('#thumbnail-wrapper, #quem-somos, #personalize #video');
	scrollPos = window.scrollY;

	if (scrollPos <= 400 && !isMobile.any()) {
		headerText.style.backgroundPosition =  "center "+-scrollPos/3+"px";
		/*headerText.style.transform =  "translateY(" + (-scrollPos/3) +"px" + ")";
		headerText.style.opacity = 1 - (scrollPos/400);*/
	}
}
window.addEventListener('scroll', scrollBanner);
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
<?php $html = ob_get_clean ();
echo preg_replace('/\s+/', ' ', $html); ?>