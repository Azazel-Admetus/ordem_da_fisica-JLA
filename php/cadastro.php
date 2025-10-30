<?php 
require_once 'conn.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //pegando os valores do formulário e sanitizando
    $nome = trim(mb_substr(strip_tags($_POST['nome']), 0, 100)); 
    $email = filter_var(trim(mb_substr(strip_tags($_POST['email']), 0, 100)), FILTER_VALIDATE_EMAIL);
    //verifico se a senha tem mais de 8 caracteres
    if(strlen($_POST['senha']) < 8){
        header('Location:../html/cadastro_usuarios.html?error=sizeSlow');
        exit;
    }
    //verifica se estão vazios e se o email é válido, e sim, eu fiz a verificação do email novamente
    if(!empty($nome) && !empty($email) && !empty($senha) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $stmt = $conn->prepare('SELECT COUNT(*) FROM usuarios WHERE nome = :nome OR email = :email'); //verifica se o usuário já existe
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $exists = $stmt->fetchColumn();
        if ($exists > 0){
            header("Location:../html/login.html?error=user_exists");
            exit();
        } else {
            //cadastra o novo usuário
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senha);
            if ($stmt->execute()){
                //armazena valores na sessão
                $_SESSION['username'] = $nome;
                $_SESSION['email'] = $email;
                $mensagem = urlencode("Aguarde, estamos te redirecionando...");
                $redirect = urlencode("../html/home.php?processo=sucesso");
                header("Location:../html/loading.html?msg=$mensagem&redirect=$redirect");
                exit();
            } else{
                header('Location:../html/cadastro_usuarios.html?error=erro_cadastro');
                exit();
            }
        }
    } else{
        header('Location:../html/cadastro_usuarios.html?error=campos_vazios');
        exit();
    }
}
?>