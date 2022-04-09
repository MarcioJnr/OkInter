<?php get_header(); ?>
    <?php 
        #ALTERE AQUI O TITULO E O NOME DA IMAGEM DO BANNER
        includeFile('components/banner.php', 
            array(
                'title'=>'Programas', 
                'imagem'=>'berlim.jpg',
            )
        ); 
    ?>
<main>
    <div class="container ">
        <h2 class="mt-5 mb-3 text-center">Universidade no Exterior</h2>
        <p class="text-center"><b>Brasileiro investe cada vez mais em uma formação no exterior</b></p>
        <p class="mt-5">São muitas as vantagens que a formação em uma universidade no exterior traz, 
        desde a excelência acadêmica até a formação pessoal, é o que tem chamado a atenção de medias 
        e grandes empresas, nacionais e multinacionais. Empresas como Ambev, Itaú, J.P.Morgan e Red Bull, 
        já têm programas específicos para quem se formou no exterior.</p>
        <div class="row text-center">
            <div class="col-12 col-md-4 col-xl-4 mt-5">
                <div class="icon-background d-flex justify-content-center align-items-center" >
                    <img class="mb-0 rounded-circle p-3" style="background-color: #FF6A2E" src="<?php echo get_template_directory_uri(  );?>/assets/icons/programas-mercado.svg">
                </div>
                <h6 class="my-5">Mercado de Trabalho</h6>
                <p class="mb-2">A internacionalização é uma peça chave do</p>
                <p class="mb-2">mundo educacional, profissional e</p>
                <p class="mb-2">empresarial de hoje. A cada dia o mercado</p>
                <p class="mb-2">busca por profissionais que tenha vivência</p>
                <p class="mb-2">em ambiente internacional.</p>
            </div>
            <div class="col-12 col-md-4 col-xl-4 mt-5">
                <div class="icon-background d-flex justify-content-center align-items-center" >
                    <img class="mb-0 rounded-circle p-3" style="background-color: #FF6A2E" src="<?php echo get_template_directory_uri(  );?>/assets/icons/programas-mundo.svg">
                </div>
                <h6 class="ms-3 my-5">Imersão Cultural</h6>
                <p class="mb-2">As instituições de ensino no exterior</p>
                <p class="mb-2">recebem estudantes de diversas parte do</p>
                <p class="mb-2">mundo, logo a sua vivência e imersão cultural</p>
                <p class="mb-2">além de ser rica você irá fazer network com</p>
                <p class="mb-2">pessoas incríveis. Legal não?</p>
            </div>
            <div class="col-12 col-md-4 col-xl-4 mt-5">
                <div class="icon-background d-flex justify-content-center align-items-center" >
                    <img class="mb-0 rounded-circle p-3" style="background-color: #FF6A2E" src="<?php echo get_template_directory_uri(  );?>/assets/icons/programas-ideia.svg">
                </div>
                <h6 class="ms-3 my-5">Novas Ideias</h6>
                <p class="mb-2">Você voltar ao Brasil totalmente renovado e</p>
                <p class="mb-2">cheio de ideias. A experiência possibilitará</p>
                <p class="mb-2">novos olhares e visão ampla de mundo,</p>
                <p class="mb-2">sendo um aprendizado muito além do</p>
                <p class="mb-2">ambiente acadêmico.</p>
            </div>
        </div>
        <div class="row text-center">
            <h3 class="my-5" style="color: #FF6A2E;">Países ofertados</h3>
            <?php 
                $args = array (
                    'post_type' => 'destino',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'post_limits' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'tipo',
                            'field' => 'slug',
                            'terms' => 'universidade'
                        )
                    )
                );
                $university_query = new WP_Query($args);
                if($university_query->have_posts()) : 
                    while ($university_query->have_posts()) : $university_query->the_post();
                        echo '<div class="col-12 col-md-4 col-xl-4 mb-5">';
                            includeFile('components/card-destiny.php', 
                                array(
                                    'href'=>get_permalink($post->ID),
                                    'directoryUrl'=>get_the_post_thumbnail_url($post->ID),
                                    'destinyName'=>get_the_title($post->ID)
                                )
                            ); 
                        echo '</div>';
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="position-relative" id="section-high-school">
        <img class="img-banner w-100" src="<?php echo get_template_directory_uri();?>/assets/images/HighSchool.png">
        
        <div class="container position-absolute">
            <h3 class="">High School</h3>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Sobre o Programa</h3>
                <p class="mb-5">Os três anos de estudos do Ensino Médio são decisivos na vida do jovem. Neste período ele está descobrindo o mundo adulto, testando habilidades e pensando o que vai ser quando crescer.
