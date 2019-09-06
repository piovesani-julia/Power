<?php
      include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- add materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/custon.css">
    <title>Index</title>
</head>

<body>
<div class="container">
        <div class="card-panel color blue text-cyan  text-lighten-5 ">
            <h2> Tabela de livros </h2>
        </div>
        <br/>
        <hr>
        <br/>
        <span class="lead"> [Testando o que to fazendo ] </span>
</div>
    <!-- Codificação-->
    <?php
    //arrumando erro 
    error_reporting(0);
    // codificação para acentos
    $conn->exec("set names utf8");
    //preparando consulta sql
    $sql = "select titulo,autor,sobrenome,editora from livros order by titulo,sobrenome asc;";
    $result = $conn->query($sql);
    $livros= $result->fetchAll(PDO::FETCH_ASSOC);
    //exibindo
    ?>
    <!-- HTML -->
    <div class="container">
    <div class = "row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th> Titulo </th>
                <th> Autor  </th>
                <th> Sobrenome </th>
                <th> Editora</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach($livros as $livro ){
                ?>
                <tr>
                            <td><?=$livro[titulo]?></td>
                            <td><?=$livro[autor]?></td>
                            <td><?=$livro[sobrenome]?></td>
                            <td><?=$livro[editora]?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>