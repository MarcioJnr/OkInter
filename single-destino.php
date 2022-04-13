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
    <div class="text-center text-lg-start mb-4" id="info">
      <h2 class="mb-3">Sobre</h2>
      <?php echo get_the_content($post->ID); ?>
    </div>

    <div class="text-center text-lg-start" id="info">
      <h2 class="mb-3">Detalhes</h2>
      <p class="mb-4" id="details"><?php echo get_the_excerpt($post->ID); ?></p>
    </div>
  </div>
</div>

<div class="text-center py-5" id="cities">
  <h2 class="mb-4">Cidades Ofertadas</h2>
  <div class="container mb-4">
    <div class="row d-flex justify-content-center">
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
              <a class="card border-0 shadow position-relative">
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
    <div class="row d-none d-sm-flex">
      <div class="col-4">
        <div class="container d-flex flex-column flex-lg-row align-items-center">
          <?php 
            includeFile('assets/icons/map-pointer.svg', array(''));
          ?>
            <div class="text-lg-start text-center">
                <h6 class="text-white px-4">Capital</h6>
                <p class="text-white px-4 fw-light"><?php echo the_field('capital') ?></p>
            </div>
        </div>

        <div class="container d-flex flex-column flex-lg-row align-items-center">
          <?php 
            includeFile('assets/icons/world.svg', array(''));
          ?>
            <div class="text-lg-start text-center">
                <h6 class="text-white px-4">Língua Oficial</h6>
                <p class="text-white px-4 fw-light"><?php echo the_field('lingua_oficial') ?></p>
            </div>
        </div>
      </div>

      <div class="col-4">
        <div class="container d-flex flex-column flex-lg-row align-items-center">
          <?php 
            includeFile('assets/icons/cash.svg', array(''));
          ?>
            <div class="text-lg-start text-center">
                <h6 class="text-white px-4">Moeda</h6>
                <p class="text-white px-4 fw-light"><?php echo the_field('moeda') ?></p>
            </div>
        </div>

        <div class="container d-flex flex-column flex-lg-row align-items-center">
          <?php 
            includeFile('assets/icons/territory.svg', array(''));
          ?>
            <div class="text-lg-start text-center">
                <h6 class="text-white px-4">Território</h6>
                <p class="text-white px-4 fw-light"><?php echo the_field('territorio') ?></p>
            </div>
        </div>
      </div>

      <div class="col-4">
        <div class="container d-flex flex-column flex-lg-row align-items-center">
          <?php 
            includeFile('assets/icons/clock.svg', array(''));
          ?>
            <div class="text-lg-start text-center">
                <h6 class="text-white px-4">Fuso Horário</h6>
                <p class="text-white px-4 fw-light"><?php echo the_field('fuso_horario') ?></p>
            </div>
        </div>

        <div class="container d-flex flex-column flex-lg-row align-items-center">
          <?php 
            includeFile('assets/icons/plug.svg', array(''));
          ?>
            <div class="text-lg-start text-center">
                <h6 class="text-white px-4">Voltagem</h6>
                <p class="text-white px-4 fw-light"><?php echo the_field('voltagem') ?></p>
            </div>
        </div>
      </div>
    </div>

    <div class="swiper swiper-custo-de-vida d-sm-none">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container d-flex flex-column flex-lg-row align-items-center">
            <?php 
              includeFile('assets/icons/map-pointer.svg', array(''));
            ?>
              <div class="text-lg-start text-center">
                  <h6 class="text-white px-4">Capital</h6>
                  <p class="text-white px-4 fw-light"><?php echo the_field('capital') ?></p>
              </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="container d-flex flex-column flex-lg-row align-items-center">
            <?php 
              includeFile('assets/icons/world.svg', array(''));
            ?>
              <div class="text-lg-start text-center">
                  <h6 class="text-white px-4">Língua Oficial</h6>
                  <p class="text-white px-4 fw-light"><?php echo the_field('lingua_oficial') ?></p>
              </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="container d-flex flex-column flex-lg-row align-items-center">
            <?php 
              includeFile('assets/icons/cash.svg', array(''));
            ?>
              <div class="text-lg-start text-center">
                  <h6 class="text-white px-4">Moeda</h6>
                  <p class="text-white px-4 fw-light"><?php echo the_field('moeda') ?></p>
              </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="container d-flex flex-column flex-lg-row align-items-center">
            <?php 
              includeFile('assets/icons/territory.svg', array(''));
            ?>
              <div class="text-lg-start text-center">
                  <h6 class="text-white px-4">Território</h6>
                  <p class="text-white px-4 fw-light"><?php echo the_field('territorio') ?></p>
              </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="container d-flex flex-column flex-lg-row align-items-center">
            <?php 
              includeFile('assets/icons/clock.svg', array(''));
            ?>
              <div class="text-lg-start text-center">
                  <h6 class="text-white px-4">Fuso Horário</h6>
                  <p class="text-white px-4 fw-light"><?php echo the_field('fuso_horario') ?></p>
              </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="container d-flex flex-column flex-lg-row align-items-center">
            <?php 
              includeFile('assets/icons/plug.svg', array(''));
            ?>
              <div class="text-lg-start text-center">
                  <h6 class="text-white px-4">Voltagem</h6>
                  <p class="text-white px-4 fw-light"><?php echo the_field('voltagem') ?></p>
              </div>
          </div>
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
        <?php 
          $terms = get_the_terms( $post->ID, 'programapacote');
          $termsArray = [];
          foreach($terms as $indice) {
            array_push($termsArray, $indice->name);
          }
        ?>

        <div class="swiper-slide <?php if(!(in_array('Idiomas', $termsArray))) : echo 'd-none'; endif; ?>">
          <div class="programa px-3 py-5 rounded-3 shadow bg-white d-flex flex-column justify-content-between align-items-center">
            <h4>Idiomas</h4>
            <ul>
              <li class="mb-2"><b>Tempo mínimo de programa:</b> 2 semanas</li>
              <li class="mb-2"><b>Tempo máximo de programa:</b> Indeterminado</li>
              <li class="mb-2"><b>Idade:</b> A partir de 18 anos</li>
              <li class="mb-2"><b>Tipo Hospedagem:</b> Casa de família, Residência Estudantil, Hostel.</li>
            </ul>
            <span class="d-flex justify-content-center">
              <button class="btn px-4 py-3 text-white shadow-none" id="btn-orcamento" data-bs-toggle="modal" data-bs-target="#staticDropdown">
                <h6 class="mb-0">Comprar</h6>
              </button>
            </span>
          </div>
        </div>

        <div class="swiper-slide <?php if(!(in_array('High School', $termsArray))) : echo 'd-none'; endif; ?>">
          <div class="programa px-3 py-5 rounded-3 shadow bg-white d-flex flex-column justify-content-between align-items-center">
            <h4>High School</h4>
            <ul>
              <li class="mb-2"><b>Tempo mínimo de programa:</b> Um semestre acadêmico</li>
              <li class="mb-2"><b>Tempo máximo de programa:</b> Período do ano acadêmico completo</li>
              <li class="mb-2"><b>Idade:</b> Estudantes de 14 a 18 anos.</li>
              <li class="mb-2"><b>Hospedagem:</b> Casa de família ou Residência Estudantil.</li>
            </ul>
            <span class="d-flex justify-content-center">
              <button class="btn px-4 py-3 text-white shadow-none" id="btn-orcamento" data-bs-toggle="modal" data-bs-target="#staticDropdown">
                <h6 class="mb-0">Comprar</h6>
              </button>
            </span>
          </div>
        </div>

        <div class="swiper-slide <?php if(!(in_array('Viagem em família', $termsArray))) : echo 'd-none'; endif; ?>">
          <div class="programa px-3 py-5 rounded-3 shadow bg-white d-flex flex-column justify-content-between align-items-center">
            <h4>Viajar em família</h4>
            <ul>
              <li class="mb-2"><b>Tempo mínimo de programa:</b> 2 semanas</li>
              <li class="mb-2"><b>Tempo máximo de programa:</b> 8 semanas</li>
              <li class="mb-2"><b>Idade:</b> A partir de 7 anos</li>
              <li class="mb-2"><b>Hospedagem:</b> Casa, apartamento alugado ou hostel.</li>
            </ul>
            <span class="d-flex justify-content-center">
              <button class="btn px-4 py-3 text-white shadow-none" id="btn-orcamento" data-bs-toggle="modal" data-bs-target="#staticDropdown">
                <h6 class="mb-0">Comprar</h6>
              </button>
            </span>
          </div>
        </div>

        <div class="swiper-slide <?php if(!(in_array('Business English', $termsArray))) : echo 'd-none'; endif; ?>">
          <div class="programa px-3 py-5 rounded-3 shadow bg-white d-flex flex-column justify-content-between align-items-center">
            <h4>Business English</h4>
            <ul>
              <li class="mb-2"><b>Tempo mínimo de programa:</b> 2 semanas</li>
              <li class="mb-2"><b>Tempo máximo de programa:</b> Indeterminado</li>
              <li class="mb-2"><b>Idade:</b> A partir de 18 anos</li>
              <li class="mb-2"><b>Hospedagem:</b> Casa de família, Hotel ou Campus Universitário.</li>
            </ul>
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

