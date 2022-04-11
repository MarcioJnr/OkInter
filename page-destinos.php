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

    <div class="row mb-5" id="destinations">
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
                while ($pais_query->have_posts()) : $pais_query->the_post(); ?>
                    <div class="col-6 col-lg-3 mb-4">
                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="card border-0 shadow position-relative">
                            <img class="rounded-3" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                            <h3 class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center text-white"><?php echo get_the_title($post->ID); ?></h3>
                        </a>
                    </div>
            <?php  
                endwhile;
            endif;
        ?>
    </div>
    
    <h2 class="text-center mb-4">Universidades no exterior</h2>
    <div class="row mb-5 justify-content-center" id="universities">
        <?php 
            $args = array (
                'post_type' => 'destino',
                'orderby' => 'title',
                'order' => 'ASC',
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'programapacote',
                        'field' => 'slug',
                        'terms' => 'Universidade no exterior'
                    ),
                )
            );
            $university_query = new WP_Query($args);
            if($university_query->have_posts()) : 
                while ($university_query->have_posts()) : $university_query->the_post(); ?>
                    <div class="col-6 col-lg-3 mb-4">
                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="card border-0 shadow position-relative">
                            <img class="rounded-3" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                            <h3 class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center text-white"><?php echo get_the_title($post->ID); ?></h3>
                        </a>
                    </div>
            <?php  
                endwhile;
            endif;
        ?>
    </div>

    <h2 class="text-center mb-2">Depoimentos</h2>
    <p class="text-center text-xl-center fw-bolder mb-4">Nossos clientes falam</p>
    <div class="swiper swiper-depoimentos-destinos">
        <div class="swiper-wrapper">
            <?php
                $args = array (
                    'post_type' => 'depoimento',
                );
                $testimonial_query = new WP_Query($args);
                $counter = 0;

                if($testimonial_query->have_posts()) : 
                    while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                        if($counter == 0) :
                            echo '<div class="swiper-slide swiper-slide-active">';
                        else :
                            echo '<div class="swiper-slide">';
                        endif;
            ?>
                        <div class="depoimento p-2">
                            <div class="depoimento-thumb d-flex justify-content-center">
                                <img class="rounded-circle shadow-sm m-2" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                            </div>
                            <div class="depoimento-content border rounded-3 py-5 px-3 d-flex flex-column justify-content-center shadow-sm m-2">
                                <h6 class="text-center mb-1 mt-1"><?php echo get_the_title($post->ID); ?></h6>
                                <div class="stars d-flex justify-content-center mb-1">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                </div>
                                <p><?php echo get_the_excerpt($post->ID); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $counter=$counter+1; ?>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
        <br>
        <div class="swiper-pagination"></div>
    </div>
</main>

<?php get_footer(); ?>