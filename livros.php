<?php
include_once './init.php';
//Verifica se a pagina existe e
$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;
$result = "SELECT * FROM livros";
$results = mysqli_query($con, $result);

// contar livros
$totali = mysqli_num_rows($results);

//Seta a Quantidade por página 
$quantpg = 3;

// Calcular a qtd nescessária de pag
$numpg = ceil($totali / $quantpg);

// Calc inicio da visualização
$ini = ($quantpg * $pagina) - $quantpg;

// Seleção de Itens 
$resultlivros = "SELECT * FROM livros limit $ini, $quantpg";
$resultsli = mysqli_query($conn, $resultlivros);
$totali = mysqli_num_rows($resultsli);
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
        <div class="col"></div>
        <div class="col">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col"></div>
    </div>
</body>

</html>