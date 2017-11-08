$('[data-fancybox]').fancybox({
  loop : false,
  thumbs : {
    showOnStart : true
  }
});

(function($) {
    $.fn.clickToggle = function(func1, func2) {
        var funcs = [func1, func2];
        this.data('toggleclicked', 0);
        this.click(function() {
            var data = $(this).data();
            var tc = data.toggleclicked;
            $.proxy(funcs[tc], this)();
            data.toggleclicked = (tc + 1) % 2;
        });
        return this;
    };
}(jQuery));

$(function() {
	var btnmenu = $('#button-menu-lateral');
	var menu = $('#menu_lateral_wrapper');
	var tempo = 200;

	btnmenu.click(function(){
		menu.fadeIn(tempo,function(){
			$('#menu_lateral_wrapper').addClass('open').removeAttr('style');
			$('#menu-menu_lateral_header').off('click',function(){
				fechaMenu();
			});
		});
	});

	$('#menu_lateral_wrapper .mask').click(function(){
		fechaMenu();
	})

	$('#menu_lateral_wrapper .close-menu i').click(function(){
		fechaMenu();
	});

	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			fechaMenu();
		}
	});

	function fechaMenu () {
		$('#menu_lateral_wrapper').fadeOut(tempo,function(){
			$(this).removeAttr('style').removeClass('open');
		});
	}

	/*menu.on('mouseleave',function(){
		$(this).removeClass('open');
	});*/
});

$(function() {
	var owl = $('#slidehome .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		loop: true,
		center: true,
		autoplay: true,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		nav: true,
		navSpeed: 500,
		dotsSpeed: 500,
		navText: ['<span class="control-left"></span>','<span class="control-right"></span>'],
		dots: true,
	});
});

$(function() {
	var owl = $('.grid-enterprises .owl-carousel');
	owl.owlCarousel({
		mouseDrag: true,
		touchDrag: true,
		items: 3,
		margin: 40,
		loop: false,
		autoplay: true,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		autoplaySpeed: 750,
		nav: false,
		navSpeed: 500,
		dotsSpeed: 200,
		dots: true,
		responsive : {
			0 : {
		        items: 1,
		    },
		    480 : {
		        items: 2,
		    },
		    768 : {
		        items: 3
		    },
		   	1500 : {
		   		items: 4
		   	}
		}
	});
});

$(function() {
	var owl = $('#centraisdevendas .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 3,
		margin: 40,
		loop: false,
		autoplay: true,
		autoplayTimeout: 400,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		nav: false,
		dotsSpeed: 200,
		dots: true,
		responsive : {
			0 : {
		        items: 1,
		    },
		    480 : {
		        items: 2,
		    },
		    /*768 : {
		        items: 3
		    }*/
		}
	});
});

//Busca avançada
$(function() {
	var owl = $('#search-wrapper .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		autoplay: false,
		loop: true,
		nav: true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		dots: false,
	});
});

$(function() {
	var owl = $('#personalize #advantages-slider .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		nav: true,
		navSpeed: 500,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		dotsSpeed: 500,
		dots: true,
	});
});

$(function() {
	var owl = $('#content-quemsomos #advantages-slider .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		nav: true,
		navSpeed: 500,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		dotsSpeed: 500,
		dots: true,
	});
});


$(function() {
	var owl = $('#single-enterprise #open-photo .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		loop: true,
		autoplay: true,
		autoplayTimeout: 000,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		dots: false,
		//dotsSpeed: 500,
		nav: true,
		navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	});
});

$(function() {
	var owl = $('#single-enterprise #plantas .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		loop: true,
		autoplay: true,
		autoplayTimeout: 000,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		dots: true,
		dotsSpeed: 500,
	});
});


//Depoimentos
$(function() {
	var owl = $('#content-quemsomos #depoimentos .owl-carousel');
	owl.owlCarousel({
		mouseDrag: false,
		touchDrag: true,
		items: 1,
		margin: 0,
		loop: true,
		autoplay: true,
		autoplayTimeout: 000,
		autoplayHoverPause: true,
		autoplaySpeed: 1000,
		dots: true,
		dotsSpeed: 500,
	});
});

