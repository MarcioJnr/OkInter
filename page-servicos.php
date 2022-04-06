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
        <h2 class="orange">Aproveite sua viagem</h2>
        <h2 class="mb-5">com tranquilidade</h2>
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
        <div class="row">
          <div class="col-12 col-xl-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-1.png" alt="First slide">
                </div>
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
            <button type="button" class="btn cor-botao cor-texto">Realizar Cotação</button>
          </div>
        </div>
    </div>
  </div>
  <div class="container-fluid" style="background-color: #7B39E9;">
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
        <div class="row">
          <div class="col-12 col-xl-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo get_template_directory_uri(  );?>/assets/images/servicos-passagens-1.png" alt="First slide">
                </div>
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
            <button type="button" class="btn cor-botao cor-texto">Realizar Cotação</button>
          </div>
        </div>
    </div>
  </div>    

</main>

<?php get_footer(); ?>