<?php
include_once './init.php';

// pega o ID da URL
$id = isset($_GET['isbn']) ? (int) $_GET['isbn'] : null;
// valida o ID
if (empty($id)) {
  echo "ID para alteração não definido";
  exit;
}
// busca os dados do usuário a ser editado
$PDO = db_connect();
$sql = "SELECT isbn,titulo,autor,sobrenome,editora,preco FROM livros WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':isbn', $id, PDO::PARAM_INT);
$stmt->execute();
$livro = $stmt->fetch(PDO::FETCH_ASSOC);
// se o método fetch() não retornar um array, significa que o ID não corresponde 
// a um usuário válido
if (!is_array($livro)) {
  echo "Nenhum Livro Encontrado";
  exit;
}
?>
<!doctype html>
<html>

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
  <div class="container">
    <div class="row">
      <div class="col s1 ">
      </div>
      <div class="col s10">
        <div class="card-panel black blue-text text-darken-2">
          <h2>Cadastrar Livros</h2>
          <h4>Edição de Livros</h4>
        </div>
        <form action="edit.php" method="post">
        <label>ISBN:</label>
                    <input type="text" name="isbn" placeholder="Digite o ISBN do livro"><br /><br />
                    <label>Titulo:</label>
                    <input type="text" name="titulo" placeholder="Digite o título"><br />
                    <label>Autor:</label>
                    <input type="text" name="autor" placeholder="Digite o nome do autor"><br /><br />
                    <label>Genero:</label>
                    <input type="text" name="gereno" placeholder="Digite o genero  do livro "><br /><br />
                    <label>Editora:</label>
                    <input type="text" name="editora" placeholder="Digite a editora">
                    <label>Preço:</label>
                    <input type="text" name="preco" placeholder="Digite o Preço"><br /><br />
                    <input type="submit" value="Alterar">
        </form>
      </div>
      <div class="col s1 ">
      </div>
    </div>
  </div>
  
</body>

</html>