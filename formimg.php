<?php
  session_start();
  include_once'./init.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

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
    <h1>Cadastrar Imagem</h1>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="Digitar o nome"><br><br>
                
                <label>Imagem</label>
                <input type="file" name="imagem"><br><br>
                
                <input name="SendCadImg" type="submit" value="Cadastrar">
            </form>
            <br/>
            <br/>
            <hr>
            <br/>
            <br/>
    <h1>Cadastrar Livros</h1>
        <a href="tabela.php"> @Tabela</a>
</body>
</html>