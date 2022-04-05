<?php 
    function create_pais_cpt() {

        $labels = array(
            'name' => _x( 'países', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'país', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Países', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'país', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'Arquivos pais', 'textdomain' ),
            'attributes' => __( 'Atributos pais', 'textdomain' ),
            'parent_item_colon' => __( 'Pais de pais:', 'textdomain' ),
            'all_items' => __( 'Todos os países', 'textdomain' ),
            'add_new_item' => __( 'Adicionar novo país', 'textdomain' ),
            'add_new' => __( 'Adicionar novo', 'textdomain' ),
            'new_item' => __( 'Novo país', 'textdomain' ),
            'edit_item' => __( 'Editar país', 'textdomain' ),
            'update_item' => __( 'Atualizar país', 'textdomain' ),
            'view_item' => __( 'Ver país', 'textdomain' ),
            'view_items' => __( 'Ver países', 'textdomain' ),
            'search_items' => __( 'Pesquisar país', 'textdomain' ),
            'not_found' => __( 'Não encontrado', 'textdomain' ),
            'not_found_in_trash' => __( 'Não encontrado na lixeira', 'textdomain' ),
            'featured_image' => __( 'Imagem de destaque', 'textdomain' ),
            'set_featured_image' => __( 'Definir como imagem de destaque', 'textdomain' ),
            'remove_featured_image' => __( 'Remover imagem de destaque', 'textdomain' ),
            'use_featured_image' => __( 'Usar como imagem de destaque', 'textdomain' ),
            'insert_into_item' => __( 'Inserir neste país', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Carregado para este pais', 'textdomain' ),
            'items_list' => __( 'Listar países', 'textdomain' ),
            'items_list_navigation' => __( 'Listar navegação de países', 'textdomain' ),
            'filter_items_list' => __( 'Filtrar lista de países', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'pais', 'textdomain' ),
            'description' => __( 'Países ofertados', 'textdomain' ),
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
        register_post_type( 'país', $args );

    }
    add_action( 'init', 'create_pais_cpt', 0 );
?>