<?php get_header(); ?>

<?php 
    includeFile('components/banner.php', 
        array(
            'title'=>'Resultados', 
            'imagem'=>'ok-office.png',
        )
    ); 
?>

<div class="container py-4" id="search-result">
    <?php 
        includeFile('components/search-field.php', array(
            'title'=>'Encontre a sua viagem ideal'
        ));
    ?>

    <div id="result-field">
        <?php 
            $query = $_GET['results'];
            $paramsSplit = explode('/', $query);
            $searchQuerySplit = explode('][', $paramsSplit[0]);
            $queryPrograma = $searchQuerySplit[0];
            $queryDestino = $searchQuerySplit[1];
            $paged = (get_query_var('paged')) ? absint( get_query_var('paged')) : 1;
            //busca pelos pacotes com 2 parametros
            $args = array (
                'post_type' => 'pacote',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => 4,
                'paged'=> $paged,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'programapacote',
                        'field' => 'slug',
                        'terms' => $queryPrograma,
                    ),
                    array(
                        'taxonomy' => 'paispacote',
                        'field' => 'slug',
                        'terms' => $queryDestino,
                    )
                )
            );
            $busca_query = new WP_Query($args);
            // print_r(get_the_terms( $post->ID , 'paispacote' ));
            
            if($busca_query->have_posts()) : 
                while ($busca_query->have_posts()) : $busca_query->the_post();
                    includeFile('components/post-search-result.php', 
                        array(
                            'title'=>get_the_title($post->ID), 
                            'description'=>get_the_excerpt($post->ID),
                            'srcImg'=>get_the_post_thumbnail_url($post->ID),
                            'href'=>get_home_url() . '/destinos/'
                        )
                    ); 
                endwhile;
            endif;
        ?>

        <nav class="pagination d-flex justify-content-center w-100">
            <div class="pagination-wrapper d-flex justify-content-around">
                <?php 
                    $url = get_home_url($post->ID) . '/resultados-da-busca/?results=' . $queryPrograma . '%5D%5B' . $queryDestino;
                    $big = 999999999;
                    $pagination_args = array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $busca_query->max_num_pages,
                        'prev_text' => '<',
                        'next_text' => '>'
                    );
                    echo paginate_links( $pagination_args );
                ?>
            </div>
        </nav>
    </div>
</div>

<?php get_footer(); ?>