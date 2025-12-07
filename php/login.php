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
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['user_tipo'] = $user['tipo'];
            $_SESSION['user_email'] = $user['email'];

            $mensagem = urlencode("Acessando...");
            $redirect = urlencode("../html/home.php?processo=sucesso");
            header('Location:../html/loading.php?msg=$mensagem&redirect=$redirect');
            exit;
        }else{
            header('Location:../html/login.php?error=invalid_credentials');
            exit;
        }
    }else{
        header('Location:../html/login.php?error=empty_fields');
        exit;
    }
}