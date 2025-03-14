<?php
require_once "conn.php";
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $senha = trim($_POST['senha']);
    if(!empty($email) && !empty($senha)){
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        //prevenção contra ataques de tempo
        $hash = $user['senha'] ?? password_hash("placeholder_password", PASSWORD_DEFAULT);
        if ($user && password_verify($senha, $hash)){
            session_regenerate_id(true); //evita sequestro de sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['user_tipo'] = $user['tipo'];
            header('Location:index-pos.php');
            exit;
        }else{
            header('Location:../html/login.html?error=invalid_credentials');
            exit;
        }
    }else{
        header('Location:../html/login.html?empty=true');
        exit;
    }
}