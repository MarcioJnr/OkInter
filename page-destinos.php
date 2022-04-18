<?php get_header();?>

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
            <?php endwhile; endif; wp_reset_postdata();?>
    </div>
    
    <h2 class="text-center mb-4">Universidades no exterior</h2>
    <div class="row mb-5 justify-content-center" id="universities">
        <?php 
            $args = array (
                'post_type' => 'destino',
                'orderby' => 'title',
                'order' => 'ASC',
                'tax_query' => array(
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
            <?php endwhile; endif; wp_reset_postdata();?>
    </div>

    <section class="container mt-5">
        <div>
            <h2 class="text-center text-xl-center cor-empresa mt-4 mb-3">Depoimentos</h2>
            <p class="text-center text-xl-center fw-bolder ">Nossos clientes falam</p>
        </div>
        <div class="swiper swiper-depoimentos mt-3">
            <div class="swiper-wrapper">
                <?php
                    #mostrar os depoimentos criados pelo admin
                    /* buscando por taxonomia
                    $args = array(
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'paisdepoimento',
                                'field' => 'slug',
                                'terms' => 'alemanha',
                            )
                        )
                    );
                    */
                    $args = array (
                    'post_type' => 'depoimento',
                    'posts_per_page' => -1,
                    );
                    $depoimentos_query = new WP_Query($args);
                    if($depoimentos_query->have_posts()) : while ($depoimentos_query->have_posts()) : $depoimentos_query->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="post-frame col-12 d-flex justify-content-center">
                        <img class="depoimento-thumb" <?php if(!has_post_thumbnail( $post->ID )){
                            echo "no-thumbnail";
                            }?> 
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
                                    if (strlen($post->post_title) > 35) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 35) . '...'; } 
                                        else {
                                        the_title();
                                    } 
                                ?>
                            </h6>
                        </div>
                        <div class="depo-excerpt">
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
            <div class="swiper-pagination mt-4"></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>