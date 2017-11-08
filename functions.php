<?php 

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
	return 15; //Nova quantidade de caracteres do excerpt
}

register_nav_menus( array(
	'topo_header' => 'Topo Cabeçalho',
	'menu_lateral_header' => 'Menu Lateral Cabeçalho',
	'footer_menu' => 'Menu Rodapé',
) );

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Sidebar', 'eko2017' ),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="box-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
    ) );
}

// Mover os scripts para o footer
function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function post_type_imovel() {
	register_post_type('imovel',
		array(
			'labels' => array(
				'name' => __('Imóveis'),
				'singular_name' => __('Imóvel'),
				'menu_name' => 'Imóveis',
				'all_items' => 'Todos os Imóveis'
			),
		'public' => true,
		'rewrite' => array('slug' => 'imovel', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-building'
		)
	);

	register_post_type('bairro',
		array(
			'labels' => array(
				'name' => __('Bairros'),
				'singular_name' => __('Bairro'),
				'menu_name' => 'Bairros',
				'all_items' => 'Todos os Bairros'
			),
		'public' => true,
		'rewrite' => array('slug' => 'bairro', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-location-alt'
		)
	);

	register_post_type('faq',
		array(
			'labels' => array(
				'name' => __('Perguntas Frequentes'),
				'singular_name' => __('Perguntas Frequentes'),
				'menu_name' => 'Perguntas Frequentes',
				'all_items' => 'Todos as perguntas'
			),
		'public' => true,
		'rewrite' => array('slug' => 'perguntas-frequentes', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title', 'editor'),
		'menu_icon' => 'dashicons-format-chat'
		)
	);

	register_post_type('vendas',
		array(
			'labels' => array(
				'name' => __('Vendas'),
				'singular_name' => __('Vendas'),
				'menu_name' => 'Últimas Vendas',
				'all_items' => 'Todas as vendas'
			),
		'public' => true,
		'rewrite' => array('slug' => 'venda', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title'),
		'menu_icon' => 'dashicons-chart-bar'
		)
	);

	register_post_type('campanha',
		array(
			'labels' => array(
				'name' => __('Campanhas em Destaque'),
				'singular_name' => __('Campanhas em Destaque'),
				'menu_name' => 'Campanhas em Destaque',
				'all_items' => 'Todas as campanhas'
			),
		'public' => true,
		'rewrite' => array('slug' => 'campanha', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title','editor','thumbnail'),
		'menu_icon' => 'dashicons-megaphone',
		)
	);

	register_post_type('material-corretor',
		array(
			'labels' => array(
				'name' => __('Materiais Corretor'),
				'singular_name' => __('Materiais Corretor'),
				'menu_name' => 'Materiais Corretor',
				'all_items' => 'Todas os materiais'
			),
		'public' => true,
		'rewrite' => array('slug' => 'material-corretor', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title','editor'),
		'menu_icon' => 'dashicons-groups',
		)
	);

	register_post_type('material-investidor',
		array(
			'labels' => array(
				'name' => __('Materiais Investidor'),
				'singular_name' => __('Materiais Investidor'),
				'menu_name' => 'Materiais Investidor',
				'all_items' => 'Todas os materiais'
			),
		'public' => true,
		'rewrite' => array('slug' => 'material-investidor', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title','editor'),
		'menu_icon' => 'dashicons-businessman',
		)
	);

	register_post_type('banner',
		array(
			'labels' => array(
				'name' => __('Banners'),
				'singular_name' => __('Banner'),
				'menu_name' => 'Banners',
				'all_items' => 'Todas os banners'
			),
		'public' => true,
		'rewrite' => array('slug' => 'banner', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title','editor'),
		'menu_icon' => 'dashicons-format-image',
		'menu_position' => 5
		)
	);

	register_post_type('centrais-vendas',
		array(
			'labels' => array(
				'name' => __('Centrais de Vendas'),
				'singular_name' => __('Centrais de Vendas'),
				'menu_name' => 'Centrais de Vendas',
				'all_items' => 'Todas as centrais'
			),
		'public' => true,
		'rewrite' => array('slug' => 'centrais-vendas', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title'),
		'menu_icon' => 'dashicons-location',
		)
	);

	register_post_type('depoimentos',
		array(
			'labels' => array(
				'name' => __('Depoimentos'),
				'singular_name' => __('Depoimentos'),
				'menu_name' => 'Depoimentos',
				'all_items' => 'Todos os depoimentos'
			),
		'public' => true,
		'rewrite' => array('slug' => 'depoimentos', 'with_front' => false),
		'has_archive' => false,		 
		'supports' => array('title','editor'),
		'menu_icon' => 'dashicons-format-quote',
		)
	);

	flush_rewrite_rules();

}

function registra_taxonomias() {

	//Tipo do Imóvel
   	register_taxonomy(  
	'type',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Tipo do imóvel',  
		'query_var' => true,
		'rewrite' => array('slug' => 'type', 'with_front' => false)  
		)  	
	);

	//Dormitórios
	register_taxonomy(  
	'bedrooms',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Dormitórios',  
		'query_var' => true,
		'rewrite' => array('slug' => 'bedrooms', 'with_front' => false)  
		)  	
	);

	//Suítes
	register_taxonomy(  
	'suites',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Suítes',  
		'query_var' => true,
		'rewrite' => array('slug' => 'suites', 'with_front' => false)  
		)  	
	);

	//Vagas de Garagem
	register_taxonomy(  
	'garage',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Vagas de Garagem',  
		'query_var' => true,
		'rewrite' => array('slug' => 'garage', 'with_front' => false)  
		)  	
	);

	//Moradores
	register_taxonomy(  
	'residents',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Moradores',  
		'query_var' => true,
		'rewrite' => array('slug' => 'residents', 'with_front' => false)  
		)  	
	);


	//Cômodos
	register_taxonomy(  
	'rooms',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Cômodos',  
		'query_var' => true,
		'rewrite' => array('slug' => 'rooms', 'with_front' => false)  
		)  	
	);

	//Cidade
	register_taxonomy(  
	'city',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Cidade',  
		'query_var' => true,
		'rewrite' => array('slug' => 'city', 'with_front' => false)  
		)  	
	);

	//Estado
	register_taxonomy(  
	'state',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Estado',  
		'query_var' => true,
		'rewrite' => array('slug' => 'state', 'with_front' => false)  
		)  	
	);

	//Metragem
	register_taxonomy(  
	'metreage',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Metragem',  
		'query_var' => true,
		'rewrite' => array('slug' => 'metreage', 'with_front' => false)  
		)  	
	);

	//Estilo de Vida
	register_taxonomy(  
	'life-style',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Estilo de Vida',  
		'query_var' => true,
		'rewrite' => array('slug' => 'life-style', 'with_front' => false)  
		)  	
	);

	//Década de Nascimento
	register_taxonomy(  
	'birth-year',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Década de Nascimento',  
		'query_var' => true,
		'rewrite' => array('slug' => 'birth-year', 'with_front' => false)  
		)  	
	);

	//Estado Civil
	register_taxonomy(  
	'marital-status',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Estado Civil',  
		'query_var' => true,
		'rewrite' => array('slug' => 'marital-status', 'with_front' => false)  
		)  	
	);

	//Banheiros
	register_taxonomy(  
	'bathroom',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Banheiros',  
		'query_var' => true,
		'rewrite' => array('slug' => 'bathroom', 'with_front' => false)  
		)  	
	);

	//Valor
	register_taxonomy(  
		'price',  
		'imovel',  
		array(  
			'hierarchical' => true,  
			'label' => 'Valor',  
			'query_var' => true,
			'rewrite' => array('slug' => 'price', 'with_front' => false)  
		)  
	);

	//Gênero
	register_taxonomy(  
	'genre',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Gênero',  
		'query_var' => true,
		'rewrite' => array('slug' => 'genre', 'with_front' => false)  
		)  	
	);

	//Status da Obra
	register_taxonomy(  
	'status',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Status da obra',  
		'query_var' => true,
		'rewrite' => array('slug' => 'status', 'with_front' => false)  
		)  	
	);

	register_taxonomy(  
	'adicionais',  
	'imovel',  
	array(  
		'hierarchical' => true,  
		'label' => 'Adicionais',  
		'query_var' => true,
		'rewrite' => array('slug' => 'adicionais', 'with_front' => false)  
		)  	
	);

	//Bairro
	register_taxonomy(  
	'lugares',  
	'bairro',  
	array(  
		'hierarchical' => true,  
		'label' => 'Lugares',  
		'query_var' => true,
		'rewrite' => array('slug' => 'lugares', 'with_front' => false), 
		)  	
	);

	//Perguntas Frequentes
	register_taxonomy(  
	'categoria',  
	'faq',  
	array(  
		'hierarchical' => true,  
		'label' => 'Categoria',  
		'query_var' => true,
		'rewrite' => array('slug' => 'categoria')  
		)  	
	);

	//Banners Home
	register_taxonomy(  
	'local',  
	'banner',  
	array(  
		'hierarchical' => true,  
		'label' => 'Local',  
		'query_var' => true,
		'rewrite' => array('slug' => 'local', 'with_front' => false)  
		)  	
	);

}

