<?php
include_once 'conexao.php';

// resgata os valores do formulário
$isbn = isset($_POST['isbn']);
$titulo = isset($_POST['titulo']);
$autor = isset($_POST['autor']);
$sobrenome = isset($_POST['sobrenome']);
$editora = isset($_POST['editora']);
$preco = isset($_POST['preco']);


$PDO = db_connect();
$sql = "UPDATE livros  SET isbn = :isbn , titulo = :titulo, " .
"autor = :autor, sobrenome = :sobrenome, preco = :preco WHERE (id = :id);";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':isbn',$isbn);
$stmt->bindParam(':titulo',$titulo);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':editora', $editora);
$stmt->bindParam(':preco', $preco);

if ($stmt->execute()){

    header('Location: tabela.php');
} else { 

    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}
