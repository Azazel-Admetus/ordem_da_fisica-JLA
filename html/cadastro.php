<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="página de cadastro de usuário">
    <meta name="keywords" content="cadastre-se, fazer cadastro">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">Ordem da Física</a></h1>
            <p>Cadastre-se para poder interagir com os membros do clube pelas publicações</p>
        </header>
        <form action="../php/cadastro.php" method="POST" >
            <section>
                <label id="email-label" for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                <label id="nome_usuario" for="username">Nome de Usuário:</label>
                <input type="text" id="username" name="username" placeholder="Crie um nome de usuário" required>
                <label id="senha-label" for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
            </section>
            <footer>
                <p>Já possui uma conta? Faça <a href="login.php">Login</a></p>
                <button type="submit">Enviar</button>
            </footer>
        </form>
    </main>
</body>
</html>