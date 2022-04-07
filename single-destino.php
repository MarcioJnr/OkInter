<?php get_header(); ?>

<?php 
    $args = array (
        'post_type' => 'destino',
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'tipo',
                'field' => 'slug',
                'terms' => 'pais'
            )
        )
    );
    $pais_query = new WP_Query($args);
    includeFile('components/banner-paises.php', 
        array(
            'title'=>get_the_title($post->ID), 
            'imagem'=>get_the_post_thumbnail_url($post->ID),
        )
    ); 
?>

<div class="container py-5">
  <div class="row d-lg-flex">
    <div class="col col-lg-6 text-center text-lg-start">
      <h2 class="mb-3">Sobre</h2>
      <?php echo get_the_content($post->ID); ?>

      <h2 class="mb-3 mt-4 ">Detalhes</h2>
      <p class="text-start mb-4" id="details"><?php echo get_the_excerpt($post->ID); ?></p>
    </div>

    <aside class="col col-lg-6 text-center text-lg-start">
      <h2 class="mb-3 ">Galeria</h2>

      <div id="testimonial-carousel" class="carousel slide d-block" data-bs-ride="carousel">
          <div class="carousel-inner">
              <?php 
                  $args = array (
                  'post_type' => 'galeria',
                  'orderby' => 'title',
                  'order' => 'ASC',
                  'tax_query' => array(
                      array(
                          'taxonomy' => 'pais',
                          'field' => 'slug',
                          'terms' => get_the_title($post->ID)
                        )
                    )
                );
                $fotos_query = new WP_Query($args);
                $counter=0;

                if($fotos_query->have_posts()) : 
                  if($counter == 0) :
                      echo '<div class="carousel-item active">';
                  else :
                      echo '<div class="carousel-item">';
                  endif;

                  includeFile('components/galery-destiny.php',
                      array(
                          'img1'=>get_the_post_thumbnail_url($post->ID), 
                          'img2'=>get_the_post_thumbnail_url($post->ID),
                          'img3'=>get_the_post_thumbnail_url($post->ID)
                      )
                  ); 

                  $counter=$counter+1;

                  echo '</div>';
                endif;
              ?>
          </div>

          <div class="d-flex justify-content-end" id="control-buttons">
              <button class="btn shadow-none" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-left" alt="Slide anterior">
              </button>

              <button class="btn shadow-none" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right" alt="Próximo slide">
              </button>
          </div>
      </div>
    </aside>
  </div>
</div>

