<?php $count =0;?>
<?php get_header();?>
<main>
    <!-- TO DO
    - Respons col sm md
    - Style (focar primeiro nos posts)
    -->
    <div class="container mt-5">
        <div class="row">

            <!-- SEÇÃO DE POSTS -->
            <section class="col-lg-8 blog-wrapper">
                <?php
                    $query = new WP_Query($wp_query->query_vars);
                    if($query->have_posts()) :
                
                    while ($query->have_posts()) : $query->the_post(); 
                ?>

                <?php if ( $count == 0 ){
                    //div para o primeiro post
                    echo '<div class="first-post">';
                    }
                    //div para os demais posts 
                    else echo '<div class="a-posts">';
                ?>
                    <a href="<?php echo $post->guid;?>">
                        <div class="post-frame">
                            <img class="thumb" <?php if(!has_post_thumbnail( $post->ID )){
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
                                alt="Noticia"
                            >
                            <!--FALTA FUNÇÕES PRA LIMITAR QUANTIDADE DE LETRAS E ADICIONAR RETICENCIAS-->
                            <div class="post-info"> 
                                <div class="blog-category">
                                    <p style="margin-bottom:0"><?php the_category(', ');?></p>
                                    
                                </div>
                                <div class="blog-title col-12">
                                    <h6 style="font-weight: 500; line-height: inherit;">
                                        <?php 
                                            if (strlen($post->post_title) > 45) {
                                                echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } 
                                                else {
                                                the_title();
                                            } 
                                        ?>
                                    </h6>
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>

                <?php if ( $count == 0 ){ $count+=1;} ?>
                <?php endwhile; else: endif; wp_reset_postdata();?>
                
                <div class="posts-pagination mt-5 mb-5">
                    <?php $prev_next = paginate_links(array(
                        'prev_text'          => __( '<' ),
                        'next_text'          => __( '>' ),
                        'type'         => 'array',
                        'end_size' => '2',
                    ));
                    if($prev_next){

                    foreach($prev_next as $key=>$val){

                        if (strpos($val,'"page-numbers current"') !== false) {
                        echo '<div class="active page-item">'.$val.'</div>';
                        } elseif (strpos($val,'"next page-numbers"') !== false || strpos($val,'"prev page-numbers"') !== false  ) {

                        echo'<div class="prevnext">'.$val.'</div>';
                        } else {

                            echo '<div class="page-item">'.$val.'</div>';
                        }

                    } }?>
                </div>
                
            </section>


            <div class="col-lg-4">

                <!-- SEÇÃO DE CATEGORIAS -->
                <section class="col-lg-12 dotted pb-3">
                    <div class= "mb-4">
                        <h3>Categorias</h3>
                    </div>

                    <div class="d-flex flex-wrap">
                    <?php
                        $argsCat = array (
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );

                        $categories = get_categories($argsCat);

                        foreach( $categories as $category ) {
                            //mostrar o tanto de cada categoria causa um atraso
                            echo 
                            '<div class="cat-div">
                                <button class="cat-button">
                                    <p style="margin-bottom : 0px;">
                                        <a href="' . get_category_link($category->term_id) . '">' . $category->name . '
                                        ('. $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = '$category->term_id' ").')
                                        </a>
                                    </p>
                                </button>
                            </div>';   
                        } 
                    ?>
                    <div>
                </section>

                <!-- SEÇÃO DE NOTICIAS -->
                <section class="col-lg-12 mt-4 dotted pb-5 section-title">
                    <h3>Noticias</h3>
                </section>

                <!-- SEÇÃO TUDO SOBRE INTERCAMBIO -->
                <section class="col-lg-12 mt-4 dotted pb-5">
                    <h3>Tudo sobre intercâmbio</h3>
                </section>

                <!-- VIDEOS RECOMENDADOS -->
                <section class="col-lg-12 mt-4 dotted pb-5 mb-5">
                    <h3>Vídeos recomendados</h3>
                </section>
            </div>
        </div>             
    </div>
</main>
<?php get_footer();?>