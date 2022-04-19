<?php get_header(); ?>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Promoções', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>
<main>
    <section class="container">
        <div>
            <h3 class="text-center text-xl-center cor-empresa mt-5 mb-5">Promoções da Semana</h3>
        </div>
        <div class="mt-5">
            <div class="box-promocoes">
                <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'pacote',
                        'posts_per_page' => 3,
                        'paged' => $paged,
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
                <div class="d-flex mb-5 flex-wrap">

                    <div class="post-frame col-sm-12 col-md-8 d-flex justify-content-center">
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

                    <div class="pacote-info col-sm-12 col-md-4 d-flex flex-wrap"> 
                        <div class="col-12">
                            <!-- Título do pacote/ Nome da cidade -->
                            <div class="pacote-title text-center cidade-pacote">
                                <h4 style="line-height: inherit;">
                                    <?php 
                                        if (strlen($post->post_title) > 25) {
                                            echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...'; } 
                                            else {
                                            the_title();
                                        } 
                                    ?>
                                </h4>
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
                        </div>

                        <!-- Resumo de informações do pacote -->
                        <div class="pacote-excerpt mt-4 mb-4 col-12">
                            <p>
                                <?php 
                                    the_content();
                                ?>
                            </p>
                        </div>
                        
                        <div class="col-12 d-flex flex-wrap align-items-center">
                            <!-- Valor do pacote -->
                            <div class="text-center valor-pacote col-12 fw-bold">
                                <?php 
                                    $valorpacote = get_field('valor_do_pacote');
                                    if($valorpacote){
                                        echo "<h5> R$ ". $valorpacote . "</h5>";
                                    }
                                ?>
                            </div>
                            <div class="text-center col-12 mt-3">
                                <button class="saber-mais" data-bs-toggle="modal" data-bs-target="#modal-contact">
                                    <p>
                                    SABER MAIS
                                    </p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: 
                echo '
                    <div class="w-100 d-flex justify-content-center"><h4 class="mt-4 mb-4">Desculpe não temos promoções no momento :(</h4></div>
                '; 
            endif; wp_reset_postdata();?> 
            </div>

            <div class="text-center nav-pages d-flex justify-content-center mb-5">
                <?php 
                    previous_posts_link( '< Anterior' );
                    next_posts_link( 'Próximo >', $pacote_query->max_num_pages );
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>