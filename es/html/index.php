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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Club de Física - JLA</title>
</head>
<body>
    <main>
        <header>
            <h1>Orden de la Física</h1>
            <nav>
                <ul>
                    <li>
                        <a id='login' href="login.php">Iniciar sesión</a>
                    </li>
                    <li>
                        <a id='cadastro' href="cadastro.php">Regístrate</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section id='formulario'>
            <h2>¿Estás interesado en unirte al club de física? ¡Haz tu inscripción a través del siguiente enlace!</h2>
            <a href="formulario.php?">Inscríbete</a>
            <p>Es importante señalar que las inscripciones solo son válidas si eres estudiante de la escuela Joaquim de Lima Avelino en la ciudad de Ouro Preto do Oeste, Rondônia</p>
        </section>
        <section>
            <?php
                require_once "../php/index-feed.php";
            ?>
        </section>
        <footer>
            <form method="GET">
                <label>Cambiar idioma</label>
                <select name="idioma" id="mudar-idioma" onchange="this.form.submit()">
                    <option value="">Selecciona un idioma</option>
                    <option value="pt">Portugués</option>
                    <option value="en">Inglés</option>
                    <option value="jp">Japonés</option>
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