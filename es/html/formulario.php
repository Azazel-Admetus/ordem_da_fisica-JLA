<?php
$error_msg = '';
if(isset($_GET['error']) &&  $_GET['error'] == 'invalid_cod'){
    $error_msg = "Código inválido. Verifique si lo escribió correctamente o póngase en contacto con los miembros del club.";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Regístrate para poder participar del club de estudios enfocado en física.">
    <meta name="keywords" content="club de física, física, orden de la física, inscripción, inscribirse en la orden de la física">
    <meta name="author" content="Azazel Admetus">
    <link rel="icon" href="../img/logo.jpeg" type="image/jpeg">
    <link rel="stylesheet" href="../css/form.css">
    <title>FORMULARIO</title>
</head>
<body>
    <main>
        <?php if($error_msg): ?>
            <p style="color: red; font-weight:bold;"><?php echo htmlspecialchars($error_msg);?></p>
        <?php endif;?>
        <header id='main_header'>
            <h1>Orden de la Física</h1>
        </header>
        <div>
            <form  action="../php/formulario_php.php" method="POST" >
                <header>
                    <h2>¡Regístrate ahora para unirte al Club de Física!</h2>
                    <p>Rellena todos los campos correctamente. Después de que se envíe el formulario, revisaremos manualmente tu solicitud y te responderemos por correo electrónico en un plazo de 7 días hábiles.</p>
                </header>
                <section>
                    <section id='section-separacao'>
                        <div id='nome-email'>
                            <label for="nome">Nombre completo:</label>
                            <input type="text" id="nome" name="nome" placeholder="Ingresa tu nombre completo" required>
                            <label for="email">Correo electrónico:</label>
                            <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                        </div>
                        <div id='turno-tag'>
                            <h4>¿En qué turno estás?</h4>
                            <label for="matutino">Mañana</label>
                            <input type="radio" id="matutino" value="matutino" onclick="turma_matutino_selecao()" name="turno">
                            <label for="vespertino">Tarde</label>
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
                            <h4>Ingresa el código de acceso para enviar el formulario</h4>
                            <label for="codigo">Código de acceso:</label>
                            <input type="text" id="codigo" name="codigo" placeholder="Ingresa el código de acceso" required>
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
    <script src="../js/form.js"></script>
</body>
</html>