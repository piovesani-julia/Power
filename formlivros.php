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
<hr>
        <br/>
       <br/>
       <div class="container">
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10">
                <h1>Cadastrar Livros</h1>
        <form action="addliv.php" method = "POST">
        <label>ISBN:</label>
                <input type="text" nome="isbn" placeholder="Digite o ISBN do livro"><br/><br/>
            <label>Titulo: </label>
                <input type="text" nome="titulo" placeholder="Digite o título"><br/>
            <label>Autor:</label>
                <input type="text" nome="nome" placeholder="Digite o nome do autor"><br/><br/>
            <label>Sobrenome:</label>
                <input type="text" nome="sobrenome" placeholder="Digite o sobrenome do autor"><br/><br/>
            <label>Editora:</label>
                <input type="text" nome="editora" placeholder="Digite a editora"><br/><br/>

                <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
                </div>
                <div class="col s1"></div>
            </div>
        </div>
</body>
</html>