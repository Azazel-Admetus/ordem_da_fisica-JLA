<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Regístrate</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">Orden de la Física</a></h1>
            <p>Regístrate para poder interactuar con los miembros del club a través de las publicaciones</p>
        </header>
        <form action="../php/cadastro.php" method="POST" >
            <section>
                <label id="email-label" for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                <label id="nome_usuario" for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" placeholder="Crea un nombre de usuario" required>
                <label id="senha-label" for="senha">Contraseña:</label>
                <input type="password" id="senha" name="senha" placeholder="Crea una contraseña" required>
            </section>
            <footer>
                <p>¿Ya tienes una cuenta? Haz <a href="login.php">Login</a></p>
                <button type="submit">Enviar</button>
            </footer>
        </form>
    </main>
</body>
</html>