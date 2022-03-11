<?php $count =0;?>
<?php get_header();?>
<main>
    <!-- TO DO
    - Respons col sm md
    - Style (focar primeiro nos posts)
    -->
    <div class="container">
        <div class="row">

            <!-- SEÇÃO DE POSTS -->
            <section class="col-lg-8 row">
                <?php
                    $args = array (
                        'post_type' => 'post',
                        //'showposts'    => '1'
                    );
                    $blog_posts = new WP_Query($args);
                    if($blog_posts->have_posts()) :
                
                    while ($blog_posts->have_posts()) : $blog_posts->the_post(); 
                ?>

                <?php if ( $count == 0 ){
                    //div para o primeiro posts
                    echo '<div class="col-lg-12">';
                    }
                    //div para os demais posts 
                    else echo '<div class="col-lg-6">';
                ?>
                    <a href="<?php echo $post->guid;?>">
                        <div class="banner">
                            <img class="thumb" <?php if(!has_post_thumbnail( $post->ID )){
                                echo "no-thumbnail";
                                }?>" 
                                src="<?php if(has_post_thumbnail( $post->ID )){
                                    echo get_the_post_thumbnail_url($post->ID);
                                    }
                                    else{
                                        echo get_template_directory_uri()."/assets/images/logo-laranja.png";
                                    }?>
                                " 
                                alt="Noticia"
                            >  
                        </div>
                        <p><?php the_category(', ');?></p>
                        <a href="<?php the_permalink() ?>" >
                            <p><?php the_title();?></p>
                        </a>
                    </a>
                </div>

                <?php if ( $count == 0 ) $count+=1; ?>
                <?php endwhile; else: endif; wp_reset_postdata();?>
            </section>


            <div class="col-lg-4">

                <!-- SEÇÃO DE CATEGORIAS -->
                <section class="col-lg-12">
                    <h3>Categorias</h3>
                    <?php
                        $argsCat = array (
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );

                        $categories = get_categories($argsCat);

                        foreach( $categories as $category ) {
                            echo 
                            '<div class="col-lg-12">
                                <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
                            </div>';   
                        } 
                    ?>
                </section>

                <!-- SEÇÃO DE NOTICIAS -->
                <section class="col-lg-12">
                    <h3>Noticias</h3>
                </section>

            </div>
        </div>             
    </div>
</main>
<?php get_footer();?>