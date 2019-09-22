<?php

include_once './conexao.php';

// pega os dados do formuário
$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] :null;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
$editora = isset($_POST['editora']) ? $_POST['editora'] : null;

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO livros(isbn,titulo, nome, sobrenome, editora) VALUES(:isbn, :titulo, :nome, :sobrenome, :editora)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':isbn',$isbn);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':editora', $editora);

if ($stmt->execute())
{
    header('Location: tabela.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}