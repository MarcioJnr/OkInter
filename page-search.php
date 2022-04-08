<?php get_header(); ?>

<main>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Resultados', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>

    <!--SEÇÃO SEARCH PACOTES -->
    <section class="container">
        <div>
            <h3 class="text-center text-xl-center cor-empresa mt-4 mb-3">Encontre a sua viagem ideal</h3>
        </div>
        <div class="search mt-5">
            <div class=" search-wrapper">
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
                    $search_query = new WP_Query($args);
                    if($search_query->have_posts()) : while ($search_query->have_posts()) : $search_query->the_post();
                ?>
                <div class="search-item d-flex flex-wrap mt-5">
                    <div class="search-post-frame col-12 col-md-4">
                        <img class="search-thumb w-100" <?php if(!has_post_thumbnail( $post->ID )){
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

                    <div class="search-info col-12 col-md-8"> 
                        
                        <!-- Título do pacote/ Nome da cidade -->
                        <div class="pacote-title cidade-pacote">
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


                        <!-- Conteúdo de informações do pacote -->
                        <div class="mt-3 mb-3">
                            <p>
                                <?php 
                                    the_excerpt();
                                ?>
                            </p>
                        </div>

                    </div>
                </div>
                <?php endwhile; else: endif; wp_reset_postdata();?>
            </div> 
        </div>
    </section>
</main>
<?php get_footer();
