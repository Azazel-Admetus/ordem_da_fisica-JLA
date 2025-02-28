<?php
require_once "conn.php";

$stmt=$conn->prepare('CREATE TABLE POST (id INT AUTO_INCREMENT PRIMARY KEY,
                    titulo VARCHAR(255), 
                    conteudo TEXT NOT NULL, 
                    imagem LONGBLOB, 
                    tipo_mime VARCHAR(50), 
                    admin_id INT NOT NULL, 
                    criado_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
                    update_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
                    FOREIGN KEY (admin_id) REFERENCES usuarios(id) ON DELETE CASCADE)');
if ($stmt->execute()){
    echo "tabela criada com sucesso";
    exit;
}else{
    echo "Erro ao tentar criar tabela";
    exit;
}