<?php
include_once 'conexao.php';
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
    <style>
        h1 {
            color: #1e90ff;
            text-align: center;
        }

        label {
            color: #1a237e;
        }

        footer {
            color: black;
        }
    </style>
</head>

<body>
    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col s1 ">
            </div>
            <div class="col s10">
                <div class="card-panel black">
                    <h1>Cadastrar Livros</h1>
                </div>
                <br />
                <hr><br />
                <form action="add.php" method="POST">
                    <label>ISBN:</label>
                    <input type="text" nome="isbn" placeholder="Digite o ISBN do livro"><br /><br />
                    <label>Titulo:</label>
                    <input type="text" nome="titulo" placeholder="Digite o título"><br />
                    <label>Autor:</label>
                    <input type="text" nome="autor" placeholder="Digite o nome do autor"><br /><br />
                    <label>Sobrenome:</label>
                    <input type="text" nome="sobrenome" placeholder="Digite o sobrenome do autor"><br /><br />
                    <label>Editora:</label>
                    <input type="text" nome="editora" placeholder="Digite a editora">
                    <label>Preço:</label>
                    <input type="text" nome="preco" placeholder="Digite o Preço"><br /><br />
                    <a class="waves-effect waves-light btn-small"><input  name="SendCadImg" type="submit" value="Cadastrar"></a>
                </form>
            </div>
            <div class="col s1"></div>
        </div>
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
                <a class="grey-text text-lighten-4 right" href="b/indexb.php">More Links</a>
            </div>
        </div>
    </footer>
</body>

</html>