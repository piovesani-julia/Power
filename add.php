<?php
require_once './init.php';
// pega os dados do formuário
$isbn =($_POST['isbn']) ? $_POST['isbn'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
$autor = isset($_POST['autor']) ? $_POST['autor'] : null;
$genero = isset($_POST['genero']) ? $_POST['genero'] : null;
$editora = isset($_POST['editora']) ? $_POST['editora'] : null;
$preco = isset($_POST['preco']) ? $_POST['preco'] : null;


// validação (bem simples, só pra evitar dados vazios)
if (empty($isbn) || empty($titulo) || empty($preco) ) {
    echo "Volte e preencha todos os campos<br/>";
    //echo "$isbn,$titulo,$autor,$sobrenome,$editora,$preco";
    exit;
}
$id = null;
// insere no banco
$query = "INSERT INTO livros (isbn,titulo,autor,genero,editora,preco) VALUES(:isbn,:titulo,:autor,:genero,:editora,:preco)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':isbn', $isbn);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':editora',$editora);
$stmt->bindParam(':preco',$preco);
if ($stmt->execute()){
    header('Location:form-add.php');
} else {
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}