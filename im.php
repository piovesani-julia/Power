<html lang="br-pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container-fluid fundo-header">
            <div class="row">
                <div class="col s12 m12 l12 center-align">
                    <img src="Fotos/elite.jpg" class="logo" />
                </div>
                <div class="col s12 m12 l12 center-align">
                    <a href="#mais" class="scroll">
                        <img src="Fotos/elite.jpg" class="seta" />
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h4 class="center-align titulo-home">Seja bem-vindo à <b>BeOffices!</b></h4>
                    <p class="center-align descricao-home">A BeOffices - Escritórios Inteligentes é a melhor solução para quem precisa de um local corporativo e profissional. Localizado no Recreio dos Bandeirantes, oferecemos serviços personalizados e espaços multifuncionais projetados e equipados com tecnologia de ponta para atender às suas necessidades. Toda a infraestrutura ideal para empresas, profissionais liberais, empreendedores, startups e freelancers.</p>
                </div>
            </div>
        </div>
        <div class="carousel carousel-slider center sala-cards" id="mais">
            <div class="carousel-fixed-item center"></div>
            <a href="https://google.com.br">
                <div class="carousel-item black-text" href="#one!">
                    <div class="row espaco-card">
                        <div class="col s12 m12 l12">
                            <div class="card">
                                <div class="card-image">
                                    <img src="Fotos/elite.jpg">
                                    <span class="card-title gradiente titulo-card">Sala de Reunião e Treinamento</span>
                                </div>
                                <div class="card-content">
                                    <p>Salas de reunião e treinamento mobiliadas em alto padrão com infraestrutura completa para o seu evento.</p>
                                </div>
                                <div class="card-action lighten-1 light-green textura">
                                    <a href="#" class="white-text botao-card">Conhecer Sala</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="carousel-item black-text" href="#two!">
                <div class="row espaco-card">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-image">
                                <img src="otos/elite.jpg">
                                <span class="card-title gradiente titulo-card">Escritório Virtual</span>
                            </div>
                            <div class="card-content">
                                <p>O Escritório Virtual é uma modalidade de serviço personalizado que oferece conveniência, flexibilidade e baixo custo.</p>
                            </div>
                            <div class="card-action lighten-1 orange textura">
                                <a href="#" class="white-text botao-card">Saiba Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item black-text" href="#three!">
                <div class="row espaco-card">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-image">
                                <img src="Fotos/elite.jpg">
                                <span class="card-title gradiente titulo-card">Sala Executiva</span>
                            </div>
                            <div class="card-content">
                                <p>Salas privativas, mobiliadas em alto padrão e com total infraestrutura para atender às demandas da sua atividade corporativa por um baixo custo fixo.</p>
                            </div>
                            <div class="card-action lighten-1 teal textura">
                                <a href="#" class="white-text botao-card">Conhecer Sala</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item black-text" href="#four!">
                <div class="row espaco-card">
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-image">
                                <img src="Fotos/elite.jpg">
                                <span class="card-title gradiente titulo-card">Coworking</span>
                            </div>
                            <div class="card-content">
                                <p>O Escritório Virtual é uma modalidade de serviço personalizado que oferece conveniência, flexibilidade e baixo custo.</p>
                            </div>
                            <div class="card-action lighten-1 deep-orange textura">
                                <a href="#" class="white-text botao-card">Conhecer Sala</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script>
          $(document).ready(function(){
            $(".scroll").click(function(event){
              event.preventDefault();
              $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
            });
           });
        </script>
        <script>
          $('.carousel.carousel-slider').carousel({
          });
        </script>
