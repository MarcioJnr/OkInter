<?php get_header(); ?>


<main>
    <div class="container">
        <div class="row ms-4">
            <div class="col-12">
                <h2 class="text-center text-md-start">Conheça o nosso time</h2>
                <p class="mt-4 text-xl-start">Viajar com uma agência que conta com um time de apaixonados por viagens e especialistas 
                    em educação Internacional faz toda a diferença. Nós sabemos e oferecemos tudo que você precisa para ter uma viagem tranquila.
                </p>
            </div>
        </div>
    </div>
    <!-- TIME DA OK INTERCAMBIO -->
    <section class="container mt-4">
        <div class="row">
            <?php
                #mostrar os membros criados pelo admin
                $args = array (
                'post_type' => 'membro',
                'orderby' => 'title',
                'order' => 'ASC'
                );
                $membros_query = new WP_Query($args);
                if($membros_query->have_posts()) : while ($membros_query->have_posts()) : $membros_query->the_post();
            ?>
            <div class="d-flex flex-wrap t-card">
                <div class="post-frame col-xl-3 col-md-4 col-sm-12 col-12 d-flex align-items-center">
                    <img class="member-thumb" <?php if(!has_post_thumbnail( $post->ID )){
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
                <div class="col-xl-9 col-md-8 col-sm-12 d-flex align-items-center t-box" style="text-align:justify;">
                    <div>
                        <h5 class="fw-bold t-title"><?php the_title();?></h5>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; else: endif; wp_reset_postdata();?>
        </div>
    </section>

    <div class="container">
        <hr size="1" class="linha-tracejada">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-md-start">Trabalhe conosco</h2>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl at leo interdum consequat suscipit blandit. Non cursus turpis cursus neque placerat. Aliquam turpis elementum quisque sed. Leo commodo purus, dignissim semper. Est tortor ut platea nunc porttitor elementum suspendisse hendrerit. Eu faucibus volutpat adipiscing massa, sed diam feugiat. Leo hac tellus est, cras cursus proin condimentum pretium viverra. Turpis iaculis aliquam pellentesque ut. Interdum sodales in ultricies viverra rhoncus, purus dictumst mattis.</p>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-12 col-xl-12 form">
                    <?php echo do_shortcode( '[contact-form-7 id="26" title="form trabalhe"]');?>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="text-center text-md-start">Certificações</h2><br><br><br>
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-6 text-center text-xl-end">
                        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/certific1.png" class="mb-3" >
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 text-center text-xl-start">
                        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/certific2.png" class="mb-3" >
                    </div>   
                </div>
            </div>
                
                
        </div>
    </div>



</main>

<?php get_footer(); ?>