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
            ?>
        </div>
    </div>

    <h2 class="text-center mb-4">Depoimentos</h2>
    <h6 class="text-center mb-4">Nossos clientes falam</h6>
    <div class="container mb-5 px-0" id="depositions">
        <div class="swiper swiper-depoimentos-destinos mt-5">
            <div class="swiper-wrapper">
                <?php
                    $args = array (
                        'post_type' => 'depoimento',
                    );
                    $depoimentos_query = new WP_Query($args);
                    if($depoimentos_query->have_posts()) : while ($depoimentos_query->have_posts()) : $depoimentos_query->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="post-frame col-12 d-flex justify-content-center">
                        <img class="depoimento-thumb" <?php if(!has_post_thumbnail( $post->ID )){
                            echo "no-thumbnail";
                            }?>" 
                            src="<?php if(has_post_thumbnail( $post->ID )){
                                echo get_the_post_thumbnail_url($post->ID);
                                }
                                else{
                                    //alterar a imagem para um placeholder feito
                                    echo get_template_directory_uri()."/assets/images/ret larg 2.jpg";
                                }?>
                            " 
                            alt="<?php the_title();?>"
                        >
                    </div>
                    <div class="depo-info col-11"> 
                        <div class="depo-category">
                            <p style="margin-bottom:0"><?php the_category(', ');?></p>
                            
                        </div>
                        <div class="depo-title col-12 text-center">
                            <h6 style="line-height: inherit;" class="fw-bold">
                                <?php 
                                    if (strlen($post->post_title) > 25) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...'; } 
                                        else {
                                        the_title();
                                    } 
                                ?>
                            </h6>
                        </div>
                        <div class="depo-content">
                            <p style="">
                                <?php 
                                    the_excerpt();
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: endif; wp_reset_postdata();?>
            </div>
            <div class="gradiente"></div>
            <div class="swiper-pagination mt-5"></div>
        </div>

        <div id="testimonial-carousel" class="carousel slide d-block d-lg-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php 
                    $args = array (
                        'post_type' => 'depoimento',
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );
                    $testimonial_query = new WP_Query($args);

                    if($testimonial_query->have_posts()) : 
                        while ($testimonial_query->have_posts()) : $testimonial_query->the_post();                            
                            includeFile('components/card-testimonial.php', 
                                array(
                                    'directory'=>get_the_post_thumbnail_url($post->ID),
                                    'person'=>get_the_title($post->ID),
                                    'text'=>get_the_excerpt($post->ID)
                                )
                            ); 
                        endwhile;
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