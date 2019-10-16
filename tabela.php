<?php
include_once './init.php';
?>
<!doctype html>
<html>

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
    <style>
        body{
        background-color:#212121 ;
        }
</style>
</head>

<body>
    <?php
    //arrumando erro 
    error_reporting(0);
    // codificação para acentos
    $conn->exec("set names utf8");
    //preparando consulta sql
    $sql = "Select * from msg";
    $result = $conn->query($sql);
    $livros = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <!-- HTML -->
    <div class="container">
        <div class="row">
            <div class="col s1"></div>
            <div class="col s10">
                <div class=" card-panel black blue-text text-darken-2">
                    <h2>Tabela De Registos</h2>
                    <h4>Mensagens</h4>
                </div>
            </div>
            <div class="col s1"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="s2"></div>
            <div class="s5">
                <!--Menu-->
                <hr>
                <br />
                <!--<a class="waves-effect waves-light btn-small black" href="form-add.php">Adicionar Registro</a>-->
                <br />
            </div>
            <div class="s5">
                <!--Menu-->
            </div>
            <div class="s2"></div>
        </div>
    </div>
    <div class="Container">
        <div class="row">
            <div class="col s2"></div>
            <div class="col s8">
                <br /><br />
                <table class="centered striped  blue-grey lighten-1">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th colspan="3">MSG </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($livros as $livro) {
                            ?>
                            <tr>
                                <td><?= $livro[nome] ?></td>
                                <td><?= $livro[email] ?></td>
                                <td><?= $livro[mensagem] ?></td>
                                <td>
                                    <a href="del.php?id=<?php echo $livro['id'] ?>">Remover</a>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js?0" crossorigin="anonymous"></script>
</body>

</html>