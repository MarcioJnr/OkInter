<?php 
    // Função para configurar o tema
    function theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
            )
        );
    }
    add_action('after_setup_theme','theme_setup');

    function css_files() {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('manrope', 'https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap', array(), '1.0.0', 'all');
        wp_enqueue_style('style', get_template_directory_uri().'/assets/styles/style.css', array(),'1.0.0', 'all');

        if ( is_category() == true ) {
            // só vai carregar se estiver em uma das categorias do blog
            wp_enqueue_style('blog', get_template_directory_uri() . '/assets/styles/blog.css');
        }

        if (is_page('contato')) {
            // só vai carregar se estiver em uma das categorias do blog
            wp_enqueue_style('page contato', get_template_directory_uri() . '/assets/styles/contato.css');
        }
      
        wp_enqueue_style('header', get_template_directory_uri().'/assets/styles/header.css', array(),'1.0.0', 'all');
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/styles/footer.css', array(),'1.0.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'css_files');

    function script_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));

        wp_enqueue_script('header', get_template_directory_uri() . '/assets/scripts/header.js', array(), '1.0.0', 'all');

    }

    add_action('wp_enqueue_scripts', 'script_files');

    ///////////////////////utils
    /*
    add_filter( 'manage_post_posts_columns', 'smashing_post_columns' );
    function smashing_post_columns( $columns ) {
    
    
        $columns = array(
        'cb' => $columns['cb'],
        'image' => __( 'Image' ),
        'title' => __( 'Title' ),
        'categories' => __('Categories'),
        'author' => __('Author'),
        'tags' => __('Tags'),
        'date' => __('Date'),
        'price' => __( 'Price', 'smashing' ),
        'area' => __( 'Area', 'smashing' ),
        );
    
    
    return $columns;
    }
    */
    function wpse_the_category_list( $categories, $post_id ) {
        return array_slice( $categories, 0, 4, true );
    }
    add_filter( 'the_category_list', 'wpse_the_category_list', 10, 4 );

    //php the_SVG('nomedoarquivo')
    define("IMGPATH", get_bloginfo("template_url") . "/assets/images/");
    define("SVGPATH", IMGPATH . "/svg/");
    require_once(get_template_directory().'/app/utils/get-svg.php');


    ///////////////CUSTOM POSTS TYPES
    require_once(get_template_directory().'/app/cpt/membros-cpt.php');
?>

