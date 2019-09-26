<?php
    $username = 'root';
    $password = '';
    try{
        $conn = new PDO('mysql:host=localhost;dbname=guido',
        $username,
        $password);      
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
    echo 'aconteceu o erro: '. $e->getMessage();        
    }

    function db_connect(){
        $username = 'root';
        $password = '';
        $PDO = new PDO( 'mysql:host=localhost;dbname=guido',  $username,$password);      
        return $PDO;
        }