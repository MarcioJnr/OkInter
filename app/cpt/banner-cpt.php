<?php
// Register Custom Post Type banner
function create_banner_cpt() {

	$labels = array(
		'name' => _x( 'banners', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'banner', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Banners', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'banner', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'banner Archives', 'textdomain' ),
		'attributes' => __( 'banner Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent banner:', 'textdomain' ),
		'all_items' => __( 'All banners', 'textdomain' ),
		'add_new_item' => __( 'Add New banner', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New banner', 'textdomain' ),
		'edit_item' => __( 'Edit banner', 'textdomain' ),
		'update_item' => __( 'Update banner', 'textdomain' ),
		'view_item' => __( 'View banner', 'textdomain' ),
		'view_items' => __( 'View banners', 'textdomain' ),
		'search_items' => __( 'Search banner', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into banner', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this banner', 'textdomain' ),
		'items_list' => __( 'banners list', 'textdomain' ),
		'items_list_navigation' => __( 'banners list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter banners list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'banner', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
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
	register_post_type( 'banner', $args );

}
add_action( 'init', 'create_banner_cpt', 0 );
?>