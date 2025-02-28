<?php
require_once "conn.php";
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SESSION['user_tipo'] == 'admin' ){
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    $admin_id = $_SESSION['user_id'];
    if(!empty($_FILES['imagem']['tmp_name'])){
        $imagem_dados = file_get_contents($_FILES['imagem']['tmp_name']);
        $tipo_mime = $_FILES['imagem']['type'];
    }else{
        $imagem_dados = null;
        $tipo_mime = null;
    }
    if(!empty($titulo)){
        $titulo_dado = $titulo;
    } else{
        $titulo_dado = null;
    }
    if(!empty($conteudo)){
        $stmt = $conn->prepare("INSERT INTO POST (titulo, conteudo, imagem, tipo_mime, admin_id) VALUES(:titulo, :conteudo, :imagem, :tipo_mime, :admin_id)");
        $stmt->bindParam(':titulo', $titulo_dado);
        $stmt->bindParam(':conteudo', $conteudo);
        $stmt->bindParam(':imagem', $imagem_dados);
        $stmt->bindParam(':tipo_mime', $tipo_mime);
        $stmt->bindParam(':admin_id', $admin_id);
        if($stmt->execute()){
            header('Location:../html/index.html?feed=True');
            exit;
        }else{
            header('Location:../html/index.html?feed=False');
            exit;
        }
    }else{
        header('Location:../html/index.html?error=conteudo+nao+encontrado');
        exit;
    }

}