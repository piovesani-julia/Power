<?php
require_once 'conexao.php';
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
        h4{
            color:#4169e1;
        }
        h2
        {
            color:#1e90ff;
        }
    </style>
</head>
</head>

<body>
    <?php
    error_reporting(0);
    //aceitar acentuação 
    $conn->exec("set names utf8");
    $sql = "Select isbn, titulo, autor, sobrenome, editora, id, preco" 
    ."from livros order by titulo, sobrenome ASC";
    $result = $conn->query($sql);
    $livros = $result->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="container ">
        <div class="row">
            <div class="col s2"><!-- Espaço --></div>
            <div class="col s10">
                <div class="card-panel black  grey-text text-lighten-5">
                    <h2>Tabela de Registros</h2>
                    <h4>Livros</h4>
                </div>
            </div>
            <div class="col s2">
                <!-- espaço-->
            </div>
        </div>
        <div class="row">
            <div class="col s2"><!-- Espaço --></div>
            <div class="col s5">
                <!--menu-->
                <ul>
                    <li>
                    <a href="form-add.php">@add Livro</a>
                    </li>
                </ul>
            </div>
            <div class="col s5"><!--menu-->
                <a href="#">@Promoção</a>
            </div>
            <div class="col s2">
                <!-- Frase --> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col s2"><!-- Espaço--></div>
            <div class="col s10"><!-- Tabela --><br/>
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
            </div><!-- fecha col s10-->
            <div class="col s2">
                <!-- Outro Espaço-->
            </div>
        </div><!-- Fecha div row-->
    </div>
    <footer class="page-footer black">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="blue-text">Livraria Power </h5>
                <p class="blue-text text-darken-4"><b>Livriria criada par fins educativos</b></p>
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
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</body>

</html>