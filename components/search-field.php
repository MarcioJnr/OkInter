<h2 class="mb-4"><?php $title ?></h2>
<div class="d-md-flex gap-3 w-75" id="search-field">
    <select id="programa" class="form-select text-center mb-3" aria-label="Select de destinos">
        <option selected>PROGRAMA</option>
        <option value="Estudo e trabalho">Estudo e trabalho</option>
        <option value="Idiomas">Idiomas</option> 
        <option value="Universidade no exterior">Universidade no exterior</option>
        <option value="Intercâmbio em família">Intercâmbio em família</option>
        <option value="Business English">Business English</option>
    </select>

    <?php
    global $post;
    $args = array (
        'post_type' => 'destino',
        'orderby' => 'title',
        'order' => 'ASC',
    );
    $pais_query = new WP_Query($args); ?>
            <select id="destino" class="form-select shadow text-center mb-3" aria-label="Select de programas ">
                <option selected>DESTINO</option>
                 <?php if($pais_query->have_posts()) : 
                    while ($pais_query->have_posts()) : $pais_query->the_post(); ?>
                <option value="<?php echo get_the_title($post->ID); ?>"><?php echo get_the_title($post->ID); ?></option>
                <?php endwhile; endif; wp_reset_postdata();?>
            </select>

    <div class="">
        <button id="btn-buscar" class="btn text-center text-white w-100 mb-3">
            BUSCAR
        </button>
    </div>
</div>

<script>
    $('#btn-buscar').click((e) => { 
        // var getUrl = window.location;
        // var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        var queryPrograma = $("#programa option:selected").val();
        var queryDestino = $("#destino option:selected").val();
        var encodeParams = encodeURI(`${queryPrograma}][${queryDestino}`)
        window.location.href = `<?php echo get_home_url(); ?>/resultados-da-busca/?results=${encodeParams}`
    });
</script>