<div class="container-fluid text-center" >
  <div class="row mt-5 justify-content-center text-center px-5 gap-3" id="cities">
    <h2 class="my-5">Cidades Ofertadas</h2>
    <div class="row gap-3 p-0 d-flex justify-content-center">
      <?php 
        $args = array (
            'post_type' => 'destino',
            'orderby' => 'title',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tipo',
                    'field' => 'slug',
                    'terms' => 'cidade'
                )
            )
        );
        $cidade_query = new WP_Query($args);
        if($cidade_query->have_posts()) : 
          while ($cidade_query->have_posts()) : $cidade_query->the_post();
            echo '<div class="col-5 col-lg-3 px-0">';
            
            includeFile('components/card-destiny.php', 
                array(
                    'href'=>'#', 
                    'directoryUrl'=> get_the_post_thumbnail_url($post->ID),
                    'destinyName'=>get_the_title($post->ID)
                )
            ); 
              
            echo '</div>';
          endwhile;
        endif;
      ?>
    </div>
    <button type="button" class="btn button my-5 w-50">Orçamento</button>
  </div>

  <div class="row py-5" id="life-cost">
    <div class="container">
      <h2 class="text-center">Custo de Vida</h2>
      <h6 class="mb-3 text-white">Despesas básicas e essenciais</h6>
      <div class="row d-none d-lg-flex">
        <div class="col-4">
          <?php includeFile('components/life-cost.php', array(
            'iconName'=>'map-pointer',
            'name'=>'Capital',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
          )) ?>

          <?php includeFile('components/life-cost.php', array(
            'iconName'=>'world',
            'name'=>'Língua Oficial',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
          )) ?>
        </div>

        <div class="col-4">
          <?php includeFile('components/life-cost.php', array(
            'iconName'=>'cash',
            'name'=>'Moeda',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
          )) ?>

          <?php includeFile('components/life-cost.php', array(
            'iconName'=>'territory',
            'name'=>'Território',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
          )) ?>
        </div>

        <div class="col-4">
          <?php includeFile('components/life-cost.php', array(
            'iconName'=>'clock',
            'name'=>'Fuso Horário',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
          )) ?>

          <?php includeFile('components/life-cost.php', array(
            'iconName'=>'plug',
            'name'=>'Voltagem',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
          )) ?>
        </div>
      </div>

      <div class="swiper swiper-custo-de-vida d-lg-none">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <?php includeFile('components/life-cost.php', array(
              'iconName'=>'map-pointer',
              'name'=>'Capital',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
            )) ?>
          </div>

          <div class="swiper-slide">
            <?php includeFile('components/life-cost.php', array(
              'iconName'=>'world',
              'name'=>'Língua Oficial',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
            )) ?>
          </div>

          <div class="swiper-slide">
            <?php includeFile('components/life-cost.php', array(
              'iconName'=>'cash',
              'name'=>'Moeda',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
            )) ?>
          </div>

          <div class="swiper-slide">
            <?php includeFile('components/life-cost.php', array(
              'iconName'=>'territory',
              'name'=>'Território',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
            )) ?>
          </div>

          <div class="swiper-slide">
            <?php includeFile('components/life-cost.php', array(
              'iconName'=>'clock',
              'name'=>'Fuso Horário',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
            )) ?>
          </div>

          <div class="swiper-slide">
            <?php includeFile('components/life-cost.php', array(
              'iconName'=>'plug',
              'name'=>'Voltagem',
              'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget sagittis ultrices vulputate id a.'
            )) ?>
          </div>
        </div>

        <div class="swiper-pagination " id="swiper-pagination-custo-de-vida"></div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid bg-warning text-center">
  <h1 class="pt-5 pb-4 purple">Programas disponíveis</h1>
  <div class="container ">
    <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-xl-3 bg-light pt-5 mx-4 mb-5">
            <h2 class="orange pb-4">Idiomas</h2>
              <ul class="pt-5 pb-5 text-start">
                <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li class="mb-2">Magna at faucibus in gravida commodo. </li>
                <li class="mb-2">In velit quisque morbi volutpat blandit.</li>
                <li class="mb-2">Suspendisse aenean in tortor purus nisi. </li>
                <li class="mb-2">Ullamcorper pharetra sit ullamcorper amet. </li>
              </ul>
            <h3 class="orange"> R$ 10.000,00</h3>
            <h3 class="orange"> em até 12x</h3>
            <button type="button" class="btn btn-warning button2 my-5">SELECIONAR PACOTE</button>
          </div>
          <div class="col-12 col-md-6 col-xl-3 bg-light pt-3 mx-4 mb-5">
            <h2 class="orange pt-3">Business</h2>
            <h2 class="orange pb-5">English</h2>
              <ul class="pb-5 text-start">
                <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li class="mb-2">Magna at faucibus in gravida commodo. </li>
                <li class="mb-2">In velit quisque morbi volutpat blandit.</li>
                <li class="mb-2">Suspendisse aenean in tortor purus nisi. </li>
                <li class="mb-2">Ullamcorper pharetra sit ullamcorper amet. </li>
              </ul>
            <h3 class="orange"> R$ 10.000,00</h3>
            <h3 class="orange"> em até 12x</h3>
            <button type="button" class="btn btn-warning button2 my-5">SELECIONAR PACOTE</button>
          </div>
          <div class="col-12 col-md-6 col-xl-3 bg-light pt-3 mx-4 mb-5">
            <h2 class="orange pt-3">High</h2>
            <h2 class="orange pb-5">School</h2>
              <ul class="pb-5 text-start">
                <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li class="mb-2">Magna at faucibus in gravida commodo. </li>
                <li class="mb-2">In velit quisque morbi volutpat blandit.</li>
                <li class="mb-2">Suspendisse aenean in tortor purus nisi. </li>
                <li class="mb-2">Ullamcorper pharetra sit ullamcorper amet. </li>
              </ul>
            <h3 class="orange"> R$ 10.000,00</h3>
            <h3 class="orange"> em até 12x</h3>
            <button type="button" class="btn btn-warning button2 my-5">SELECIONAR PACOTE</button>
          </div> 
    </div>
  </div>
</div>

<!-- Depoimentos -->

<div class="container-fluid mt-5 text-center">
  <h1 class="orange mb-4">Depoimentos</h1>
  <h6 class="mb-5">Nossos clientes falam</h6>
  <div class="row justify-content-center">
    <div class="col-12 col-md-6 col-xl-3 bg-light">
        <img src="<?php echo get_template_directory_uri(  );?>/assets/images/daniel.png" style="width: 137px; height: 137px;" class="mb-3">
        <h6>Alana Rodrigues</h6>
    </div>
    <div class="col-12 col-md-6 col-xl-4">
      <img src="<?php echo get_template_directory_uri(  );?>/assets/images/daniel.png" style="width: 137px; height: 137px;" class="mb-3">
      <h6>Vera Almeida</h6>
    </div>
    <div class="col-12 col-md-6 col-xl-3">
      <img src="<?php echo get_template_directory_uri(  );?>/assets/images/daniel.png" style="width: 137px; height: 137px;" class="mb-3">
      <h6>Vanessa Freitas</h6>  
    </div>
  </div>
</div>  

<script>
  $(document).ready(function () {
    let detalhes = $('#details')[0].innerText
    $('#details')[0].innerHTML = detalhes.replace(/;/g, '<br>');
  });
</script>

<?php get_footer(); ?>