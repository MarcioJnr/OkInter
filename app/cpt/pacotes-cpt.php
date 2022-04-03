<?php
// Register Custom Post Type pacote
function create_pacote_cpt() {

	$labels = array(
		'name' => _x( 'Pacotes de viagem', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'pacote', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Pacotes de Viagem', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'pacote', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'pacote Archives', 'textdomain' ),
		'attributes' => __( 'pacote Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent pacote:', 'textdomain' ),
		'all_items' => __( 'All pacotes', 'textdomain' ),
		'add_new_item' => __( 'Add New pacote', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New pacote', 'textdomain' ),
		'edit_item' => __( 'Edit pacote', 'textdomain' ),
		'update_item' => __( 'Update pacote', 'textdomain' ),
		'view_item' => __( 'View pacote', 'textdomain' ),
		'view_items' => __( 'View pacotes', 'textdomain' ),
		'search_items' => __( 'Search pacote', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into pacote', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this pacote', 'textdomain' ),
		'items_list' => __( 'pacotes list', 'textdomain' ),
		'items_list_navigation' => __( 'pacotes list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter pacotes list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'pacote', 'textdomain' ),
		'description' => __( 'pacotes de viagem da OK', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-site',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'page-attributes', 'custom-fields'),
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
	register_post_type( 'pacote', $args );

}
add_action( 'init', 'create_pacote_cpt', 0 );


/////////////////////////////////////////////////////// TAXONOMY ///////////////////////////////////////////////////////////////////////

// Register Taxonomy paispacote
function create_paispacote_tax() {

	$labels = array(
		'name'              => _x( 'País do pacote', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'paispacote', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search paispacotes', 'textdomain' ),
		'all_items'         => __( 'All paispacotes', 'textdomain' ),
		'parent_item'       => __( 'Parent paispacote', 'textdomain' ),
		'parent_item_colon' => __( 'Parent paispacote:', 'textdomain' ),
		'edit_item'         => __( 'Edit pais do pacote', 'textdomain' ),
		'update_item'       => __( 'Update pais do pacote', 'textdomain' ),
		'add_new_item'      => __( 'Add New país do pacote', 'textdomain' ),
		'new_item_name'     => __( 'New pais do pacote Name', 'textdomain' ),
		'menu_name'         => __( 'Pais do pacote', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Pais ao qual o pacote diz respeito', 'textdomain' ),
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
		'query_var' => 'paispacote',
	);
	register_taxonomy( 'paispacote', array('pacote', 'pacotes'), $args );

}
add_action( 'init', 'create_paispacote_tax' );

// Register Taxonomy programapacote
function create_programapacote_tax() {

	$labels = array(
		'name'              => _x( 'Programa do pacote', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'programapacote', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search programapacotes', 'textdomain' ),
		'all_items'         => __( 'All programas dos pacotes', 'textdomain' ),
		'parent_item'       => __( 'Parent programapacote', 'textdomain' ),
		'parent_item_colon' => __( 'Parent programapacote:', 'textdomain' ),
		'edit_item'         => __( 'Edit programa do pacote', 'textdomain' ),
		'update_item'       => __( 'Update programa do pacote', 'textdomain' ),
		'add_new_item'      => __( 'Add New programa do pacote', 'textdomain' ),
		'new_item_name'     => __( 'New programa do pacote Name', 'textdomain' ),
		'menu_name'         => __( 'Programa do pacote', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Programa ao qual o pacote está relacionado', 'textdomain' ),
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
		'query_var' => 'programapacote',
	);
	register_taxonomy( 'programapacote', array('pacote', 'pacotes'), $args );

}
add_action( 'init', 'create_programapacote_tax' );



// Register Taxonomy Promocaopacote
function create_promocaopacote_tax() {

	$labels = array(
		'name'              => _x( 'Pacotes em promoção ', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Promocao pacote', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Promocaopacotes', 'textdomain' ),
		'all_items'         => __( 'All Promocaopacotes', 'textdomain' ),
		'parent_item'       => __( 'Parent Promocaopacote', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Promocaopacote:', 'textdomain' ),
		'edit_item'         => __( 'Edit Promocaopacote', 'textdomain' ),
		'update_item'       => __( 'Update Promocaopacote', 'textdomain' ),
		'add_new_item'      => __( 'Add New Promocaopacote', 'textdomain' ),
		'new_item_name'     => __( 'New Promocaopacote Name', 'textdomain' ),
		'menu_name'         => __( 'Promoção', 'textdomain' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'tax para saber se um pacote está ou não da promoção', 'textdomain' ),
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
		'query_var' => 'promocaopacote',
	);
	register_taxonomy( 'promocaopacote', array('pacote', 'pacotes'), $args );

}
add_action( 'init', 'create_promocaopacote_tax' );
?>