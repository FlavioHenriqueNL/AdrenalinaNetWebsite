<?php
// Funções para Limpar o Header
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'start_post_rel_link', 10, 0 );
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');

// Ativar Thumbnail
	add_theme_support( 'post-thumbnails' ); 
	//Adicionar tamanho de imagem customizado
		add_image_size( 'parceiros', 100,250, true);

// Registrar Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
// Registro de Menu
	register_nav_menus( array(
		'header' => __( 'Menu Header', 'ADRENALINANET' ),
	) );

// Custom posts types
function custom_post_type_slider(){

	$labels = array(
		'name' => 'Sliders',
			'singular_name' => 'Slider',
			'menu_name' => 'Sliders',
			'add_new' => 'Adicionar novo',
			'add_new_item' => 'Adicionar novo Slider',
			'edit' => 'Editar',
			'edit_item' => 'Editar Slider',
			'new_item' => 'Novo Slider',
			'view' => 'Ver Slider',
			'view_item' => 'Ver Slider',
			'search_items' => 'Procurar Sliders',
			'not_found' => 'Nenhum Slider Encontrado',
			'not_found_in_trash' => 'Nenhum Slider Encontrado no Lixo',
	);

	$args = array(
		'label' => 'Slider',
		'description' => 'Slider',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'servicos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title'),
		'labels' => $labels
	);
	register_post_type("slider", $args);
}
add_action('init', 'custom_post_type_slider');

function custom_post_type_parceiros(){

	$labels = array(
		'name' => 'Parceiros',
			'singular_name' => 'Parceiro',
			'menu_name' => 'Parceiros',
			'add_new' => 'Adicionar novo',
			'add_new_item' => 'Adicionar novo Parceiro',
			'edit' => 'Editar',
			'edit_item' => 'Editar Parceiro',
			'new_item' => 'Novo Parceiro',
			'view' => 'Ver Parceiro',
			'view_item' => 'Ver Parceiro',
			'search_items' => 'Procurar Parceiros',
			'not_found' => 'Nenhum Parceiro Encontrado',
			'not_found_in_trash' => 'Nenhum Parceiro Encontrado no Lixo',
	);

	$args = array(
		'label' => 'Parceiro',
		'description' => 'Parceiro',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'parceiros', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'labels' => $labels
	);
	register_post_type("parceiros", $args);
}
add_action('init', 'custom_post_type_parceiros');

function custom_post_type_cobertura(){

	$labels = array(
		'name' => 'Área de Cobertura',
			'singular_name' => 'Área de cobertura',
			'menu_name' => 'Área de Cobertura',
			'add_new' => 'Adicionar nova',
			'add_new_item' => 'Adicionar nova Área de cobertura',
			'edit' => 'Editar',
			'edit_item' => 'Editar Área de cobertura',
			'new_item' => 'Nova Área de cobertura',
			'view' => 'Ver Área de cobertura',
			'view_item' => 'Ver Área de cobertura',
			'search_items' => 'Procurar Área de Cobertura',
			'not_found' => 'Nenhuma Área de cobertura Encontrado',
			'not_found_in_trash' => 'Nenhuma Área de cobertura Encontrado no Lixo',
	);

	$args = array(
		'label' => 'Área de cobertura',
		'description' => 'Área de cobertura',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'area-cobertura', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title'),
		'labels' => $labels
	);
	register_post_type("cobertura", $args);
}
add_action('init', 'custom_post_type_cobertura');

function custom_post_type_planos(){

	$labels = array(
		'name' => 'Planos',
			'singular_name' => 'Plano',
			'menu_name' => 'Planos',
			'add_new' => 'Adicionar novo',
			'add_new_item' => 'Adicionar novo Plano',
			'edit' => 'Editar',
			'edit_item' => 'Editar Plano',
			'new_item' => 'Novo Plano',
			'view' => 'Ver Plano',
			'view_item' => 'Ver Plano',
			'search_items' => 'Procurar Planos',
			'not_found' => 'Nenhum Plano Encontrado',
			'not_found_in_trash' => 'Nenhum Plano Encontrado no Lixo',
	);

	$args = array(
		'label' => 'Plano',
		'description' => 'Plano',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'planos', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'excerpt'),
		'labels' => $labels
	);
	register_post_type("planos", $args);
}
add_action('init', 'custom_post_type_planos');

function custom_post_type_downloads(){

	$labels = array(
		'name' => 'Downloads',
		'singular_name' => 'Download',
		'menu_name' => 'Downloads',
		'add_new' => 'Adicionar novo',
		'add_new_item' => 'Adicionar novo Download',
		'edit' => 'Editar',
		'edit_item' => 'Editar Download',
		'new_item' => 'Novo Download',
		'view' => 'Ver Download',
		'view_item' => 'Ver Download',
		'search_items' => 'Procurar Downloads',
		'not_found' => 'Nenhum Download Encontrado',
		'not_found_in_trash' => 'Nenhum Download Encontrado no Lixo',
	);

	$args = array(
		'label' => 'Downloads',
		'description' => 'Downloads',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'downloads', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'excerpt'),
		'taxonomies'  => array('category'),
		'labels' => $labels
	);
	register_post_type("downloads", $args);
}
add_action('init', 'custom_post_type_downloads');
?>