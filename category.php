<?php $count =0;?>
<?php get_header();?>
<main>
    <!-- TO DO
    - Respons col sm md
    - Style (focar primeiro nos posts)
    -->
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Blog', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>
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
                    <a href="<?php echo get_permalink();?>">
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
                                alt="<?php the_title();?>"
                            >
                            <!--FALTA FUNÇÕES PRA LIMITAR QUANTIDADE DE LETRAS E ADICIONAR RETICENCIAS-->
                            <div class="post-info"> 
                                <div class="blog-category">
                                    <p style="margin-bottom:0"><?php the_category(', ');?></p>
                                    
                                </div>
                                <a href="<?php echo get_permalink();?>" class="col-12">
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
                                </a>
                            </div> 
                        </div>
                    </a>
                </div>

                <?php if ( $count == 0 ){ $count+=1;} ?>
                <?php endwhile; else: endif; wp_reset_postdata();?>
                
                <div class="posts-pagination mt-3 mb-5">
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
                <section class="col-lg-12 dotted pb-4 section-title">
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
                                        ('. $category->count .')
                                        </a>
                                    </p>
                                </button>
                            </div>';   
                        } 
                    ?>
                    <div>
                </section>

                <!-- SEÇÃO DE NOTICIAS -->
                <section class="col-lg-12 mt-5 dotted pb-5 section-title">
                    <h3>Noticias</h3>
                    <div>
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'category_name' => 'noticias'
                            );
                            $relate_query = new WP_Query($args);
                            if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
                        ?>

                        <div class="related-posts-confira">
                        
                            <a href="<?php echo get_permalink();?>">
                                
                                <div class="col-12 mt-3 posts-confira-title">
                                    <p style="font-weight: 500; line-height: inherit;">
                                        •
                                        <?php                             
                                            the_title();                   
                                        ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; else: endif; wp_reset_postdata();?>
                    </div>
                </section>

                <!-- SEÇÃO TUDO SOBRE INTERCAMBIO -->
                <section class="col-lg-12 mt-5 dotted section-title pb-5">
                    <h3>Tudo sobre intercâmbio</h3>
                    <div>
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'category_name' => 'intercambio'
                            );
                            $relate_query = new WP_Query($args);
                            if($relate_query->have_posts()) : while ($relate_query->have_posts()) : $relate_query->the_post();
                        ?>

                        <div class="related-posts-confira">
                        
                            <a href="<?php echo get_permalink();?>">
                                
                                <div class="col-12 mt-3 posts-confira-title">
                                    <p style="font-weight: 500; line-height: inherit;">
                                        •
                                        <?php                             
                                            the_title();                   
                                        ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; else: endif; wp_reset_postdata();?>
                    </div>
                </section>

                <!-- VIDEOS RECOMENDADOS -->
                <section class="col-lg-12 mt-5 dotted pb-5 mb-5 section-title">
                    <h3>Vídeos recomendados</h3>
                </section>
            </div>
        </div>             
    </div>
</main>
<?php get_footer();?>