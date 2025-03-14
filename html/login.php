<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página onde os usuários fazem login para poder acessar o site.">
    <meta name="keywords" content="física, clube, clube escolar, aprenda física, imerse na física, JLA, Joaquim de Lima, Joaquim de Lima Avelino, ensino, ciência, ordem da física, estudos, clube de estudos, apreder física, login, acessar site">
    <meta name="author" content="Azazel Admetus">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="../img/img-logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">Ordem da Física</a></h1>
            <p>Faça login para poder comentar nas publicações feitas pelos integrantes do clube</p>
        </header>
        <form action="../php/login.php" method="POST" >
            <section>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </section>
            <footer>
                <p>Ainda não possui uma conta? Então <a href="cadastro.php">Cadastre-se</a> </p>
                <!-- <a href="#">Esqueceu sua senha?</a> -->
                <button type="submit">Enviar</button>
            </footer>
        </form>
    </main>
</body>
</html>
