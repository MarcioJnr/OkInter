<?php get_header(); ?>

<style>

  .orange{
   color: #FF6A2E; 
  }

  .purple{
   color: #7B39E9; 
  }

  .button{
    width: 160px;
    height: 48px;
    color: white;
  }

  .button2{
    width: 232px;
    height: 48px;
    color: white;
  }
  

</style>
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
  <div class="container-fluid" >
    <div class="row gx-0 mb-5">
      <h1 class="orange text-center my-5">Promoções da Semana</h1>
      <div class="col-12 col-xl-8">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/toronto.svg">
      </div>
      <div class="col-12 col-xl-4 bg-light text-center ">
              <h2 class="orange pt-3">Toronto</h2>
              <h6 class="pb-5">Business English</h6>
                <ul class="pb-5 text-start">
                  <li class="mb-2">4 Semanas de Curso de Inglês</li>
                  <li class="mb-2">12h semanais</li>
                  <li class="mb-2">Taxa de Matrícula</li>
                  <li class="mb-2">Material didático</li>
                  <li class="mb-2">Homestay - Pensão completa</li>
                  <li class="mb-2">Atividades extras</li>
                  <li class="mb-2">Suporte OK Intercâmbio</li>
                </ul>
              <h3 class="orange"> R$ 10.000,00</h3>
              <h3 class="orange"> em até 12x</h3>
              <button type="button" class="btn btn-warning button2 mt-5">SABER MAIS</button>
      </div>
    </div>
    <div class="row gx-0 mb-5">
      <div class="col-12 col-xl-8">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/buenosAires.svg">
      </div>
      <div class="col-12 col-xl-4 bg-light text-center ">
              <h2 class="orange pt-3">Buenos Aires</h2>
              <h6 class="pb-5">Intercâmbio em Família</h6>
                <ul class="pb-5 text-start">
                  <li class="mb-2">Lorem ipsum dolor </li>
                  <li class="mb-2">Magna at faucibus in gravida commodo.</li>
                  <li class="mb-2">In velit quisque morbi</li>
                  <li class="mb-2">Suspendisse aenean</li>
                  <li class="mb-2">Magna at faucibus.</li>
                  <li class="mb-2">In velit quisque morbi volutpat blandit.</li>
                </ul>
              <h3 class="orange pt-2"> R$ 10.000,00</h3>
              <h3 class="orange"> em até 12x</h3>
              <button type="button" class="btn btn-warning button2 mt-5">SABER MAIS</button>
      </div>
    </div>
    <div class="row gx-0 mb-5">
      <div class="col-12 col-xl-8">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/barcelona.svg">
      </div>
      <div class="col-12 col-xl-4 bg-light text-center ">
              <h2 class="orange pt-3">Barcelona</h2>
              <h6 class="pb-5">Universidade no exterior</h6>
                <ul class="pb-5 text-start">
                  <li class="mb-2">Lorem ipsum dolor </li>
                  <li class="mb-2">Magna at faucibus in gravida commodo.</li>
                  <li class="mb-2">In velit quisque morbi</li>
                  <li class="mb-2">Suspendisse aenean</li>
                  <li class="mb-2">Magna at faucibus.</li>
                  <li class="mb-2">In velit quisque morbi volutpat blandit.</li>
                </ul>
              <h3 class="orange pt-2"> R$ 10.000,00</h3>
              <h3 class="orange"> em até 12x</h3>
              <button type="button" class="btn btn-warning button2 mt-5">SABER MAIS</button>
      </div>
    </div>
    <div class="row gx-0 mb-5">
      <div class="col-12 col-xl-8">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/londres.svg">
      </div>
      <div class="col-12 col-xl-4 bg-light text-center ">
              <h2 class="orange pt-3">Londres</h2>
              <h6 class="pb-5">Universidade no exterior</h6>
                <ul class="pb-5 text-start">
                  <li class="mb-2">Lorem ipsum dolor </li>
                  <li class="mb-2">Magna at faucibus in gravida commodo.</li>
                  <li class="mb-2">In velit quisque morbi</li>
                  <li class="mb-2">Suspendisse aenean</li>
                  <li class="mb-2">Magna at faucibus.</li>
                  <li class="mb-2">In velit quisque morbi volutpat blandit.</li>
                </ul>
              <h3 class="orange pt-2"> R$ 10.000,00</h3>
              <h3 class="orange"> em até 12x</h3>
              <button type="button" class="btn btn-warning button2 mt-5">SABER MAIS</button>
      </div>
    </div>    
  </div>
</main>

<?php get_footer(); ?>