<?php get_header(); ?>

<main>
  <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Serviços', 
                'imagem'=>'berlim.jpg',
            )
        ); 
  ?>
  <div class="container" >
    <div class="row my-5">
      <div class="col-12 col-md-6 mb-4">
        <h2 class="orange linha1">Aproveite sua viagem com tranquilidade</h2>
        <h2 class="mb-5 linha3">Aproveite a viagem</h2>
        <p>A OK Intercâmbio trabalha com serviços e planos de cobertura moldados às
           suas necessidades e exigências, os quais oferecem ao viajante todo apoio 
           necessário com centrais 24 horas para atendê-lo em qualquer parte do mundo.</p>
      </div>
      <div class="col-12 col-md-6 text-center">
      <div class="container-youtube">
        <iframe class="w-100 youtube" width="560" height="315" src="https://www.youtube.com/embed/ZXXxwTQf8CE?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
        </div>
    </div>
  </div>

  <div class="container-fluid" style="background-color: #FFB030;" id="travel">
    <div class="container">
        <nav class="d-none d-lg-flex justify-content-between w-75 py-5" id="nav-carousel-servicos-1">
            <a href="#carouselservicos1" data-bs-slide-to="0" class="btn shadow-none active" autofocus>
              <h3 class="text-center tab-servico-1">Passagens Áereas</h3>
            </a>
            <a href="#carouselservicos1" data-bs-slide-to="1" class="btn shadow-none">
              <h3 class="text-center tab-servico-1">Seguro</h3>
            </a>
            <a href="#carouselservicos1" data-bs-slide-to="2" class="btn shadow-none">
              <h3 class="text-center tab-servico-1">Translado</h3>
            </a>
        </nav>

        <script>
          $( "#nav-carousel-servicos-1 .btn" ).click(function() {
            if(!$(this).hasClass('active')) {
              $("#nav-carousel-servicos-1 .btn").removeClass('active');
              $(this).addClass('active');
            }
          });
        </script>

        <div class="pb-5">
          <div id="carouselservicos1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a class="d-flex d-lg-none shadow-none active py-5 justify-content-center">
                  <h3 class="tab-servico-1 ">Passagens Áereas</h3>
                </a>
                <div class="d-flex flex-column flex-lg-row">
                  <div class="carousel-thumbnail w-100 position-relative rounded-3 shadow">
                    <img class="w-100 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos-passagens-1.png" alt="Servico passagem 1">
                    <p class="text-bold position-absolute text-white" id="thumb-text">Nossos intercambistas viajam com tarifa de estudante</p>
                  </div>
                  <div class="carousel-info w-100 px-3 d-flex flex-column justify-content-center text-center text-lg-start">
                    <p class="mb-2 mt-2">Para cada destino, várias opções de cias aéreas. Conhecemos todas e estamos preparados para te ajudar a escolher as melhores opções.  A OK Intercâmbio garante aos clientes suporte quanto à reserva de passagens aéreas.</p>
                    <p class="mb-5">Nosso compromisso é tranquilizar quanto às escolhas da cia aéreas e datas dos voos mais adequadas às necessidades de cada um. Também trabalhamos com alterações de datas, tanto de ida como de volta.  A viagem é sua, mas o trabalho é nosso!</p>
                    <span class="w-100 d-flex justify-content-center">
                      <a href="#staticDropdownCotacao" data-bs-toggle="modal" data-bs-target="#staticDropdownCotacao" class="btn w-100 text-white mb-3" id="btn-cotacao">Realizar cotação</a>
                    </span>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <a class="d-flex d-lg-none shadow-none active py-5 justify-content-center">
                  <h3 class="tab-servico-1 ">Seguro</h3>
                </a>
                <div class="d-flex flex-column flex-lg-row">
                  <div class="carousel-thumbnail w-100 position-relative rounded-3 shadow">
                    <img class="w-100 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos-passagens-2.png" alt="Servico passagem 2">
                    <p class="text-bold position-absolute text-white" id="thumb-text">Centrais disponíveis 24h para antedimento</p>
                  </div>
                  <div class="carousel-info w-100 px-3 d-flex flex-column justify-content-center text-center text-lg-start">
                    <p class="mb-2">Garantir a tranquilidade da viagem com um seguro internacional é muito importante. Oferecemos suporte com diversas empresas especializadas em vários lugares do mundo.</p>
                    <p class="mb-5">Sabemos que imprevistos podem acontecer, por isso estar amparado por uma assistência médica faz toda a diferença. Afinal, não há nada mais chato que surpresas desagradáveis no meio da viagem.</p>
                    <span class="w-100 d-flex justify-content-center">
                      <a href="#staticDropdownCotacao" data-bs-toggle="modal" data-bs-target="#staticDropdownteste" class="btn w-100 text-white mb-3" id="btn-cotacao">Falar consultor</a>
                    </span>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <a class="d-flex d-lg-none shadow-none active py-5 justify-content-center">
                  <h3 class="tab-servico-1 ">Translado</h3>
                </a>
                <div class="d-flex flex-column flex-lg-row">
                  <div class="carousel-thumbnail w-100 position-relative rounded-3 shadow">
                    <img class="w-100 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos-passagens-3.png" alt="Servico passagem 3">
                    <p class="text-bold position-absolute text-white" id="thumb-text">Serviço opcional</p>
                  </div>
                  <div class="carousel-info w-100 px-3 d-flex flex-column justify-content-center text-center text-lg-start">
                    <p class="mb-2">Garantimos o suporte terrestre entre aeroporto e local da hospedagem, assumindo a responsabilidade de oferecer todo o acompanhamento para garantir conforto para nossos clientes.</p>
                    <p class="mb-5">A OK Intercâmbio possui um completo serviço de transfer, em parceria com empresas especializadas em todos os destinos ofertados pela agência, para assegurar que todos os clientes cheguem à acomodação com comodidade e segurança.</p>
                    <span class="w-100 d-flex justify-content-center">
                      <a href="#staticDropdownCotacao" data-bs-toggle="modal" data-bs-target="#staticDropdownteste" class="btn w-100 text-white mb-3" id="btn-cotacao">Falar consultor</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="carousel-controllers mt-2">
              <a class="carousel-prev" href="#carouselservicos1" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-next" href="#carouselservicos1" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="container-fluid" style="background-color: #7B39E9;">
    <div class="container">
        <nav class="d-none d-lg-flex justify-content-between w-75 py-5" id="nav-carousel-servicos-2">
            <a href="#carouselservicos2" data-bs-slide-to="0" class="btn shadow-none active" autofocus>
              <h3 class="text-center tab-servico-2">Hospedagens</h3>
            </a>
            <a href="#carouselservicos2" data-bs-slide-to="1" class="btn shadow-none">
              <h3 class="text-center tab-servico-2">Visa Travel Money</h3>
            </a>
            <a href="#carouselservicos2" data-bs-slide-to="2" class="btn shadow-none">
              <h3 class="text-center tab-servico-2">Vistos</h3>
            </a>
        </nav>

        <script>
          $( "#nav-carousel-servicos-2 .btn" ).click(function() {
            if(!$(this).hasClass('active')) {
              $("#nav-carousel-servicos-2 .btn").removeClass('active');
              $(this).addClass('active');
            }
          });
        </script>

        <div class="pb-5">
          <div id="carouselservicos2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active" id="hospedagem">
                <a class="d-flex d-lg-none shadow-none active py-5 justify-content-center">
                  <h3 class="tab-servico-2">Hospedagens</h3>
                </a>
                <div class="d-flex flex-column flex-lg-row">
                  <div class="carousel-thumbnail w-100 position-relative rounded-3 shadow">
                    <img class="w-100 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos-hospedagem-1.png" alt="Servico hospedagem 1">
                    <p class="text-bold position-absolute text-white" id="thumb-text">Estilo de hospedagem para cada perfil</p>
                  </div>
                  <div class="carousel-info w-100 px-3 d-flex flex-column justify-content-center text-center text-lg-start">
                    <p class="mb-2 mt-3 text-white">Oferecemos diferentes opções de estadias a sua escolha, para melhor acolher as suas necessidades. Como a OK Intercâmbio têm diversos programas de intercâmbio para diferentes idades e propósitos, para cada perfil de intercambista disponibilizamos um estilo de hospedagem.</p>

                    <div class="row mb-5 mt-5">
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/residencia-estudantil.svg">
                            <p class="text-center text-xl-center text-light mt-4">Residência</p>
                            <p class="text-center text-xl-center text-light mt-1">estudantil</p>        
                      </div>
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/host-family.svg">
                            <p class="text-center text-xl-center text-light mt-4">Host Family</p>    
                      </div>
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/hostel.svg">
                            <p class="text-center text-xl-center text-light mt-4">Hostel</p>    
                      </div>
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/hotel.svg">
                            <p class="text-center text-xl-center text-light mt-4">Host</p>    
                      </div>
                    </div>

                    <span class="w-100 d-flex justify-content-center">
                      <a href="#staticDropdownCotacao" data-bs-toggle="modal" data-bs-target="#staticDropdownteste" class="btn w-100 text-white mb-3" id="btn-hospedagem">Falar consultor</a>
                    </span>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <a class="d-flex d-lg-none shadow-none active py-5 justify-content-center">
                  <h3 class="tab-servico-2">Visa Travel Money</h3>
                </a>
                <div class="d-flex flex-column flex-lg-row">
                  <div class="carousel-thumbnail w-100 position-relative rounded-3 shadow">
                    <img class="w-100 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos-visto.png" alt="Servico visto">
                    <p class="text-bold position-absolute text-white" id="thumb-text">6 moedas em apenas um cartão</p>
                  </div>
                  <div class="carousel-info w-100 px-3 d-flex flex-column justify-content-center text-center text-lg-start">
                    <p class="mb-2 mt-3 text-white">Temos parceria com casas de câmbio para oferecer o cartão VTM, uma opção para quem não deseja levar dinheiro em mãos. É muito importante garantir toda segurança na viagem de nossos clientes. A OK Intercâmbio sempre aconselha a utilização do Visa Travel Money.</p>

                    <div class="row mb-5 mt-5">
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/padlock.svg">
                            <p class="text-center text-xl-center text-light mt-4">Proteção por</p>
                            <p class="text-center text-xl-center text-light mt-1">chip e senha</p>        
                      </div>
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/programas-mundo.svg">
                            <p class="text-center text-xl-center text-light mt-4">Assistência</p>
                            <p class="text-center text-xl-center text-light mt-1">global</p>   
                      </div>
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/card-add.svg">
                            <p class="text-center text-xl-center text-light mt-4">Substituição</p>
                            <p class="text-center text-xl-center text-light mt-1">gratuita</p>   
                      </div>
                      <div class="col-6 col-lg-3 text-center text-xl-center">
                            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/card-block.svg">
                            <p class="text-center text-xl-center text-light mt-4">Sem vínculo com</p>
                            <p class="text-center text-xl-center text-light mt-1">a sua conta</p>    
                      </div>
                    </div>

                    <span class="w-100 d-flex justify-content-center">
                      <a href="#staticDropdownCotacao" data-bs-toggle="modal" data-bs-target="#staticDropdownteste" class="btn w-100 text-white mb-3" id="btn-hospedagem">Falar consultor</a>
                    </span>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <a class="d-flex d-lg-none shadow-none active py-5 justify-content-center">
                  <h3 class="tab-servico-2">Vistos</h3>
                </a>
                <div class="d-flex flex-column flex-lg-row">
                  <div class="carousel-thumbnail w-100 position-relative rounded-3 shadow">
                    <img class="w-100 rounded-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos-passagens-3.png" alt="Servico visto">
                    <p class="text-bold position-absolute text-white" id="thumb-text">Parcerias com empresas especializadas em visto</p>
                  </div>
                  <div class="carousel-info w-100 px-3 d-flex flex-column justify-content-center text-center text-lg-start">
                    <p class="mb-2 mt-3 text-white">Cada país tem as suas regras para receber estudantes. Temos conhecimentos de todo o processo para assegurar a entrada no país. Apesar dos países serem receptivos aos estudantes, eles têm leis específicas para regularizar a permanência do estrangeiro.</p>
                    <p class="mb-5 text-white"> Sendo assim, oferecemos suporte na organização da documentação e comprovantes necessários, tudo sob a orientação de empresas autorizadas e certificadas por cada país.</p>

                    <span class="w-100 d-flex justify-content-center">
                      <a href="#staticDropdownCotacao" data-bs-toggle="modal" data-bs-target="#staticDropdownteste" class="btn w-100 text-white mb-3" id="btn-hospedagem">Falar consultor</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="carousel-controllers mt-2">
              <a class="carousel-prev" href="#carouselservicos2" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-next" href="#carouselservicos2" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="container">
    <h2 class="text-center linha4 my-5">Por que viajar com a OK Intercâmbio?</h2>
    <h2 class="text-center linha5 mt-5 mb-2">Por que viajar com</h2>
    <h2 class="text-center linha6 mb-5">a OK?</h2>
    <div class="row text-center pt-4">
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/porque-equipe.svg">
          </div>
          <div class="col-8 text-start">
            <p>Equipe especializada com</p>
            <p class="mt-1">experiência internacional</p>           
          </div>
        </div>       
      </div>
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/porque-parceria.svg">
          </div>
          <div class="col-8 text-start">
            <p>Parceria com as melhores</p>
            <p class="mt-1">instituições de ensino exterior</p>           
          </div>
        </div>       
      </div>
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/porque-assessoria.svg">
          </div>
          <div class="col-8 text-start">
            <p>Assessoria completa do</p>
            <p class="mt-1">planejamento da viagem</p>           
          </div>
        </div>       
      </div>
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/porque-credibilidade.svg">
          </div>
          <div class="col-8 text-start">
            <p>Credibilidade no mercado de</p>
            <p class="mt-1">Intercâmbio</p>           
          </div>
        </div>       
      </div>
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/porque-atendimento.svg">
          </div>
          <div class="col-8 text-start">
            <p>Atendimento personalizado</p>         
          </div>
        </div>       
      </div>
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/icons/porque-suporte.svg">
          </div>
          <div class="col-8 text-start">
            <p>Equipe e parceiros de</p>
            <p class="mt-1">suporte no exterior</p>           
          </div>
        </div>       
      </div>
    </div>
  </div>
