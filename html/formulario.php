<?php
$error_msg = '';
if(isset($_GET['error']) &&  $_GET['error'] == 'invalid_cod'){
    $error_msg = "Código inválido. Verifique se digitou corretamente ou entre em contato com os membros do clube.";
}
$codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
$readonly = !empty($codigo) ? 'readonly' : 'required';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faça sua inscrição para poder participar do clube de estudos focado em física.">
    <meta name="keywords" content="clube de física, física, ordem da física, inscrição, inscrever ordem da física ">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/form.css">
    <title>FORMULÁRIO</title>
</head>
<body>
    <main>
        <?php if($error_msg): ?>
            <p style="color: red; font-weight:bold;"><?php echo htmlspecialchars($error_msg);?></p>
        <?php endif;?>
        <header id='main_header'>
            <h1>Ordem da Física</h1>
        </header>
        <div>
            <form  action="../php/formulario_php.php" method="POST" >
                <header>
                    <h2>Faça já a sua inscrição-zzzz para poder participar do Clube de Física!</h2>
                    <p>Preencha todos os campos corretamente. Após o formulário ser enviado, analisaremos manualmente sua solicitação e daremos uma resposta via email em até 7 dias úteis.</p>
                </header>
                <section>
                    <section id='section-separacao'>
                        <div id='nome-email'>
                            <label for="nome">Nome completo:</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                        </div>
                        <div id='turno-tag'>
                            <h4>Qual seu turno?</h4>
                            <label for="matutino">Matutino</label>
                            <input type="radio" id="matutino" value="matutino" name="turno">
                            <label for="vespertino">Vespertino</label>
                            <input type="radio" id="vespertino" name="turno" value="vespertino">
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
                            <h4>Digite o código de acesso para poder enviar o formulário</h4>
                            <label for="codigo">Código de acesso:</label>
                            <input type="text" id="codigo" name="codigo" placeholder="Digite o código de acesso" value="<?php echo htmlspecialchars($codigo);?>" <?php echo $readonly;?>>
                        </section>
                    </section>
                </section>
                <footer>
                    <button type="submit">Enviar</button>
                </footer>
            </form>
        </div>
        <footer></footer>
    </main>
    </script> -->
</body>
</html>
