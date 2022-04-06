<?php
// Register Custom Post Type depoimento
function create_pais_cpt() {

	$labels = array(
		'name' => _x( 'paises', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'pais', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Países', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'país', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Arquivos de país', 'textdomain' ),
		'attributes' => __( 'Atributos de país', 'textdomain' ),
		'parent_item_colon' => __( 'Parent país:', 'textdomain' ),
		'all_items' => __( 'Todos os países', 'textdomain' ),
		'add_new_item' => __( 'Adicionar novo país', 'textdomain' ),
		'add_new' => __( 'Adicionar novo país', 'textdomain' ),
		'new_item' => __( 'Novo país', 'textdomain' ),
		'edit_item' => __( 'Editar país', 'textdomain' ),
		'update_item' => __( 'Atualizar país', 'textdomain' ),
		'view_item' => __( 'Ver país', 'textdomain' ),
		'view_items' => __( 'Ver países', 'textdomain' ),
		'search_items' => __( 'Pesquisar país', 'textdomain' ),
		'not_found' => __( 'Não encontrado', 'textdomain' ),
		'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
		'featured_image' => __( 'Imagem de destaque', 'textdomain' ),
		'set_featured_image' => __( 'Mudar imagem de destaque', 'textdomain' ),
		'remove_featured_image' => __( 'Remover imagem de destaque', 'textdomain' ),
		'use_featured_image' => __( 'Usar como imagem de destaque', 'textdomain' ),
		'insert_into_item' => __( 'Inserir em país', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Carregar neste país', 'textdomain' ),
		'items_list' => __( 'Lista de países', 'textdomain' ),
		'items_list_navigation' => __( 'Navegar na lista de países', 'textdomain' ),
		'filter_items_list' => __( 'Filtrar lista de países', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'pais', 'textdomain' ),
		'description' => __('Países ofertados', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats', 'custom-fields'),
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
	register_post_type( 'pais', $args );

}
add_action( 'init', 'create_pais_cpt');
?>


<?php
// Register Taxonomy pais depoimento
function create_cidade_tax() {

	$labels = array(
		'name'              => _x( 'cidades', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'cidade', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Pesquisar cidades', 'textdomain' ),
		'all_items'         => __( 'Todas as cidades', 'textdomain' ),
		'parent_item'       => __( 'Pais de cidades', 'textdomain' ),
		'parent_item_colon' => __( 'Pais de cidades:', 'textdomain' ),
		'edit_item'         => __( 'Editar cidade', 'textdomain' ),
		'update_item'       => __( 'Atualizar cidade', 'textdomain' ),
		'add_new_item'      => __( 'Adicionar nova cidade', 'textdomain' ),
		'new_item_name'     => __( 'Adicionar novo nome de cidade', 'textdomain' ),
		'menu_name'         => __( 'Cidade', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'textdomain' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
		'query_var' => '$cidade',
	);
	register_taxonomy( 'cidade', array('pais', 'paises'), $args );

}
add_action( 'init', 'create_cidade_tax' );
?>