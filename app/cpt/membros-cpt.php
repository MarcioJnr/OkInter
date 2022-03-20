<?php
    /////// MEMBROS 
    function create_membro_cpt() {

        $labels = array(
            'name' => _x( 'membros', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'membro', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Membros', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'membro', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'membro Archives', 'textdomain' ),
            'attributes' => __( 'membro Attributes', 'textdomain' ),
            'parent_item_colon' => __( 'Parent membro:', 'textdomain' ),
            'all_items' => __( 'All membros', 'textdomain' ),
            'add_new_item' => __( 'Add New membro', 'textdomain' ),
            'add_new' => __( 'Add New', 'textdomain' ),
            'new_item' => __( 'New membro', 'textdomain' ),
            'edit_item' => __( 'Edit membro', 'textdomain' ),
            'update_item' => __( 'Update membro', 'textdomain' ),
            'view_item' => __( 'View membro', 'textdomain' ),
            'view_items' => __( 'View membros', 'textdomain' ),
            'search_items' => __( 'Search membro', 'textdomain' ),
            'not_found' => __( 'Not found', 'textdomain' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
            'featured_image' => __( 'Featured Image', 'textdomain' ),
            'set_featured_image' => __( 'Set featured image', 'textdomain' ),
            'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
            'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
            'insert_into_item' => __( 'Insert into membro', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this membro', 'textdomain' ),
            'items_list' => __( 'membros list', 'textdomain' ),
            'items_list_navigation' => __( 'membros list navigation', 'textdomain' ),
            'filter_items_list' => __( 'Filter membros list', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'membro', 'textdomain' ),
            'description' => __( 'Equipe da Ok Intercambio', 'textdomain' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-groups',
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
        register_post_type( 'membro', $args );

    }
    add_action( 'init', 'create_membro_cpt', 0 );
?>