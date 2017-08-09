/*Busca avançada*/
jQuery(document).ready(function(){
	jQuery("#formsearchadvanced #submit").click(function(){
		jQuery('#entraposts').html('');
		jQuery(this).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>').prop('disabled',true);
		var form = $('#formsearchadvanced').serialize();
		var dados = {
			'action': 'home_busca_avancada',
			'dados' : form
		};
		$.post(ajax_object.ajax_url, dados, function(resposta) {
			jQuery('#entraposts').html(resposta);
			jQuery('#formsearchadvanced #submit').html('<i class="fa fa-search" aria-hidden="true"></i> Buscar').prop('disabled',false);
		}, 'html');
	});
});

function signcorretor() {
	jQuery('#cadastrocorretores #send').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>').prop('disabled',true);
	var form = jQuery('#cadastrocorretores').serialize();
	console.log(form);
	var dados = {
		'action': 'registracorretor',
		'dados' : form
	};
	jQuery.post(ajax_object.ajax_url, dados, function(resposta) {
		if (resposta.status == true) {
			jQuery('#cadastrocorretores #send').remove();
		} else {
			jQuery('#cadastrocorretores #send').html('Enviar').prop('disabled',false);
		}
		jQuery('#cadastrocorretores #step2 .message').html(resposta.mensagem);
	}, 'json');
}

jQuery(document).ready(function(){
	jQuery('#dadoscorretor_form button#salvadados').click(function(){
		jQuery(this).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>').prop('disabled',true);
		var form = jQuery('#dadoscorretor_form').serialize();
		var dados = {
			'action': 'dados_corretor',
			'dados' : form
		}
		jQuery.post(ajax_object.ajax_url, dados, function(a) {
			if (a.user == true) {
				jQuery('#dadoscorretor_form .message').html(a.mensagem);
				jQuery('#dadoscorretor_form button#salvadados').html('Salvar Dados').prop('disabled',false);
			}
		},'json');
	});
});

jQuery(document).ready(function(){
	jQuery('#search-wrapper #submitbusca').click(function(){
		
		jQuery(this).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>').prop('disabled',true);
		jQuery('#results').html('');

		var genre = jQuery('#search-wrapper #genre .active .item').data('option');
		var decada = jQuery('#search-wrapper #birth-year .active .item').data('option');
		var estadocivil = jQuery('#search-wrapper #marital-status .active .item').data('option');
		var estilovida = jQuery('#search-wrapper #life-style .active .item').data('option');
		var finalidade = jQuery('#search-wrapper #type .active .item').data('option');
		var localizacao = jQuery('#search-wrapper #city .active .item').data('option');
		var comodos = jQuery('#search-wrapper #rooms .active .item').data('option');
		var moradores = jQuery('#search-wrapper #residents .active .item').data('option');
		var dormitorios = jQuery('#search-wrapper #bedrooms .active .item').data('option');
		var suites = jQuery('#search-wrapper #suites .active .item').data('option');
		var garagem = jQuery('#search-wrapper #garage .active .item').data('option');

		var data = 'genre='+genre+'&birth-year='+decada+'&marital-status='+estadocivil+'&life-style='+estilovida+'&type='+finalidade+'&city='+localizacao+'&rooms='+comodos+'&residents='+moradores+'&bedrooms='+dormitorios+'&suites='+suites+'&garage='+garagem+'';

		var form = jQuery('#dadoscorretor_form').serialize();
		var dados = {
			'action': 'busca_inteligente',
			'dados' : data
		}
		jQuery.post(ajax_object.ajax_url, dados, function(resposta) {
			jQuery('#results').html(resposta);
			jQuery('#search-wrapper #submitbusca').html('Combina Comigo');
			jQuery('#result-search').fadeIn();
		},'html');
	});
});