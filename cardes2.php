<?php
    include_once './init.php';
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
    <title>Power Livros</title>
</head>
<body>
    <!-- Ver se da pra fazer um for ichie pra criar cardes conforme os registros e utiliazar as img  -->
    <?php
    //arrumando erro 
    error_reporting(0);
    $conn->exec("set names utf8");
    //consulta para mostrar os livros em ordem alfabetica 
    // $sql = "select titulo,autor,sobrenome,editora from livros order by titulo,sobrenome asc;";
    $result = $conn->query($sql);
    $livros = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!-- html -->
    <div class="container">

    </div>
</body>
</html>