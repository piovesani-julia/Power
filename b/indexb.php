<?php
include_once './conex.php';
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
    <title>Home Biqueira Online</title>
</head>

<div class="container">
        <div class="card-panel color red text-cyan  text-lighten-5 ">
            <h2> Tabela de Produtos </h2>
        </div>
        <br />
        <hr>
        <br />
    </div>
    <!-- Codificação-->
    <?php
    //arrumando erro 
    error_reporting(0);
    $conn->exec("set names utf8");
    //consulta para mostrar os livros em ordem alfabetica 
    $sql = "select nome,lote,produtor,traficante order by nome,lote asc;";
    $result = $conn->query($sql);
    $drogas = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!-- HTML -->
    <div class="container">
        <div class="row">
            <table class="higlight">
                <thead>
                    <tr>
                        <th> Nome </th>
                        <th> Lote </th>
                        <th> Produtor </th>
                        <th> Traficante</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($drogas as $droga) {
                        ?>
                        <tr>
                            <td><?= $droga[nome] ?></td>
                            <td><?= $droga[lote] ?></td>
                            <td><?= $droga[produtor] ?></td>
                            <td><?= $droga[traficante] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>