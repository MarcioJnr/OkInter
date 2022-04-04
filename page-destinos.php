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
    <p class="mb-5">Veja os principais destinos ofertados pela OK Intercâmbio. Para saber todas as opções de cidades disponíveis, você precisa só clicar em um dos países abaixo e poderá conferir as principais informações de cada destinos. Se a cidade que você busca não estiver nas opções, entre em contato conosco para saber mais. </p>

    <div class="container mb-5" id="destinations">
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
    <div class="container mb-5" id="universities">
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
    <div class="container mb-5 px-0" id="depositions">
        <div id="testimonial-carousel" class="carousel slide d-block d-lg-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <?php 
                        includeFile('components/card-testimonial.php', 
                            array(
                                'directory'=>get_template_directory_uri().'/assets/images/testimonial-vera.png',
                                'person'=>'Vera Almeida',
                                'text'=>'“Tirou todas as minhas dúvidas e me deu todo o suporte necessário. Obrigado de coração.”'
                            )
                        ); 
                    ?>
                </div>

                <div class="carousel-item active">
                    <?php 
                        includeFile('components/card-testimonial.php', 
                            array(
                                'directory'=>get_template_directory_uri().'/assets/images/testimonial-vera.png',
                                'person'=>'Vera Almeida',
                                'text'=>'“Tirou todas as minhas dúvidas e me deu todo o suporte necessário. Obrigado de coração.”'
                            )
                        ); 
                    ?>
                </div>

                <div class="carousel-item">
                    <?php 
                        includeFile('components/card-testimonial.php', 
                            array(
                                'directory'=>get_template_directory_uri().'/assets/images/testimonial-vera.png',
                                'person'=>'Vera Almeida',
                                'text'=>'“Tirou todas as minhas dúvidas e me deu todo o suporte necessário. Obrigado de coração.”'
                            )
                        ); 
                    ?>
                </div>
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

        <div class="row d-none d-lg-flex justify-content-between">
            <div class="col-lg-4 px-0">
                <?php 
                    includeFile('components/card-testimonial.php', 
                        array(
                            'directory'=>get_template_directory_uri().'/assets/images/testimonial-vera.png',
                            'person'=>'Vera Almeida',
                            'text'=>'“Tirou todas as minhas dúvidas e me deu todo o suporte necessário. Obrigado de coração.”'
                        )
                    ); 
                ?>
            </div>

            <div class="col-lg-4 px-0">
                <?php 
                    includeFile('components/card-testimonial.php', 
                        array(
                            'directory'=>get_template_directory_uri().'/assets/images/testimonial-vera.png',
                            'person'=>'Vera Almeida',
                            'text'=>'“Tirou todas as minhas dúvidas e me deu todo o suporte necessário. Obrigado de coração.”'
                        )
                    ); 
                ?>
            </div>

            <div class="col-lg-4 px-0">
                <?php 
                    includeFile('components/card-testimonial.php', 
                        array(
                            'directory'=>get_template_directory_uri().'/assets/images/testimonial-vera.png',
                            'person'=>'Vera Almeida',
                            'text'=>'“Tirou todas as minhas dúvidas e me deu todo o suporte necessário. Obrigado de coração.”'
                        )
                    ); 
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>