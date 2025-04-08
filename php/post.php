<?php
require_once "conn.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id']) && $_SESSION['user_tipo'] == 'admin' ){
    $titulo = isset($_POST['titulo']) ? htmlspecialchars(trim(($_POST['titulo']))) : null;
    $conteudo = isset($_POST['conteudo']) ? htmlspecialchars(trim($_POST['conteudo'])) : null;
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
        $stmt = $conn->prepare("INSERT INTO post (titulo, conteudo, imagem, tipo_mime, admin_id) VALUES(:titulo, :conteudo, :imagem, :tipo_mime, :admin_id)");
        $stmt->bindValue(':titulo', $titulo_dado);
        $stmt->bindValue(':conteudo', $conteudo);
        $stmt->bindValue(':imagem', $imagem_dados);
        $stmt->bindValue(':tipo_mime', $tipo_mime);
        $stmt->bindValue(':admin_id', $admin_id);
        if($stmt->execute()){
            header('Location:../php/index-pos.php?feed=True');
            exit;
        }else{
            header('Location:../html/index.php?feed=False');
            exit;
        }
    }else{
        header('Location:../html/index.php?error=conteudo+nao+encontrado');
        exit;
    }

}