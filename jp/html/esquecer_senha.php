<?php
require_once "../php/conn.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = trim($_POST['email']);
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();
    if($user){
        $token = bin2hex(random_bytes(32));
        $expira = date("Y-m-d H:i:s", strtotime("+1 hour"));
        $stmt= $conn->prepare("UPDATE usuarios SET token= :token, token_expira=:expira, WHERE email = :email");
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(":token_expira", $expira);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de identidade</title>
</head>
<body>
    <form></form>
</body>
</html>