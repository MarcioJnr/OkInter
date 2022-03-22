<?php get_header(); ?>


<main>
    <div class="container">
        <div class="row ms-4">
            <div class="col-12">
                <h2 class="text-center text-xl-start">Conheça o nosso time</h2>
                <p class="mt-4 text-center text-xl-start">Viajar com uma agência que conta com um time de apaixonados por viagens e especialistas 
                    em educação Internacional faz toda a diferença. Nós sabemos e oferecemos tudo que você precisa para ter uma viagem tranquila.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center mt-4">
            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/neutton.png" style="width: 200px; height: 200px;" class="mb-3">
                <p class="fw-bold">Nome Sobrenome</p>
                <p class="mb-4">Cargo</p>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/team1.jpg" class="rounded-circle border border-5 border-warning mb-3" >
                <p class="fw-bold">Nome Sobrenome</p>
                <p class="mb-4">Cargo</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/team1.jpg" class="rounded-circle border border-5 border-warning mb-3" >
                <p class="fw-bold">Nome Sobrenome</p>
                <p class="mb-4">Cargo</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/team1.jpg" class="rounded-circle border border-5 border-warning mb-3" >
                <p class="fw-bold">Nome Sobrenome</p>
                <p class="mb-4">Cargo</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/team1.jpg" class="rounded-circle border border-5 border-warning mb-3" >
                <p class="fw-bold">Nome Sobrenome</p>
                <p class="mb-4">Cargo</p>
            </div>
        </div>
    </div>
    <div class="container">
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
            <div class="d-flex flex-wrap mb-5">
                <div class="post-frame col-md-4 col-sm-12 col-12 d-flex align-items-center">
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
                        alt="Noticia"
                    >
                </div>
                <div class="col-md-8 col-sm-12 d-flex align-items-center">
                    <div>
                        <h5 class="fw-bold"><?php the_title();?></h5>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; else: endif; wp_reset_postdata();?>
        </div>
    </div>
    <div class="container">
        <hr size="1" class="linha-tracejada">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-xl-start">Trabalhe conosco</h2>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl at leo interdum consequat suscipit blandit. Non cursus turpis cursus neque placerat. Aliquam turpis elementum quisque sed. Leo commodo purus, dignissim semper. Est tortor ut platea nunc porttitor elementum suspendisse hendrerit. Eu faucibus volutpat adipiscing massa, sed diam feugiat. Leo hac tellus est, cras cursus proin condimentum pretium viverra. Turpis iaculis aliquam pellentesque ut. Interdum sodales in ultricies viverra rhoncus, purus dictumst mattis.</p>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-4 col-xl-4">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="">  
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@gmail.com">
                </div>
                <div class="col-12 col-md-4 col-xl-4">
                    <label for="exampleFormControlInput1" class="form-label">Número</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(88) 9 81118673">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 col-xl-4">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="nome" class="form-control" id="exampleFormControlInput1" placeholder="">  
                </div>
                <div class="col-12 col-md-4 col-xl-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="example@gmail.com">
                </div>
                <div class="col-12 col-md-4 col-xl-5">
                    <label for="exampleFormControlInput1" class="form-label">Número</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="(88) 9 81118673">
                    <br>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-6 ">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl integer odio interdum netus eu arcu et duis. Cursus purus, ornare lacus diam magna sed. </p><br>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6 text-center">
                        <button type="button" class="btn" style="width:200px; float: right; color: white; background-color: #FF6A2E;"> Enviar</button><br><br><br><br>
                    </div>
                </div>
            </div>
                
            <h2 class="text-center">Certificações</h2><br><br><br>
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

</main>

<?php get_footer(); ?>