<?php get_header(); ?>

<?php 
    includeFile('components/banner.php', 
        array(
            'title'=>'Resultados', 
            'imagem'=>'ok-office.png',
        )
    ); 
?>

<div class="container py-4" id="search-result">
    <h2 class="mb-4">Encontre a sua viagem ideal</h2>
    <div class="d-lg-flex gap-3 mb-4" id="search-field">
        <select id="programa" class="form-select shadow text-center mb-3" aria-label="Select de destinos">
            <option selected>PROGRAMA</option>
            <option value="Estudo e trabalho">Estudo e trabalho</option>
            <option value="Idiomas">Idiomas</option> 
            <option value="Universidade no exterior">Universidade no exterior</option>
            <option value="Intercâmbio em família">Intercâmbio em família</option>
            <option value="Business English">Business English</option>
        </select>

        <select id="destino" class="form-select shadow text-center mb-3" aria-label="Select de programas ">
            <option selected>DESTINO</option>
            <option value="Canadá">Canadá</option>
            <option value="Alemanha">Alemanha</option>
            <option value="Inglaterra">Inglaterra</option>
            <option value="Espanha">Espanha</option>
            <option value="Irlanda">Irlanda</option>
        </select>

        <div class="w-100">
            <button id="btn-buscar" class="btn text-center text-white shadow w-100 mb-3">
                BUSCAR
            </button>
        </div>
    </div>

    <script>
        $('#btn-buscar').click((e) => { 
            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            var queryPrograma = $("#programa option:selected").val();
            var queryDestino = $("#destino option:selected").val();
            var encodeParams = encodeURI(`${queryPrograma}][${queryDestino}`)
            window.location.href = `${baseUrl}/resultados-da-busca?results=${encodeParams}`
        });
    </script>

    <div id="result-field">
        <?php 
            $query = $_GET['results'];
            $querySplit = explode('][', $query);
            $queryPrograma = $querySplit[0];
            $queryDestino = $querySplit[1];
            $args = array (
                'post_type' => 'pacote',
                'orderby' => 'title',
                'order' => 'ASC',
                'posts_per_page' => 4,
                'paged'=>1,
                'tax_query' => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'programapacote',
                        'field' => 'slug',
                        'terms' => $queryPrograma,
                    ),
                    array(
                        'taxonomy' => 'paispacote',
                        'field' => 'slug',
                        'terms' => $queryDestino,
                    )
                )
            );
            $busca_query = new WP_Query($args);

            if($busca_query->have_posts()) : 
                while ($busca_query->have_posts()) : $busca_query->the_post();
                    includeFile('components/post-search-result.php', 
                        array(
                            'title'=>get_the_title($post->ID), 
                            'description'=>get_the_excerpt($post->ID),
                            'srcImg'=>get_the_post_thumbnail_url($post->ID),
                            'href'=>get_the_permalink($post->ID)
                        )
                    ); 
                endwhile;
            endif;
        ?>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center gap-3">
                <li class="page-item"><a class="page-link rounded-circle" href="#"><</a></li>
                <li class="page-item active"><a class="page-link rounded-circle" href="#">1</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">2</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">></a></li>
            </ul>
        </nav>
    </div>
</div>

<?php get_footer(); ?>