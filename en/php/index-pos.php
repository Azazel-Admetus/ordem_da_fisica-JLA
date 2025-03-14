<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page where posts made by admins are displayed">
    <meta name="keywords" content="physics, club, school club, learn physics, immerse in physics, JLA, Joaquim de Lima, Joaquim de Lima Avelino, education, science, order of physics, studies, study club, learn physics">
    <meta name="author" content="Azazel Admetus">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="../img/img-logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/index-sec.css">
    <script src="https://kit.fontawesome.com/166d077dc6.js" crossorigin="anonymous"></script>
    <title>Physics Club - JLA</title>
</head>
<body>
    <header>
        <h1>The Physics Order</h1>
        <nav>
            <ul>
                <li>
                    <a id='incricao' href="../html/formulario.php">Sign Up</a>
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