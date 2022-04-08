<?php get_header(); ?>

<main>
    <!--SEÇÃO CAROUSEL -->
    <section>
        <div class="swiper swiper-banner">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'banner',
                        'posts_per_page' => -1,
                    );
                    $banner_query = new WP_Query($args);
                    if($banner_query->have_posts()) : while ($banner_query->have_posts()) : $banner_query->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="banner-frame col-12 d-flex justify-content-center">
                        <img class="banner-thumb w-100" <?php if(!has_post_thumbnail( $post->ID )){
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
                    <div class="container">
                        <div class="banner-info">
                            <div class="teste">
                                <div>
                                    <h1 class="b-title">
                                        <?php the_title();?>
                                    </h1>

                                    
                                    <?php 
                                        $subtitle = get_field('subtitle');
                                        if($subtitle){
                                            echo '<h5 class=" b-subtitle">'.$subtitle.'</h5>';
                                        }
                                    ?>

                                    <div>
                                        <?php 
                                            $textocta = get_field('textocta');
                                            $linkcta = get_field('linkcta');
                                            if($textocta){
                                                echo '<a href="'.$linkcta.'"><button class="call-to-action ">'.$textocta.'</button></a>';
                                            }
                                        ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; else: endif; wp_reset_postdata();?>
            </div>
            <div class="container">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

        <!--SEÇÃO BUSCA -->
    <div class="container-fluid p-5" style="background-color: #ffc86e;">
        <h1 class="display-4 text-dark text-center" style="font-style: normal; font-weight: 400; font-size: 48px; letter-spacing: 0.02em;">Encontre sua próxima viajem</h1>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-xl-5 justify-content-center">
                    <select class="programas-destinos form-select form-select-lg text-center mb-2" aria-label="Default select example" style="width:100%; box-shadow: 6px 6px 16px rgba(0, 0, 0, 0.3); border-radius: 8px;">
                        <option selected>PROGRAMAS</option>
                        <option value="1">Idiomas</option>
                        <option value="2">Universidades no exterior</option>
                        <option value="3">Intercâmbio em família</option>
                        <option value="4">Business English</option>
                    </select>
                </div>
                <div class="col-12 col-md-5 col-xl-5">
                    <select class="programas-destinos form-select form-select-lg text-center mb-2" aria-label="Default select example" style="width:100%; box-shadow: 6px 6px 16px rgba(0, 0, 0, 0.3); border-radius: 8px;">
                        <option selected class="fw-bold">DESTINOS</option>
                        <option value="1">Canadá</option>
                        <option value="2">Alemanha</option>
                        <option value="3">Irlanda</option>
                        <option value="4">Iraque</option>
                    </select>
                </div>
                <div class="col-12 col-md-2 col-xl-2">
                    <button id="btn-buscar" type="button" class="fw-bold text-center text-md-center text-xl-center">Buscar</button>
                </div>
            </div>

        </div>
    </div>

    <!--SEÇÃO PACOTES -->
    <section class="container">
        <div>
            <h3 class="text-center text-xl-center cor-empresa mt-4 mb-3">Promoções</h3>
            <p class="text-center text-xl-center fw-bolder ">Confira as vantages que a OK Intercâmbio tem para você</p>
        </div>
        <div class="swiper swiper-pacotes mt-5">
            <div class="swiper-wrapper">
                <?php
                    $args = array(
                        'post_type' => 'pacote',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'promocaopacote',
                                'field' => 'slug',
                                'terms' => 'promocao',
                            )
                        )
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
                        
                        <!-- Título do pacote/ Nome da cidade -->
                        <div class="pacote-title col-12 text-center cidade-pacote">
                            <h5 style="line-height: inherit;" class="fw-bold">
                                <?php 
                                    if (strlen($post->post_title) > 25) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...'; } 
                                        else {
                                        the_title();
                                    } 
                                ?>
                            </h5>
                        </div>

                        <!-- País ao qual pertence o pacote -->
                        <div class="pais-pacote text-center">
                            <?php
                            // get all of the terms for this post, with the taxonomy of paispacote
                                $termsPaisPacote = get_the_terms( $post->ID, 'paispacote' );
                                if($termsPaisPacote){
                                    foreach ( $termsPaisPacote as $term ) {
                                        echo "<h6>". $term->name . "</h6>";
                                    }
                                }
                            ?>
                        </div>
                        
                        <!-- Duração do pacote -->
                        <div class="text-center mt-2">
                            <?php 
                                $duracaopacote = get_field('periodo_de_tempo');
                                if($duracaopacote){
                                    echo "<p class= 'duracao-pacote'>". $duracaopacote . "</p>";
                                }
                            ?>
                        </div>

                        <!-- Conteúdo de informações do pacote -->
                        <div class="text-center mt-3 mb-3">
                            <p>
                                <?php 
                                    the_excerpt();
                                ?>
                            </p>
                        </div>

                        <!-- Programa ao qual pertence o pacote -->
                        <div class="programa-pacote text-center">
                            <?php
                            // get all of the terms for this post, with the taxonomy of paispacote
                                $termsProgramaPacote = get_the_terms( $post->ID, 'programapacote' );
                                if($termsProgramaPacote){
                                    foreach ( $termsProgramaPacote as $term ) {
                                        echo "<p class='fw-bold'>". $term->name . "</p>";
                                    }
                                }
                            ?>
                        </div>

                        <!-- Valor do pacote -->
                        <div class="text-center valor-pacote mt-4">
                            <?php 
                                $valorpacote = get_field('valor_do_pacote');
                                if($valorpacote){
                                    echo "<h5> R$ ". $valorpacote . "</h5>";
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

    <!--SEÇÃO SERVIÇOS -->
    <div class="container-fluid text-center" style="background-color:#7B39E9;">
        <div class="container">
            <div class="row">
                <h3 class="servicos mt-5">Serviços</h3>
                <div class="col-12 col-md-12 col-xl-6 text-center img-aviao mt-4 mb-4">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/service-home.png">
                </div>
                <div class="col-12 col-md-12 col-xl-6 text-center">
                    <h4 class="mt-5 titulo-viajem" >Tudo para sua viajem</h3>
                    <p class="paragrafo1">Passagens aéreas, seguros, traslado e mais</p>
                    <p class="paragrafo2 text-center mt-5 mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget diam tincidunt tortor vulputate lectus. Aliquam leo tincidunt vitae ut at. Eget pharetra a vitae vulputate. Aenean sagittis quis urna libero et sed feugiat at quis. Euismod sagittis amet, auctor eleifend. Mauris amet vestibulum viverra tincidunt tincidunt enim vitae luctus. 
                    Nunc dolor turpis in porta elit ultricies mattis. Massa quis malesuada tempor nisl, odio. Porta est faucibus cursus bibendum sodales cursus et arcu, laoreet.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--SEÇÃO DESTINOS -->
    <div class="container-fluid text-center" style="background-color:#FFB030;">
        <div class="container">
            <div class="row">
                <h3 class="mt-5" style="color: #7B39E9;">Destinos</h3>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/irlanda-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/canada-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Canadá</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/alemanha-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Alemanha</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/malta-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Malta</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/irlanda-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/canada-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/alemanha-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/malta-destinos.png">
                    <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
                </div>
            </div>
        </div>
        <button id="btn-destinos" type="button" class="mt-3 mb-5 fw-bold text-center">Ver mais</button>
    </div>

     <!--SEÇÃO DEPOIMENTOS -->
    <section class="container mt-5">
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
                                    if (strlen($post->post_title) > 25) {
                                        echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...'; } 
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
            <div class="swiper-pagination mt-5"></div>
        </div>
    </section>


    <div class="container">
        <h3 class="text-center text-xl-center cor-empresa mt-4 mb-1 display-4">Canal do Youtube</h3>
        <p class="text-center text-xl-center fw-bolder mb-5">Confira o conteúdo que temos pra você intercambista</p>
        <div class="row">
            <div class="col-12 text-center mb-5">
                <iframe width="100%" height="620" src="https://www.youtube.com/embed/EawTftTaFAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="filter: drop-shadow(10px 10px 0px #FF6A2E);border-radius: 2px;"></iframe>
            </div>
        </div>
    </div>
   
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6 mt-5">
                <h3 class="text-center text-xl-start cor-empresa display-4" style="line-height: 90%;letter-spacing: 0.02em;">Faça o orçamento da sua viajem</h3>
                <p class="text-center text-xl-start fw-bolder mt-3">A OK Intercâmbio é uma agência de viagens especializada em estudos no exterior. O atendimento é ágil e 100% online para todo o Brasil, e também presencial através dos nossos escritórios físicos, localizados nas Cidades de São Paulo (SP), Fortaleza (CE)  e Dublin (Irlanda).</p>
                <p class="text-center text-xl-start fw-bolder mb-5">Preencha os campos ao lado e clique no botão “ENVIAR ”, depois é só aguardar o contato da nossa equipe.</p>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-4 mb-5">
                <?php echo do_shortcode('[contact-form-7 id="14" title="Formulario orçamento"]');?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>