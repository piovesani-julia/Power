<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../custon.css">
  <title>Power Livros</title>
  <style>
    p {
      font-family: Centaur;

    }
  </style>
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
            <a class="nav-link" href="index.php"> Home | <span class="sr-only">(página atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nos.php"> Sobre nós |</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#?" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  <!-- "Inicio da pág" -->
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <br><br>
      <i>
        <h3 style="fonty-family:Bookman Old Style; color:#1a237e">Nossa História</h3><br>
      </i>
      <p> Nossa livraria teve um começo bem inusitado, a proposta foi fazer um site com qualquer tema tendo alguns requisitos obrigatórios.
        Ficamos um tempo pensando e logo nos veio a ideia de usar o tema de outro trabalho, mas mesmo assim tivemos que adaptar um pouco, afinal, nesse outro trabalho
        a ideia era fazer uma editora de livros e lá trbalharíamos com a formação de uma empresa; aqui mudamos um pouco, virou um site onde se vende livros, ao inves de escrevê-los e
        editá-los; nesse site nós também recebemos outros livros e revedemos. </p>
      <p> Gostaríamos do seu apoio, se tiver interesse, coloque um produto seu a venda, temos certeza que do mesmo jeito que ele mudou a
        sua vida, irá mudar a de várias outras também! Compartilhe-o e mude vidas!
      </p>
    </div>
    <div class="col-1"></div>
  </div><!-- end row-->
  <div class="row">
    <!-- a ideia é colocar fotos nossas e na frente ou embaixo colocar algumas informações sobre cada um, ex
        nome, idade, escola, curso, cidade que mora, onde nasceu bla bla bla atraves de uma lista, ou seja, <ul><li> idade</li></ul> -->
    <div class="col">

    </div>
    <div class="col">

    </div>

  </div>
  <br /><br />
  <hr><br />
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col">
        <h3>Fale Conosco</h3><br />
        <form action="msg.php" method="POST">
          <div>
          <label> Nome: </label><br>
          <input type="text" name="nome" placeholder="Digite seu nome"><BR />
          </div>
          <div>
          <label>Email: </label><br>
          <input type="email" name="email" placeholder="exem@email.com"><br />
        </div>
          <div>
          <label>Mensagem:</label><br>
          <textarea id="msg"name="mensagem" placeholder=""></textarea><br>
          <button class="btn btn-outline-dark" type="submit">Enviar</button>
          </div>
          </form>
      </div>
      <div class="col"></div>
    </div>
  </div><!-- Fecha o container-->



</body>

</html>