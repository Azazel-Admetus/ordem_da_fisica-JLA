<?php 
require_once 'conn.php';
require_once 'error_log.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //pegando os valores do formulário e sanitizando
    $nome = trim(strip_tags($_POST['nome']));
    $nome = mb_substr($nome, 0, 100);

    $email = trim(strip_tags($_POST['email']));
    $email = mb_substr($email, 0, 100);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $senhaBruta = trim($_POST['senha']);
    //verifico se a senha tem mais de 8 caracteres
    if(strlen($_POST['senha']) < 8){
        header('Location:../html/cadastro_usuarios.html?error=sizeSlow');
        exit;
    }
    //verifica se estão vazios e se o email é válido, e sim, eu fiz a verificação do email novamente
    if(!empty($nome) && !empty($email) && !empty($senhaBruta) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $senha = password_hash($senhaBruta, PASSWORD_DEFAULT);
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