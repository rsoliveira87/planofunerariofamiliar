<?php

/*********
 * This funtion removes all unwanted sections and controls
 * It is added as a priority 20, so that it runs after all controls have been added
 *********
 */

function whiterogue_remove_customizer_sections(){
    global $wp_customize;
    
    $wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
    $wp_customize->remove_section('static_front_page');
	$wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
    
}
add_action( 'customize_register', 'whiterogue_remove_customizer_sections', 20 );

function whiterogue_customize_general_settings( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
        
	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( '_primary_color_scheme', array(
		'default'           => '#F8a703' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_primary_color_scheme', array(
		'priority' 		=> 1,
		'section'     	=> 'colors',
		'label'       	=> 'Cor do tema',
        'description'   => 'Aplica na barra superior, nos botões de leia-mais e em alguns outros lugares.'
	) ) );
    $wp_customize->add_setting( '_button_color_scheme', array(
		'default'           => '#cc0021' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_button_color_scheme', array(
		'priority' 		=> 2,
		'section'     	=> 'colors',
		'label'       	=> 'Cor dos botões',
        'description'   => 'Aplica nos botões da home e das páginas internas, incluindo os botões de submit.'
	) ) );
    $wp_customize->add_setting( 'google_analytics_code', array(
		'default'           => 'UA-69987472-1' ,
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	) );
    $wp_customize->add_control('google_analytics_code', array(
        'priority'          => 1,
		'section'           => 'title_tagline',
		'label'             => 'Código do Google Analytics',
        'description'       => 'Pegue o código no google analytics ou use o padrão que é o código do PFB', 
	));
 
    
    // ====================================
	// = Barra Superior
	// ====================================
	// Ligue para a Gente
	$wp_customize->add_setting( '_head_telefone1', array(
		'default'        => '(11) 3071-1325',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_head_telefone1', array(
		'section' => 'top_bar_section',
		'label' => 'Telefone 1',
	));
    $wp_customize->add_setting( '_head_telefone2', array(
		'default'        => '(19) 3352-4650',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_head_telefone2', array(
		'section' => 'top_bar_section',
		'label' => 'Telefone 2',
	));
    $wp_customize->add_setting( '_head_telefone3', array(
		'default'        => '(21) 3624-2351',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_head_telefone3', array(
		'section' => 'top_bar_section',
		'label' => 'Telefone 3',
	));
	//  Facebook
	$wp_customize->add_setting( '_fbook_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fbook_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> 'Facebook URL',
	) );
	// Twitter
	$wp_customize->add_setting( '_twitter_link', array(
		'default'           => '#'
,		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_twitter_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> 'Twitter URL',
	) );
	// LinkedIn
	$wp_customize->add_setting( '_linkedin_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_linkedin_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> 'LinkedIn URL',
	) );
	// Goggle+
	$wp_customize->add_setting( '_gplus_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_gplus_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> 'Google+ URL',
	) );
	// Tumblr
	$wp_customize->add_setting( '_tumblr_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_tumblr_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> 'Tumblr URL',
	) );


	// ====================================
	// = Barra Inferior (footer)
	// ====================================
	$wp_customize->add_setting( '_copyright', array(
		'default'        => 'Plano Funerário Brasil é marca registrada da Aleah Brasil',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control('_copyright', array(
		'section' => 'footer_section',
		'label' => 'Texto de direitos autorais',
		'description' => 'Use HTML para links',
	));
    
}

function whiterogue_customize_all_panels( $wp_customize ) {
    
	// ====================================
	// = WhiteRogue Theme Main
	// ====================================
	$wp_customize->add_panel( 'homepage_panel', array(
		'title' 	=> 'Dados da Home Page',
		'priority' 	=> 1,
		'active_callback' => 'is_front_page',
	) );
    $wp_customize->add_panel( 'empresa_panel', array(
		'title' 	=> 'Dados da Empresa',
		'priority' 	=> 1,
        'active_callback' => 'whiterogue_check_page_empresa',
	) );
    $wp_customize->add_panel( 'plano_panel', array(
		'title' 	=> 'Dados do Plano',
		'priority' 	=> 1,
        'active_callback' => 'whiterogue_check_page_plano',
	) );
    $wp_customize->add_panel( 'noticias_panel', array(
		'title' 	=> 'Settings das Notícias',
		'priority' 	=> 1,
        'active_callback' => 'whiterogue_check_page_noticias',
	) );
    $wp_customize->add_panel( 'historias_panel', array(
		'title' 	=> 'Settings das Histórias',
		'priority' 	=> 1,
        'active_callback' => 'whiterogue_check_page_historias',
	) );
    $wp_customize->add_panel( 'contato_panel', array(
		'title' 	=> 'Settings dos Contatos',
		'priority' 	=> 1,
        'active_callback' => 'whiterogue_check_page_contato',
	) );
    $wp_customize->add_panel( 'representantes_panel', array(
		'title' 	=> 'Settings dos Representantes',
		'priority' 	=> 1,
        'active_callback' => 'whiterogue_check_page_representantes',
	) );
    $wp_customize->add_section( 'top_bar_section' , array(
		'title' 		=> 'Dados do Header',
		'priority' 		=> 2,
	) );
	$wp_customize->add_section( 'footer_section' , array(
		'title' 		=> 'Dados do Footer',
        'priority'      => 2,
	) );
    
    
	// ====================================
	// = Sections da Home Page
	// ====================================
	$wp_customize->add_section( 'home_textochamada_section' , array(
		'title' 		=> 'Texto de Chamada',
		'priority'		=> 1,
		'panel'	 => 'homepage_panel'
	) );
    $wp_customize->add_section( 'home_botaovideo_section' , array(
		'title' 		=> 'Botão do Vídeo',
		'priority'		=> 2,
		'panel'	 => 'homepage_panel'
	) );
    $wp_customize->add_section( 'home_botaoadquira_section' , array(
		'title' 		=> 'Botão do Adquira',
		'priority'		=> 3,
		'panel'	 => 'homepage_panel'
	) );
	$wp_customize->add_section( 'home_featured_section' , array(
		'title' 		=> 'Box do Como Funciona',
		'priority'		=> 4,
		'panel'	 => 'homepage_panel'
	) );
	$wp_customize->add_section( 'home_parallax_section' , array(
		'title' 		=> 'Box do Parallax',
		'priority'		=> 5,
		'panel'	 => 'homepage_panel'	
	) );
	$wp_customize->add_section( 'home_blog_section' , array(
		'title' 		=> 'Box das Notícias',
		'priority'		=> 6,
		'panel'	 => 'homepage_panel'
	) );
    // Todos os setting das imagens de fundo estão no final do arquivo.
    $wp_customize->add_section( 'home_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 7,
		'panel'	 => 'homepage_panel'
	) );
    $wp_customize->add_section( 'home_widget_section' , array(
		'title' 		=> 'Seções do PFF',
		'priority'		=> 8,
		'panel'	 => 'homepage_panel'
	) );
    
    
    // ====================================
	// = Sections da Empresa
	// ====================================
	$wp_customize->add_section( 'empresa_descricao_section' , array(
		'title' 		=> 'Descrição da Empresa',
		'priority'		=> 1,
		'panel'	 => 'empresa_panel'
	) );
    $wp_customize->add_section( 'empresa_btn_section' , array(
		'title' 		=> 'Botão do Link',
		'priority'		=> 2,
		'panel'	 => 'empresa_panel'
	) );
	$wp_customize->add_section( 'empresa_mvv_section' , array(
		'title' 		=> 'Visão, Missão e Valores',
		'priority'		=> 3,
		'panel'	 => 'empresa_panel'
	) );
    // Todos os setting das imagens de fundo estão no final do arquivo.
    $wp_customize->add_section( 'empresa_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 3,
		'panel'	 => 'empresa_panel'
	) );

    
    // ====================================
	// = Sections do Plano
	// ====================================
	$wp_customize->add_section('plano_chamada_section' , array(
		'title' 		=> 'Chamada do Plano',
		'priority'		=> 1,
		'panel'	 => 'plano_panel'
	) );
    $wp_customize->add_section('plano_carac_section' , array(
		'title' 		=> 'Características do Plano',
		'priority'		=> 2,
		'panel'	 => 'plano_panel'
	) );
    // Todos os setting das imagens de fundo estão no final do arquivo.
    $wp_customize->add_section('plano_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 3,
		'panel'	 => 'plano_panel'
	) );
    
    
    // ====================================
	// = Sections das Notícias
	// ====================================
    $wp_customize->add_section('noticias_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 3,
		'panel'	 => 'noticias_panel'
	) );
    
    
    // ====================================
	// = Sections das Histórias
	// ====================================
    // Todos os setting das imagens de fundo estão no final do arquivo.
    $wp_customize->add_section('historias_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 3,
		'panel'	 => 'historias_panel'
	) );
	
    
    // ====================================
	// = Sections do Contato
	// ====================================
    // Todos os setting das imagens de fundo estão no final do arquivo.
	$wp_customize->add_section('contato_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 3,
		'panel'	 => 'contato_panel'
	) );
    $wp_customize->add_section('contato_contato_section' , array(
		'title' 		=> 'Dados de Contato',
		'priority'		=> 3,
		'panel'	 => 'contato_panel'
	) );
    
    
    // ====================================
	// = Sections do Representante
	// ====================================
    // Todos os setting das imagens de fundo estão no final do arquivo.
	$wp_customize->add_section('representantes_bkg_section' , array(
		'title' 		=> 'Imagem de Fundo',
		'priority'		=> 3,
		'panel'	 => 'representantes_panel'
	) );
    
}
    