//Centrais de vendas
$(function(){
	$('#centraisdevendas .exibetelefone').click(function(){
		var telefone = $(this).data('telefone');
		$(this).html(telefone);
	});
});

//Fale conosco
$(function(){
	$('.central-attendance #trocatelefone').click(function(){
		var telefone = $(this).data('telefone');
		$(this).html(telefone);
	});
});

//Seção das categorias dos empreendimentos
$('.cat-open').clickToggle(function() {

	var id = $(this).attr('id');
	$('.row-enterprises').find('.cat-enterprise').removeClass('selected');
	$('.row-enterprises-selected').removeClass('active');
	$(this).addClass('selected').addClass('active');

	var intervalo = window.setInterval(function() {
		element = $('#'+id+'-grid');
	    element.addClass('active');
	    var target = element.offset().top;
	    if ($(window).width() < 769) {
			$.scrollTo(target || 0, 1000);
		}	    
	}, 1000);

	window.setTimeout(function() {
	    clearInterval(intervalo);
	}, 1500);

}, function() {
	$('.row-enterprises').find('.cat-enterprise').addClass('selected');
	$('.row-enterprises-selected').removeClass('active');
});

$('.list-search ul li').click(function(){
	//$(this).find('.options').toogleClass('open');
	$(this).find('.options').slideDown('fast');
});

$('#search-enterprise button').clickToggle(function(){
	target = $(this).data('target');
	target = '#'+target;
	$('#search-advanced').slideDown(750,function(){
		//$.scrollTo(target || 0, 750);
	});
},function(){
	$('#search-advanced').slideUp(750);
});

$('.service-form').click(function(){
	$('.form-wrapper').removeClass('active');
	var target = $(this).data('target');
	target = '#wrapper-'+target;
	$(target).toggleClass('active');
	var toptarget = $(target).offset().top;
	toptarget = toptarget - 200;

	$.scrollTo(toptarget || 0, 500);
});

//Date Picker Bootstrap
$('form .datepicker').datepicker({
    format: "dd/mm/yyyy",
    weekStart: 0,
    todayBtn: true,
    language: "pt-BR",
    multidate: false,
    multidateSeparator: ",",
    keyboardNavigation: false
});

//Ajusta o wp_login 
$(document).ready(function(){
	$('#signcorretores #loginform').addClass('form');
	$('#signcorretores #loginform .login-username input').attr('placeholder','Login:');
	$('#signcorretores #loginform .login-username label').remove();
	$('#signcorretores #loginform .login-password input').attr('placeholder','Senha:');
	$('#signcorretores #loginform .login-password label').remove();
	$('#signcorretores #loginform .login-remember').remove()
});

//faq
$(function(){
	$('#faq ul li').click(function(){
		//$('#faq ul li').removeClass('selected');
		$(this).toggleClass('selected');
		$(this).find('div.dropdown').slideToggle("fast");
	});
});

//sim e não form simule
$(function(){
	var sim = $('#simulefinanciamento_form #rendafamiliarsim');
	var nao = $('#simulefinanciamento_form #rendafamiliarnao');
	var input = $('#simulefinanciamento_form #simulefinanciamento_valorfgts');
	sim.click(function(){
		nao.removeClass('active');
		$(this).addClass('active');
		input.removeAttr('disabled').focus();
	});
	nao.click(function(){
		sim.removeClass('active');
		$(this).addClass('active');
		input.prop('disabled',true);
	});
});

//Primeira caixa onde tem o 360, fotos e videos
$(function(){
	$('#single-enterprise #image-video-360 .controls #photo').click(function(){
		$('#single-enterprise #image-video-360 #open-360').removeClass('active');
		$('#single-enterprise #image-video-360 #open-video').removeClass('active');
		$('#single-enterprise #image-video-360 #open-photo').addClass('active');
		player.pauseVideo();
	});
	$('#single-enterprise #image-video-360 .controls #video').click(function(){
		$('#single-enterprise #image-video-360 #open-360').removeClass('active');
		$('#single-enterprise #image-video-360 #open-video').addClass('active');
		$('#single-enterprise #image-video-360 #open-photo').removeClass('active');
		//player.playVideo();
	});
	$('#single-enterprise #image-video-360 .controls #e-360').click(function(){
		$('#single-enterprise #image-video-360 #open-360').addClass('active');
		$('#single-enterprise #image-video-360 #open-video').removeClass('active');
		$('#single-enterprise #image-video-360 #open-photo').removeClass('active');
		player.pauseVideo();
	});
});

