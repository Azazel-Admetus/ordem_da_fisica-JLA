<?php
$user = 'root';
$local = 'localhost';
$pass = '';
$db = 'clube_de_fisica';

try{
    $conn = new PDO ("mysql:host=$local;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erro ao fazer conexão: " . $e->getMessage();
}
