<?php
$error_msg = '';
if(isset($_GET['error']) &&  $_GET['error'] == 'invalid_cod'){
    $error_msg = "Invalid code. Please check if you typed it correctly or contact the club members.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/form.css">
    <title>FORM</title>
</head>
<body>
    <main>
        <?php if($error_msg): ?>
            <p style="color: red; font-weight:bold;"><?php echo htmlspecialchars($error_msg);?></p>
        <?php endif;?>
        <header id='main_header'>
            <h1>The Physics Order</h1>
        </header>
        <div>
            <form  action="../php/formulario_php.php" method="POST" >
                <header>
                    <h2>Sign up now to join the Physics Club!</h2>
                    <p>Fill in all fields correctly. After the form is submitted, we will manually review your request and reply via email within 7 business days.</p>
                </header>
                <section>
                    <section id='section-separacao'>
                        <div id='nome-email'>
                            <label for="nome">Full name:</label>
                            <input type="text" id="nome" name="nome" placeholder="Enter your full name" required>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div id='turno-tag'>
                            <h4>Which shift are you in?</h4>
                            <label for="matutino">Morning</label>
                            <input type="radio" id="matutino" value="matutino" onclick="turma_matutino_selecao()" name="turno">
                            <label for="vespertino">Afternoon</label>
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
                            <h4>Enter the access code to submit the form</h4>
                            <label for="codigo">Access Code:</label>
                            <input type="text" id="codigo" name="codigo" placeholder="Enter the access code" required>
                        </section>
                    </section>
                </section>
                <footer>
                    <button type="submit">Submit</button>
                </footer>
            </form>
        </div>
        <footer></footer>
    </main>
    <script src="../js/form.js"></script>
</body>
</html>