//Scroll na página do personalize e empreendimento
$('#menu-single a').click(function(e){
	var target = this.hash;
	target = $(target);
	var scroll = target.offset().top;
	scroll = scroll - $('#menu-single').height() - 100;
	$.scrollTo(scroll || 0, 500);
	e.preventDefault();
});

$('#content-quemsomos .button-gray').click(function(){
	$('#grid-development').slideDown(1000,function(){
		$.scrollTo(this || 0, 500);
	});
});

//Troca telefone
$(function(){
	var c = 1;
	$('.trocatelefone').on('click touchstart',function(e){
		if (c === 1) {
			$(this).fadeOut('fast',function(){
				$('#footer .tel.line1').html('Telefone:');
				var telefone = $(this).data('telefone');
				$('#footer .tel.line2').html(telefone);
				$(this).fadeIn('fast');
			});
		}
		e.preventDefault();
		c++;
	});
});

//Validação Sign Corretores
$(function(){

	//Zera	
	$('#cadastrocorretores input').focus(function(){
		$(this).removeClass('input-error animated pulse');
		$('#cadastrocorretores .message').html('');
	});

	//Primeira parte
    $('#cadastrocorretores #step1 input').blur(function(){
    	var email = $('#cadastrocorretores #step1 input.email').val();
		if($(this).val() == "") {
			$(this).addClass('input-error');
			$(this).addClass('animated pulse');
			$('#cadastrocorretores #step1 .message').html('Preencha todos os campos');
		} else {
			if (validateEmail(email)) {
				$('#cadastrocorretores button#next').click(function(){
					$('#cadastrocorretores #step1').removeClass('active');
					$('#cadastrocorretores #step2').addClass('active');
					$('.focus').focus();
				});
			} else {
				$('#cadastrocorretores input.email').addClass('input-error animated pulse');
				$('#cadastrocorretores .message').html('Preencha o e-mail corretamente');
			}	
		}
	});

    //Segunda parte
	$('#cadastrocorretores #step2 #back').click(function(){
		$('#cadastrocorretores #step1').addClass('active');
		$('#cadastrocorretores #step2').removeClass('active');
	});

	$('#cadastrocorretores #step2 input').blur(function(){
    	var cpf = $('#cadastrocorretores #step2 input.cpf').val();
    	console.log(cpf);
		if($(this).val() == "") {
			$(this).addClass('input-error animated pulse');
			$('#cadastrocorretores #step2 .message').html('Preencha todos os campos');
		} else {
			if (validateCPF(cpf)) {
				$('#cadastrocorretores button#send').click(function(){
					signcorretor();
				});
				console.log('CPF válido');
			} else {
				console.log('CPF não é válido');
				$('#cadastrocorretores #step2 input.cpf').addClass('input-error animated pulse');
				$('#cadastrocorretores #step2 .message').html('Preencha o CPF corretamente');
			}
		}
	});

});

/*
//Primeira parte
$('#comecar-buscaimovel #comecarbusca').click(function(){
	$('#comecar-buscaimovel .message').html('').removeClass('animated pulse');
	var nome = $('#comecar-buscaimovel #comecarbusca-nome');
	var email = $('#comecar-buscaimovel #comecarbusca-email');
	if (nome.val() != "" && email.val() != "") {
		if (validateEmail(email.val())) {
			$('#search-wrapper').fadeIn();
		} else {
			$('#comecar-buscaimovel .message').html('Preencha o e-mail corretamente');
		}
	} else {
		$('#comecar-buscaimovel .message').html('Preencha todos os campos').addClass('animated shake');
	}
});*/

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

