<?php get_header(); ?>


<main>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Equipe', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>
    <div class="container">
        <div class="row mt-5">
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
                <p class="mt-4">Faça parte de uma empresa dinâmica, jovem e focada na realização de sonhos dos brasileiros que buscam uma vivência internacional através do Intercâmbio Cultural.  A OK Intercâmbio é uma agência de viagens especializada em estudos no exterior. O atendimento é ágil e 100% online para todo o Brasil, e também presencial através dos nossos escritórios físicos, localizados nas Cidades de São Paulo (SP), Fortaleza (CE)  e Dublin (Irlanda).</p>
            </div>
            <div class="container">
            <div class="row mt-4">
                <div class="col-12 form">
                    <?php echo do_shortcode('[contact-form-7 id="13" title="Formulário equipe"]');?>
                </div>
            </div>
            </div>
            <div class="mt-4">
                <h2 class="text-center">Certificações</h2><br>
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-6 text-center text-xl-end">
                        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/embratur.png" class="mb-3" >
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 text-center text-xl-start">
                        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/cadastur.png" class="mb-3" >
                    </div>   
                </div>
            </div>
                
                
        </div>
    </div>



</main>

<?php get_footer(); ?>