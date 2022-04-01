<?php get_header(); ?>

<main>
    <!--SEÇÃO PACOTES -->
    <section class="container">
        <div>
            <h3 class="text-center text-xl-center cor-empresa mt-4 mb-3">Pacotes</h3>
            <p class="text-center text-xl-center fw-bolder ">Confira as vantages que a OK Intercâmbio tem para você</p>
        </div>
        <div class="swiper swiper-pacotes mt-5">
            <div class="swiper-wrapper">
                <?php
                    $args = array (
                    'post_type' => 'pacote',
                    );
                    $pacote_query = new WP_Query($args);
                    if($pacote_query->have_posts()) : while ($pacote_query->have_posts()) : $pacote_query->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="post-frame col-12 d-flex justify-content-center">
                        <img class="pacote-thumb" <?php if(!has_post_thumbnail( $post->ID )){
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

                    <div class="pacote-info col-11"> 
                        <!-- País ao qual pertence o pacote -->
                        <div class="pais-pacote text-center">
                            <?php
                            // get all of the terms for this post, with the taxonomy of paispacote
                                $termsPaisPacote = get_the_terms( $post->ID, 'paispacote' );
                                if($termsPaisPacote){
                                    foreach ( $termsPaisPacote as $term ) {
                                        echo "<h5>". $term->name . "</h5>";
                                    }
                                }
                            ?>
                        </div>
                        
                        <!-- Programa ao qual pertence o pacote -->
                        <!--
                        <div class="programa-pacote text-center">
                            <?php
                            // get all of the terms for this post, with the taxonomy of paispacote
                                $termsProgramaPacote = get_the_terms( $post->ID, 'programapacote' );
                                if($termsProgramaPacote){
                                    foreach ( $termsProgramaPacote as $term ) {
                                        echo "<h5>". $term->name . "</h5>";
                                    }
                                }
                            ?>
                        </div>
                        -->
                        
                        <!-- Título do pacote/ Nome da cidade -->
                        <div class="pacote-title col-12 text-center">
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
                        
                        <!-- Duração do pacote -->
                        <div class="text-center">
                            <?php 
                                $duracaopacote = get_field('periodo_de_tempo');
                                if($duracaopacote){
                                    echo "<h6>". $duracaopacote . "</h6>";
                                }
                            ?>
                        </div>

                        <!-- Conteúdo de informações do pacote -->
                        <div class="pacote-content text-center">
                            <p>
                                <?php 
                                    the_content();
                                ?>
                            </p>
                        </div>

                        <!-- Valor do pacote -->
                        <div class="text-center">
                            <?php 
                                $valorpacote = get_field('valor_do_pacote');
                                if($valorpacote){
                                    echo "<h6> R$ ". $valorpacote . "</h6>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: endif; wp_reset_postdata();?>
            </div>
            <div class="swiper-pagination mt-5"></div>
        </div>
    </section>

    
    <!--SEÇÃO DEPOIMENTOS -->
    <section class="container">
        <div>
            <h3 class="text-center text-xl-center cor-empresa mt-4 mb-3">Depoimentos</h3>
            <p class="text-center text-xl-center fw-bolder ">Nossos clientes falam</p>
        </div>
        <div class="swiper swiper-depoimentos mt-5">
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
    </section>
</main>
<?php get_footer(); ?>