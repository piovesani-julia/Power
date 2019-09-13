<html>
    <head>
    <!-- Eh o index da pagina com o bootstrap -->
        <title>Power Livros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="materialize/css/custon.css" real="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="bootstrap/js/vendor/bootstrap.min.js" type="text/javascript"></script>
        <style>
        h1{
            font-family: Old English Text MT;
            color:#ffa000;
        }
        </style>
    </head>
    <body>
        <div class="dropdown">
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
        <div class="container">
        <div class="row">
        <div class="col-sm">
        <br/>
        </div>
        <div class="col-sm">
            <h1>Promoçãoooooo!!!!</h1>
            </div>
            <div class="col-sm">
            <br/>
            </div>
            </div>
            <!--Indicadores do nosso carrossel-->
            <div id="carrossel" class="carousel slide" data-ride="carousel" data-interval="100000">
                <ol class="carousel-indicators">
                    <li data-target="#carrossel" data-slide-to="0" class="active"></li>
                    <li data-target="#carrossel" data-slide-to="1"></li>
                </ol>
                <!--Cidades de exemplo do nosso carrossel-->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="Fotos/promo.jpg" 
                             alt="Seleção" style="width:100%; higth:50%">
                        <div class="carousel-caption">
                        <a href ="#"><h3>Promoção</h3>
                            <p>A Seleção - Kiera Kass</p></a>
                            <!-- CRIAR UM LINK PRA ONDE VAI TER VARIOS CARDES-->
                        </div>
                    </div>                    
                    <div class="item">
                        <img src="Fotos/p3.jpg" 
                             alt="Elite" style="width: 100%;">
                        <div class="carousel-caption">
                        <a href ="#"><h3>Promoção</h3>
                            <p>A Seleção - Kiera Kass</p></a>
                        </div>
                    </div>
                        </div>
                    </div>
                    </div>
                <!-- Controles de navegação direita e esquerda -->
                  <a class="left carousel-control" href="#carrossel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#carrossel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Próximo</span>
                </a>
                </a>
            </div>
        </div>
    </body>
</html>