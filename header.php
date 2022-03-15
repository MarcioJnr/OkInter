<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
  <header class="d-flex justify-content-center fixed-top">
    <nav class="d-flex navbar navbar-expand-lg flex-column w-75">
      <div class="d-flex w-100 justify-content-end">
        <ul class="d-flex w-25 justify-content-evenly mb-0 p-0" id="social">
          <li class="nav-item social-icon my-auto">
            <a class="nav-link p-0" href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.svg" alt="facebook">
            </a>
          </li>

          <li class="nav-item social-icon">
            <a class="nav-link p-0" href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp.svg" alt="whatsapp">
            </a>
          </li>

          <li class="nav-item social-icon">
            <a class="nav-link p-0" href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.svg" alt="instagram">
            </a>
          </li>

          <li class="nav-item social-icon">
            <a class="nav-link p-0" href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/youtube.svg" alt="youtube">
            </a>
          </li>
        </ul>
      </div>

      <div class="d-flex container-fluid">
        <a class="d-flex navbar-item navbar-brand me-2 w-25 justify-content-center" href="#">
          <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Ok Intercambio Logo">
        </a>

        <div class="navbar-item">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="d-flex nav-item dropdown align-items-end">
                <a class="d-flex nav-link dropdown-toggle" href="/sobre" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SOBRE
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">A empresa</a></li>
                  <li><a class="dropdown-item" href="#">Equipe</a></li>
                  <li><a class="dropdown-item" href="#">Contato</a></li>
                </ul>
              </li>

              <li class="d-flex nav-item dropdown align-items-end">
                <a class="d-flex nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  DESTINOS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Canadá</a></li>
                  <li><a class="dropdown-item" href="#">Alemanha</a></li>
                  <li><a class="dropdown-item" href="#">Inglaterra</a></li>
                  <li><a class="dropdown-item" href="#">Espanha</a></li>
                  <li><a class="dropdown-item" href="#">Irlanda</a></li>
                  <li><a class="dropdown-item" href="#">Mais <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right.svg"></a></li>
                </ul>
              </li>

              <li class="d-flex nav-item dropdown align-items-end">
                <a class="d-flex nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PROGRAMAS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Idiomas <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right.svg"></a></li>
                  <li><a class="dropdown-item" href="#">Universidade no exterior <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right.svg"></a></li>
                  <li><a class="dropdown-item" href="#">Intercâmbio em família <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/chevron-right.svg"></a></li>
                </ul>
              </li>

              <li class="d-flex nav-item dropdown align-items-end">
                <a class="d-flex nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  SERVIÇOS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Viagem</a></li>
                  <li><a class="dropdown-item" href="#">Hospedagem</a></li>
                  <li><a class="dropdown-item" href="#">Visto</a></li>
                  <li><a class="dropdown-item" href="#">Moeda</a></li>
                </ul>
              </li>

              <li class="d-flex nav-item">
                <a class="nav-link" href="#">PROMOÇÕES</a>
              </li>

              <li class="d-flex nav-item">
                <a class="nav-link" href="#">BLOG</a>
              </li>

              <li class="nav-item visually-hidden">
                <a class="nav-link" href="#">
                  <button type="button" class="btn ps-5 pe-5">ORÇAMENTO</button>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="navbar-item d-flex w-25">
          <a class="nav-link" href="#">
            <button type="button" class="btn ps-5 pe-5">ORÇAMENTO</button>
          </a>
        </div>
      </div>
    </nav>
  </header>
