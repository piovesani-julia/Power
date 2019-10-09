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
          <div class="carousel-item">
            <img class="d-block w-100" src="Fotos/3Holmes.jpg" alt="Terceiro Slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="Fotos/holmes.jpg" alt="Quarto Slide">
          </div>
        </div>
        <div class="col s2"></div>
        <!--
    <div class="carousel-item">
      <img class="d-block w-100" src="" alt="Terceiro Slide">
    </div>-->
      </div>
    </div>
  </div>
  </div><!-- termina o container -->
  <hr>
  <div class="container">
    <div class="row">
      <div class="col"></div> <!-- Fecha col -->
      <div class="col"></div><!-- Fecha col -->
      <div class="col">
        <h3 aling="center" style="color:#e65100;"> Mais vendidos Do Mês</h3>
        <!-- carde-->
        <div class="card mb-3" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="color:#b71c1c;">Um Corpo na Biblioteca - Agatha Christie</h5>
            <p class="card-text" style="font-size:x-small; font-family:'Times New Roman', Times, serif; ">Certa manhã, o coronel Arthur Bantry e sua esposa, Dolly, são acordados por uma criada que lhe traz uma inusitada notícia: há uma cadáver na biblioteca da casa. O corpo é de uma jovem exageradamente maquiada e vestida em trajes de noite, morta por extrangulamento. Ninguém ali jamais a viu antes. Os Bantry não conseguem imaginar quem ela seja, quem a matou, por que está ali e nem como isso aconteceu. O coronel chama a polícia, enquanto Dolly pede auxílio à sua amiga Miss Marple, cujo faro para resolução de crimes é a apuradíssimo.</p>

          </div>
        </div>
        <!-- carde 2-->
        <div class="card text-center" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="color:#039be5;"> A Seleção - Kiera Cass </h5>
            <p class="card-text" style="font-size:x-small; font-family:'Times New Roman', Times, serif; ">“Para trinta e cinco garotas, a Seleção é a chance de uma vida. É a oportunidade de ser alçada a um mundo de vestidos deslumbrantes e joias valiosas. De morar em um palácio, conquistar o coração do belo príncipe Maxon e um dia ser a rainha.
              Para America Singer, no entanto, estar entre as Selecionadas é um pesadelo. Significa deixar para trás o rapaz que ama. Abandonar sua família e seu lar para entrar em uma disputa ferrenha por uma coroa que ela não quer. E viver em um palácio sob a ameaça constante de ataques rebeldes.
              Então America conhece pessoalmente o príncipe – e percebe que a vida com que sempre sonhou talvez não seja nada comparada ao futuro que nunca tinha ousado imaginar.”</p>
          </div>
        </div>
        <!-- carde 3-->
        <div class="card text-right" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="color:#1b5e20;">A Guerra Dos Fae</h5>
            <h6 style="color:#1b5e20;"> Crianças Trocadas - Elle Casey</h6>
            <p class="card-text" style="font-size:x-small; font-family:'Times New Roman', Times, serif; ">Jayne Sparks, rebelde e língua afiada de dezessete anos e seu melhor amigo, tímido e estudioso Tony Green tem uma existência muito típica de escola secundária, até que vários incidentes aparentemente não relacionados convergem, causando uma cascata de eventos que mudam suas vidas para sempre. Jayne e Tony, junto com um grupo de adolescentes em fuga, são sequestrados e enviados para uma floresta, onde nada e ninguém são o que parecem. Quem sairá triunfante? E o que eles serão quando o fizerem?</p>
          </div>
        </div>
      </div> <!-- fecha  col com cards -->
      <!-- 2 card-->
      <div class="col">
        <br><br>
        <!-- carde-->
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="color:pink">Fazendo Meu Filme - Paula Pimenta </h5>
            <p class="card-text" style="font-size:x-small; font-family:'Times New Roman', Times, serif; ">"Tudo muda na vida de Estefânia quando surge a oportunidade de fazer um intercâmbio e morar um ano em outro país. As reveladoras conversas por telefone ou MSN e os constantes bilhetinhos durante a aula passam a ter outro assunto: a viagem que se aproxima. É sobre isto que trata este livro: o fascinante universo de uma menina cheia de expectativas, que vive a dúvida entre continuar sua rotina, com seus amigos, familiares, estudos e seu inesperado novo amor, ou se aventurar em outro país e mergulhar num mundo cheio de novas possibilidades. As melhores cenas da vida de Fani podem ainda estar por vir. "<p>
          </div>
        </div>
        <!-- carde 2-->
        <div class="card text-center" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="color:#1a237e">Harry Potter e o Prisioneiro de Azkaban</h5>
            <p class="card-text" style="font-size:x-small; font-family:'Times New Roman', Times, serif; ">"As aulas estão de volta à Hogwarts e Harry Potter não vê a hora de embarcar no expresso a vapor que o levará de volta à escola de bruxaria. Mais uma vez suas férias na rua dos Alfeneiros foi triste e solitária. Com muita ação, humor e magia, 'Harry Potter e o prisioneiro de Azkaban' traz de volta o gigante atrapalhado Rúbeo Hagrid, o sábio diretor Alvo Dumbledore, a exigente professora de transformação Minerva MacGonagall e o novo mestre Lupin, que guarda grandes surpresas para Harry."</p>
          </div>
        </div>
        <!-- carde 3-->
        <div class="card text-right" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title" style="color:#bdbdbd">Quem é Você Alasca ?</h5>
            <p class="card-text" style="font-size:x-small; font-family:'Times New Roman', Times, serif; ">Miles Halter é um adolescente fissurado por célebres últimas palavras - e está cansado de sua vidinha segura e sem graça em casa. Vai para uma nova escola à procura daquilo que o poeta François Rabelais, quando estava à beira da morte, chamou de o 'Grande Talvez'. Muita coisa o aguarda em Culver Creek, inclusive Alasca Young. Inteligente, engraçada, problemática e extremamente sensual, Alasca levará Miles para o seu labirinto e o catapultará em direção ao Grande Talvez.</p>
          </div>
        </div>
      </div> <!-- fecha  col com cards -->
      <div class="col"></div> <!-- Fecha col -->
      <div class="col"></div><!-- Fecha col -->
    </div>
    <!--Fecha row-->
    
    <br><br>
  </div>
  <!--Fecha container-->


  </div>

  <!--JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>