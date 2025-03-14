<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>ログイン</title>
</head>
<body>
    <main>
        <header>
            <h1><a href="../php/index-feed.php">物理オーダー</a></h1>
            <p>クラブのメンバーの投稿にコメントするにはログインしてください</p>
        </header>
        <form action="../php/login.php" method="POST" >
            <section>
                <label for="email">メールアドレス:</label>
                <input type="email" id="email" name="email" placeholder="メールアドレスを入力" required>
                <label for="senha">パスワード:</label>
                <input type="password" id="senha" name="senha" placeholder="パスワードを入力" required>
            </section>
            <footer>
                <p>まだアカウントをお持ちでないですか？それならば <a href="cadastro.php">登録</a>してください</p>
                <!-- <a href="#">Esqueceu sua senha?</a> -->
                <button type="submit">送信</button>
            </footer>
        </form>
    </main>
</body>
</html>