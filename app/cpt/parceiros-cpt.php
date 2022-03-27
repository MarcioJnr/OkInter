<?php
// Register Custom Post Type parceiro
function create_parceiro_cpt() {

	$labels = array(
		'name' => _x( 'parceiros', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'parceiro', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Parceiros', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'parceiro', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'parceiro Archives', 'textdomain' ),
		'attributes' => __( 'parceiro Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent parceiro:', 'textdomain' ),
		'all_items' => __( 'All parceiros', 'textdomain' ),
		'add_new_item' => __( 'Add New parceiro', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New parceiro', 'textdomain' ),
		'edit_item' => __( 'Edit parceiro', 'textdomain' ),
		'update_item' => __( 'Update parceiro', 'textdomain' ),
		'view_item' => __( 'View parceiro', 'textdomain' ),
		'view_items' => __( 'View parceiros', 'textdomain' ),
		'search_items' => __( 'Search parceiro', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into parceiro', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this parceiro', 'textdomain' ),
		'items_list' => __( 'parceiros list', 'textdomain' ),
		'items_list_navigation' => __( 'parceiros list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter parceiros list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'parceiro', 'textdomain' ),
		'description' => __( 'Parceiros da Ok', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-buddypress-logo',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 25,
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
	register_post_type( 'parceiro', $args );

}
add_action( 'init', 'create_parceiro_cpt', 0 );
?>