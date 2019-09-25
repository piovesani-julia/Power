<?php
require_once 'conexao.php';
// resgata os valores do formulário
$isbn = isset($_POST['isbn'])? $_POST['isbn'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
$autor = isset($_POST['autor']) ? $_POST['autor'] : null;
$sobrenome = isset($_POST['sobrenome']) ? $_POST['sobrenome'] : null;
$editora = isset($_POST['editora']) ? $_POST['editora'] : null;
$preco = isset($_POST['preco']) ? $_POST['preco'] : null;
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
$isoDate = dateConvert($birthdate);
// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE guido. livros  SET isbn = :isbn , titulo = :titulo, autor = :autor, sobrenome = :sobrenome, preco = :preco WHERE (id = :id);";
$stmt = $PDO->prepare($sql);
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':isbn',$isbn);
$stmt->bindParam(':titulo',$titulo);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':editora', $editora);
$stmt->bindParam(':preco', $preco);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute())
{
    header('Location: index.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}