function whiterogue_customize_home_page( $wp_customize ) {
	// ====================================
	// = Home Page Texto de Chamada
	// ====================================
    $wp_customize->add_setting('_home_linha1', array(
		'default'        => 'Conheça Nossos',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
    $wp_customize->add_control('_home_linha1', array(
		'section' => 'home_textochamada_section',
		'label' => 'Linha 1',
	));
	$wp_customize->add_setting('_home_linha2', array(
		'default'        => 'Planos Funerais',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
    $wp_customize->add_control('_home_linha2', array(
		'section' => 'home_textochamada_section',
		'label' => 'Linha 2',
	));
    $wp_customize->add_setting('_home_linha3', array(
		'default'        => 'Sem limite de idade. Sem comprovação de saúde.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
    $wp_customize->add_control('_home_linha3', array(
		'section' => 'home_textochamada_section',
		'label' => 'Linha 3',
	));
    $wp_customize->add_setting('_home_linha4', array(
		'default'        => 'A solução perfeita para você.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
    $wp_customize->add_control('_home_linha4', array(
		'section' => 'home_textochamada_section',
		'label' => 'Linha 4',
	));
    
    
    // ====================================
	// = Home Page Botão de Vídeo
	// ====================================
	$wp_customize->add_setting('_home_btn', array(
		'default'           => 'Assista ao Vídeo',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('_home_btn', array(
		'section'  		=> 'home_botaovideo_section',
		'label'    		=> 'Texto do Botão',
	) );
	$wp_customize->add_setting('_home_btn_link', array(
		'default'           => 'http://www.youtube.com.br/embed/WCiiLD5y7r4?autoplay=1&rel=0',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control('_home_btn_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_botaovideo_section',
		'label'    		=> 'Link do Botão',
	) );
	
    
    // ====================================
	// = Home Page Botão do Aquira
	// ====================================
    $wp_customize->add_setting( '_home_ativar_ecommerce', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( '_home_ativar_ecommerce', array(
		'type' => 'radio',
		'section' => 'home_botaoadquira_section',
		'label' => 'Ativa/Desativa E-commerce',
		'description' => 'Ativa ou desativa o e-commerce para o site',
		'choices' => array(
			'on' => 'ATIVA',
			'off'=> 'DESATIVA',
		),
	) );
    $wp_customize->add_setting( '_home_ativar_ecommerce_type', array(
		'default'           => 'PFB'
	) );
	$wp_customize->add_control( '_home_ativar_ecommerce_type', array(
		'type' => 'radio',
		'section' => 'home_botaoadquira_section',
		'label' => 'Seleciona o tipo do Ecommerce',
		'description' => 'Seleciona o tipo do ecommerce.  Eventualmente isso vai desaparecer quando atualizarmos o ecommerce do PFB.',
		'choices' => array(
			'PFB' => 'PFB',
			'PFF' => 'PFF',
		),
	) );
	$wp_customize->add_setting('_home_adquira_btn', array(
		'default'           => 'Adquira Online!',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('_home_adquira_btn', array(
		'section'  		=> 'home_botaoadquira_section',
		'label'    		=> 'Texto do Botão',
	) );
	$wp_customize->add_setting('_home_adquira_btn_link', array(
		'default'           => '183',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('_home_adquira_btn_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_botaoadquira_section',
		'label'    		=> 'Código do Produto Principal',
        'description'   => 'Código do produto principal no jigoshop para adicionar ao carrinho - exemplo: Plano Funerário Brasil',
	) );
    $wp_customize->add_setting('_home_adquira_abrangencia_btn_link', array(
		'default'           => '188',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('_home_adquira_abrangencia_btn_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_botaoadquira_section',
		'label'    		=> 'Código do Produto Secundário',
        'description'   => 'Código do produto secundário no jigoshop para adicionar ao carrinho - exemplo: Abrangência Familiar',
	) );
    
    // ====================================
	// = Home Page Box do Como Funciona
	// ====================================
	// Box do Como Funciona
	$wp_customize->add_setting( '_featured_heading', array(
		'default'        => 'COMO FUNCIONA',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_heading', array(
		'section' => 'home_featured_section',
		'label' => 'Cabeçalho do Como Funciona',
	));
    
	// Primeira Caixa
	$wp_customize->add_setting( '_fb1_first_part_heading', array(
		'default'        => 'ESCOLHA O PLANO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_first_part_heading', array(
		'section' => 'home_featured_section',
		'label' => 'Nome da primeira caixa',
	));
	$wp_customize->add_setting( '_fb1_first_icon_class', array(
		'default'        => 'fa-file-text-o',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_first_icon_class', array(
		'section' => 'home_featured_section',
		'label' => 'ícone da primeira caixa',
	));
	$wp_customize->add_setting( '_fb1_first_part_content', array(
		'default'        => 'Após preencher o formulário acima entraremos em contato por e-mail ou telefone para lhe apresentar plano e esclarecer todos os detalhes.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_first_part_content', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => 'Conteúdo da primeira caixa',
	));

	// Segunda Caixa
	$wp_customize->add_setting( '_fb2_second_part_heading', array(
		'default'        => 'ASSINE O CONTRATO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_second_part_heading', array(
		'section' => 'home_featured_section',
		'label' => 'Nome da segunda caixa',
	));
	$wp_customize->add_setting( '_fb2_second_icon_class', array(
		'default'        => 'fa-cogs',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_second_icon_class', array(
		'section' => 'home_featured_section',
		'label' => 'Ícone da segunda caixa',
	));
	$wp_customize->add_setting( '_fb2_second_part_content', array(
		'default'        => 'Escolhido o plano de cremação ou sepultamento, o próximo passo é assinar o contrato que prevê o nome do conveniado e o nome da pessoa assistida (coberta) pelo plano.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_second_part_content', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => 'Conteúdo da segunda caixa',
	));

	// Terceira Caixa
	$wp_customize->add_setting( '_fb3_third_part_heading', array(
		'default'        => 'ACIONE DO EVENTO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_third_part_heading', array(
		'section' => 'home_featured_section',
		'label' => 'Nome da terceira caixa',
	));
	$wp_customize->add_setting( '_fb3_third_icon_class', array(
		'default'        => 'fa-eye-slash',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_third_icon_class', array(
		'section' => 'home_featured_section',
		'label' => 'Ícone da terceira caixa',
	));
	$wp_customize->add_setting( '_fb3_third_part_content', array(
		'default'        => 'Quando ocorrer o evento do óbito da pessoa assistida, basta que o conveniado ou alguém da família nos ligue 24H. Pronto. A partir daí nós cuidamos de tudo, com toda a atenção que você merece.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_third_part_content', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => 'Conteúdo da terceira caixa',
	));

    
	// ====================================
	// = Home Page Box do Parallax
	// ====================================
	$wp_customize->add_setting( '_para_content_left', array(
		'default'        => 'O momento da perda de um ente querido é sempre difícil. Quem já passou por isso sabe como é. Para amenizar o sofrimento, pessoas previdentes querem deixar tudo pronto para trazer tranquilidade e organização para o funeral idealizado pela família. Para atender a esta demanda, a Aleah Brasil criou o Plano Funerário Brasil. A Aleah é uma empresa especializada em atendimentos funerais em todo território nacional. Contamos com uma ampla rede credenciada de prestadores de serviços para assistência e segurança da sua família.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_para_content_left', array(
		'type'	=> 'textarea',
		'section' => 'home_parallax_section',
		'label' => 'Conteúdo do parallax',
	));
	$wp_customize->add_setting( '_fullparallax_image', array(
		'default'           => get_template_directory_uri().'/images/1600x1000.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_fullparallax_image', array(
		'section' 		=> 'home_parallax_section',
		'label' 		=> 'Imagem do parallax',
		'description' 	=> 'Tamanho mínimo recomendado: 1600x750 px.',
	) ) );

    
	// ====================================
	// = Home Page Box das Notícias
	// ====================================
	$wp_customize->add_setting( 'home_blog_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_blog_sec', array(
		'type' => 'radio',
		'section' => 'home_blog_section',
		'label' => 'Liga/Desliga blog',
		'description' => 'Liga ou desliga o box de blogs na primeira página',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
	$wp_customize->add_setting( 'home_blog_title', array(
		'default'        => 'Últimas Notícias',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_title', array(
		'section' => 'home_blog_section',
		'label' => 'Cabeçalho das últimas notícias',
	));
	$wp_customize->add_setting( 'home_blog_num', array(
		'capability' => 'edit_theme_options',
		'default'        => '6',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_num', array(
		'section' => 'home_blog_section',
		'label' => 'Quantidade posts na primeira página',
		'description' => 'Mostra o número de posts de NOTÍCIAS na primeira página.  Deixa em branco para mostrar todas (não recomendado).',
	));
    
    // ====================================
	// = Home Page Seções do PFF
	// ====================================
	$wp_customize->add_setting( 'home_pffprecos_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_pffprecos_sec', array(
		'type' => 'radio',
		'section' => 'home_widget_section',
		'label' => 'Liga/Desliga Preços',
		'description' => 'Liga ou desliga o box de preços do PFF na primeira página',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
    $wp_customize->add_setting( 'home_pffdestaques_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_pffdestaques_sec', array(
		'type' => 'radio',
		'section' => 'home_widget_section',
		'label' => 'Liga/Desliga Destaques',
		'description' => 'Liga ou desliga o box de destaques do PFF na primeira página',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
    $wp_customize->add_setting( 'home_pffcarac_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_pffcarac_sec', array(
		'type' => 'radio',
		'section' => 'home_widget_section',
		'label' => 'Liga/Desliga Características',
		'description' => 'Liga ou desliga o box de características gerais do PFF na primeira página',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
}
    
function whiterogue_customize_empresa( $wp_customize ) {
    
    // ====================================
	// = Empresa Descrição
	// ====================================
    $wp_customize->add_setting( '_empresa_logo_img', array(
		'default'           => '',
        'section'           => 'empresa_descricao_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_empresa_logo_img', array(
		'priority'	=> 1,
		'section' 		=> 'empresa_descricao_section',
		'label' 		=> 'Logo da empresa',
		'description' 	=> 'Adicione o logo da empresa.',
	) ) );
    $wp_customize->add_setting( '_empresa_titulo', array(
		'default'        => 'NÓS SOMOS A ALEAH BRASIL',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_titulo', array(
		'section' => 'empresa_descricao_section',
		'label' => 'Chamada da empresa',
	));
    $wp_customize->add_setting( '_empresa_descricao_texto', array(
		'default'        => 'Nós valorizamos e respeitamos toda a vida - e também as suas histórias. As de nossos pais, filhos, entes queridos que nos deixaram. Dizemos isso com orgulho a nossos clientes quando os ouvimos no momento mais difícil de suas vidas. Cada lembrança conosco compartilhada é uma marca indelével em nosso futuro. Enaltece a razão pela qual existimos. Desde sua fundação a Aleah Brasil já assistiu a mais de 5.000 famílias em diversos estados do país. Além das coberturas oferecidas pelo Plano Funerário Brasil, a Aleah também oferece assistência emergencial para cremações e sepultamentos, cremação de ossadas, de restos mortais e de pets, além de uma ampla gama de serviços funerários de traslado de corpos para dentro e fora do país. Temos ainda canais de venda de coroas de flores, arranjos póstumos e de urnas cinerárias.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_descricao_texto', array(
		'type'	=> 'textarea',
		'section' => 'empresa_descricao_section',
		'label' => 'Conteúdo da chamada',
	));
    
    
    // ====================================
	// = Empresa Botão do Link
	// ====================================
	$wp_customize->add_setting('_empresa_btn', array(
		'default'           => 'Conheça a Aleah',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	) );
	$wp_customize->add_control('_empresa_btn', array(
		'section'  		=> 'empresa_btn_section',
		'label'    		=> 'Texto do Botão',
	) );
	$wp_customize->add_setting('_empresa_btn_link', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control('_empresa_btn_link', array(
		'type'     		=> 'url',
		'section'  		=> 'empresa_btn_section',
		'label'    		=> 'Link do Botão',
	) );

    
    // ====================================
	// = Empresa Missão, Visão e Valores
	// ====================================
    // BOX 1 (missão)
	$wp_customize->add_setting('_empresa_box1_titulo', array(
		'default'        => 'NOSSA MISSÃO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box1_titulo', array(
		'section' => 'empresa_mvv_section',
		'label' => 'Título da missão',
    ));
	$wp_customize->add_setting( '_empresa_box1_icone', array(
		'default'        => 'fa-check-square-o',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box1_icone', array(
		'section' => 'empresa_mvv_section',
		'label' => 'Ícone da missão',
    ));
    $wp_customize->add_setting( '_empresa_box1_texto', array(
		'default'        => 'Ajudar a passagem. Amenizar a dor. Facilitar a vida.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box1_texto', array(
		'type'	=> 'textarea',
		'section' => 'empresa_mvv_section',
		'label' => 'Conteúdo da missão',
	));
    // BOX 2 (visão)
	$wp_customize->add_setting('_empresa_box2_titulo', array(
		'default'        => 'NOSSA VISÃO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box2_titulo', array(
		'section' => 'empresa_mvv_section',
		'label' => 'Título da visão',
    ));
	$wp_customize->add_setting( '_empresa_box2_icone', array(
		'default'        => 'fa-eye',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box2_icone', array(
		'section' => 'empresa_mvv_section',
		'label' => 'Ícone da visão',
    ));
    $wp_customize->add_setting( '_empresa_box2_texto', array(
		'default'        => 'Um mundo com mais dignidade pelo amor e carinho com nossos entes queridos.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box2_texto', array(
		'type'	=> 'textarea',
		'section' => 'empresa_mvv_section',
		'label' => 'Conteúdo da visão',
	));
    // BOX 3 (valores)
	$wp_customize->add_setting('_empresa_box3_titulo', array(
		'default'        => 'NOSSOS VALORES',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box3_titulo', array(
		'section' => 'empresa_mvv_section',
		'label' => 'Título dos valores',
    ));
	$wp_customize->add_setting( '_empresa_box3_icone', array(
		'default'        => 'fa-thumbs-o-up',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box3_icone', array(
		'section' => 'empresa_mvv_section',
		'label' => 'Ícone dos valores',
    ));
    $wp_customize->add_setting( '_empresa_box3_texto', array(
		'default'        => 'Atenção. Cuidado. Carinho. Excelência. Dignidade.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_box3_texto', array(
		'type'	=> 'textarea',
		'section' => 'empresa_mvv_section',
		'label' => 'Conteúdo dos valores',
	));
}
    
function whiterogue_customize_plano( $wp_customize ) {
    
    // ====================================
	// = Plano Box da Chamada
	// ====================================
    $wp_customize->add_setting( '_plano_chamada_titulo', array(
		'default'        => 'PLANO FUNERÁRIO BRASIL',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_titulo', array(
		'section' => 'plano_chamada_section',
		'label' => 'Título da chamada',
	));
	$wp_customize->add_setting( '_plano_chamada_icone', array(
		'default'        => 'fa-trophy',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_icone', array(
		'section' => 'plano_chamada_section',
		'label' => 'Ícone da chamada',
    ));
    $wp_customize->add_setting( '_plano_chamada_texto', array(
		'default'        => 'O Plano Funerário Brasil não exige atestado prévio de saúde e nem limite de idade.  Você adquire o plano em até 20 parcelas iguais de R$300,00 e pronto.  Você ou qualquer pessoa que você indicar como beneficiário no contrato terá cobertura nacional em caso de falecimento, tanto para cremação quanto para sepultamento.  Veja abaixo os benefícios.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_chamada_section',
		'label' => 'Conteúdo da chamada',
	));
    $wp_customize->add_setting( '_plano_chamada_texto_ajuste_v', array(
		'default'        => '0px',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_texto_ajuste_v', array(
		'section' => 'plano_chamada_section',
		'label' => 'Ajuste vertical do texto em pixels',
	));
    $wp_customize->add_setting( '_plano_chamada_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-representantes.jpg',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_plano_chamada_img', array(
		'section' 		=> 'plano_chamada_section',
		'label' 		=> 'Imagem da chamada',
		'description' 	=> 'Tamanho recomendado: 500x500 px.',
	) ) );
    $wp_customize->add_setting( '_plano_chamada_ajuste_v', array(
		'default'        => '0px',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_ajuste_v', array(
		'section' => 'plano_chamada_section',
		'label' => 'Ajuste vertical da imagem em pixels',
	));
    $wp_customize->add_setting( '_plano_chamada_ajuste_h', array(
		'default'        => '0px',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_ajuste_h', array(
		'section' => 'plano_chamada_section',
		'label' => 'Ajuste horizontal da imagem em pixels',
	));
    $wp_customize->add_setting( '_plano_chamada_ajuste_z', array(
		'default'        => '120',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_chamada_ajuste_z', array(
		'section' => 'plano_chamada_section',
		'label' => 'Ajuste de zoom da imagem em percentual (100 para tamanho original)',
	));
       
    
    // ====================================
	// = Plano Box das Características
	// ====================================
    // Show Rows
    $wp_customize->add_setting( 'plano_carac_row_1', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'plano_carac_row_1', array(
		'type' => 'radio',
		'section' => 'plano_carac_section',
		'label' => 'Liga/Desliga 1a. linha',
		'description' => 'Liga ou desliga a primeira linha de características',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
    $wp_customize->add_setting( 'plano_carac_row_2', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'plano_carac_row_2', array(
		'type' => 'radio',
		'section' => 'plano_carac_section',
		'label' => 'Liga/Desliga 2a. linha',
		'description' => 'Liga ou desliga a segunda linha de características',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
    $wp_customize->add_setting( 'plano_carac_row_3', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'plano_carac_row_3', array(
		'type' => 'radio',
		'section' => 'plano_carac_section',
		'label' => 'Liga/Desliga 3a. linha',
		'description' => 'Liga ou desliga a terceira linha de características',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
    $wp_customize->add_setting( 'plano_carac_row_4', array(
		'default'           => 'on',
		'sanitize_callback' => 'whiterogue_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'plano_carac_row_4', array(
		'type' => 'radio',
		'section' => 'plano_carac_section',
		'label' => 'Liga/Desliga 4a. linha',
		'description' => 'Liga ou desliga a quarta linha de características',
		'choices' => array(
			'on' => 'LIGA',
			'off'=> 'DESLIGA',
		),
	) );
    
	// Característica 1
	$wp_customize->add_setting( '_plano_c1_titulo', array(
		'default'        => 'SEM LIMITE DE IDADE',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c1_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 1',
	));
	$wp_customize->add_setting( '_plano_c1_icone', array(
		'default'        => 'fa-hourglass-3',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c1_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 1',
	));
	$wp_customize->add_setting( '_plano_c1_texto', array(
		'default'        => 'Não há limite de idade para a pessoa assistida. Isso mesmo, não importa se você tem 49 ou 99 anos de idade. O Plano Funeral Brasil é para todos.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c1_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 1',
	));
	// Característica 2
	$wp_customize->add_setting( '_plano_c2_titulo', array(
		'default'        => 'SEM COMPROVAÇÃO DE SAÚDE',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c2_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 2',
	));
	$wp_customize->add_setting( '_plano_c2_icone', array(
		'default'        => 'fa-heartbeat',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c2_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 2',
	));
	$wp_customize->add_setting( '_plano_c2_texto', array(
		'default'        => 'Outro grande diferencial do Plano Funerário Brasil. A pessoa assistida não precisa comprovar que goza de plena saúde.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c2_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 2',
	));
	// Característica 3
	$wp_customize->add_setting( '_plano_c3_titulo', array(
		'default'        => 'COBERTURA NACIONAL',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c3_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 3',
	));
	$wp_customize->add_setting( '_plano_c3_icone', array(
		'default'        => 'fa-flag',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c3_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 3',
	));
	$wp_customize->add_setting( '_plano_c3_texto', array(
		'default'        => 'A cobertura é para todo o território brasileiro. Fazemos também a repatriação de óbitos. Consulte-nos para saber mais.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c3_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 3',
	));
	// Característica 4
	$wp_customize->add_setting( '_plano_c4_titulo', array(
		'default'        => 'PAGAMENTO FACILITADO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c4_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 4',
	));
	$wp_customize->add_setting( '_plano_c4_icone', array(
		'default'        => 'fa-money',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c4_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 4',
	));
	$wp_customize->add_setting( '_plano_c4_texto', array(
		'default'        => 'O Plano Funerário Brasil pode ser dividido em até 20 parcelas de R$300 no boleto ou então em 12 vezes no cartão de crédito.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c4_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 4',
	));
	// Característica 5
	$wp_customize->add_setting( '_plano_c5_titulo', array(
		'default'        => 'URNA FUNERÁRIA INCLUSA',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c5_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 5',
	));
	$wp_customize->add_setting( '_plano_c5_icone', array(
		'default'        => 'fa-bed',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c5_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 5',
	));
	$wp_customize->add_setting( '_plano_c5_texto', array(
		'default'        => 'Todos os nossos planos incluem uma urna mortuária padrão em madeira de alta qualidade.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c5_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 5',
	));
	// Característica 6
	$wp_customize->add_setting( '_plano_c6_titulo', array(
		'default'        => 'ENFEITES FLORAIS',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c6_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 6',
	));
	$wp_customize->add_setting( '_plano_c6_icone', array(
		'default'        => 'fa-leaf',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c6_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 6',
	));
	$wp_customize->add_setting( '_plano_c6_texto', array(
		'default'        => 'Os enfeites florais dentro do caixão e a necromaquiagem facial dos assistidos fazem parte de todos os planos.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c6_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 6',
	));
	// Característica 7
	$wp_customize->add_setting( '_plano_c7_titulo', array(
		'default'        => 'APOIO LOGÍSTICO',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c7_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 7',
	));
	$wp_customize->add_setting( '_plano_c7_icone', array(
		'default'        => 'fa-car',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c7_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 7',
	));
	$wp_customize->add_setting( '_plano_c7_texto', array(
		'default'        => 'Disponibilizamos um agente e um veículo para atendimento exclusivo da família (consulte para saber os locais disponíveis).',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c7_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 7',
	));
	// Característica 8
	$wp_customize->add_setting( '_plano_c8_titulo', array(
		'default'        => 'ÚLTIMA CERIMÔNIA DE DESPEDIDA',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c8_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 8',
	));
	$wp_customize->add_setting( '_plano_c8_icone', array(
		'default'        => 'fa-star',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c8_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 8',
	));
	$wp_customize->add_setting( '_plano_c8_texto', array(
		'default'        => 'Os planos incluem uma cerimônia de 15 minutos dentro de qualquer crematório do brasil.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c8_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 8',
	));
	// Característica 9
	$wp_customize->add_setting( '_plano_c9_titulo', array(
		'default'        => 'LIBERAÇÃO DOCUMENTAL',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c9_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 9',
	));
	$wp_customize->add_setting( '_plano_c9_icone', array(
		'default'        => 'fa-edit',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c9_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 9',
	));
	$wp_customize->add_setting( '_plano_c9_texto', array(
		'default'        => 'Nossos agentes se encarregam de ajudar os conveniados com toda a documentação do assistido.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c9_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 9',
	));
    // Característica 10
	$wp_customize->add_setting( '_plano_c10_titulo', array(
		'default'        => 'TAXAS MUNICIPAIS',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c10_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 10',
	));
	$wp_customize->add_setting( '_plano_c10_icone', array(
		'default'        => 'fa-tags',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c10_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 10',
	));
	$wp_customize->add_setting( '_plano_c10_texto', array(
		'default'        => 'Todas as taxas municipais estão inclusas.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c10_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 10',
	));
    // Característica 11
	$wp_customize->add_setting( '_plano_c11_titulo', array(
		'default'        => 'CÂMARA FRIA',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c11_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 11',
	));
	$wp_customize->add_setting( '_plano_c11_icone', array(
		'default'        => 'fa-cubes',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c11_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 11',
	));
	$wp_customize->add_setting( '_plano_c11_texto', array(
		'default'        => 'Caso haja necessidade, o assistido permanecerá em uma câmara fria por um dia, possibilitando que mais pessoas cheguem para o velório.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c11_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 11',
	));
    // Característica 12
	$wp_customize->add_setting( '_plano_c12_titulo', array(
		'default'        => 'CREMACÃO INCLUSA',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c12_titulo', array(
		'section' => 'plano_carac_section',
		'label' => 'Título da característica 12',
	));
	$wp_customize->add_setting( '_plano_c12_icone', array(
		'default'        => 'fa-industry',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c12_icone', array(
		'section' => 'plano_carac_section',
		'label' => 'Ícone da caracterísitca 12',
	));
	$wp_customize->add_setting( '_plano_c12_texto', array(
		'default'        => 'O serviço do sepultamento em si está incluso em todos os nossos planos. Caso o assistido opte em vida, também está inclusa a cremação.',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_c12_texto', array(
		'type'	=> 'textarea',
		'section' => 'plano_carac_section',
		'label' => 'Conteúdo da característica 12',
	));
    
}

function whiterogue_customize_contato( $wp_customize ) {

    // ====================================
	// = Contato Dados de Contato
	// ====================================
    $wp_customize->add_setting( '_contato_contato_tel', array(
		'default'        => '(11) 3071-1325',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_contato_contato_tel', array(
		'section' => 'contato_contato_section',
		'label' => 'Telefone Principal',
	));
	$wp_customize->add_setting( '_contato_contato_email', array(
		'default'        => 'lais.gomes@aleah.com.br',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_contato_contato_email', array(
		'section' => 'contato_contato_section',
		'label' => 'E-mail de contato',
    ));

    
}


function whiterogue_customize_imagens_fundo( $wp_customize ) {
	
    // ====================================
	// = Imagens de fundo e imagens dos headers
	// ====================================
    $wp_customize->add_setting( '_home_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'home_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_home_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'home_bkg_section',
		'label' 		=> 'Imagem de fundo',
		'description' 	=> 'Selecione a imagem de fundo da home page.',
	) ) );
    $wp_customize->add_setting( '_home_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_home_bkg_img_opc', array(
		'section' => 'home_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_home_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_home_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'home_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );
    $wp_customize->add_setting( '_empresa_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'empresa_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_empresa_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'empresa_bkg_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_empresa_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_empresa_bkg_img_opc', array(
		'section' => 'empresa_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_empresa_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_empresa_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'empresa_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );
    $wp_customize->add_setting( '_plano_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'plano_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_plano_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'plano_bkg_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_plano_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_plano_bkg_img_opc', array(
		'section' => 'plano_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_plano_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_plano_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'plano_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );    
    $wp_customize->add_setting( '_noticias_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'noticias_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_noticias_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'noticias_bkg_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_noticias_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_noticias_bkg_img_opc', array(
		'section' => 'noticias_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_noticias_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_noticias_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'noticias_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );
    $wp_customize->add_setting( '_historias_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'historias_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_historias_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'historias_bkg_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_historias_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_historias_bkg_img_opc', array(
		'section' => 'historias_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_historias_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_historias_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'historias_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );
    $wp_customize->add_setting( '_contato_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'contato_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_contato_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'contato_bkg_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_contato_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_contato_bkg_img_opc', array(
		'section' => 'contato_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_contato_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_contato_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'contato_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );
    $wp_customize->add_setting( '_representantes_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'representantes_bkg_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_representantes_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'representantes_bkg_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_representantes_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_representantes_bkg_img_opc', array(
		'section' => 'representantes_bkg_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_representantes_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_representantes_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'representantes_bkg_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) );
    $wp_customize->add_setting( '_default_bkg_img', array(
		'default'           => get_template_directory_uri().'/images/plano-funerario-floresta1.jpg',
        'section'           => 'top_bar_section',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, '_default_bkg_img', array(
		'priority'	=> 1,
		'section' 		=> 'top_bar_section',
		'label' 		=> 'Imagem de fundo do header',
		'description' 	=> 'Selecione a imagem de fundo do header desta página.',
	) ) );
    $wp_customize->add_setting( '_default_bkg_img_opc', array(
		'default'        => '1',
		'sanitize_callback' => 'whiterogue_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_default_bkg_img_opc', array(
        'priority' => 1,
		'section' => 'top_bar_section',
		'label' => 'Opacidade da imagem (0 a 1)',
        'description' => 'Utilize valores em decimal separado por ponto. Ex: 0.5 ou 0.8',
	));
    $wp_customize->add_setting( '_default_bkg_img_base_color', array(
		'default'           => '#FFFFFF' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_default_bkg_img_base_color', array(
		'priority' 		=> 1,
		'section'     	=> 'top_bar_section',
		'label'       	=> 'Cor da imagem de base',
        'description'   => 'Só funciona se a opacidade for inferior a 1. Utilize uma base escura para um fade escuro e base clara para um fade claro.',
	) ) ); 

}

add_action( 'customize_register', 'whiterogue_customize_general_settings');
add_action( 'customize_register', 'whiterogue_customize_all_panels');
add_action( 'customize_register', 'whiterogue_customize_home_page');
add_action( 'customize_register', 'whiterogue_customize_empresa');
add_action( 'customize_register', 'whiterogue_customize_plano');
add_action( 'customize_register', 'whiterogue_customize_contato');
add_action( 'customize_register', 'whiterogue_customize_imagens_fundo');

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 */
function whiterogue_customize_preview_js() {
	wp_enqueue_script( 'avis-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'whiterogue_customize_preview_js' );


// Sanitizers
function whiterogue_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function whiterogue_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' => 'LIGA',
		'off'=> 'DESLIGA',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function whiterogue_lite_sanitize_background_repeat( $input ) {
	$valid = array(
		'no-repeat'  => 'No Repeat',
		'repeat'     => 'Tile',
		'repeat-x'   => 'Tile Horizontally',
		'repeat-y'   => 'Tile Vertically',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function whiterogue_lite_sanitize_background_position( $input ) {
	$valid = array(
		'left'       => 'Esquerda',
		'center'     => 'Centro',
		'right'      => 'Direita',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function whiterogue_lite_sanitize_background_attachment( $input ) {
	$valid = array(
		'scroll'     => 'Scroll',
		'fixed'      => 'Fixo',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function whiterogue_check_page_empresa() {
    
    if (is_page('empresa')) {
        return 1;
    } else {
        return 0;
    }
}

function whiterogue_check_page_plano() {
    
    if (is_page('plano')) {
        return 1;
    } else {
        return 0;
    }
}

function whiterogue_check_page_noticias() {
    
    if (is_page('noticias')) {
        return 1;
    } else {
        return 0;
    }
}

function whiterogue_check_page_historias() {
    
    if (is_page('historias')) {
        return 1;
    } else {
        return 0;
    }
}

function whiterogue_check_page_contato() {
    
    if (is_page('contato')) {
        return 1;
    } else {
        return 0;
    }
}

function whiterogue_check_page_representantes() {
    
    if (is_page('representantes')) {
        return 1;
    } else {
        return 0;
    }
}
?>