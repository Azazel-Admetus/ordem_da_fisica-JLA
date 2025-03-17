<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página donde el usuario puede iniciar sesión para acceder al sitio.">
    <meta name="keywords" content="inicio de sesión, iniciar sesión, acceder, entra">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/login.css">
    <title>Iniciar sesión</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">Orden de la Física</a></h1>
            <p>Inicia sesión para poder comentar en las publicaciones realizadas por los miembros del club</p>
        </header>
        <form action="../php/login.php" method="POST" >
            <section>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Introduce tu correo electrónico" required>
                <label for="senha">Contraseña:</label>
                <input type="password" id="senha" name="senha" placeholder="Introduce tu contraseña" required>
            </section>
            <footer>
                <p>¿Aún no tienes una cuenta? Entonces <a href="cadastro.php">Regístrate</a> </p>
                <!-- <a href="#">Esqueceu sua senha?</a> -->
                <button type="submit">Enviar</button>
            </footer>
        </form>
    </main>
</body>
</html>