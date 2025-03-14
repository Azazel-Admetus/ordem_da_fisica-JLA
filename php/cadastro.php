<?php
require_once "conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    //validando e sintetizando dados 
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $username =trim($_POST['username']);
    $senha_antes =$_POST['senha'];
    if(!$email || empty($username) || empty($senha_antes)){
        header("Location:../html/cadastro.php?error=invalid_input");
        exit;
    }
    if(strlen($senha_antes) < 8){
        header('Location:../html/cadastro.php?error=senha_curta');
        exit;
    }
    $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $senha = password_hash($senha_antes, PASSWORD_DEFAULT);
    $tipo = 'padrao';
    //verificando duplicidade 
    $check_stmt = $conn->prepare('SELECT COUNT(*) FROM usuarios WHERE email = :email OR nome = :nome');
    $check_stmt->bindParam(':email', $email);
    $check_stmt->bindParam(':nome', $username);
    $check_stmt->execute();
    $contagem = $check_stmt->fetchColumn();
    if($contagem > 0){
        header("Location:../html/cadastro.php?error=duplicate");
        exit;
    }
    //verifica se está vazio e insere no db
    if(!empty($email) && !empty($username) && !empty($senha)){
        $stmt = $conn->prepare('INSERT INTO usuarios (nome, email, senha, tipo)  VALUES (:nome, :email, :senha, :tipo)');
        $stmt->bindParam(':nome', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':tipo', $tipo);
        if ($stmt->execute()){
            header('Location:index-pos.php');
            header("X-Frame-Options: DENY");
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