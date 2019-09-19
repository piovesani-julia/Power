<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<!-- Pagina da tabela de livros -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- add materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/custon.css">
    <title>Power Livros</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s10">
                <div class="card-panel color blue text-cyan  text-lighten-5 ">
                    <h2> Tabela de livros </h2>
                </div>
            </div>
            <div class="col s1"></div>
        </div>
        <br /> <hr> <br />
        <div class="container">
            <div class="row">
                <div class="col s2"></div>
                <div class="col s5">
                <a href="formlivros.php">@Add registro</a><br/>
                    <a href="cardes.php" >@Vitrine</a><br/>
                </div>
                <div class="col s5">
                    <a href="addimg.php" >@Add Imagens</a>
                </div>
                <div class="col s2"></div>
            </div>
        </div>
     <hr> <br />
    </div>
    <!-- Codificação-->
    <?php
    //arrumando erro 
    error_reporting(0);
    $conn->exec("set names utf8");
    //consulta para mostrar os livros em ordem alfabetica 
    $sql = "select titulo,autor,sobrenome,editora,isbn from livros order by titulo,sobrenome asc;";
    $result = $conn->query($sql);
    $livros = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!-- HTML -->
    <div class="container">
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8">
            <table class="higlight">
                <thead>
                    <tr>
                        <th> Titulo </th>
                        <th> Autor </th>
                        <th> Sobrenome </th>
                        <th> Editora</th>
                        <th>ISBN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($livros as $livro) {
                        ?>
                        <tr>
                            <td><?= $livro[titulo] ?></td>
                            <td><?= $livro[autor] ?></td>
                            <td><?= $livro[sobrenome] ?></td>
                            <td><?= $livro[editora] ?></td>
                            <td><?=$livro[isbn]?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="col s2"></div>
        </div>
        </div>
    </div>
</body>

</html>