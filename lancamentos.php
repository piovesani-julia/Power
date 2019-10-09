<!DOCTYPE html>
<html lang="en">

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
            <a class="nav-link dropdown-toggle" href="tabela.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Livros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="lancamentos.php">Lançamentos</a>
              <a class="dropdown-item" href="#">Mais procurados </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item disabled" href="#">Para Vestibular </a>
            </div>
          </li>
      </div>
  </nav>
    <div class="container ">
        <div class="row">
            <div class="col-s2">

            </div>
            <div class="col-s10">
                <h3>Lancamentos</h3><br>
                <div class="card">
                    <div class="card-body">
                        Isto é um texto dentro de um card.
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        Isto é um texto dentro de um card.
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        Isto é um texto dentro de um card.
                    </div>
                </div>
            </div>
        </div>
        <!--Fecha row-->
    </div>
</body>

</html>
