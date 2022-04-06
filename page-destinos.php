<?php get_header(); ?>

<?php 
    includeFile('components/banner.php', 
        array(
            'title'=>'Destinos', 
            'imagem'=>'ok-office.png',
        )
    ); 
?>

<main class="container py-5">
    <h2 class="text-center mb-4">Destinos mais procurados</h2>
    <p class="mb-5">Veja os principais destinos ofertados pela OK Intercâmbio. Para saber todas as opções de cidades disponíveis, você precisa só clicar em um dos países abaixo e poderá conferir as principais informações de cada destinos. Se a cidade que você busca não estiver nas opções, entre em contato conosco para saber mais. </p>

    <div class="container mb-5" id="destinations">
        <div class="row gap-3 d-flex justify-content-center">
            <?php 
                $args = array (
                    'post_type' => 'destino',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'tipo',
                            'field' => 'slug',
                            'terms' => 'pais'
                        )
                    )
                );
                $pais_query = new WP_Query($args);

                if($pais_query->have_posts()) : 
                    while ($pais_query->have_posts()) : $pais_query->the_post();
                        echo '<div class="col-5 col-lg-4 px-0">';
                            includeFile('components/card-destiny.php', 
                                array(
                                    'href'=>get_permalink($post->ID),
                                    'directoryUrl'=>get_the_post_thumbnail_url($post->ID),
                                    'destinyName'=>get_the_title($post->ID)
                                )
                            ); 
                        echo '</div>';
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>

    <h2 class="text-center mb-4">Universidades no exterior</h2>
    <div class="container mb-5" id="universities">
        <div class="row gap-3 d-flex justify-content-center">
            <?php 
                $args = array (
                    'post_type' => 'destino',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'tipo',
                            'field' => 'slug',
                            'terms' => 'universidade'
                        )
                    )
                );
                $university_query = new WP_Query($args);
                if($university_query->have_posts()) : 
                    while ($university_query->have_posts()) : $university_query->the_post();
                        echo '<div class="col-5 col-lg-4 px-0">';
                            includeFile('components/card-destiny.php', 
                                array(
                                    'href'=>get_permalink($post->ID),
                                    'directoryUrl'=>get_the_post_thumbnail_url($post->ID),
                                    'destinyName'=>get_the_title($post->ID)
                                )
                            ); 
                        echo '</div>';
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>

    <h2 class="text-center mb-4">Depoimentos</h2>
    <h6 class="text-center mb-4">Nossos clientes falam</h6>
    <div class="container mb-5 px-0" id="depositions">
        <div id="testimonial-carousel" class="carousel slide d-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php 
                    $args = array (
                        'post_type' => 'depoimento',
                        'posts_per_page' => 3,
                    );
                    $testimonial_query = new WP_Query($args);
                    $counter = 0;

                    if($testimonial_query->have_posts()) : 
                        while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                            if($counter == 0) :
                                echo '<div class="carousel-item active">';
                            else :
                                echo '<div class="carousel-item">';
                            endif;

                            includeFile('components/card-testimonial.php', 
                                array(
                                    'directory'=>get_the_post_thumbnail_url($post->ID),
                                    'person'=>get_the_title($post->ID),
                                    'text'=>get_the_excerpt($post->ID)
                                )
                            ); 

                            $counter=$counter+1;

                            echo '</div>';
                        endwhile;
                    
                    else :
                        echo '<h1>Nada</h1>';
                    endif;
                ?>
            </div>

            <div class="d-flex justify-content-end" id="control-buttons">
                <button class="btn shadow-none" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-left" alt="Slide anterior">
                </button>

                <button class="btn shadow-none" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right" alt="Próximo slide">
                </button>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>