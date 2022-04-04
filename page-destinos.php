<?php get_header(); ?>

<?php 
    #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
    includeFile('components/banner.php', 
        array(
            'title'=>'Destinos', 
            'imagem'=>'ok-office.png',
        )
    ); 
?>

<main class="container px-lg-5 py-5">
    <h2 class="text-center mb-4">Destinos mais procurados</h2>
    <p class="mb-4">Veja os principais destinos ofertados pela OK Intercâmbio. Para saber todas as opções de cidades disponíveis, você precisa só clicar em um dos países abaixo e poderá conferir as principais informações de cada destinos. Se a cidade que você busca não estiver nas opções, entre em contato conosco para saber mais. </p>

    <div class="container mb-4" id="destinations">
        <div class="row gap-3">
            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4">Universidades no exterior</h2>
    <div class="container mb-4" id="universities">
        <div class="row gap-3 d-flex justify-content-center">
            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>

            <div class="col-5 col-lg-4 px-0">
                <?php 
                    includeFile('components/card-destiny.php', 
                        array(
                            'href'=>'/africa-do-sul', 
                            'directory'=>get_template_directory_uri().'/assets/images/berlim.jpg',
                            'destinyName'=>'Africa do Sul'
                        )
                    ); 
                ?>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4">Depoimentos</h2>
    <h6 class="text-center mb-4">Nossos clientes falam</h6>
    <div class="container mb-4" id="depositions">
        
    </div>
</main>

<?php get_footer(); ?>