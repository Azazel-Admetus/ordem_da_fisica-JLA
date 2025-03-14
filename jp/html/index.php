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
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>物理部 - JLA</title>
</head>
<body>
    <main>
        <header>
            <h1>物理オーダー</h1>
            <nav>
                <ul>
                    <li>
                        <a id='login' href="login.php">ログイン</a>
                    </li>
                    <li>
                        <a id='cadastro' href="cadastro.php">登録</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section id='formulario'>
            <h2>物理部に参加したいですか？下のリンクから登録してください</h2>
            <a href="formulario.php?">登録する</a>
            <p>登録は、Rondônia州Ouro Preto do Oeste市のJoaquim de Lima Avelinoo学校の生徒に限られていますので、ご了承ください。</p>
        </section>
        <section>
            <?php
                require_once "../php/index-feed.php";
            ?>
        </section>
        <footer>
            <form method="GET">
                <label>言語を変更</label>
                <select name="idioma" id="mudar-idioma" onchange="this.form.submit()">
                    <option value="">言語を選んでください</option>
                    <option value="pt">ポルトガル語</option>
                    <option value="en">英語</option>
                    <option value="es">スペイン語</option>
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