 
<?php
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO('mysql:host=localhost;dbname=biqueira',
        $username,
        $password);      
        $conn -> setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Deu Ruim!!" . $e ->getMessage();
    }