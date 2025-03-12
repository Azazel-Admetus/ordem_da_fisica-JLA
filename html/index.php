<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Clube de Física - JLA</title>
</head>
<body>
    <main>
        <header>
            <h1>Ordem da Física</h1>
            <nav>
                <ul>
                    <li>
                        <a href="login.html">Login</a>
                    </li>
                    <li>
                        <a href="cadastro.html">Cadastre-se</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section id='formulario'>
            <h2>Tem interesse em entrar para o clube de física? Faça já a sua inscrição por meio do link abaixo!</h2>
            <a href="formulario.php?">Se Inscreva</a>
            <p>Vale ressaltar que as incrições somente são válidas se você for um aluno da escola Joaquim de Lima Avelino da cidade de Ouro Preto do Oeste, Rondônia</p>
        </section>
        <section>
            <?php
                require_once "../php/index-feed.php";
            ?>
        </section>
        <footer></footer>
    </main>
</body>
</html>