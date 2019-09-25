<?php

/**
 * Conecta com o MySQL usando PDO
 */
function db_connect() {
    $username = 'root';
    $password = '';
    $PDO = new PDO( 'mysql:host=localhost;dbname=guido',  $username,$password);      
    return $PDO;
}