</p>
                <p class="mb-5">O Programa de High School, que é exatamente o Ensino Médio no exterior, pode ajudar o estudante a ampliar seus conhecimentos por meio do convívio com culturas diferentes, sair da zona de conforto da casa dos pais e assume responsabilidades sobre si próprio. Além disso, o jovem adquire fluência no idioma do país que estudou, atributo que fará toda a diferença na vida futura profissional dele.
</p>
                <p class="mb-5">Para se candidatar ao programa, basta escolher o país desejado que nós da OK Intercâmbio auxiliaremos nas opções dos colégios disponíveis e documentação necessária para a realização da inscrição. Não há restrições, alunos dos 1º,2º e 3º colegiais podem participar.</p>
                <h3 class="text-dark mb-5">Países ofertados?</h3>
                <div class="row">
                        <div class="col-12 col-xl-6">
                            <ul>
                                <li class="cor-empresa">Canadá</li>
                                <li class="cor-empresa">Estados Unidos</li>
                            </ul>           
                        </div>
                        <div class="col-12 col-xl-6">
                            <ul>
                                <li class="cor-empresa">Inglaterra</li>
                                <li class="cor-empresa">Irlanda</li>
                            </ul>   
                        </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Detalhes</h3>
                <p class="mb-5">Tempo mínimo de programa: um semestre acadêmico
                Tempo máximo de programa: período do ano acadêmico completo
                Idade: estudantes de 14 a 18 anos
                Hospedagem: Casa de família ou Residência Estudantil
                Opções de destinos: Estados Unidos, Canadá e Alemanha</p>
                <h3 class="text-dark">Os motivos para um High</h3>
                <h3 class="text-dark mt-2 mb-4">School no exterior:</h3>
                <p class="mb-5">Experiências incríveis: Trata-se de uma aventura cheia de aprendizados acadêmicos, pessoais e cultural que marcará para o resto da vida.</p>
                <p class="mb-5">Aprender em um ambiente novo: Contato com uma educação avançada e diferenciada, já que os países da Europa e Estados Unidos seguem padrões elevados.
</p>
                <p class="mb-5">Desenvolvimento Internacional: Imersão no idioma que preparar para enfrentar a realidade acadêmica e visão de mundo para carreira profissional.
