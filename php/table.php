<?php
require_once "conn.php";

$stmt=$conn->prepare('CREATE TABLE recrutamento (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL UNIQUE, turma VARCHAR(10) NOT NULL)');
if ($stmt->execute()){
    echo "tabela criada com sucesso";
    exit;
}else{
    echo "Erro ao tentar criar tabela";
    exit;
}