<?php
session_start();
$tipo_usuario = $_SESSION['user_tipo'];
if ($tipo_usuario == 'admin'){
    echo " 
        <a href='../html/feed_create.html'>Crie uma publicação</a>
    ";
}