add_action('init', 'post_type_imovel');
add_action('init', 'registra_taxonomias' );

//Troca o logo
function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
		    background-image: url('<?php bloginfo('template_url') ?>/images/eko_logo.png');
		    width: 150px;
        	height: 91px;
		    background-size: 100%;
		}
   </style>
<?php }

add_action( 'login_enqueue_scripts', 'my_login_logo'); 


add_theme_support('post-thumbnails');
add_image_size('enterprise-grid',400,400, true);
add_image_size('blog-home-one',720,492, true);
add_image_size('blog-home',585,200, true);
add_image_size('second-post',585,300, true);
add_image_size('third-post',300,300, true);
add_image_size('four-post',300,200, true);
add_image_size('single-footer',320,80, true);
add_image_size('colum-enterprise',300,500, true);
add_image_size('banner-mobile',800,500, true);

add_role(
    'corretor',
    __('Corretor'),
    array(
        'read'         => false,
        'upload_files' => false,
        'delete_posts' => false,
		'edit_posts'   => false
    )
);

add_role(
    'investidor',
    __('Investidor'),
    array(
        'read'         => false,
        'upload_files' => false,
        'delete_posts' => false,
		'edit_posts'   => false
    )
);

add_role(
    'gestorcorretor',
    __('Gestor Corretor'),
    array(
        'read'         => true,
        'upload_files' => true,
        'delete_posts' => true,
		'edit_posts'   => true,
		'edit_dashboard' => true,
		'activate_plugins' => true,
		'delete_others_pages' => true,
		'delete_others_posts' => true,
		'delete_pages' => true,
		'delete_posts' => true,
		'delete_private_pages' => true,
		'delete_private_posts' => true,
		'delete_published_pages' => true,
		'delete_published_posts' => true,
		'delete_users' => true,
		'create_users' => true,
		'add_users' => true,
		'edit_dashboard' => true,
		'edit_others_pages' => true,
		'edit_others_posts' => true,
		'edit_pages' => true,
		'edit_posts' => true,
		'edit_private_pages' => true,
		'edit_private_posts' => true,
		'edit_published_pages' => true,
		'edit_published_posts' => true,
		'edit_theme_options' => false,
		'edit_users' => true,
		'export' => true,
		'import' => true,
		'list_users' => true,
		'manage_categories' => true,
		'manage_links' => true,
		'manage_options' => true,
		'moderate_comments' => false,
		'promote_users' => true,
		'publish_pages' => true,
		'publish_posts' => true,
		'read_private_pages' => true,
		'read_private_posts' => true,
		'read' => true,
		'remove_users' => true,
		'switch_themes' => false,
		'upload_files' => true,
		'customize' => false,
		'delete_site' => false,
    )
);

