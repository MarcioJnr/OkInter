<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" />

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body>
    <header class="d-flex flex-column fixed-top px-5">
        <div class="d-none d-lg-flex justify-content-end">
            <div class="d-flex w-25 justify-content-start">
                <ul class="d-flex w-75 mb-0 justify-content-evenly p-0" id="social">
                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg"
                                alt="facebook">
                        </a>
                    </li>

                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp.svg"
                                alt="whatsapp">
                        </a>
                    </li>

                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg"
                                alt="instagram">
                        </a>
                    </li>

                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg"
                                alt="youtube">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <nav class="d-flex justify-content-between navbar navbar-expand-lg navbar-dark p-0">
            <div class="container-fluid p-0">
                <a class="d-flex justify-content-end navbar-brand  m-0" href="#">
                    <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg"
                        alt="Ok Intercambio Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="d-flex w-100 justify-content-evenly navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SOBRE
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">A empresa</a></li>
                                <li><a class="dropdown-item" href="#">Equipe</a></li>
                                <li><a class="dropdown-item" href="#">Contato</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                DESTINOS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Canadá</a></li>
                                <li><a class="dropdown-item" href="#">Alemanha</a></li>
                                <li><a class="dropdown-item" href="#">Inglaterra</a></li>
                                <li><a class="dropdown-item" href="#">Espanha</a></li>
                                <li><a class="dropdown-item" href="#">Irlanda</a></li>
                                <li><a class="dropdown-item" href="#">Mais</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PROGRAMAS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Viagem</a></li>
                                <li><a class="dropdown-item" href="#">Hospedagem</a></li>
                                <li><a class="dropdown-item" href="#">Visto</a></li>
                                <li><a class="dropdown-item" href="#">Moeda</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVIÇOS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Viagem</a></li>
                                <li><a class="dropdown-item" href="#">Hospedagem</a></li>
                                <li><a class="dropdown-item" href="#">Visto</a></li>
                                <li><a class="dropdown-item" href="#">Moeda</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">PROMOÇÕES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">BLOG</a>
                        </li>

                        <li class="nav-item d-flex d-lg-none w-100">
                            <button id="orcamento-button" type="button" class="w-75 btn">ORÇAMENTO</button>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-flex w-25">
                    <button id="orcamento-button" type="button" class="w-75 btn">ORÇAMENTO</button>
                </div>
            </div>
            </nav>

        <!-- <nav class="d-flex justify-content-between navbar navbar-expand-lg navbar-dark p-0">
            <div class="container-fluid p-0">
                <a class="d-flex justify-content-end navbar-brand  m-0" href="#">
                    <img class="w-50" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg"
                        alt="Ok Intercambio Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="d-flex justify-content-center collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="d-flex w-100 justify-content-evenly navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">SOBRE 
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-down.svg">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">DESTINOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">PROGRAMAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">PROMOÇÕES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link">BLOG</a>
                        </li>
                    </ul>


                </div>

                <div class="d-flex w-25">
                    <button id="orcamento-button" type="button" class="w-75 btn">ORÇAMENTO</button>
                </div>
            </div>
        </nav> -->
    </header>