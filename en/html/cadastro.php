<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User registration page">
    <meta name="keywords" content="sign up, register">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Sign Up</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">The Physics Order</a></h1>
            <p>Sign up to interact with club members through posts</p>
        </header>
        <form action="../php/cadastro.php" method="POST" >
            <section>
                <label id="email-label" for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <label id="nome_usuario" for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Create a username" required>
                <label id="senha-label" for="senha">Password:</label>
                <input type="password" id="senha" name="senha" placeholder="Create a password" required>
            </section>
            <footer>
                <p>Already have a account?<a href="login.php">Log In</a></p>
                <button type="submit">Submit</button>
            </footer>
        </form>
    </main>
</body>
</html>