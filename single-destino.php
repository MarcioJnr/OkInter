<?php wp_reset_postdata(); ?>
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

<div class="container py-5" id="sobre">
  <div class="container-fluid d-lg-flex">
    <div class="text-center text-lg-start" id="info">
      <h2 class="mb-3">Sobre</h2>
      <?php echo get_the_content($post->ID); ?>

      <h2 class="mb-3 mt-4">Detalhes</h2>
      <p class="mb-4" id="details"><?php echo get_the_excerpt($post->ID); ?></p>
    </div>

    <aside class="text-center text-lg-start">
      <h2 class="mb-3">Galeria</h2>
      <!-- <div class="swiper swiper-galeria">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="galeria">
              <div class="col-5 left">
                <div class="row">
                  <img src="" alt="">
                </div>
                <div class="row">

                </div>
              </div>
              <div class="col-5 right">

              </div>
            </div>
          </div>
        </div>
        <div class="swiper-navigation"></div>
      </div> -->
    </aside>
  </div>
</div>

<div class="text-center py-5" id="cities">
  <h2 class="mb-4">Cidades Ofertadas</h2>
  <div class="container mb-4">
    <div class="row">
      <?php 
      $args = array (
          'post_type' => 'pacote',
          'orderby' => 'title',
          'order' => 'ASC',
          'tax_query' => array(
              array(
                  'taxonomy' => 'paispacote',
                  'field' => 'slug',
                  'terms' => get_the_title($post->ID)
              )
          )
      );
      $cidade_query = new WP_Query($args);
      if($cidade_query->have_posts()) : 
        while ($cidade_query->have_posts()) : $cidade_query->the_post(); ?>
          <div class="col-6 col-lg-3 mb-4">
              <a href="<?php echo get_the_permalink($post->ID); ?>" class="card border-0 shadow position-relative">
                  <img class="rounded-3" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                  <h3 class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center text-white"><?php echo get_the_title($post->ID); ?></h3>
              </a>
          </div>
    <?php endwhile; endif; wp_reset_postdata();?>
    </div>
  </div>
  <span class="w-100">
      <button type="button" class="btn button" data-bs-toggle="modal" data-bs-target="#staticDropdown">Orçamento</button>
  </span>
</div>


<div class="py-5" id="life-cost">
  <h2 class="text-center">Custo de Vida</h2>
  <h6 class="mb-3 text-white text-center">Despesas básicas e essenciais</h6>
  <div class="container">
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

    <div class="swiper swiper-custo-de-vida d-sm-none">
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

<div class="py-5" id="programas">
  <h2 class="text-center mb-4">Programas disponíveis</h2>
  <div class="container">
    <div class="swiper swiper-destino-programa">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="programa px-3 py-5 rounded-3 shadow bg-white d-flex flex-column justify-content-between align-items-center">
            <h4>Idiomas</h4>
            <ul>
              <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
              <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
              <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
              <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
              <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
            </ul>
            <h4 class="text-center">R$ 10.000,00<br>em até 12x<h4>
            <span class="d-flex justify-content-center">
              <button class="btn px-4 py-3 text-white shadow-none" id="btn-orcamento" data-bs-toggle="modal" data-bs-target="#staticDropdown">
                <h6 class="mb-0">Comprar</h6>
              </button>
            </span>
          </div>
        </div>
      </div>
      <div class="swiper-navigation"></div>
    </div>
  </div>
</div>

<div class="py-5" id="pais-depoimentos">
  <h2 class="text-center mb-2">Depoimentos</h2>
  <p class="text-center text-xl-center fw-bolder mb-4">Nossos clientes falam</p>
  <div class="swiper swiper-depoimentos-destinos">
      <div class="swiper-wrapper">
          <?php
              $args = array (
                  'post_type' => 'depoimento',
              );
              $testimonial_query = new WP_Query($args);
              $counter = 0;

              if($testimonial_query->have_posts()) : 
                  while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
                      if($counter == 0) :
                          echo '<div class="swiper-slide swiper-slide-active">';
                      else :
                          echo '<div class="swiper-slide">';
                      endif;
          ?>
                      <div class="depoimento p-2">
                          <div class="depoimento-thumb d-flex justify-content-center">
                              <img class="rounded-circle shadow-sm m-2" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>">
                          </div>
                          <div class="depoimento-content border rounded-3 py-5 px-3 d-flex flex-column justify-content-center shadow-sm m-2">
                              <h6 class="text-center mb-1 mt-1"><?php echo get_the_title($post->ID); ?></h6>
                              <div class="stars d-flex justify-content-center mb-1">
                                  <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                  <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                  <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                  <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                                  <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.svg" alt="estrela">
                              </div>
                              <p><?php echo get_the_excerpt($post->ID); ?></p>
                          </div>
                      </div>
                  </div>
                  <?php $counter=$counter+1; ?>
          <?php endwhile; endif; wp_reset_postdata();?>
      </div>
      <br>
      <div class="swiper-pagination"></div>
  </div>
</div>

<script>
  $(document).ready(function () {
    let detalhes = $('#details')[0].innerText
    $('#details')[0].innerHTML = detalhes.replace(/;/g, '<br>');
  });
</script>

<?php get_footer(); ?>