<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Log In</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">The Physics Order</a></h1>
            <p>Log in to comment on posts made by club members</p>
        </header>
        <form action="../php/login.php" method="POST" >
            <section>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <label for="senha">Password:</label>
                <input type="password" id="senha" name="senha" placeholder="Enter your password" required>
            </section>
            <footer>
                <p>Don't have an account yet? Then <a href="cadastro.php">Sign Up</a> </p>
                <!-- <a href="#">Esqueceu sua senha?</a> -->
                <button type="submit">Submit</button>
            </footer>
        </form>
    </main>
</body>
</html>