<section class="container mt-5">
    <div>
        <h2 class="text-center text-xl-center cor-empresa mt-4 mb-3">Depoimentos</h2>
        <p class="text-center text-xl-center fw-bolder ">Nossos clientes falam</p>
    </div>
    <div class="swiper swiper-depoimentos mt-3">
        <div class="swiper-wrapper">
            <?php
                #mostrar os depoimentos criados pelo admin
                /* buscando por taxonomia
                $args = array(
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'paisdepoimento',
                            'field' => 'slug',
                            'terms' => 'alemanha',
                        )
                    )
                );
                */
                $args = array (
                'post_type' => 'depoimento',
                'posts_per_page' => -1,
                );
                $depoimentos_query = new WP_Query($args);
                if($depoimentos_query->have_posts()) : while ($depoimentos_query->have_posts()) : $depoimentos_query->the_post();
            ?>
            <div class="swiper-slide">
                <div class="post-frame col-12 d-flex justify-content-center">
                    <img class="depoimento-thumb" <?php if(!has_post_thumbnail( $post->ID )){
                        echo "no-thumbnail";
                        }?> 
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
                <div class="depo-info col-11"> 
                    <div class="depo-category">
                        <p style="margin-bottom:0"><?php the_category(', ');?></p>
                        
                    </div>
                    <div class="depo-title col-12 text-center">
                        <h6 style="line-height: inherit;" class="fw-bold">
                            <?php 
                                if (strlen($post->post_title) > 25) {
                                    echo substr(the_title($before = '', $after = '', FALSE), 0, 25) . '...'; } 
                                    else {
                                    the_title();
                                } 
                            ?>
                        </h6>
                    </div>
                    <div class="depo-excerpt">
                        <p style="">
                            <?php 
                                the_excerpt();
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endwhile; else: endif; wp_reset_postdata();?>
        </div>
        <div class="gradiente"></div>
        <div class="swiper-pagination mt-4"></div>
    </div>
</section>

<script>
  $(document).ready(function () {
    let detalhes = $('#details')[0].innerText
    $('#details')[0].innerHTML = detalhes.replace(/;/g, '<br>');
  });
</script>

<?php get_footer(); ?>