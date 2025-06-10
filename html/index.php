<?php
if(isset($_GET['idioma'])){
    $idioma = $_GET['idioma'];
    header("Location:../$idioma/html/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página inicial do site. Daqui você poderá fazer login, se registrar, se inscrever e ler os posts. Além disso, também é possível você mudar de idioma no rodapé do site">
    <meta name="keywords" content="inicial, index, física, clube, clube de física, ordem da física, ordem, jla, joaquim de lima avelino, joaquim de lima, ordem da fisica jla, ordem da fisica - JLA, ordemdafisicajla">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/index.css">
    <title>Clube de Física </title>
</head>
<body>
    <main>
        <header>
            <h1>Ordem da Física</h1>
            <nav>
                <ul>
                    <li>
                        <a id='login' href="login.php">Login</a>
                    </li>
                    <li>
                        <a id='cadastro' href="cadastro.php">Cadastre-se</a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- <section id='formulario'>
            <h2>Tem interesse em entrar para o clube de física? Faça já a sua inscrição por meio do link abaixo!</h2>
            <a href="formulario.php?">Se Inscreva</a>
            <p>Vale ressaltar que as incrições somente são válidas se você for um aluno da escola Joaquim de Lima Avelino da cidade de Ouro Preto do Oeste, Rondônia</p>
        </section> -->
        <section>
            <?php
                require_once "../php/index-feed.php";
            ?>
        </section>
        <footer>
            <form method="GET">
                <label>Mude o idioma</label>
                <select name="idioma" id="mudar-idioma" onchange="this.form.submit()">
                    <option value="">Escolha um idioma</option>
                    <option value="en">Inglês</option>
                    <option value="es">Espanhol</option>
                    <option value="jp">Japonês</option>
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
    </main>
</body>
</html>
