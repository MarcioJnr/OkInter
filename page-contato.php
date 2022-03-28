<?php get_header(); ?>
<main>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Contato', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-xl-6">
          <h3 class="mb-4 mt-4 cor-empresa text-center text-md-start text-xl-start">Fale conosco</h3>
          <p class="text-center text-xl-start">
          A agência OK Intercâmbio é uma empresa especializada em oferecer serviços voltados para programas de estudos no exterior.  Se você deseja uma cotação de passagens aéreas  clica <a href="#">aqui</a>.
          </p>
          <p class="text-center text-xl-start">
          Agora se você deseja receber um orçamento de intercâmbio é só clicar <a href="#">aqui</a>. Mas se você deseja falar sobre outros assuntos, é só preencher o formulário ao lado.
          </p><br>
        </div>
        <div class="col-12 col-md-6 col-xl-6 form">
          <?php echo do_shortcode( '[contact-form-7 id="25" title="form contato"]');?>
        </div>
      </div>
      <br><br><br><br>
      <hr>
      <br><br>
      <h3 class="text-center cor-empresa">Unidades</h3>
      <br>
      <h5 class="text-center fw-bold">Brasil</h5>
      <br><br>
      <div class="row">
        <div class="col-12 col-md-6 col-xl-6 mb-4 text-end">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497.66567135044585!2d-38.49444582221706!3d-3.739102845237198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7488644196237%3A0x656771dff6df6da0!2sCruzamento%20Des%20Leite%20Alburquerque!5e0!3m2!1spt-BR!2sbr!4v1647831553009!5m2!1spt-BR!2sbr" width="450" height="370" style="border:2px solid #FF6A2E; box-shadow: 5px 5px 5px gray; box-sizing: border-box;
filter: drop-shadow(6px 6px 16px rgba(0, 0, 0, 0.3)); border-radius: 8px;" allowfullscreen="" loading="lazy" class="col-12 col-md-12 col-xl-12 mb-4 rounded-3"></iframe>
          <h6 class="text-center">Fortaleza, CE</h5> <br>
          <div class="row">
          <div class="col-12 col-md-6 col-sm-12 text-center">
              
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-local.svg" class=""> 
              <p class="mt-3 text-start">Av. Senador Virgílio Távora, 1500, sala 11.13, 
                  Edifício: The One Tower, Aldeota, Fortaleza/CE, Brasil, CEP: 60170-251
              </p>
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-relogio.svg" class=""> 
              <p class="mt-3 text-xl-start text-md-center">De segunda à sexta: de 9h à 18h</p>
          </div>
          <div class="col-12 col-md-6 col-sm-12 text-center">
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-tel.svg" class=""> 
              <p class="mt-3 text-center">+55 (85) 3182-4212</p>
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-email.svg" class=""> 
              <p class="mt-3 text-center">contato@okintercambio.com.br</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-6 mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.188549014864!2d-46.66056398507047!3d-23.561670784682832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ce80b64829%3A0x9fa8db6c12e1f60e!2sVIP%20OFFICE%20Coworking%20-%20Paulista%201!5e0!3m2!1spt-BR!2sbr!4v1647903900572!5m2!1spt-BR!2sbr" width="450" height="370" style="border:2px solid #FF6A2E; box-shadow: 5px 5px 5px gray; box-sizing: border-box;
filter: drop-shadow(6px 6px 16px rgba(0, 0, 0, 0.3)); border-radius: 8px;" allowfullscreen="" loading="lazy" class="col-12 col-md-12 col-xl-12 mb-4 rounded-3"></iframe>
          <h6 class="text-center">São Paulo, SP</h5><br>
          <div class="row">
          <div class="col-12 col-md-6 col-sm-12 text-center">
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-local.svg" class=""> 
              <p class="mt-3 text-start">Alameda Santos, 1773, sala 1305,
                Edifício: VIP Office Jardim Paulista, São Paulo/SP, Brasil CEP: 01419-000
              </p>
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-relogio.svg" class=""> 
              <p class="mt-3 text-xl-start text-md-center">De segunda à sexta: de 9h à 18h</p>
          </div>
          <div class="col-12 col-md-6 col-sm-12 text-center">
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-tel.svg" class=""> 
              <p class="mt-3 text-center"> +55 (11) 3042-4015</p>
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-email.svg" class=""> 
              <p class="mt-3 text-center">contato@okintercambio.com.br</p>
            </div>
          </div>
        </div>
        </div>
      </div>
      
      <br><br>
    </div>
    <div class="container">
    <h5 class="text-center fw-bold">Irlanda</h5>
      <br><br>
      <div class="row">
        <div class="col-12 col-md-6 col-xl-6 mb-4 text-end">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.2459126351364!2d-6.25818438419262!3d53.35675377998122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e62a882fc7b%3A0x2643f8d5abff5dc4!2s30%20Mountjoy%20Square%20E%2C%20Mountjoy%2C%20Dublin%2C%20D01%20Y6R9%2C%20Irlanda!5e0!3m2!1spt-BR!2sbr!4v1647905282136!5m2!1spt-BR!2sbr" width="450" height="370" style="border:2px solid #FF6A2E; box-shadow: 5px 5px 5px gray; box-sizing: border-box;
filter: drop-shadow(6px 6px 16px rgba(0, 0, 0, 0.3)); border-radius: 8px;" allowfullscreen="" loading="lazy" class="col-12 col-md-12 col-xl-12 mb-4 rounded-3"></iframe>
          <h6 class="text-center">Dublin</h5>
          <div class="row">
          <div class="col-12 col-md-6 col-sm-12 text-center">
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-local.svg" class=""> 
              <p class="mt-3 text-xl-start text-md-center">30, Mountjoy Square East, Dublin 1, Ireland
              </p>
              
          </div>
          <div class="col-12 col-md-6 col-sm-12 text-center">
              <img src="<?php echo get_template_directory_uri( );?>/assets/icons/icone-email.svg" class=""> 
              <p class="mt-3 text-center">europa@okintercambio.com.br</p>
              
            </div>
          </div>
        </div>
        
          </div>
        </div>
        </div>
      </div>
    </div><br><br><br><br>
    
    
</main>

<?php get_footer(); ?>