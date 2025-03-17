<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página donde se muestran las publicaciones realizadas por los administradores">
    <meta name="keywords" content="física, club, club escolar, aprende física, sumérgete en la física, JLA, Joaquim de Lima, Joaquim de Lima Avelino, educación, ciencia, orden de la física, estudios, club de estudios, aprender física">
    <meta name="author" content="Azazel Admetus">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/index-sec.css">
    <script src="https://kit.fontawesome.com/166d077dc6.js" crossorigin="anonymous"></script>
    <title>Club de Física - JLA</title>
</head>
<body>
    <header>
        <h1>Orden de la Física</h1>
        <nav>
            <ul>
                <li>
                    <a id='incricao' href="../html/formulario.php">Inscríbete</a>
                </li>
                <li>
                    <a href="../html/index.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <?php
            require_once "index-feed.php";
            $user_tipo = $_SESSION['user_tipo'];
            if($user_tipo == 'admin'){
                echo "
                    <footer style=color:black;>
                        <a id='link' href='../html/feed_create.php'>Crie uma publicação</a>
                    </footer>";
            }
        ?>
    </section>
</body>
</html>