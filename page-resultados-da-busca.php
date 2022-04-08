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
        <select class="form-select shadow text-center mb-3" aria-label="Select de destinos">
            <option selected>PROGRAMA</option>
            <option value="1">Estudo e trabalho</option>
            <option value="2">Idiomas</option> 
            <option value="3">Universidade no Exterior</option>
            <option value="3">Intercâmbio em família</option>
            <option value="3">Business English</option>
        </select>

        <select class="form-select shadow text-center mb-3" aria-label="Select de programas ">
            <option selected>DESTINO</option>
            <option value="1">Canadá</option>
            <option value="2">Alemanha</option>
            <option value="3">Inglaterra</option>
            <option value="3">Espanha</option>
            <option value="3">Irlanda</option>
        </select>

        <div class="w-100">
            <button class="btn text-center text-white shadow w-100 mb-3">
                BUSCAR
            </button>
        </div>
    </div>

    <div id="result-field">
        <?php 
            includeFile('components/post-search-result.php', 
                array(
                    'title'=>'Toronto', 
                    'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum eget sit odio nulla blandit ut. Justo, ac varius a, scelerisque egestas ullamcorper felis mattis. Posuere laoreet nunc suspendisse suspendisse amet. Risus mi parturient tincidunt enim, eu lacus sed. Ultricies tincidunt ipsum ac ut sit pharetra eget senectus. Felis, leo aliquam elementum ullamcorper a, ut.',
                    'srcImg'=>get_template_directory_uri() . '/assets/images/berlim.jpg',
                    'href'=>''
                )
            ); 
        ?>

        <nav class="d-flex justify-content-center">
            <ul class="pagination d-flex gap-3">
                <li class="page-item"><a class="page-link rounded-circle" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                <span class="page-link rounded-circle border-0">2</span>
                </li>
                <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link border-0 rounded-circle" href="#"><?php includeFile('assets/icons/chevron-right.svg', array('')); ?></a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php get_footer(); ?>