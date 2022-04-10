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
            $querySplit = explode('][', $query);
            $queryPrograma = $querySplit[0];
            $queryDestino = $querySplit[1];
            $args = array (
                'post_type' => 'pacote',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => 4,
                'paged'=>1,
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

            if($busca_query->have_posts()) : 
                while ($busca_query->have_posts()) : $busca_query->the_post();
                    includeFile('components/post-search-result.php', 
                        array(
                            'title'=>get_the_title($post->ID), 
                            'description'=>get_the_excerpt($post->ID),
                            'srcImg'=>get_the_post_thumbnail_url($post->ID),
                            'href'=>get_the_permalink($post->ID)
                        )
                    ); 
                endwhile;
            endif;
        ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center gap-3">
                <li class="page-item"><a class="page-link rounded-circle" href="#"><</a></li>
                <li class="page-item active"><a class="page-link rounded-circle" href="#">1</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">></a></li>
            </ul>
        </nav>
    </div>
</div>

<?php get_footer(); ?>