  
<?php
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO('mysql:host=localhost;dbname=guido',
        $username,
        $password);      
        $conn -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Deu Ruim!!" . $e ->getMessage();
    }
    require_once 'fun.php';