<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'guido');

    // habilita todas as exibições de erros

    ini_set('display_errors', true);
    error_reporting(E_ALL);
    date_default_timezone_set('America/Sao_Paulo');

    try{
        $conn = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
    }catch(PDOException $e){
        echo $e ->getMessage();
    }
    
    