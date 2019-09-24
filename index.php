<?php
require_once 'conexao/conexao.php';
// abre a conexão
$PDO = db_connect();

error_reporting(0);
$conn->exec("set names utf8");
$sql = "SELECT isnb, titulo, autor,  sobrenome, id, editora, FROM livros ORDER BY name ASC";
$result =$conn->query($sql);
$livros = $result->fetchAll(PDO::FETCH_ASSOC)
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
    error_reporting(0);
    $conn->exec("set names utf8");
    $sql = "Select isbn, titulo, autor, sobrenome, editora, id, preco from livros order by titulo, sobrenome ASC";
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
            <div class="col s2">
                <!-- Espaço -->
            </div>
            <div class="col s5">
                <!menu>
                <ul>
                <li>
                <a href="form-add.php"> @add Livro</a>
                </li>
                </ul>
                <hr>
            </div>
            <div class="col s5">
                <!menu>
            </div>
            <div class="col s2">
                <!-- Frase --> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col s2"><!-- Espaço--></div>
            <div class="col s10">
                <!-- Tabela -->
                <br/><hr><br/>
                <table class=" ">
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
                        foreach ($alunos as $livro) {
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
                                <a href="delete.php?id=<?php echo $livro['id'] ?>" 
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
            </div><!-- fecha col s10-->
            <div class="col s2">
                <!-- Outro Espaço-->
            </div>
        </div><!-- Fecha div row-->
    </div>
</body>

</html>