</p>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fora" style="background-color:#FFB030;">
        <img class="img-banner"src="<?php echo get_template_directory_uri(  );?>/assets/images/CursoDeIdiomas.png">
        <div class="container container-dentro">
            <h3 class="texttest">Curso de Idiomas</h3>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Sobre o Programa</h3>
                <p class="mb-5">E você, qual idioma quer falar? É só escolher e deixar o resto com a OK Intercâmbio. Oferecemos vários programas de idiomas, otimizados a você, podendo ser de curta ou longa duração, dependendo do seu tempo e orçamento disponível.</p>
                <p class="mb-5">Os benefícios de um intercâmbio a gente não precisa falar, não é?! Você volta pra casa cidadão do mundo, com maior auto-estima, conhecimentos amplos e com uma bagagem cultural inesquecível.</p>
                <p class="mb-5">Cada pessoa tem os seus objetivos particulares ao decidir realizar um intercâmbio. Independente de qual seja o seu, há alguns fatores importantes para o sucesso dessa viagem, e o principal deles é a escolha certa da agência que irá te auxiliar no passo-a-passo.</p>
                <h3 class="text-dark mb-5">Países ofertados?</h3>
                <div class="row">
                        <div class="col-12 col-md-4 col-xl-4">
                            <ul>
                                <li class="cor-empresa">Estados Unidos</li>
                                <li class="cor-empresa">Espanha</li>
                                <li class="cor-empresa">França</li>
                                <li class="cor-empresa">Inglaterra</li>
                                <li class="cor-empresa">Irlanda</li>
                            </ul>           
                        </div>
                        <div class="col-12 col-md-4 col-xl-4">
                            <ul>
                                <li class="cor-empresa">Itália</li>
                                <li class="cor-empresa">Nova Zelândia</li>
                                <li class="cor-empresa">Malta</li>
                                <li class="cor-empresa">Marrocos</li>
                                <li class="cor-empresa">México</li>
                            </ul>   
                        </div>
                        <div class="col-12 col-md-4 col-xl-4">
                            <ul>
                                <li class="cor-empresa">Austrália</li>
                                <li class="cor-empresa">Argentina</li>
                                <li class="cor-empresa">Canadá</li>
                                <li class="cor-empresa">Chile</li>
                                <li class="cor-empresa">China</li>
                            </ul>   
                        </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Detalhes</h3>
                <p class="mb-5">Tempo mínimo de programa: 2 semanas
                Tempo máximo de programa: indeterminado
                Idade: a partir de 18 anos
                Tipo Hospedagem: Casa de família, Residência Estudantil, Hostel.</p>
                <h3 class="text-dark">Por que aprender</h3>
                <h3 class="text-dark mt-2 mb-4">um novo idioma?</h3>
                <p class="mb-5">Aumenta a capacidade intelectual: alar uma língua estrangeira aumenta sua funcionalidade cerebral. Ele é desafiado a reconhecer e comunicar-se em diferentes sistemas linguísticos.
                É ótimo para sua carreira: A fluência em uma nova língua, suas chances de conseguir um emprego são bem maiores que as de pessoas que falam apenas um idioma.
                Viajar sem barreiras: Mais liberdade para viajar o mundo, e aproveitar a sua viagem ao máximo sem passar por perrengue ou vergonha na hora de se comunicar.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fora" style="background-color:#7B39E9;">
        <img class="img-banner"src="<?php echo get_template_directory_uri(  );?>/assets/images/BusinessEnglish.png">
        <div class="container container-dentro">
            <h3 class="texttest">Business English</h3>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Sobre o Programa</h3>
                <p class="mb-5">O Programa de Business English atende executivos de várias áreas de atuação. Os cursos são desenvolvidos especialmente para atender as demandas para uma comunicação fluente, com vocabulário específico.</p>
                <p class="mb-5">A OK Intercâmbio firmou parceria com escolas reconhecidas pelo mundo todo por ministrarem cursos de especializações renomados e com certificação internacional.</p>
                <p class="mb-5">Profissionais do mundo dos negócios que queiram aproveitar o período das férias para aperfeiçoar o idioma e dar um upgrade na carreira, podem se inscrever.</p>
                <p class="mb-5">Os cursos ofertados são de curta ou longa duração, com opções em grupo ou individual, de acordo com as necessidades.</p>
            </div>
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Detalhes</h3>
                <p class="mb-5">Tempo mínimo de programa: 2 semanas
                Tempo máximo de programa: indeterminado
                Idade: a partir de 18 anos
                Tipo Hospedagem: Casa de família, Residência Estudantil, Hostel.</p>
                <h3 class="text-dark mb-5">Países ofertados?</h3>
                            <ul>
                                <li class="cor-empresa">Austrália</li>
                                <li class="cor-empresa">Canadá</li>
                                <li class="cor-empresa">Estados Unidos</li>
                                <li class="cor-empresa">Inglaterra</li>
                                <li class="cor-empresa">Irlanda</li>
                            </ul>           
            </div>
        </div>
    </div>
    <div class="container-fluid container-fora" style="background-color:#FFB030;">
        <img class="img-banner"src="<?php echo get_template_directory_uri(  );?>/assets/images/IntercambioEmFamilia.png">
        <div class="container container-dentro">
            <h3 class="texttest">Intercâmbio</h3>
            <h3 class="texttest">em Família</h3>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Viajar em Família</h3>
                <p class="mb-5">Que tal embarcar com seus filhos para uma diferente viagem de férias?</p>
                <p class="mb-5">Este programa é a melhor opção para toda a família aprender um novo idioma enquanto explora o país.</p>
                <p class="mb-5">Funciona assim, cada integrante da família vai cursar no nível de conhecimento do idioma, porém todos no mesmo horário para que no tempo livre possam curtir as férias juntos e conhecer os principais pontos turísticos do local.</p>
                <p class="mb-5">Esta também é uma ótima oportunidade para os filhos fazerem um “teste” supervisionado pelos pais antes de passarem sozinhos pela experiência do intercâmbio.</p>
                <p class="mb-5">Este programa é inovador no sentido de contemplar todos os membros da família de forma igual, além da economia financeira e de tempo uma vez que todos estão aproveitando juntos para estudar, ampliar conhecimentos e se divertir.</p>
                <h3 class="text-dark mb-5">Países ofertados?</h3>
                            <ul>
                                <li class="cor-empresa">Austrália</li>
                                <li class="cor-empresa">Canadá</li>
                                <li class="cor-empresa">Estados Unidos</li>
                                <li class="cor-empresa">Inglaterra</li>
                            </ul>      
            </div>
            <div class="col-12 col-xl-6 my-5">
                <h3 class="text-dark mb-4">Detalhes</h3>
                <p class="mb-5">Tempo mínimo de programa: 2 semanas
                Tempo máximo de programa: 8 semanas
                Idade: a partir de 7 anos
                Hospedagem: Casa, apartamento alugado ou hostel</p>
                <h3 class="text-dark">Os motivos para embarcar</h3>
                <h3 class="text-dark mt-2 mb-4">nesta experiência:</h3>
                <p class="mb-5">Experiências incríveis: Trata-se de uma aventura cheia de aprendizados acadêmicos, pessoais e cultural que marcará para toda família essa experiência incrível
Aprender em um ambiente novo: Oportunidade única para pais que quer passear com os filhos e aproveitar para turbinar o idioma e vivência uma imersão cultural no país.
Desenvolvimento Internacional: Imersão no idioma que preparar para enfrentar a realidade acadêmica e visão de mundo para carreira profissional.</p>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>