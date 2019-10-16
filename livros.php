<?php
include_once './init.php';
// De onde tirei ? https://youtu.be/hPsYf0BeHKk

//Definir itens por paginação
$itens_por_pagina = 10;

// pegar a pagina atual
$pagina = intval($_GET['pagina']); 

//puxar produtos
$sql_code = "select editora, preco, titulo, autor, genero from livros LIMIT $pagina, $itens_por_pagina";
$execute = $conn->query($sql_code) or die ($conn->error);
$num = $execute->num_rows;

//pega a quantidade de obj no BD
$num_total = $conn->query("select editora, preco, titulo, autor, genero from livros")->num_rows;

//Definir  numero de paginas
$num_paginas = ceil($num_total /$itens_por_pagina);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../custon.css">
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
    </nav><!-- Fim do menu -->
    <!-- Botoes para paginação -->
    <div class="row">
        <div class="col"> 
                <h2>Livros</h2>
                <?php if($num > 0){ ?>
                    <div>
                        <?php do{?>
                        <ul>
                            <li>Editora: <?php echo $produtos['editora'] ?></li>
                            <li>Preço: <?php echo $produtos['preco'] ?></li>
                            <li>Título: <?php echo $produtos['titulo'] ?></li>
                            <li>Autor: <?php echo $produtos['autor'] ?></li>
                            <li>Genero: <?php echo $produtos['genero'] ?></li>
                        </ul>
                    </div>

                <?php }while($produtos = $execute->fetch_assoc()); ?>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <nav aria-label="Navegação de página exemplo">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="livros.php?pagina=0" aria-label="Anterior">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Anterior</span>
                        </a>
                    </li>
                    <?php for($i=0;$i<$num_paginas;$i++) {
                        $estilo ="";
                        if($pagina == $i)
                            $estilo = "\" active\"";
                        ?>
                    <li class="page-item <?php echo $estilo?>"><a class="page-link" href="livros.php?pagina-<?php echo$i;?>"><?php echo $i+1;?></a></li>
                    <?php }?>
                    <a class="page-link" href="livros.php?pagina=<?php echo$num_paginas-1?>" aria-label="Próximo">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col"></div>
    </div>
</body>
</html>