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

    //Função para adicionar os arquivos de estilização
    function css_files() {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    }
    add_action('wp_enqueue_scripts', 'css_files');

    //Função para adicionar scripts
    function script_files(){
        wp_enqueue_script('jquery'); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
        wp_enqueue_script('jquery-min', get_template_directory_uri() .'/assets/lib/jquery.min.js');
    }

    add_action('wp_enqueue_scripts', 'script_files');
?>

