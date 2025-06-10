<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página onde os posts feitos pelos admin serão exibidos">
    <meta name="keywords" content="física, clube, clube escolar, aprenda física, imerse na física, JLA, Joaquim de Lima, Joaquim de Lima Avelino, ensino, ciência, ordem da física, estudos, clube de estudos, apreder física">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/index-sec.css">
    <script src="https://kit.fontawesome.com/166d077dc6.js" crossorigin="anonymous"></script>
    <title>Clube de Física - JLA</title>
</head>
<body>
    <header>
        <h1>Ordem da Física</h1>
        <nav>
            <ul>
                <li>
                    <a id='incricao' href="../html/formulario.php">Inscrição</a>
                </li>
                <li>
                    <a href="logout.php">
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