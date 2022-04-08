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

        if ( is_category() == true || is_single()) {
            // só vai carregar se estiver em uma das categorias do blog
            wp_enqueue_style('blog', get_template_directory_uri() . '/assets/styles/blog.css');
        }

        if (is_page('contato')) {
            // só vai carregar se estiver na page contato
            wp_enqueue_style('contato', get_template_directory_uri() . '/assets/styles/contato.css');
        }
        if (is_page('equipe')) {
            // só vai carregar se estiver na page equipe
            wp_enqueue_style('equipe', get_template_directory_uri() . '/assets/styles/team.css');
        }
        if (is_page('sobre')) {
            // só vai carregar se estiver na page sobre
            wp_enqueue_style('sobre', get_template_directory_uri() . '/assets/styles/sobre.css');
        }
        if (is_page('servicos') == true ) {
            // só vai carregar se estiver na page team
            wp_enqueue_style('servicos', get_template_directory_uri() . '/assets/styles/servicos.css');
        }if (is_page('programas') == true ) {
            // só vai carregar se estiver na page team
            wp_enqueue_style('programas', get_template_directory_uri() . '/assets/styles/programas.css');
        }


        if(is_page('destinos')) {
            // só vai carregar se estiver na page destinos
            wp_enqueue_style('destinos', get_template_directory_uri() . '/assets/styles/destinos.css');
        }
        
        if(is_singular('destino')) {
            wp_enqueue_style('destino', get_template_directory_uri() . '/assets/styles/singles/destino.css');
        }

        if ( is_front_page() ) {
            // só vai carregar se estiver na page team
            wp_enqueue_style('home', get_template_directory_uri() . '/assets/styles/front-page.css');
        }
      
        if ( is_page('promocoes') ) {
            // só vai carregar se estiver na page team
            wp_enqueue_style('promocoes', get_template_directory_uri() . '/assets/styles/promocoes.css');
        }

        if ( is_page('resultados-da-busca') ) {
            // só vai carregar se estiver na page team
            wp_enqueue_style('resultadosDaBusca', get_template_directory_uri() . '/assets/styles/resultados-da-busca.css');
        }

        if ( is_page('search') ) {
            // só vai carregar se estiver na page team
            wp_enqueue_style('search', get_template_directory_uri() . '/assets/styles/search.css');
        }
      
        wp_enqueue_style('header', get_template_directory_uri().'/assets/styles/header.css', array(),'1.0.0', 'all');
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/styles/footer.css', array(),'1.0.0', 'all');

        wp_enqueue_style('swiperstyle', get_template_directory_uri() . '/assets/styles/swiper-bundle.min.css');

        //estilos dos componentes
        wp_enqueue_style('banner', get_template_directory_uri() . '/assets/styles/components/banner.css');
        wp_enqueue_style('card-destiny', get_template_directory_uri() . '/assets/styles/components/card-destiny.css');
        wp_enqueue_style('card-testimonial', get_template_directory_uri() . '/assets/styles/components/card-testimonial.css');
        wp_enqueue_style('galery-destiny', get_template_directory_uri() . '/assets/styles/components/galery-destiny.css');
        wp_enqueue_style('life-cost', get_template_directory_uri() . '/assets/styles/components/life-cost.css');
        wp_enqueue_style('post-search-result', get_template_directory_uri() . '/assets/styles/components/post-search-result.css');
    }
    add_action('wp_enqueue_scripts', 'css_files');

    function script_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));

        wp_enqueue_script('header', get_template_directory_uri() . '/assets/scripts/header.js', array(), '1.0.0', 'all');

        wp_enqueue_script( 'swiperjsbundle', get_template_directory_uri() . '/assets/scripts/swiper-bundle.min.js', array(), '8.0.7', true );
		wp_enqueue_script( 'swiperinit', get_template_directory_uri() . '/assets/scripts/swiper-init.js', array(), '8.0.7', true );
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
    require_once(get_template_directory().'/app/cpt/destinos-cpt.php');
    require_once(get_template_directory().'/app/cpt/destinos-galery-cpt.php');
    require_once(get_template_directory().'/app/cpt/parceiros-cpt.php');
    require_once(get_template_directory().'/app/cpt/depoimentos-cpt.php');
    require_once(get_template_directory().'/app/cpt/pacotes-cpt.php');
    require_once(get_template_directory().'/app/cpt/banner-cpt.php');
    
    //Filtro para excerpt nao ultrapassar o tamanho e quebrar layout
    function wpdocs_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    function includeFile($fileName, $variables) {
        extract($variables);
        include($fileName);
    }
?>

