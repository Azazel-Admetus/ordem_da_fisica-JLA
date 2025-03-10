<?php
require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = 'padrao';
    if(!empty($email) && !empty($username) && !empty($senha)){
        $stmt = $conn->prepare('INSERT INTO usuarios (nome, email, senha, tipo)  VALUES (:nome, :email, :senha, :tipo)');
        $stmt->bindParam(':nome', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':tipo', $tipo);
        if ($stmt->execute()){
            header('Location:index-pos.php');
            exit;
        }else{
            header('Location:../html/cadastro.html?db=False');
            exit;
        }
    } else{
        header('Location:../html/cadastro.html?empty=True');
        exit;
    }

}