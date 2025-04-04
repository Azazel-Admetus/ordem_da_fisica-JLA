<?php
require_once "conn.php";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $codigo_de_acesso = $_POST['codigo'];
    $arquivo = 'codigo.csv';
    if(($handle = fopen($arquivo, "r")) !== FALSE ){
        $dado =trim( fgets($handle));
            fclose($handle);
            if($codigo_de_acesso == $dado){
                $nome = trim($_POST['nome']);
                $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
                $turma = trim($_POST['turma']);
                if(!empty($nome) && !empty($email) && !empty($turno) && !empty($turma)){
                    $stmt = $conn->prepare("INSERT INTO recrutamento (nome, email, turma) VALUES (:nome, :email, :turma)");
                    $stmt->bindParam(':nome', $nome);
                    $stmt->bindParam(':email', $email);
                    $stmt->bindParam(':turma', $turma);
                    if($stmt->execute()){
                        header('Location:../html/formulario.php?answer=True');
                        exit;
                    }
                }
            }else{
                header('Location:../html/formulario.php?error=invalid_cod');
                exit;
            }

        }
    }
