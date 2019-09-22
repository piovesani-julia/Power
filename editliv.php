<?php
require 'conexao.php';
// pega o ID da URL
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;
// valida o ID
if (empty($id)) {
    echo "ID para alteração não definido";
    exit;
}
// busca os dados do usuário a ser editado
$PDO = db_connect();
$sql = "SELECT isbn,titulo, nome, sobrenome, editora FROM livros WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
// se o método fetch() não retornar um array, significa que o ID não corresponde 
// a um livro válido
if (!is_array($user)) {
    echo "Nenhum Livro encontrado";
    exit;
}
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
        <h1>Cadastro de Livros </h1>
        <h2>Edição de livros </h2>
        <form action="editliv.php" method = "POST">
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

                <input name="SendCadImg" type="submit" value="Alterar">
    
        </form>
    </body>
</html>