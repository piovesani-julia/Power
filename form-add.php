<?php
include_once 'init.php';
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
                <br/>
                <hr><br />
                <form action="add.php" method="POST">
                    <label>ISBN:</label>
                    <input type="text" name="isbn" placeholder="Digite o ISBN do livro"><br /><br />
                    <label>Titulo:</label>
                    <input type="text" name="titulo" placeholder="Digite o título"><br />
                    <label>Autor:</label>
                    <input type="text" name="autor" placeholder="Digite o nome do autor"><br /><br />
                    <label>Sobrenome:</label>
                    <input type="text" name="sobrenome" placeholder="Digite o sobrenome do autor"><br /><br />
                    <label>Editora:</label>
                    <input type="text" name="editora" placeholder="Digite a editora">
                    <label>Preço:</label>
                    <input type="text" name="preco" placeholder="Digite o Preço"><br /><br />
                    <a class="waves-effect waves-light btn-small"><input  name="SendCadImg" type="submit" value="Cadastrar"></a>
                </form>
            </div>
            <div class="col s1"></div>
        </div>
    </div>
</body>

</html>