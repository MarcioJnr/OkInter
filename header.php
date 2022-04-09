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
    <header class="d-flex flex-column fixed-top">
        <div class="container d-none d-lg-flex justify-content-end">
            <div class="d-flex w-25 justify-content-end">
                <ul class="d-flex w-75 mb-0 justify-content-evenly p-0" id="social">
                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" target="_blank" href="https://pt-br.facebook.com/okintercambio/">
                            <?php 
                                includeFile('assets/icons/facebook.svg', array(''));
                            ?>
                        </a>
                    </li>

                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" href="https://api.whatsapp.com/send?phone=5585992442233&text=Ol%C3%A1%2C%20quero%20realizar%20meu%20sonho%20de%20viajar%20e%20estudar%20no%20exterior!" target="_blank">
                            <?php 
                                includeFile('assets/icons/whatsapp.svg', array(''));
                            ?>
                        </a>
                    </li>

                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" target="_blank" href="https://www.instagram.com/okintercambio/">
                            <?php 
                                includeFile('assets/icons/instagram.svg', array(''));
                            ?>
                        </a>
                    </li>

                    <li class="nav-item social-icon mt-2">
                        <a class="nav-link p-0" target="_blank" href="https://www.youtube.com/OKIntercambio">
                            <?php 
                                includeFile('assets/icons/youtube.svg', array(''));
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <nav class="container d-flex justify-content-between navbar navbar-expand-lg navbar-dark p-0">
            <div class="container-fluid p-0">
                <a id="logo" class="d-flex justify-content-center align-items-center navbar-brand m-0 w-25" href="/okintercambio">
                    <img id="logo-img" class="w-50 ps-4" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg"
                        alt="Ok Intercambio Logo"/>

                    <img id="chevron-img" class="w-50 align-self-start ps-4 my-auto" src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right.svg"/>
                </a>

                <button class="navbar-toggler border-0 d-flex pe-4 justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggle-button">
                    <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" id="menu">
                        <path d="M8 36H40C41.1 36 42 35.1 42 34C42 32.9 41.1 32 40 32H8C6.9 32 6 32.9 6 34C6 35.1 6.9 36 8 36ZM8 26H40C41.1 26 42 25.1 42 24C42 22.9 41.1 22 40 22H8C6.9 22 6 22.9 6 24C6 25.1 6.9 26 8 26ZM6 14C6 15.1 6.9 16 8 16H40C41.1 16 42 15.1 42 14C42 12.9 41.1 12 40 12H8C6.9 12 6 12.9 6 14Z" fill="#FF6A2E"/>
                        </svg>
                    </span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="d-flex w-100 justify-content-between navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown d-flex align-items-center px-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SOBRE

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="white"/>
                                </svg>
                            </a>
                            <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                <div class="d-flex dropdown-content">
                                    <h5 class="d-none d-lg-flex">Sobre nós</h5>
                                    <ul>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/sobre">A empresa</a></li>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/equipe">Equipe</a></li>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/contato">Contato</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown d-flex align-items-center px-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                DESTINOS

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="white"/>
                                </svg>
                            </a>

                            <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                <div class="d-flex dropdown-content">
                                    <h5 class="d-none d-lg-flex">Destinos</h5>
                                    <ul>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/destino/canada">Canadá</a></li>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/destino/alemanha">Alemanha</a></li>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/destino/inglaterra">Inglaterra</a></li>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/destino/espanha">Espanha</a></li>
                                        <li><a class="dropdown-item px-5" href="<?php echo get_home_url(); ?>/destino/irlanda">Irlanda</a></li>
                                        <li><a class="dropdown-item px-5 d-flex align-items-center" href="<?php echo get_home_url(); ?>/destinos" style="color: #FF6A2E;">
                                                Ver mais

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.38048 21.01C7.87048 21.5 8.66048 21.5 9.15048 21.01L17.4605 12.7C17.8505 12.31 17.8505 11.68 17.4605 11.29L9.15048 2.97999C8.66048 2.48999 7.87048 2.48999 7.38048 2.97999C6.89048 3.46999 6.89048 4.25999 7.38048 4.74999L14.6205 12L7.37048 19.25C6.89048 19.73 6.89048 20.53 7.38048 21.01Z" fill="#FF6A2E"/>
                                                </svg>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown d-flex align-items-center px-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PROGRAMAS

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="white"/>
                                </svg>

                            </a>

                            <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                <div class="d-flex dropdown-content px-4">
                                    <a href="<?php echo get_home_url(); ?>/programas"><h5 class="d-none d-lg-flex">Nossos <br> Programas</h5></a>
                                    <ul>
                                        <li class="dropdown-item dropend bg-transparent" id="dropend-link-1">
                                            <a class="dropdown d-flex justify-content-between align-items-center" id="navbarDropdownPlus" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                                <p class="me-3">Estudo e trabalho</p>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-lg-block">
                                                <path d="M7.38048 21.01C7.87048 21.5 8.66048 21.5 9.15048 21.01L17.4605 12.7C17.8505 12.31 17.8505 11.68 17.4605 11.29L9.15048 2.97999C8.66048 2.48999 7.87048 2.48999 7.38048 2.97999C6.89048 3.46999 6.89048 4.25999 7.38048 4.74999L14.6205 12L7.37048 19.25C6.89048 19.73 6.89048 20.53 7.38048 21.01Z" fill="black"/>
                                                </svg>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-lg-none">
                                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="black"/>
                                                </svg>

                                            </a>

                                            <div class="dropdown-menu shadow border-0 border-bottom rounded-0 bg-transparent" data-popper-placement="right-start" id="dropend-menu-1">
                                                <div class="d-flex dropdown-content">
                                                    <h5>Paises ofertados</h5>
                                                    <ul>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/irlanda">Irlanda</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/australia">Austrália</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/nova-zelandia">Nova Zelândia</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/espanha">Espanha</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown-item dropend bg-transparent" id="dropend-link-2">
                                            <a class="dropdown d-flex justify-content-between align-items-center" href="#" id="navbarDropdownPlus" data-bs-toggle="dropdown" aria-expanded="false">
                                                <p class="me-3">Idiomas</p>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-lg-block">
                                                <path d="M7.38048 21.01C7.87048 21.5 8.66048 21.5 9.15048 21.01L17.4605 12.7C17.8505 12.31 17.8505 11.68 17.4605 11.29L9.15048 2.97999C8.66048 2.48999 7.87048 2.48999 7.38048 2.97999C6.89048 3.46999 6.89048 4.25999 7.38048 4.74999L14.6205 12L7.37048 19.25C6.89048 19.73 6.89048 20.53 7.38048 21.01Z" fill="black"/>
                                                </svg>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-lg-none">
                                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="black"/>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu shadow border-0 border-bottom rounded-0 bg-transparent" data-popper-placement="right-start" id="dropend-menu-2">
                                                <div class="d-flex dropdown-content">
                                                    <h5>Paises ofertados</h5>
                                                    <ul>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/irlanda">Irlanda</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/australia">Austrália</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/nova-zelandia">Nova Zelândia</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/espanha">Espanha</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown-item dropend bg-transparent" id="dropend-link-3">
                                            <a class="dropdown d-flex justify-content-between align-items-center" href="#" id="navbarDropdownPlus" data-bs-toggle="dropdown" aria-expanded="false">
                                                <p class="me-3">Universidade no Exterior</p>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-lg-block">
                                                <path d="M7.38048 21.01C7.87048 21.5 8.66048 21.5 9.15048 21.01L17.4605 12.7C17.8505 12.31 17.8505 11.68 17.4605 11.29L9.15048 2.97999C8.66048 2.48999 7.87048 2.48999 7.38048 2.97999C6.89048 3.46999 6.89048 4.25999 7.38048 4.74999L14.6205 12L7.37048 19.25C6.89048 19.73 6.89048 20.53 7.38048 21.01Z" fill="black"/>
                                                </svg>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-lg-none">
                                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="black"/>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu shadow border-0 border-bottom rounded-0 bg-transparent" data-popper-placement="right-start" id="dropend-menu-3">
                                                <div class="d-flex dropdown-content">
                                                    <h5>Paises ofertados</h5>
                                                    <ul>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/irlanda">Irlanda</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/australia">Austrália</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/nova-zelandia">Nova Zelândia</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/espanha">Espanha</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown-item dropend bg-transparent" id="dropend-link-4">
                                            <a class="dropdown d-flex justify-content-between align-items-center" href="#" id="navbarDropdownPlus" data-bs-toggle="dropdown" aria-expanded="false">
                                                <p class="me-3">Intercâmbio em Família</p>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-lg-block">
                                                <path d="M7.38048 21.01C7.87048 21.5 8.66048 21.5 9.15048 21.01L17.4605 12.7C17.8505 12.31 17.8505 11.68 17.4605 11.29L9.15048 2.97999C8.66048 2.48999 7.87048 2.48999 7.38048 2.97999C6.89048 3.46999 6.89048 4.25999 7.38048 4.74999L14.6205 12L7.37048 19.25C6.89048 19.73 6.89048 20.53 7.38048 21.01Z" fill="black"/>
                                                </svg>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-lg-none">
                                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="black"/>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu shadow border-0 border-bottom rounded-0 bg-transparent" data-popper-placement="right-start" id="dropend-menu-4">
                                                <div class="d-flex dropdown-content">
                                                    <h5>Paises ofertados</h5>
                                                    <ul>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/irlanda">Irlanda</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/australia">Austrália</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/nova-zelandia">Nova Zelândia</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/espanha">Espanha</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="dropdown-item dropend bg-transparent" id="dropend-link-5">
                                            <a class="dropdown d-flex justify-content-between align-items-center" href="#" id="navbarDropdownPlus" data-bs-toggle="dropdown" aria-expanded="false">
                                                <p class="me-3">Business English</p>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-none d-lg-block">
                                                <path d="M7.38048 21.01C7.87048 21.5 8.66048 21.5 9.15048 21.01L17.4605 12.7C17.8505 12.31 17.8505 11.68 17.4605 11.29L9.15048 2.97999C8.66048 2.48999 7.87048 2.48999 7.38048 2.97999C6.89048 3.46999 6.89048 4.25999 7.38048 4.74999L14.6205 12L7.37048 19.25C6.89048 19.73 6.89048 20.53 7.38048 21.01Z" fill="black"/>
                                                </svg>

                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="d-block d-lg-none">
                                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="black"/>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu shadow px-4 border-0 border-bottom rounded-0 bg-transparent" data-popper-placement="right-start" id="dropend-menu-">
                                                <div class="d-flex dropdown-content">
                                                    <h5>Paises ofertados</h5>
                                                    <ul>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/irlanda">Irlanda</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/australia">Austrália</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/nova-zelandia">Nova Zelândia</a></li>
                                                        <li><a class="dropdown-item d-flex justify-content-end px-0" href="<?php echo get_home_url(); ?>/espanha">Espanha</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown d-flex align-items-center px-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVIÇOS

                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z" fill="white"/>
                                </svg>
                            </a>

                            <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                                <div class="d-flex dropdown-content">
                                    <a href="<?php echo get_home_url(); ?>/servicos"><h5 class="d-none d-lg-flex">Serviços</h5></a>
                                    <ul>
                                        <li><a class="dropdown-item px-4" href="<?php echo get_home_url(); ?>/servicos/#viagem">Viagem</a></li>
                                        <li><a class="dropdown-item px-4" href="<?php echo get_home_url(); ?>/servicos/#hospedagem">Hospedagem</a></li>
                                        <li><a class="dropdown-item px-4" href="<?php echo get_home_url(); ?>/servicos/#visto">Visto</a></li>
                                        <li><a class="dropdown-item px-4" href="<?php echo get_home_url(); ?>/servicos/#moeda">Moeda</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-4" href="<?php echo get_home_url(); ?>/promocoes">PROMOÇÕES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-4" href="<?php echo get_home_url(); ?>/blog">BLOG</a>
                        </li>

                        <li class="nav-item d-flex d-lg-none w-100 justify-content-center px-4 mt-3">
                            <button 
                                class="btn w-100 shadow-none" 
                                id="orcamento-button-inner" 
                                type="button" 
                                data-bs-toggle="modal" 
                                data-bs-target="#staticDropdown"
                            >
                                ORÇAMENTO
                            </button>
                        </li>

                        <script>
                            $('#orcamento-button-inner').click(() => {

                            })
                        </script>
                    </ul>
                </div>

                <div class="d-none d-lg-flex justify-content-center w-25">
                    <button type="button" id="orcamento-button" class="w-100 btn shadow" data-bs-toggle="modal" data-bs-target="#staticDropdown">ORÇAMENTO</button>
                </div>
            </div>
        </nav>

        
    </header>


<!-- Modal -->

<div class="modal fade" id="staticDropdown" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog rounded-3 modal-dialog-centered">
    <div class="modal-content rounded-3 rounded-top">
      <div class="modal-header">
            <div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h3 class="cor-empresa mt-3 mb-4" style="line-height: 35px;">Faça o orçamento da sua viajem</h3>
                <p class="">Preencha os campos ao lado e clique no botão “ENVIAR ”, depois é só aguardar o contato da nossa equipe.</p>
            </div>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="14" title="Formulario orçamento"]');?>
      </div>
      
    </div>
  </div>
</div>