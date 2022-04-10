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
        <h2 class="orange linha1">Aproveite sua viagem</h2>
        <h2 class="mb-5 linha2">com tranquilidade</h2>
        <h2 class="mb-5 linha3">Aproveite a viagem</h2>
        <p>A OK Intercâmbio trabalha com serviços e planos de cobertura moldados às
           suas necessidades e exigências, os quais oferecem ao viajante todo apoio 
           necessário com centrais 24 horas para atendê-lo em qualquer parte do mundo.</p>
      </div>
      <div class="col-12 col-md-6 text-center">
        <h1>VIDEO</h1>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: #FFB030;">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-md-4 col-xl-4 ">
              <h3 class="text-center cor-missao">Passagens Áereas</h3>
            </div>
            <div class="col-12 col-md-4 col-xl-4 ">
              <h3 class="text-center cor-grafite">Seguro</h3>
            </div>
            <div class="col-12 col-md-4 col-xl-4 ">
              <h3 class="text-center cor-grafite">Translado</h3>
            </div>
        </div>
        <div class="row pb-5">
          <div class="col-12 col-xl-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 imgtest" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-1.png" alt="First slide">
                </div>
                <p class="cor-valor texttest mb-4 px-4 py-2 text-light rounded-3">Nossos intercambistas viajam com tarifa de estudante.</p>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-1.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-1.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>
          </div>
          <div class="col-12 col-xl-6 mt-3">
            <p class="mb-4">
            Para cada destino, várias opções de cias aéreas. Conhecemos todas e estamos 
            preparados para te ajudar a escolher as melhores opções.  A OK Intercâmbio 
            garante aos clientes suporte quanto à reserva de passagens aéreas.
            </p>
            <p>
            Nosso compromisso é tranquilizar quanto às escolhas da cia aéreas e datas dos 
            voos mais adequadas às necessidades de cada um. Também trabalhamos com 
            alterações de datas, tanto de ida como de volta.  A viagem é sua, mas o trabalho 
            é nosso!
            </p><br><br>
            <button type="button" id="btn-cotacao" class="btn cor-botao text-light px-4" data-bs-toggle="modal" data-bs-target="#staticDropdownCotacao">Realizar Cotação</button>
          </div>
        </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: #7B39E9;">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-md-4 col-xl-4 ">
              <h3 class="text-center cor-empresa">Hospedagens</h3>
            </div>
            <div class="col-12 col-md-4 col-xl-4 ">
              <h3 class="text-center cor-grafite">Visa Travel Money</h3>
            </div>
            <div class="col-12 col-md-4 col-xl-4 ">
              <h3 class="text-center cor-grafite">Vistos</h3>
            </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 imgtest" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-2.png" alt="First slide">
                </div>
                <p class="cor-valor texttest mb-4 px-4 py-2 text-light rounded-3">Estilo de hospedagem para cada perfil</p>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri(  );?>/assets/images/londres.svg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-1.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
            </div>
          </div>
          <div class="col-12 col-xl-6 mt-3">
            <p>
            Oferecemos diferentes opções de estadias a sua escolha, para melhor acolher 
            as suas necessidades. Como a OK Intercâmbio têm diversos programas de 
            intercâmbio para diferentes idades e propósitos, para cada perfil de 
            intercambista disponibilizamos um estilo de hospedagem.
            </p>
            <div class="row mt-5 mb-5">
              <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/residencia-estudantil.svg">
                    <p class="text-center text-xl-center text-light mt-4">Residência</p>
                    <p class="text-center text-xl-center text-light mt-1">estudantil</p>        
              </div>
              <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/host-family.svg">
                    <p class="text-center text-xl-center text-light mt-4">Host Family</p>    
              </div>
              <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/hostel.svg">
                    <p class="text-center text-xl-center text-light mt-4">Hostel</p>    
              </div>
              <div class="col-12 col-md-6 col-xl-3 text-center text-xl-center">
                    <img src="<?php echo get_template_directory_uri(  );?>/assets/images/hotel.svg">
                    <p class="text-center text-xl-center text-light mt-4">Host</p>    
              </div>
            </div>

              <button type="button" id="btn-consultor" class="btn btn-warning text-light px-4" data-bs-toggle="modal" data-bs-target="#staticDropdownteste">Falar com consultor</button>
          
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
            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/porque-equipe.svg">
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
            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/porque-parceria.svg">
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
            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/porque-assessoria.svg">
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
            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/porque-credibilidade.svg">
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
            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/porque-atendimento.svg">
          </div>
          <div class="col-8 text-start">
            <p>Atendimento personalizado</p>         
          </div>
        </div>       
      </div>
      <div class="col-12 col-md-4 col-xl-4 mb-5">
        <div class="row">
          <div class="col-4">
            <img src="<?php echo get_template_directory_uri(  );?>/assets/images/porque-suporte.svg">
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
    <div class="container">
        <div class="row">
            <h3 class="mt-5" style="color: #7B39E9;">Destinos</h3>
            <div class="col-12 col-md-6 col-xl-3 mt-4 mb-5">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/irlanda-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mt-4">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/canada-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Canadá</h4>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mt-4">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/alemanha-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Alemanha</h4>
            </div>
            <div class="col-12 col-md-6 col-xl-3 mt-4">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/malta-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Malta</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3 ">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/irlanda-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/canada-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/alemanha-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/malta-destinos.png">
                <h4 class="text-center" style="margin-top:-60px; backdrop-filter: blur(0px); color: white; font-size: 40px;">Irlanda</h4>
            </div>
        </div>
    </div>
    <button type="button" class="btn cor-botao text-center text-light my-5 px-4">Ver mais</button>
  </div>
  <div class="container py-5">
    <h1 class="text-center">FORMS</h1>
  </div>
</main>


<div class="modal fade" id="staticDropdownteste" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog rounded-3 modal-dialog-centered">
    <div class="modal-content rounded-3 rounded-top">
      <div class="modal-header">
            <div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="cor-empresa mt-3 mb-4" style="line-height: ;">Falar com o consultor</h3>
            </div>
      </div>
      <div class="modal-body">
      <?php echo do_shortcode('[contact-form-7 id="5" title="Formulário de contato"]');?>
      </div>
      
    </div>
  </div>
</div>


<div class="modal fade" id="staticDropdownCotacao" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog rounded-3 modal-dialog-centered">
    <div class="modal-content rounded-3 rounded-top">
      <div class="modal-header">
            <div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="cor-empresa mt-3 mb-4" style="line-height: ;">Cotação de passagem áerea</h3>
            </div>
      </div>
      <div class="modal-body">
      <?php echo do_shortcode('[contact-form-7 id="30" title="form cortacao"]');?>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>