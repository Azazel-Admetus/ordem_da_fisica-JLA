<?php
require_once "conn.php";

$stmt=$conn->prepare('CREATE TABLE POST (id INT AUTO_INCREMENT PRIMARY KEY, titulo VARCHAR(255), conteudo TEXT, imagem LONGBLOB, tipo_mime VARCHAR(50))');
if ($stmt->execute()){
    echo "tabela criada com sucesso";
    exit;
}else{
    echo "Erro ao tentar criar tabela";
    exit;
}