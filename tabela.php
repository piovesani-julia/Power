<?php
include_once 'conexao.php';
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
</head>

<body>
    <?php
    //arrumando erro 
    error_reporting(0);
    // codificação para acentos
    $conn->exec("set names utf8");
    //preparando consulta sql
    $sql = "Select * from livros order by titulo ASC";
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
                    <h4>Livros</h4>
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
                <a class="waves-effect waves-light btn-small black" href="form-add.php">Adicionar Registro</a>
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
                <table class="centered striped">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>TÍTULO</th>
                            <th>NOME (AUTOR)</th>
                            <th>SOBRENOME (AUTOR)</th>
                            <th>EDITORA</th>
                            <th>REGISTRO DE CADASTRO</th>
                            <th>PREÇO </th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($livros as $livro) {
                            ?>
                            <tr>
                                <td><?= $livro[isbn] ?></td>
                                <td><?= $livro[titulo] ?></td>
                                <td><?= $livro[autor] ?></td>
                                <td><?= $livro[sobrenome] ?></td>
                                <td><?= $livro[editora] ?></td>
                                <td><?= $livro[id] ?></td>
                                <td><?= $livro[preco] ?></td>
                                <td>
                                    <a href="form-edit.php?id=<?php echo $livro['id'] ?>">Editar</a>
                                    <a href="delete.php?id=<?php echo $livro['id'] ?>">Remover</a>
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
    <br /><br />
    <footer class="page-footer black">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="blue-text">Livraria Power </h5>
                    <p class="blue-text text-darken-4"><b>Livraria criada para fins educativos</b></p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text"></h5>
                    <ul>
                        <li>Ruahma</li>
                        <li>Julia</li>
                        <li>Lúcia</li>
                        <li>Isadora</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2019 Trabalho Escolar
                <a class="grey-text text-lighten-4 right" href="b/indexb.php">More Links</a>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/materialize/0.98.0/js/materialize.min.js"></script>
    <script src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js?0" crossorigin="anonymous"></script>

</body>

</html>