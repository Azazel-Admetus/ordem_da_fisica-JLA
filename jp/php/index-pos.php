<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="管理者が行った投稿が表示されるページです">
    <meta name="keywords" content="物理, クラブ, 学校クラブ, 物理を学ぶ, 物理に没頭, JLA, Joaquim de Lima, Joaquim de Lima Avelino, 教育, 科学, 物理の秩序, 学習, 学習クラブ, 物理を学ぼう">
    <meta name="author" content="Azazel Admetus">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="../img/img-logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/index-sec.css">
    <script src="https://kit.fontawesome.com/166d077dc6.js" crossorigin="anonymous"></script>
    <title>物理部 - JLA</title>
</head>
<body>
    <header>
        <h1>物理オーダー</h1>
        <nav>
            <ul>
                <li>
                    <a id='incricao' href="../html/formulario.php">申し込み</a>
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