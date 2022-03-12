<?php get_header(); ?>

<style>
  h2{
   color: orange; 
  }
</style>

<div >
<div class="container" >
  <div class="row mt-4 ms-5" >
    <div class="col-md-6">
      <h2>Sobre</h2>
      <p class="mt-5">A República Federal da Alemanha está situada no coração da Europa e é um país cosmopolita, democrático, com uma grande tradição e um presente vibrante.  País da Europa Ocidental conta com uma paisagem de florestas, rios, serras e praias do Mar do Norte. Tem mais de 2 milénios de história. Berlim, a capital, alberga espaços de arte e de vida noturna, a Porta de Brandeburgo e muitos locais relacionados com a Segunda Guerra Mundial. Munique, é conhecida pela Oktoberfest e pelas cervejarias,
        incluindo a Hofbräuhaus, dó século XVI. Frankfurt, com os seus arranha-céus, alberga o Banco Central.0</p>
      <h2 class="mt-5">Detalhes</h2>
    </div>
    <div class="col-md-6">
    <h2>Galeria</h2>
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

<?php get_footer(); ?>