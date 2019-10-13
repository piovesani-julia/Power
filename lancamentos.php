<!DOCTYPE html>
<html lang="pt-br">
<!-- Home -->
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="materialize/css/custon.css">
  <title>Power Livros</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="Fotos/book-2x.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home<span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nos.php">Sobre nós</a>
          </li>
          <li class="nav-item dropdown">
          <!-- Menu com subniveis-->
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Livros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="lancamentos.php">Lançamentos</a>
              <a class="dropdown-item" href="#">Mais procurados </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item disabled" href="#">Para Vestibular </a>
              <a class="dropdown-item disabled" href="tabela.php">Todos os Livros</a>
            </div>
          </li>
      </div>
  </nav>
    <div class="container ">
        <div class="row">
            <div class="col-s1">

            </div>
            <div class="col-s5">
                <h3>Lancamentos - 2019</h3><br>
                <div class="card  border-info">
                    <div class="card-body  text-info">
                        Minha Vida Fora de Série 5ºtemporada - 2019
                    </div>
                </div>
                <br>
                <div class="card  border-warning">
                    <div class="card-body  text-warning">
                        Fazendo Meu Filme Lado B - 2019
                    </div>
                </div>
                <br>
                <div class="card  border-dark">
                    <div class="card-body  text-dark">
                    Sob o Solo - Novembro 2019
                    </div>
                </div>
            </div>
            <!-- ... -->
            <div class="col"></div>
            <div class="col-s5">
                <br><br><br>
                </div><!-- utut -->
        </div>
        <!--Fecha row-->
        <div class="row">
        <div class="col-s5">
                <br>
                <div class="card  border-info">
                    <div class="card-body  text-info">
                        O Primeiro Imortal - Rodrigo N.Alvarez -Outubro 2019        
                </div>
                </div>
                <br>
                <div class="card  border-warning">
                    <div class="card-body  text-warning">
                    O Garfo, a Bruxa e o Dragão - Christopher Paolini
                    </div>
                </div>
                <br>
                <div class="card  border-dark">
                    <div class="card-body  text-dark">
                    Sangue e Fogo: Vol. 1, Parte 2 - George R. R. Martin
                    </div>
                </div>
            </div>
            <!-- ...-->
            <div class="col"></div>
            <div class="col-s5">
                <br>
                <div class="card  border-info">
                    <div class="card-body  text-info">
                    A Floresta Das Árvores Retorcidas - 
Alexandre Callari
                    </div>
                </div>
                <br>
                <div class="card  border-warning">
                    <div class="card-body  text-warning">
                    As aventuras de Mike - 
Gabriel Dearo
                    </div>
                </div>
                <br>
                <div class="card  border-dark">
                    <div class="card-body  text-dark">
                    Sob o Solo - Novembro 2019
                    </div>
                </div>
            </div>
        </div><!--Fecha row-->
    </div>
</body>

</html>
