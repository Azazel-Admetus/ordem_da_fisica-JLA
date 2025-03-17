<?php
session_start();
$error_msg = '';
if(!isset($_SESSION['user_tipo'] )|| $_SESSION['user_tipo'] != 'admin' ){
    $error_msg = "Acesso negado. Você precisa ser um administrador para acessar esta página.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
    <title>Criar Publicações</title>
</head>
<body>
    <main>
        <?php if($error_msg): ?>
            <p class='error'><?php echo htmlspecialchars($error_msg); ?></p>
        <?php else: ?>
            <header>
                <h1>Crie publicações</h1>
            </header>
            <form action="../php/post.php" method="POST" enctype="multipart/form-data" >
                <section>
                    <label for="titulo">Título (opcional)</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Defina um titulo">

                    <label for="conteudo" >Conteúdo</label>
                    <textarea id="conteudo" name="conteudo" placeholder="Digite aqui o conteúdo do post" rows="5" required></textarea>

                    <label for="imagem">Publique uma imagem (opcional)</label>
                    <input type="file" id="imagem" name="imagem">
                </section>
                <footer>
                    <button type="submit">Enviar</button>
                </footer>
            </form>
        <?php endif; ?>
    </main>
</body>
</html>