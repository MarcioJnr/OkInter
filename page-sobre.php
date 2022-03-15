<?php get_header(); ?>
<style>
    .cor-valor {
        background-color: #7B39E9;
    }
    .cor-missao {
        color: #7B39E9;
    }
    .cor-empresa {
        color: #FF6A2E;
    }
</style>
<br><br><br><br><br><br><br>
<main>
    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h3 class="text-center text-xl-start cor-empresa">A empresa</h3>
                <p class="mt-5 text-center text-xl-start">
                    A OK Intercâmbio é uma agência de viagem especializada em estudos no exterior. O atendimento é ágil e 100% online para todo o Brasil, e também presencial através dos nossos escritórios físicos, localizados nas Cidades de Fortaleza (Ceará)  e Dublin na Irlanda.
                    Nós acreditamos na importância da vivência internacional para a formação de uma bagagem pessoal e profissional, e por este motivo, cada detalhe é pensado em prol dos nosso clientes, desde a seleção das instituições e empresas parceiras, como também a qualificação e capacitação de cada colaborador da empresa. 
                    Portanto, há a garantia dos melhores profissionais no planejamento e realização de cada sonho.
                </p>
            </div>
            <div class="col-12 col-xl-6">
                <h3 class="text-center text-xl-start cor-empresa">Galeria</h3>
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/berlim.jpg" class="mt-5">
            </div>
                       
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/berlim.jpg" class="mt-5">
            </div>
            <div class="col-12 col-md-6 col-xl-6">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/berlim.jpg" class="mt-5">
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #FFB030;">
        <div class="container p-5">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-6">
                    <h3 class="text-center text-xl-center mb-5 cor-missao">Missão</h3>
                    <p class="text-center text-xl-start">
                    Promover intercâmbio cultural de jovens e adultos no exterior através de programas qualificados. Com segurança e responsabilidade, acreditamos também contribuir com o crescimento pessoal e profissional de cada estudante.
                    </p><br>
                </div>
                <div class="col-12 col-md-6 col-xl-6">
                <h3 class="text-center text-xl-center mb-5 cor-missao">Visão</h3>
                <p class="text-center text-xl-start">
                Ser uma empresa líder e inovadora no segmento de viagem educacional para jovens e adultos.                
                </p>
                </div>
            </div>
        </div>
        <div class="container">
        <h3 class="text-center cor-missao">Valores</h3>
        <div class="row p-5">
            <div class="col-12 col-md-4 col-xl-4 ">
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Ética</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 ">
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Respeito</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Transparência</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Foco no cliente</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Experiência</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Satisfação do cliente</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Resiliência</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Cooperação</h6>
            </div>
            <div class="col-12 col-md-4 col-xl-4 " >
                <h6 class="cor-valor text-center mb-4 p-3 text-light rounded-3">Gratidão</h6>
            </div>
        </div>
        </div>
    </div>
    <div class="container-fluid mt-2" style="background-color: #7B39E9;">
    <div class="container p-5">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h3 class="text-center text-xl-start mt-5 cor-empresa">Viajando com a <br><br>OK Intercâmbio</h3>
                <p class="mt-5 text-center text-xl-start text-light">
                Desde 2015 atuando no segmento de Intercâmbio, a OK Intercâmbio vem se destacando na indústria de Educação Internacional pelo alto nível na qualidade dos serviços oferecidos aos seus clientes, além de um suporte em excelência já comprovada pelos nossos estudantes nos quatro cantos do mundo.
                </p>
            </div>
            <div class="col-12 col-xl-6">
                <img src="<?php echo get_template_directory_uri(  );?>/assets/images/viajem.svg" class="mt-4">
            </div>
                       
        </div>
    </div>
    </div>
</main>

<?php get_footer(); ?>