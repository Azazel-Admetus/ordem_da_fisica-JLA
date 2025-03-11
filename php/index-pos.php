<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index-sec.css">
    <script src="https://kit.fontawesome.com/166d077dc6.js" crossorigin="anonymous"></script>
    <title>Ordem da Física</title>
</head>
<body>
    <header>
        <h1>Ordem da Física</h1>
        <nav>
            <ul>
                <li>
                    <a href="../html/formulario.html">Inscrição</a>
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
                    <a href='../html/feed_create.html'>Crie uma publicação</a>
                ";
            }
        ?>
    </section>
</body>
</html>