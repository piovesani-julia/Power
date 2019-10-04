<!DOCTYPE html>
<html lang="pt-br">

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
            <a class="nav-link" href="nos.php">Sobre</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Livros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="lancamentos.php">Lançamentos</a>
              <a class="dropdown-item" href="#">Mais procurados </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item disabled" href="#">Algo mais aqui</a>
            </div>
          </li>
      </div>
  </nav>
  <!-- "Inicio da pág" -->
  <div class="row">
    <!-- Carousel -->
    <div class="col-2"></div>
    <div class="col-8">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="Fotos/promo.jpg" alt="Primeiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Fotos/p3.jpg" alt="Segundo Slide">
          </div>
        </div>
        <div class="col-2"></div>
        <!--
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Terceiro Slide">
    </div>
-->
      </div>
    </div>
  </div>
  </div><!-- termina o container -->
  <section>

  </section>

  <!--JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>