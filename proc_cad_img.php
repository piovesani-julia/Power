<?php

section_start();

// Verificar se o user clik no botão
$SendCadImg = filter_input(INPUT_POST, 'SandCadImg',FILTER_SANITIZE_STRING);
if($SendCadImg){
 //Receber dados do form 
 $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$nome_img = $_FILES['imagem']['nome'];

}else{
    $_SESSION['msg'] = "<p><style ='color: red'>  Erro ao salvar os dados</style></p>";
    header("Location: c.php");
}