//Scroll reveal
window.sr = ScrollReveal({
	origin: 'bottom',
	distance: '20px',
	duration: 1000,
	delay: 0,
	rotate: { x: 0, y: 0, z: 0 },
	opacity: 0,
	scale: 1,
	container: window.document.documentElement,
	mobile: false,
	reset: false,
	useDelay: 'once',
	viewFactor: 0.2,
	viewOffset: { top: 0, right: 0, bottom: 0, left: 0 },
});
//sr.reveal('#grid-development .development-content');

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function validateCPF(cpf) {  
    cpf = cpf.replace(/[^\d]+/g,'');    
    if(cpf == '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length != 11 || 
        cpf == "00000000000" || 
        cpf == "11111111111" || 
        cpf == "22222222222" || 
        cpf == "33333333333" || 
        cpf == "44444444444" || 
        cpf == "55555555555" || 
        cpf == "66666666666" || 
        cpf == "77777777777" || 
        cpf == "88888888888" || 
        cpf == "99999999999")
            return false;       
    // Valida 1o digito 
    add = 0;    
    for (i=0; i < 9; i ++)       
        add += parseInt(cpf.charAt(i)) * (10 - i);  
        rev = 11 - (add % 11);  
        if (rev == 10 || rev == 11)     
            rev = 0;    
        if (rev != parseInt(cpf.charAt(9)))     
            return false;       
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++)        
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    rev = 11 - (add % 11);  
    if (rev == 10 || rev == 11) 
        rev = 0;    
    if (rev != parseInt(cpf.charAt(10)))
        return false;       
    return true;   
}

var SPMaskBehavior = function (val) {
	return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
spOptions = {
	onKeyPress: function(val, e, field, options) {
		field.mask(SPMaskBehavior.apply({}, arguments), options);
	}
};

/*
$(document).ready(function() {
     $(':button').prop('disabled', true);
     $('input').keyup(function() {
        if($(this).val() != '') {
           $(':input[type="submit"]').prop('disabled', false);
        }
     });
 });*/

$('input.tel').mask(SPMaskBehavior, spOptions);
$('input.cpf').mask('999.999.999-99');
$('input.cnpj').mask('99.999.999/9999-99');
$('input.cep').mask('99999-999');

function validateRequired(required) {
	var n = required.length;
	var c = 0;
	required.forEach(function(v){
		if (v.value != "") {
			c++;
		}
	});
	if (c === n) {
		return true;
	} else {
		return false;
	}
}

function validateTel(tel) {
	//var n  = tel.length;
	var c = 0;
	tel.forEach(function(v){
		if (v.value != "") {
			c++;
		}
	});
	if (c >= 1) {
		return true;
	} else {
		return false;
	}
}


/* Conversão */
$(function(){
	var form = $('form.form');
	var btn = form.find('button');

	btn.click(function(){

		var form = $(this).parents('form:first');
		var inputs = form.find(':input');
		var dados = inputs.serializeArray();
		var dados2 = inputs.serialize();
		var text = $(this).val(); //Valor que estava no button
		form.find('.required').removeClass('required-warning');
		var id = form.attr('id');	

		var email, token = "";

		//Aqui vai descobrir o e-mail
		dados.forEach(function(element) {
			if (element.name === "email") {
				email = element.value;
			} else if (element.name === "token_rdstation") {
				token = element.value;
			}
		});

		form.find('.resposta').html('').removeClass('animated shake');
		//$(this).html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');

		/*Validar campos requeridos*/
		var required = form.find('.required').serializeArray();
		var tel = form.find('.tel').serializeArray();

		/*Valida campos*/
		if (!validateRequired(required)) {
			form.find('.resposta').html('Preencha todos os campos obrigatórios').addClass('animated shake');
			//form.find('.required').addClass('required-warning');
			return false;
		}

		/*Validar e-mail*/
		if (!validateEmail(email) ) {
			form.find('.resposta').html('Preencha o e-mail corretamente').addClass('animated shake');
			return false;
		}

		/*Valida telefones*/
		if (!validateTel(tel) && tel.length != 0) {
			form.find('.resposta').html('Preencha pelo menos um telefone').addClass('animated shake');
			return false;
		}

		if (id == "buscaavancada") {
			$('#search-wrapper').fadeIn();
		}

		$(this).remove();
		inputs.val('');

		if (token != "") { /*Se tiver token, vai pro RD*/
			RdIntegration.post(dados);
			form.find('.resposta').html('Obrigado pelo seu cadastro');
		} else {  /*Senao, envia um email*/
			enviaemail(dados2);
		}

	});
	
});

