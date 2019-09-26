<?php
include_once 'conexao.php';

// pega os dados do formuário
$isbn = isset($_POST['isbn'])? $_POST['isbn'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
$autor = isset($_POST['autor']) ? $_POST['autor'] : null;
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
$editora = isset($_POST['editora']) ? $_POST['editora'] : null;
$preco = isset($_POST['preco']) ? $_POST['preco'] : null;
 
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