<?php
// Register Custom Post Type depoimento
function create_depoimento_cpt() {

	$labels = array(
		'name' => _x( 'depoimentos', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'depoimento', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Depoimentos', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'depoimento', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'depoimento Archives', 'textdomain' ),
		'attributes' => __( 'depoimento Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent depoimento:', 'textdomain' ),
		'all_items' => __( 'All depoimentos', 'textdomain' ),
		'add_new_item' => __( 'Add New depoimento', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New depoimento', 'textdomain' ),
		'edit_item' => __( 'Edit depoimento', 'textdomain' ),
		'update_item' => __( 'Update depoimento', 'textdomain' ),
		'view_item' => __( 'View depoimento', 'textdomain' ),
		'view_items' => __( 'View depoimentos', 'textdomain' ),
		'search_items' => __( 'Search depoimento', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into depoimento', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this depoimento', 'textdomain' ),
		'items_list' => __( 'depoimentos list', 'textdomain' ),
		'items_list_navigation' => __( 'depoimentos list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter depoimentos list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'depoimento', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-quote',
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
	register_post_type( 'depoimento', $args );

}
add_action( 'init', 'create_depoimento_cpt', 0 );
?>


<?php
// Register Taxonomy pais depoimento
function create_paisdepoimento_tax() {

	$labels = array(
		'name'              => _x( 'paises dos depoimentos', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'pais depoimento', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search paises depoimentos', 'textdomain' ),
		'all_items'         => __( 'All paises depoimentos', 'textdomain' ),
		'parent_item'       => __( 'Parent pais depoimento', 'textdomain' ),
		'parent_item_colon' => __( 'Parent pais depoimento:', 'textdomain' ),
		'edit_item'         => __( 'Edit pais do depoimento', 'textdomain' ),
		'update_item'       => __( 'Update pais do depoimento', 'textdomain' ),
		'add_new_item'      => __( 'Add novo pais', 'textdomain' ),
		'new_item_name'     => __( 'New pais depoimento Name', 'textdomain' ),
		'menu_name'         => __( 'País do depoimento', 'textdomain' ),
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
		'query_var' => '$paisdepoimento',
	);
	register_taxonomy( 'paisdepoimento', array('depoimento', 'depoimentos'), $args );

}
add_action( 'init', 'create_paisdepoimento_tax' );
?>