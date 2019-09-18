<?php

include_once './init.php';

// pega os dados do formuário
$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
$titulo = isset($_POST['titulo']) ? $_POST :null;
$nome = isset($_POST['nome']) ? $_POST['author'] : null;
$sobrenome = isset($_POST['sobrenome']) ? $_POST['gender'] : null;
$editora = isset($_POST['editora']) ? $_POST['birthdate'] : null;
$desc = isset($_POST['desc']) ? $_POST['desc'] : null;

// validação (bem simples, só pra evitar dados vazios)

//if((empty($titulo) || empty($nome) || empty($sobrenome) || empty($isbn))
//{
   // echo "Volte e preencha todos os campos";
    //exit;
//}

// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd

// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO livros(titulo, nome, sobrenome, editora, desc) VALUES(:isbn,:titulo, :nome, :sobrenome, :gender, :editora, :desc)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':isbn',$isbn);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $sobrenome);
$stmt->bindParam(':editora', $editora);
$stmt->bindParam(':desc', $desc);
if ($stmt->execute())
{
    header('Location: tabela.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}