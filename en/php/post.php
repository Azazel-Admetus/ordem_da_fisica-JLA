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
        $stmt->bindValue(':titulo', $titulo_dado);
        $stmt->bindValue(':conteudo', $conteudo);
        $stmt->bindValue(':imagem', $imagem_dados);
        $stmt->bindValue(':tipo_mime', $tipo_mime);
        $stmt->bindValue(':admin_id', $admin_id);
        if($stmt->execute()){
            header('Location:../php/index-pos.php?feed=True');
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