remove_role('subscriber');
remove_role('author');
remove_role('editor');
remove_role('contributor');
/*
remove_role('corretor');
remove_role('investidor');
remove_role('gestorcorretor');*/

//Ajax
add_action('wp_enqueue_scripts', 'meu_tema_enqueue_scripts');
function meu_tema_enqueue_scripts() {
	wp_enqueue_script('scripts', get_template_directory_uri()."/js/ajax.js", array('jquery'));
	wp_localize_script('scripts', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

//busca_avancada_home
add_action('wp_ajax_home_busca_avancada', 'busca_avancada_home');
add_action('wp_ajax_nopriv_home_busca_avancada', 'busca_avancada_home');
function busca_avancada_home() {

	parse_str($_REQUEST['dados'], $filtros);

	$type = $filtros['type'];
	$bedrooms = $filtros['bedrooms'];
	$state = $filtros['state'];
	$city = $filtros['city'];
	$price = $filtros['price'];

	$html = '';
	
	$args = array(
	    'post_type' => 'imovel',
	    'tax_query' => array(
	    	'relation' => 'OR',
		    array(
				'taxonomy' => 'type',
			    'field' => 'slug',
			    'terms' => $type,
		    ),
		    array(
				'taxonomy' => 'bedrooms',
			    'field' => 'slug',
			    'terms' => $bedrooms,
		    ),
		    array(
				'taxonomy' => 'state',
			    'field' => 'slug',
			    'terms' => $state,
		    ),
		    array(
				'taxonomy' => 'city',
			    'field' => 'slug',
			    'terms' => $city,
		    ),
		    array(
				'taxonomy' => 'price',
			    'field' => 'slug',
			    'terms' => $price,
		    ),
		),
	); 


	$loop = new WP_Query($args);
	if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
		echo '<div class="col-md-6 col-sm-6 col-xs-12">';
		$html .= get_template_part('inc/single-grid-enterprise');
		echo '</div>';
	endwhile; else: 
		$html .= '<div class="col-md-9">Nenhum imóvel encontrado</div>';
	endif;
	wp_reset_postdata();
	
	echo $html;
	wp_die();

}

add_action('wp_ajax_registracorretor', 'registra_corretor');
add_action('wp_ajax_nopriv_registracorretor', 'registra_corretor');
function registra_corretor() {

	parse_str($_REQUEST['dados'], $array_dados);

	//Fazer a mensagem com uma variavel $mensagem
	$mensagem = "Novo Cadastro de Corretor\n\n";
	$mensagem .= "Nome: ".$array_dados['cadastrocorretor_nome']."\n";
	$mensagem .= "E-mail: ".$array_dados['cadastrocorretor_email']."\n";
	$mensagem .= "CPF: ".$array_dados['cadastrocorretor_cpf']."\n";
	$mensagem .= "Telefone: ".$array_dados['cadastrocorretor_telefone'];


	$email = get_option('email_envio');
	$assunto = 'Novo cadastro de corretor';

	//FAZER A VALIDAÇÃO
	if (wp_mail($email, $assunto, $mensagem)) {
		echo json_encode(array('mensagem' => 'Mensagem enviada com sucesso!','status' => true));
	} else {
		echo json_encode(array('mensagem' => 'Sua mensagem não foi enviada.','status' => false));
	}

	wp_die();
}


add_action('admin_init', 'my_general_section'); 

function my_general_section() {  
    add_settings_section(  
        'enderecos', 
        'Endereços', 
        '', 
        'general' 
    );

     add_settings_field( 
        'address_icon',
        'Endereço da EKO', 
        'my_textbox_callback',
        'general', 
        'enderecos', 
        array( 
            'address_icon'
        )  
    );

    add_settings_field( 
        'facebook_icon', 
        'Endereço do facebook', 
        'my_textbox_callback', 
        'general', 
        'enderecos',
        array( 
            'facebook_icon' 
        )  
    ); 

    add_settings_field( 
        'instagram_icon', 
        'Endereço do instagram', 
        'my_textbox_callback', 
        'general', 
        'enderecos', 
        array(
            'instagram_icon' 
        )  
    );

    add_settings_field( 
        'youtube_icon', 
        'Endereço do youtube',
        'my_textbox_callback', 
        'general', 
        'enderecos', 
        array( 
            'youtube_icon' 
        )  
    );

    add_settings_field( 
        'phone_icon', 
        'Telefone',
        'my_textbox_callback', 
        'general', 
        'enderecos',
        array( 
            'phone_icon' // Should match Option ID
        )  
    );

    add_settings_field( 
        'token_rd', 
        'Token RD',
        'my_textbox_callback', 
        'general', 
        'enderecos',
        array( 
            'token_rd' // Should match Option ID
        )  
    );

     add_settings_field( 
        'email_envio', 
        'Email para envio',
        'my_textbox_callback', 
        'general', 
        'enderecos',
        array( 
            'email_envio' // Should match Option ID
        )  
    );

    register_setting('general','facebook_icon', 'esc_attr');
    register_setting('general','instagram_icon', 'esc_attr');
    register_setting('general','youtube_icon', 'esc_attr');
    register_setting('general','address_icon', 'esc_attr');
    register_setting('general','phone_icon', 'esc_attr');
    register_setting('general','token_rd', 'esc_attr');
    register_setting('general','email_envio', 'esc_attr');

}

function my_textbox_callback($args) {
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" class="regular-text" />';
}

function verifica_login_corretor() {

	$area = get_page_by_path( 'area-do-corretor' );
	$idarea = $area->ID;
	$investidor = get_page_by_path( 'area-do-investidor' );
	$idinvestidor = $investidor->ID;
	global $post;

	if ( is_user_logged_in() ) {
		$user_id = get_current_user_id();
		$user_meta = get_userdata($user_id);
		$user_roles = $user_meta->roles;
		foreach ($user_roles as $role) {

			if ($role == 'corretor' || $role == 'investidor' || $role == 'gestorcorretor') {
				show_admin_bar(false);
				remove_action('wp_head', '_admin_bar_bump_cb');
			}

			//Evita que investidor e corretor acessem paineis errados
			if ($role == 'corretor') {
				if (is_page($idinvestidor) || $post->post_parent == $idinvestidor) {
					$url = get_bloginfo('url').'/area-do-corretor/';
					wp_redirect($url);
					exit;
				}
			} elseif ($role == 'investidor') {
				if (is_page($idarea) || $post->post_parent == $idarea) {
					$url = get_bloginfo('url').'/area-do-investidor/';
					wp_redirect($url);
					exit;
				}
			} 
		}
	} else {
		if (is_page('area-do-corretor') || $post->post_parent == $idarea || is_page('area-do-investidor') || $post->post_parent == $idinvestidor) {
			$url = get_bloginfo('url').'/admin';
			wp_redirect($url);
			exit;
		}
	}	
}
add_action('get_header', 'verifica_login_corretor');

//Se for corretor, não acessa o painel do wordpress
function tira_admin_corretor() {
	if ( is_user_logged_in() ) {
		$user_id = get_current_user_id();
		$user_meta = get_userdata($user_id);
		$user_roles = $user_meta->roles;
		foreach ($user_roles as $role) {

			if ($role == 'corretor') {
				$url = get_bloginfo('url').'/area-do-corretor/';
				wp_redirect($url);
				exit;
			} elseif ($role == 'investidor') {
				$url = get_bloginfo('url').'/area-do-investidor/';
				wp_redirect($url);
				exit;
			}

		}
	}
}
add_action('admin_menu', 'tira_admin_corretor');


//Dados do corretor
add_action('wp_ajax_enviaemail', 'envia_email');
add_action('wp_ajax_nopriv_enviaemail', 'envia_email');
function envia_email() {

	parse_str($_REQUEST['dados'], $dados);

	$to = get_option('email_envio');
	$subject = $dados['assunto'];
	$mensagem = "Nova conversão realizada\n\n";
	foreach ($dados as $dado => $value) {
		if ($dado != "assunto" && $dado != "identificador" && $dado != "token_rdstation") {
			$mensagem .= $dado.": ";
			$mensagem .= $value."\n";
		}
	}

	if (wp_mail($to, $subject, $mensagem)) {
		echo json_encode(array('mensagem' => 'Obrigado pelo seu cadastro'));
	} else {
		echo json_encode(array('mensagem' => 'Cadastro não concluído, tente novamente'));
	}

	wp_die();
	
}


//Dados do corretor
add_action('wp_ajax_dados_corretor', 'update_dados_corretor');
add_action('wp_ajax_nopriv_dados_corretor', 'update_dados_corretor');
function update_dados_corretor() {

	parse_str($_REQUEST['dados'], $array_dados);
	$id = $array_dados['dadoscorretor_id'];
	$nome = $array_dados['dadoscorretor_nome'];
	$sobrenome = $array_dados['dadoscorretor_sobrenome'];
	$email = $array_dados['dadoscorretor_email'];
	$telefone = $array_dados['dadoscorretor_telefone'];
	$cpf = $array_dados['dadoscorretor_cpf'];
	$creci = $array_dados['dadoscorretor_creci'];

	$currentid = get_current_user_id();

	if ($id == $currentid) {

		$website = 'http://example.com';
 
		$update_user = wp_update_user( array(
			'ID' => $id,
			'first_name' => $nome,
			'last_name' => $sobrenome,
			'user_email' => $email
		));
 
		if ( is_wp_error( $update_user ) ) {
		    echo json_encode(array('mensagem' => 'Erro ao atualizar', 'user' => true));
		} else {
			//Sucesso!
    		echo json_encode(array('mensagem' => 'Atualizado com sucesso', 'user' => true));
		}

		update_user_meta($id, 'telefone', $telefone);
		//update_user_meta($id, 'cpf', $cpf);
		//update_user_meta($id, 'telefone', $creci);
		//Desabilitadas porque somente o adm pode alterar estes dados
	}

	wp_die();
}


//Dados do corretor
add_action('wp_ajax_busca_inteligente', 'buscainteligente');
add_action('wp_ajax_nopriv_busca_inteligente', 'buscainteligente');
function buscainteligente() {

	parse_str($_REQUEST['dados'], $filtros);

	$html = '';
	$args = array(
	    'post_type' => 'imovel',
	    'tax_query' => array(
	    	//'relation' => 'OR',
		    array(
				'taxonomy' => 'genre',
				'field' => 'slug',
				'terms' => $filtros['genre'],
		    ),
		    array(
				'taxonomy' => 'birth-year',
				'field' => 'slug',
				'terms' => $filtros['birth-year'],
		    ),
		    array(
				'taxonomy' => 'marital-status',
				'field' => 'slug',
				'terms' => $filtros['marital-status'],
		    ),
		    array(
				'taxonomy' => 'life-style',
				'field' => 'slug',
				'terms' => $filtros['life-style'],
		    ),
		    array(
				'taxonomy' => 'type',
				'field' => 'slug',
				'terms' => $filtros['type'],
		    ),
		    array(
				'taxonomy' => 'city',
				'field' => 'slug',
				'terms' => $filtros['city'],
		    ),
		    array(
				'taxonomy' => 'rooms',
				'field' => 'slug',
				'terms' => $filtros['rooms'],
		    ),
		    array(
				'taxonomy' => 'residents',
				'field' => 'slug',
				'terms' => $filtros['residents'],
		    ),
		    array(
				'taxonomy' => 'bedrooms',
				'field' => 'slug',
				'terms' => $filtros['bedrooms'],
		    ),
		    array(
				'taxonomy' => 'suites',
				'field' => 'slug',
				'terms' => $filtros['suites'],
		    ),
		    array(
				'taxonomy' => 'garage',
				'field' => 'slug',
				'terms' => $filtros['garage'],
		    ),
		),
	); 

	echo '<div class="row">';
	$loop = new WP_Query($args);
	if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
		echo '<div class="col-md-4 col-sm-6 col-xs-12">';
		$html .= get_template_part('inc/single-grid-enterprise');
		echo '</div>';
	endwhile; else: 
		$html .= '<div class="col-xs-12">Nenhum imóvel encontrado</div>';
	endif;
	echo '</div>';
	wp_reset_postdata();
	echo $html;
	wp_die();

}

//Search form
function my_search_form($form) {
	$form = '<form method="get" id="searchform" class="searchform" action="' . get_option('home') . '/" >
	<div>
	<input type="text" value="' . esc_attr(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" placeholder="Buscar" />
	<button type="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
	</form>';
	return $form;
}

add_filter('get_search_form', 'my_search_form');

/*Excluir páginas do resultado da busca */
function search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
        if ($query->is_search) {
            $query->set('post_type','post');
        }
    }
}

