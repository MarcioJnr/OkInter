<?php
// Register Custom Post Type depoimento
function create_destinos_galery_cpt() {

	$labels = array(
		'name' => _x( 'destinosGalery', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'destinoGalery', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Galeria dos destinos', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'galeria dos destinos', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Arquivos da galeria', 'textdomain' ),
		'attributes' => __( 'Atributos de galeria', 'textdomain' ),
		'parent_item_colon' => __( 'Parent galeria:', 'textdomain' ),
		'all_items' => __( 'Todos as fotos da galeria', 'textdomain' ),
		'add_new_item' => __( 'Adicionar nova foto', 'textdomain' ),
		'add_new' => __( 'Adicionar nova foto', 'textdomain' ),
		'new_item' => __( 'Nova foto', 'textdomain' ),
		'edit_item' => __( 'Editar foto', 'textdomain' ),
		'update_item' => __( 'Atualizar foto', 'textdomain' ),
		'view_item' => __( 'Ver foto', 'textdomain' ),
		'view_items' => __( 'Ver fotos', 'textdomain' ),
		'search_items' => __( 'Pesquisar fotos', 'textdomain' ),
		'not_found' => __( 'Não encontrado', 'textdomain' ),
		'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
		'featured_image' => __( 'Foto', 'textdomain' ),
		'set_featured_image' => __( 'Mudar foto', 'textdomain' ),
		'remove_featured_image' => __( 'Remover foto', 'textdomain' ),
		'use_featured_image' => __( 'Usar como galeria', 'textdomain' ),
		'insert_into_item' => __( 'Inserir em galeria', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Carregar nesta galeria', 'textdomain' ),
		'items_list' => __( 'Lista de fotos', 'textdomain' ),
		'items_list_navigation' => __( 'Navegar na lista de fotos', 'textdomain' ),
		'filter_items_list' => __( 'Filtrar lista de fotos', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'galeria', 'textdomain' ),
		'description' => __('Galeria dos destinos', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 20,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'galeria', $args );
}
add_action( 'init', 'create_destinos_galery_cpt');
?>