<div class="container-fluid text-center" style="background-color:#FFB030;">
    <div class="container pt-5">
      <h3 class="mb-5" style="color: #7B39E9;" id="viagem">Destinos</h3>
      <div class="container">
        <div class="row d-none d-lg-flex gap-5 justify-content-center mt-4 mb-4">
            <?php 
                $args = array (
                    'post_type' => 'destino',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_limits' => 8,
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
                <div class="swiper-slide pt-5">
                    <a id="card-destiny" class="post-frame col-11 d-flex justify-content-center rounded-3 mx-auto" href="<?php echo get_the_permalink($post->ID); ?>">
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
    </div>
    <a href="<?php echo get_home_url(); ?>/destinos">
      <button type="button" class="btn cor-botao text-center text-light my-5 px-4">Ver mais</button>
    </a>
  </div>
  <div class="container py-5">
    <div class="d-flex flex-column flex-lg-row">
      <div class="w-100">
            <div>
                <h3 class="cor-empresa mt-3 mb-4 pe-2 text-center text-md-start " style="line-height: 24px;">Faça o orçamento da sua viajem</h3>
                <p class="pe-4 mb-3">Preencha os campos ao lado e clique no botão “ENVIAR ”, depois é só aguardar o contato da nossa equipe.</p>
            </div>
      </div>
      <div class="w-100">
        <?php echo do_shortcode('[contact-form-7 id="222" title="Formulário de orçamento"]');?>
      </div>
    </div>
  </div>
</main>

<?php 
  includeFile('components/modal-contato.php', array());
  includeFile('components/modal-cotacao.php', array());
?>


<?php get_footer(); ?>