add_action('pre_get_posts','search_filter');

remove_action('wp_footer', 'rsd_link');
remove_action('wp_footer', 'wlwmanifest_link');
remove_action('wp_footer', 'wp_generator');

function verifica_gestor() {
	$user_id = get_current_user_id();
	$user_meta = get_userdata($user_id);
	$user_roles = $user_meta->roles;
	foreach ($user_roles as $role) {
		if ($role == 'gestorcorretor') {
			return true;
		} else {
			return false;
		}
	}
}

//Remover menus para funções específicas
add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {
 
    global $user_ID;

    if ( verifica_gestor() ) {
		remove_menu_page( 'edit.php' );
		remove_menu_page( 'edit-comments.php' );
		remove_menu_page( 'upload.php' );
		remove_menu_page( 'edit.php?post_type=page' );
		//remove_menu_page( 'edit.php?post_type=imovel' );
		remove_menu_page( 'edit.php?post_type=bairro' );
		remove_menu_page( 'edit.php?post_type=faq' );
		remove_menu_page( 'edit.php?post_type=banner' );
		remove_menu_page( 'edit.php?post_type=depoimentos' );
		remove_menu_page( 'edit.php?post_type=acf' );
		remove_menu_page( 'edit.php?post_type=centrais-vendas' );
		remove_menu_page( 'edit.php?post_type=material-investidor' );
		remove_menu_page( 'admin.php?page=wpseo_dashboard');
		remove_menu_page( 'themes.php' );
		remove_menu_page( 'plugins.php' );
		remove_menu_page( 'tools.php' );
		remove_menu_page( 'options-general.php' );
		remove_menu_page('wpseo_dashboard');
    } 	
}


