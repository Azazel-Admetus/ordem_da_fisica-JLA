<?php
if(isset($_GET['idioma'])){
    $idioma = $_GET['idioma'];
    if($idioma == 'pt'){
        header('Location:../../html/index.php');
        exit;

    }else{
        header("Location:../../$idioma/html/index.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Homepage of the website. From here, you can log in, register, sign up, and read posts. Additionally, you can change the language at the footer of the site.">
    <meta name="keywords" content="homepage, index, physics, club, physics club, order of physics, order, jla, joaquim de lima avelino, joaquim de lima, order of physics jla, order of physics - JLA, orderofphysicsjla">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <title>Physics Club - JLA</title>
</head>
<body>
    <main>
        <header>
            <h1>The Physics Order</h1>
            <nav>
                <ul>
                    <li>
                        <a id='login' href="login.php">Log In</a>
                    </li>
                    <li>
                        <a id='cadastro' href="cadastro.php">Sign Up</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section id='formulario'>
            <h2>Interested in joining the Physics Club? Sign up now using the link below!</h2>
            <a href="formulario.php?">Sign Up</a>
            <p>Please note that registrations are only valid if you are a student of Joaquim de Lima Avelino School from the city of Ouro Preto do Oeste, Rondônia. </p>
        </section>
        <section>
            <?php
                require_once "../php/index-feed.php";
            ?>
        </section>
        <footer>
            <form method="GET">
                <label>Change Language</label>
                <select name="idioma" id="mudar-idioma" onchange="this.form.submit()">
                    <option value="">Choose a language</option>
                    <option value="pt">Portuguese</option>
                    <option value="es">Spanish</option>
                    <option value="jp">Japanese</option>
                </select>
            </form>
            <section>
                <img id='jla' src="../img/LOGO MENOR JLA PNG.png">
            </section>
        </footer>
    </main>
    <script>
        document.getElementById('mudar-idioma').addEventListener('change', function() {
            if (this.value) {
                this.form.submit();
            }
        });
    </script>
</body>
</html>