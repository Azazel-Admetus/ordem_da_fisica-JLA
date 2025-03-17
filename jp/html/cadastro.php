<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ユーザー登録ページ">
    <meta name="keywords" content="登録, サインアップ">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>登録</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">物理オーダー</a></h1>
            <p>クラブのメンバーと投稿をやり取りするには登録してください</p>
        </header>
        <form action="../php/cadastro.php" method="POST" >
            <section>
                <label id="email-label" for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" placeholder="メールアドレスを入力" required>
                <label id="nome_usuario" for="username">ユーザー名:</label>
                <input type="text" id="username" name="username" placeholder="ユーザー名を作成" required>
                <label id="senha-label" for="senha">パスワード</label>
                <input type="password" id="senha" name="senha" placeholder="パスワードを作成" required>
            </section>
            <footer>
                <p>すでにアカウントをお持ちですか？ならば <a href="login.php">ログイン</a>してください</p>
                <button type="submit">送信</button>
            </footer>
        </form>
    </main>
</body>
</html>