function alterar_admin_bar( $admin_bar ) {

	if ( verifica_gestor() ) {
 
	    // Remove o logotipo
	    //$admin_bar->remove_menu( 'wp-logo' );
	 
	    // Remove o menu suspenso de adição de novo conteúdo
	    $admin_bar->remove_node( 'new-content' );
	 
	    // Remove o link para editar a página atual
	    $admin_bar->remove_menu( 'edit' );
	 
	    // Remove o notificador de atualizações
	    $admin_bar->remove_menu( 'updates' );
	 
	    // Remove o menu de pesquisa
	    $admin_bar->remove_menu( 'search' );
	 
	    // Remove o balão de comentários
	    $admin_bar->remove_menu( 'comments' );
	 
	    // Remove o menu suspenso com o nome do site
	    //$admin_bar->remove_node( 'site-name' );
	 
	    // Remove o menu suspenso da conta do usuário
	    //$admin_bar->remove_node( 'my-account' );

	    return $admin_bar;

	}
 
}
add_action( 'admin_bar_menu', 'alterar_admin_bar', 99 );




//Esconde administradores para os corretores
function esconde_adms( $hook ) {
    if ( 'users.php' != $hook) {
        return;
    }
    if (verifica_gestor()) {
    	wp_enqueue_script('admin', get_template_directory_uri() . '/js/admin.js' );
    }
}
add_action( 'admin_enqueue_scripts', 'esconde_adms' );

