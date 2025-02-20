<?php
require_once "conn.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if(!empty($email) && !empty($senha)){
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($senha, $user['senha'])){
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['user_tipo'] = $user['tipo'];
            header('Location:../html/index.html');
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