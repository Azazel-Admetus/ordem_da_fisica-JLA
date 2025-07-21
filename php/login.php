<?php
require_once 'conn.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim(strip_tags($_POST['email']));
    $senha = trim(strip_tags($_POST['senha']));
    if(!empty($email) && !empty($senha) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($senha, $user['senha'])) {
            session_regenerate_id(true);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['nome'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['tipo_usuario'] = $user['tipo_usuario'];
            header("Location:redirecionador.php?fluxo=login");
            exit();
        } else {
            header("Location:../html/login.html?error=credenciais_invalidas");
            exit();
        }
    } else {
        header("Location:../html/login.html?error=campos_vazios");
        exit();
    }
}
?>