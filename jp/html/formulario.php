<?php
$error_msg = '';
if(isset($_GET['error']) &&  $_GET['error'] == 'invalid_cod'){
    $error_msg = "無効なコードです。正しく入力したか、クラブメンバーに連絡してください。";
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="物理学に焦点を当てた学習クラブに参加するために登録してください。">
    <meta name="keywords" content="物理学クラブ, 物理学, 物理の秩序, 登録, 物理の秩序に登録">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/form.css">
    <title>フォーム</title>
</head>
<body>
    <main>
        <?php if($error_msg): ?>
            <p style="color: red; font-weight:bold;"><?php echo htmlspecialchars($error_msg);?></p>
        <?php endif;?>
        <header id='main_header'>
            <h1>物理オーダー</h1>
        </header>
        <div>
            <form  action="../php/formulario_php.php" method="POST" >
                <header>
                    <h2>物理学クラブに参加するために今すぐ申し込んでください！</h2>
                    <p>すべての項目を正確に記入してください。フォームが送信されると、私たちは手動であなたの申し込みを確認し、7営業日以内にメールで返信します。</p>
                </header>
                <section>
                    <section id='section-separacao'>
                        <div id='nome-email'>
                            <label for="nome">氏名:</label>
                            <input type="text" id="nome" name="nome" placeholder="氏名を入力" required>
                            <label for="email">メールアドレス:</label>
                            <input type="email" id="email" name="email" placeholder="メールアドレスを入力" required>
                        </div>
                        <div id='turno-tag'>
                            <h4>希望の時間帯を選んでください</h4>
                            <label for="matutino">午前</label>
                            <input type="radio" id="matutino" value="matutino" onclick="turma_matutino_selecao()" name="turno">
                            <label for="vespertino">午後</label>
                            <input type="radio" id="vespertino" name="turno" onclick="turma_vespertino_selecao()" value="vespertino">
                            <select name="turma" id="turma_matutino">
                                <option value="primeiro_M1">1ºM1</option>
                                <option value="primeiro_M2">1ºM2</option>
                                <option value="primeiro_M3">1ºM3</option>
                                <option value="segundo_M1">2ºM1</option>
                                <option value="segundo_M2">2ºM2</option>
                                <option value="segundo_M3">2ºM3</option>
                                <option value="segundo_M4">2ºM4</option>
                                <option value="terceiro_M1">3ºM1</option>
                                <option value="terceiro_M2">3ºM2</option>
                                <option value="terceiro_M3">3ºM3</option>
                                <option value="terceiro_M4">3ºM4</option>
                            </select>
                            <select name="turma" id="turma_vespertino">
                                <option value="primeiro_T1">1ºT1</option>
                                <option value="primeiro_T2">1ºT2</option>
                                <option value="primeiro_T3">1ºT3</option>
                                <option value="primeiro_T4">1ºT4</option>
                                <option value="segundo_T1">2ºT1</option>
                                <option value="segundo_T2">2ºT2</option>
                                <option value="segundo_T3">2ºT3</option>
                                <option value="segundo_T4">2ºT4</option>
                                <option value="terceiro_T1">3ºT1</option>
                                <option value="terceiro_T2">3ºT2</option>
                                <option value="terceiro_T3">3ºT3</option>
                                <option value="terceiro_T4">3ºT4</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <section id='cod'>
                    <!-- codigo de acesso: Uqmx8vpl -->
                            <h4>フォームを送信するにはアクセスコードをご入力ください</h4>
                            <label for="codigo">アクセスコード:</label>
                            <input type="text" id="codigo" name="codigo" placeholder="アクセスコードを入力" required>
                        </section>
                    </section>
                </section>
                <footer>
                    <button type="submit">送信</button>
                </footer>
            </form>
        </div>
        <footer></footer>
    </main>
    <script src="../js/form.js"></script>
</body>
</html>