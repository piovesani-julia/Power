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
                <div class="card-panel black ">
                    <h2><span class="grey-text text-lighthen-5">Tabela de livros <#></span></h2>
                </div>
            </div>
            <div class="col s1"></div>
        </div>
        <br /> <hr> <br />
        <div class="container">
            <div class="row">
                <div class="col s1"></div>
                <div class="col s5">
                <a href="formlivros.php">@Add registro</a><br/>
                    <a href="cardes.php" >@Vitrine</a><br/>
                </div>
                <div class="col s5">
                    <a href="addimg.php" >@Add Imagens</a><br/>
                </div>
                <div class="col s1"></div>
            </div>
            <div class="row"><div class="col s1"></div><div class="col s10"><h6>Tudo depende  do tipo de lente que você usa pra ver as coisas ~<br/>~ <i>O Mundo de Sofia</i></h6></div><div class="col s1"></div></div>
            
        </div>
     <hr> <br />
    </div>
    <!-- Codificação-->
    <?php
    //arrumando erro 
    error_reporting(0);
    $conn->exec("set names utf8");
    //consulta para mostrar os livros em ordem alfabetica 
    $sql = "select titulo,autor,sobrenome,isbn,editora,id from livros order by titulo,sobrenome asc;";
    $result = $conn->query($sql);
    $livros = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!-- HTML -->
    <div class="container">
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8">
            <table class="centered">
                <thead>
                    <tr>
                        <th> Titulo </th>
                        <th> Autor </th>
                        <th> Sobrenome </th>
                        <th> ISBN</th>
                        <th>Editora</th>
                        <th>ID de cadastro</th>
                        <th>Ação</th>
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
                            <td><?= $livro[isbn] ?></td>
                            <td><?=$livro[editora]?></td>
                            <td><?=$livro[id]?></td>
                            <td>
                            <a href="editliv.php?id=<?php echo $user['id'] ?>">Editar</a>
                                <a href="dellivro.php?id=<?php echo $user['id'] ?>" 
                                   onclick="return confirm('Tem certeza de que deseja remover?');">
                                    Remover
                                </a>
                            </td>
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