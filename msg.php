<?php
require_once './init.php';

//Pegar dados

$nome = isset($_POST['nome'])?$_POST['nome']:null;
$email = isset($_POST['email'])?$_POST['email']:null;
$mensagem = isset($_POST['mensagem'])?$_POST['mensagem']:null;

if(empty($nome) || empty($email) || empty($mensagem))
{
    echo " Preencha todos os campos  ";
exit;
}

$id=null;
$query = "INSERT INTO  msg(id,nome,email,mensagem) VALUES(:id,:nome,:email,:mensagem)";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id',$id);
$stmt->bindParam(':nome',$nome);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':mensagem',$mensagem);

if($stmt->execute())
{
    echo"<script> alert('Sucesso ao enviar mensage')</script>";
    header('Location:nos.php');
}else{
    echo" Erro ao enviar mensagem ";
}
