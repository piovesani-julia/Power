<?php
include_once 'conexao.php';

$isbn = isset($_POST['isbn']);
$titulo = isset($_POST['titulo']);
$autor = isset($_POST['autor']);
$sobrenome = isset($_POST['sobrenome']);
$editora = isset($_POST['editora']);
$preco = isset($_POST['preco']);
 

if (empty($isbn) || empty($titulo) || empty($autor) || empty($sobrenome) || empty($editora) || empty($preco))
{
    echo "Preencha todos os campos";
    header('Location: form-add.php');
}

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO livros(isbn, titulo, autor, sobrenome, editora, preco) VALUES(:isbn, :titulo, :autor, :sobrenome, :editora, :preco)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':isbn',$isbn);
$stmt->bindParam(':titulo',$titulo);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':editora', $editora);
$stmt->bindParam(':preco', $preco);


if ($stmt->execute())
{
    header('Location: tabela.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}