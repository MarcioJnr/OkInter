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

                                    <div class="b-text-cta">
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
    <div class="container-fluid p-4" style="background-color: #ffc86e;">
        <div class="container d-flex flex-column align-items-center mt-2">
            <h2 class="text-dark mb-4 text-center text-md-start" style="font-style: normal; font-weight: 400; letter-spacing: 0.02em;">Encontre sua próxima viagem</h2>

        
            <div class="w-100 d-flex justify-content-center">
                <?php 
                    includeFile('components/search-field.php', array(
                        'title'=>'Encontre a sua viagem ideal'
                    ));
                ?>
            </div>
        </div>
    </div>

    <!--SEÇÃO PACOTES -->
    <section class="container mb-4">
        <div>
            <h2 class="text-center text-xl-center cor-empresa mt-5 mb-3">Promoções</h2>
            <p class="text-center text-xl-center fw-bolder ">Confira as vantages que a OK Intercâmbio tem para você</p>
        </div>
        <div class="swiper swiper-pacotes mt-4">
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
                <?php endwhile; else:  
                    echo '
                        <div class="w-100 d-flex justify-content-center"><h4 class="mt-4 mb-4">Desculpe não temos promoções no momento :(</h4></div>
                    '; 
                endif; wp_reset_postdata();?>
            </div>
            <div class="swiper-pagination mt-3"></div> 
            <a href="<?php echo get_home_url(); ?>/promocoes/" class="w-100 d-flex justify-content-center">
                <button id="btn-destinos" type="button" class="mt-3 mb-5 fw-bold text-center" style="background-color: var(--primary-color); color: white;">
                    Ver mais
                </button>
            </a>
        </div>
    </section>

    <!--SEÇÃO SERVIÇOS -->
    <div class="container-fluid text-center " style="background-color:#7B39E9;">
        <div class="container">
            <div class="row">
                <h2 class="servicos mt-5">Serviços</h2>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6 text-center img-aviao mt-4 mb-4">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/service-home.png">
                </div>
                <div class="col-12 col-md-12 col-lg-6 col-xl-6 text-center ">
                    <h4 class="mt-4 titulo-viajem" >Tudo para sua viagem</h4>
                    <p class="paragrafo1 text-bold">Passagens aéreas, seguros, traslado e mais</p>
                    <p class="paragrafo2 text-center mb-4 text-light">
                    A OK Intercâmbio oferece:  Cursos de Idiomas, High School, Profissionalizantes, Programas de Férias, Preparatórios para Certificações, College, Graduações, Pós-Graduações, MBA, Voluntariado, Intercâmbio para família, entre outros.</p>

                    <p class="paragrafo2 text-center mb-4 text-light">Disponibilizamos também: Passagens aéreas com tarifa especial para estudantes, Seguro Viagem/Saúde, Transfer receptivo no aeroporto de destino, Acomodações e Auxílio a Vistos.
                    </p>

                    <a href="<?php echo get_home_url(); ?>/servicos/" class="w-100">
                        <button id="btn-destinos" type="button" class="mt-3 mb-5 fw-bold text-center" style="background-color: #FFB030; color: white;">
                            Ver mais
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--SEÇÃO DESTINOS -->
    <div class="text-center py-5" style="background-color:#FFB030;">
        <h2 style="color: #7B39E9;">Destinos</h2>
        <div class="container">
            <div class="row d-none d-lg-flex gap-5 justify-content-center mt-4 mb-4">
                <?php 
                    $args = array (
                        'post_type' => 'destino',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'posts_per_page' => 8,
                    );
                    $pais_query = new WP_Query($args);
                    if($pais_query->have_posts()) : 
                        while ($pais_query->have_posts()) : $pais_query->the_post(); ?>
                            <a id="card-destiny" class="col-3 px-0 rounded-3" href="<?php echo get_the_permalink($post->ID); ?>">
                                <img class="w-100"  src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                                <h3 class="mb-0 py-2"><?php echo get_the_title($post->ID); ?></h3>
                            </a>
                    <?php
                        endwhile;
                    endif;
                ?>
            </div>

            <!-- swiper -->
            <div class="swiper swiper-depoimentos mt-5 d-lg-none">
                <div class="swiper-wrapper">
                    <?php
                        if($pais_query->have_posts()) : while ($pais_query->have_posts()) : $pais_query->the_post();
                    ?>
                    <div class="swiper-slide pt-5 d-flex justify-content-center">
                        <a id="card-destiny" class="post-frame col-11 d-flex justify-content-center rounded-3" href="<?php echo get_the_permalink($post->ID); ?>">
                            <img class="w-100"  src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                            <h3 class="mb-0 py-2"><?php echo get_the_title($post->ID); ?></h3>
                        </a>
                    </div>
                    <?php endwhile; else: endif; wp_reset_postdata();?>
                </div>
                <div class="gradiente"></div>
                <div class="swiper-pagination mt-5"></div>
            </div>
        </div>
        <a href="<?php echo get_home_url(); ?>/destinos/">
            <button id="btn-destinos" type="button" class="mt-3 fw-bold text-center">Ver mais</button>
        </a>
    </div>

     <!--SEÇÃO DEPOIMENTOS -->
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
            <div class="swiper-pagination mt-4"></div>
        </div>
    </section>

    <!-- Video Youtube -->
    <div class="text-center py-5" style="background-color:#7B39E9;">
        <div class="container">
            <h2 class="text-center text-xl-center servicos mb-1">Canal do Youtube</h2>
            <p class="text-center text-xl-center fw-bolder mb-4 text-white">Confira o conteúdo que temos pra você intercambista</p>
            <div class="container-youtube">
            <iframe class="w-100 youtube" width="560" height="315" src="https://www.youtube.com/embed/EawTftTaFAA?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>  
        </div>
    </div>
   
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <h2 class="text-center text-md-start cor-empresa" style="line-height: 90%;letter-spacing: 0.02em;">Faça o orçamento do seu intercâmbio</h2>
                <p class="text-center mt-3 t-justify" >A OK Intercâmbio é uma agência de viagens especializada em estudos no exterior. O atendimento é ágil e 100% online para todo o Brasil, e também presencial através dos nossos escritórios físicos, localizados nas Cidades de São Paulo (SP), Fortaleza (CE)  e Dublin (Irlanda).</p>
                <p class="text-center mb-5 t-justify" >Preencha os campos ao lado e clique no botão “ENVIAR”, depois é só aguardar o contato da nossa equipe.</p>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-4 mb-5">
                <?php echo do_shortcode('[contact-form-7 id="222" title="Formulário de orçamento"]');?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>