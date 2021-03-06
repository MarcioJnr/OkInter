<?php get_header(); ?>
<style>
    .cor-viajando-com-ok {
        color: #FFB030;
    }
    .cor-valor {
        background-color: #7B39E9;
    }
    .cor-missao {
        color: #7B39E9;
    }
    .cor-empresa {
        color: #FF6A2E;
    }
</style>
<main>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Sobre a OK', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-12 col-xl-6">
                <h3 class="text-center text-xl-start cor-empresa mt-5">A empresa</h3>
                <p class="mt-5 text-center text-xl-start">
                    A OK Intercâmbio é uma agência de viagem especializada em estudos no exterior. O atendimento é ágil e 100% online para todo o Brasil, e também presencial através dos nossos escritórios físicos, localizados nas Cidades de Fortaleza (Ceará)  e Dublin na Irlanda.
                    <br><br> Nós acreditamos na importância da vivência internacional para a formação de uma bagagem pessoal e profissional, e por este motivo, cada detalhe é pensado em prol dos nosso clientes, desde a seleção das instituições e empresas parceiras, como também a qualificação e capacitação de cada colaborador da empresa. 
                    Portanto, há a garantia dos melhores profissionais no planejamento e realização de cada sonho.
                </p>
            </div>
            <div class="col-12 col-md-12 col-xl-6 text-center">
                <h3 class="text-center text-xl-start cor-empresa mb-4 mt-5">Galeria</h3>
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img1-galeria.png">
            </div>
                       
        </div>

        <div class="row">
            <div class="col-6 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img2-galeria.png" class="" >
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img6-galeria.png" class="mt-4">
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img3-galeria.png" class="">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img7-galeria.png" class="">
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img4-galeria.png" class="">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img8-galeria.png" class="mt-3">
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img5-galeria.png" class="">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img10-galeria.png" class="mt-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/img11-galeria.png" class="mt-3">
            </div>
        </div>

        

    </div><br><br><br><br>
    <div class="container-fluid" style="background-color: #FFB030;">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 col-md-6 col-xl-6">
                    <h3 class="text-center text-xl-center mb-5 cor-missao">Missão</h3>
                    <p class="text-center text-xl-start">
                    Promover intercâmbio cultural de jovens e adultos no exterior através de programas qualificados. Com segurança e responsabilidade, acreditamos também contribuir com o crescimento pessoal e profissional de cada estudante.
                    </p><br>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                <h3 class="text-center text-xl-center mb-5 cor-missao">Visão</h3>
                <p class="text-center text-xl-start">
                Ser uma empresa líder e inovadora no segmento de viagem educacional para jovens e adultos.                
                </p>
                </div>
            </div>
        </div>
        <div class="container">
        <h3 class="text-center cor-missao">Valores</h3><br>
        <div class="row ">
            <div class="col-12 col-md-4 col-xl-4 ">
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Ética</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 ">
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Respeito</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Transparência</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Foco no cliente</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Experiência</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Satisfação do cliente</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Resiliência</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Cooperação</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Gratidão</h6>
            </div>
        </div>
        </div>
        <div>
            <br><br>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #7B39E9;">
        <div class="container"><br>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="text-center text-xl-start mt-4 cor-viajando-com-ok">Viajando com a <br><br>OK Intercâmbio</h3>
                    <p class="mt-5 text-center text-lg-start text-light">
                    Desde 2015 atuando no segmento de Intercâmbio, a OK Intercâmbio vem se destacando na indústria de Educação Internacional pelo alto nível na qualidade dos serviços oferecidos aos seus clientes, além de um suporte em excelência já comprovada pelos nossos estudantes nos quatro cantos do mundo.
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="container-youtube">
                    <iframe class="mt-4 ms-1 w-100 youtube" width="560" height="315" src="https://www.youtube.com/embed/H6sLqrbA-ew?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                        
            </div>
            <br><br>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #FFB030;">
        <div class="container ">
            <div class="row">
                <h3 class="text-center text-xl-center cor-missao mt-5 mb-5">Impacto da empresa</h3>
                <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img class="w-25" src="<?php echo get_template_directory_uri(  );?>/assets/icons/selo.svg">
                    <h4 class="text-center text-xl-center cor-missao mt-3 mb-3">+ 7</h4>
                    <p class="mb-5">Anos de experiência</p>
                </div>
                <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img class="w-25" src="<?php echo get_template_directory_uri(  );?>/assets/icons/bag.svg">
                    <h4 class="text-center text-xl-center cor-missao mt-3 mb-3">+ 2600</h4>
                    <p class="mb-5">Sonhos realizados</p>
                </div>
                <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img class="w-25" src="<?php echo get_template_directory_uri(  );?>/assets/icons/map.svg">
                    <h4 class="text-center text-xl-center cor-missao mt-3 mmb-3">+ 100</h4>
                    <p class="mb-5">Cidades pelo mundo</p>
                </div>
                <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center ">
                    <img class="w-25" src="<?php echo get_template_directory_uri(  );?>/assets/icons/education.svg">
                    <h4 class="text-center text-xl-center cor-missao mt-3 mb-3">+ 100</h4>
                    <p class="mb-5">Escolas parceiras</p>
                </div>
            </div>        
        </div>
    </div>
    <div class="container">
        <h3 class="text-center text-xl-center cor-empresa mt-5 mb-3">Certificações</h3>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6 text-center text-xl-end">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/embratur.png" class="mb-3" >
            </div>
            <div class="col-12 col-md-6 col-xl-6 text-center text-xl-start">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/cadastur.png" class="mb-3" >
            </div>
        </div>
    </div>


    <!-- PARCEIROS DA OK INTERCAMBIO -->
    <section class="container mb-5">
        <div>
            <h3 class="text-center text-xl-center cor-empresa mt-4 mb-3">Instituições Parceiras</h3>
            <p class="text-center text-xl-center fw-bolder mb-3">Proporcionam a experiência internacional para você</p>
        </div>
        <div class="swiper swiper-parceiros mt-5">
            <div class="swiper-wrapper">
                <?php
                    #mostrar os parceiros criados pelo admin
                    $args = array (
                    'post_type' => 'parceiro',
                    'orderby' => 'title',
                    'order' => 'ASC'
                    );
                    $membros_query = new WP_Query($args);
                    if($membros_query->have_posts()) : while ($membros_query->have_posts()) : $membros_query->the_post();
                ?>
                <div class="swiper-slide">
                    <div class="post-frame col-12 d-flex justify-content-center">
                        <img class="parceiro-thumb" <?php if(!has_post_thumbnail( $post->ID )){
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
                </div>
                <?php endwhile; else: endif; wp_reset_postdata();?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="gradiente"></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>