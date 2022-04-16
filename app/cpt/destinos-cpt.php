<?php
// Register Custom Post Type depoimento
function create_destinos_cpt() {

	$labels = array(
		'name' => _x( 'destinos', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'destino', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Destinos', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'destino', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Arquivos de destino', 'textdomain' ),
		'attributes' => __( 'Atributos de destino', 'textdomain' ),
		'parent_item_colon' => __( 'Parent destino:', 'textdomain' ),
		'all_items' => __( 'Todos os destinos', 'textdomain' ),
		'add_new_item' => __( 'Adicionar novo destino', 'textdomain' ),
		'add_new' => __( 'Adicionar novo destino', 'textdomain' ),
		'new_item' => __( 'Novo destino', 'textdomain' ),
		'edit_item' => __( 'Editar destino', 'textdomain' ),
		'update_item' => __( 'Atualizar destino', 'textdomain' ),
		'view_item' => __( 'Ver destino', 'textdomain' ),
		'view_items' => __( 'Ver destinos', 'textdomain' ),
		'search_items' => __( 'Pesquisar destinos', 'textdomain' ),
		'not_found' => __( 'Não encontrado', 'textdomain' ),
		'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
		'featured_image' => __( 'Imagem de destaque', 'textdomain' ),
		'set_featured_image' => __( 'Mudar imagem de destaque', 'textdomain' ),
		'remove_featured_image' => __( 'Remover imagem de destaque', 'textdomain' ),
		'use_featured_image' => __( 'Usar como imagem de destaque', 'textdomain' ),
		'insert_into_item' => __( 'Inserir em destino', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Carregar neste destino', 'textdomain' ),
		'items_list' => __( 'Lista de destinos', 'textdomain' ),
		'items_list_navigation' => __( 'Navegar na lista de destinos', 'textdomain' ),
		'filter_items_list' => __( 'Filtrar lista de destinos', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'destino', 'textdomain' ),
		'description' => __('destinos ofertados', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
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
	register_post_type( 'destino', $args );

}
add_action( 'init', 'create_destinos_cpt');
?>