//Esconde funções do yoast
function esconde_yoast( $hook ) {
    if ( 'user-edit.php' != $hook) {
        return;
    }
    if (verifica_gestor()) {
    	echo '<style type="text/css">
    		.yoast-settings,
    		.user-rich-editing-wrap,
    		.user-admin-color-wrap,
    		.user-comment-shortcuts-wrap,
    		.user-admin-bar-front-wrap,
    		.user-language-wrap,
    		.user-url-wrap,
    		.user-googleplus-wrap,
    		.user-twitter-wrap,
    		.user-facebook-wrap,
    		.user-role-wrap,
    		.user-profile-picture {display: none;}
    	</style>';
    }
}
add_action( 'admin_enqueue_scripts', 'esconde_yoast' );

function novo_user( $hook ) {
	if ( 'user-new.php' != $hook) {
        return;
    }
    if (verifica_gestor()) {
    	wp_enqueue_script('admin', get_template_directory_uri() . '/js/admin.js' );
    }
}
add_action( 'admin_enqueue_scripts', 'novo_user' );

function esconde_yoast_post( $hook ) {
	if ( 'post-new.php' != $hook) {
        return;
    }
    if (verifica_gestor()) {
    	echo '<style type="text/css"> .wpseo-metabox {display: none;} </style>';
    }
}
add_action( 'admin_enqueue_scripts', 'esconde_yoast_post' );

function esconde_yoast_post_edit( $hook ) {
	if ( 'post.php' != $hook) {
        return;
    }
    if (verifica_gestor()) {
    	echo '<style type="text/css"> .wpseo-metabox {display: none;} </style>';
    }
}
add_action( 'admin_enqueue_scripts', 'esconde_yoast_post_edit' );

//Desativa Single Media
function myprefix_redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		if ( $post && $post->post_parent ) {
			wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
			exit;
		} else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );

add_filter('wp_mail_from_name','custom_email_from_name');

function custom_email_from_name($name) {
	$name = get_bloginfo('name'); //oou troque por uma das variáveis
	return $name;
}

//Permite zip e rar
function custom_upload_mimes( $existing_mimes = array() ) {
    $existing_mimes['rar'] = 'application/x-rar-compressed';
    $existing_mimes['zip'] = 'application/zip';
    return $existing_mimes;
}
add_filter( 'upload_mimes', 'custom_upload_mimes' );