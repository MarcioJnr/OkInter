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

</style>

<div class="container justify-content-center" >
  <div class="row mt-4  mx-5">
    <div class="col-12 col-md-6">
      <h2 class="orange">Sobre</h2>
      <p class="mt-5">A República Federal da Alemanha está situada no coração da Europa e é um país cosmopolita, democrático, com uma grande tradição e um presente vibrante.  País da Europa Ocidental conta com uma paisagem de florestas, rios, serras e praias do Mar do Norte. Tem mais de 2 milénios de história. Berlim, a capital, alberga espaços de arte e de vida noturna, a Porta de Brandeburgo e muitos locais relacionados com a Segunda Guerra Mundial. Munique, é conhecida pela Oktoberfest e pelas cervejarias,
        incluindo a Hofbräuhaus, dó século XVI. Frankfurt, com os seus arranha-céus, alberga o Banco Central.0</p>
      <h2 class="mt-5 orange" >Detalhes</h2>
        <ul class="mt-5">
          <li>Capital: Berlin</li>
          <li>Moeda: Euro </li>
          <li>Línguas oficial: Alemão</li>
          <li>Tipo Hospedagem: Casa de família, Residência Estudantil, Hostel.</li>
        </ul>
    </div>
    <div class="col-12 col-md-6">
    <h2 class="orange">Galeria</h2>
      <div class="row">
        <div class="col-md-6 mt-5">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/destino1.png" >
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/destino2.png" >
        </div>
        <div class="col-md-6 mt-5">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/destino3.png" >
        </div>
      </div>
    </div>
  </div>  
</div>

<div class="container-fluid text-center">
  <div class="row  mt-5 bg-warning  justify-content-center text-center">
    <h2 class="purple my-5">Cidades Ofertadas</h2>
        <div class="col-12 col-md-8 col-xl-4">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/cidadesofertadas1.png" >
        </div>
        <div class="col-12 col-md-8 col-xl-4">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/cidadesofertadas2.png" >
        </div>
        <div class="col-12 col-md-8 col-xl-4">
          <img src="<?php echo get_template_directory_uri(  );?>/assets/images/cidadesofertadas3.png" >
        </div>   
    <button type="button" class="btn btn-info button my-5">Orçamento</button>
  </div>
   <div class="row pt-5 me-5">
    <h2 class="orange pb-4">Custo de Vida</h2>
    <h6 class="mb-5">Despesas básicas e essenciais</h6>
    <div class="container">
      <div class="row mt-5">
       <div class="col-12 col-md-8 col-xl-4">
          <div class="row">
            <div class="col-12 col-md-6 text-end">
              <img src="<?php echo get_template_directory_uri(  );?>/assets/images/restaurantes.svg">
            </div>
            <div class="col-12 col-md-6 text-start">
              <h6>Restaurantes</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 col-xl-4">
          <div class="row">
            <div class="col-12 col-md-6 text-end">
              <img src="<?php echo get_template_directory_uri(  );?>/assets/images/mercado.svg">
            </div>
            <div class="col-12 col-md-6 text-start">
              <h6>Restaurantes</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.</p>
            </div>
          </div>  
        </div>
        <div class="col-12 col-md-8 col-xl-4">
          <div class="row">
            <div class="col-12 col-md-6 text-end">
              <img src="<?php echo get_template_directory_uri(  );?>/assets/images/transporte.svg">
            </div>
            <div class="col-12 col-md-6 text-start">
              <h6>Restaurantes</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-8 col-xl-4">
          <div class="row">
            <div class="col-12 col-md-6 text-end">
              <img src="<?php echo get_template_directory_uri(  );?>/assets/images/entretenimento.svg">
            </div>
            <div class="col-12 col-md-6 text-start">
              <h6>Restaurantes</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 col-xl-4">
          <div class="row">
            <div class="col-12 col-md-6 text-end">
              <img src="<?php echo get_template_directory_uri(  );?>/assets/images/moradia.svg">
            </div>
            <div class="col-12 col-md-6 text-start">
              <h6>Restaurantes</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-8 col-xl-4">
          <div class="row">
            <div class="col-12 col-md-6 text-end">
              <img src="<?php echo get_template_directory_uri(  );?>/assets/images/comunicacao.svg">
            </div>
            <div class="col-12 col-md-6 text-start">
              <h6>Restaurantes</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<?php get_footer(); ?>