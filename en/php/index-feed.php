<?php
require_once "conn.php";
session_start();//inicia a sessão
//pegando o conteúdo do db
$stmt = $conn->prepare("SELECT titulo, conteudo, imagem, tipo_mime, admin_id, criado_data FROM post");
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
//verificando se há resultados
if(!$posts){
   echo "
   <h5 id='error-msg'>Nenhum conteúdo encontrado.</h5>";
   exit;
}
?>
<!-- inserindo na página html -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index-php.css">
    <script src="https://kit.fontawesome.com/166d077dc6.js" crossorigin="anonymous"></script>
    <title>Ordem da Física</title>
</head>
<body>
    <main>
        <section>
        
        </section>
        <?php foreach ($posts as $post): ?>
            <?php
            //extraindo os dados 
                $titulo = $post['titulo'] ? htmlspecialchars($post['titulo']) : "Sem título";
                $conteudo = nl2br(htmlspecialchars($post['conteudo']));
                $imagem = $post['imagem'];
                $tipo_mime = $post['tipo_mime'] ?? 'image/jpeg' ;
                $criado_data = date('d/m/Y', strtotime($post['criado_data']));
                $criado_hora = date('H:i', strtotime($post['criado_data']));
                ?>
                <section class="feed-pai">
                    <section class="feed" >
                        <?php if(!empty($post['titulo'])): ?>
                            <h3 class="titulo" ><?php echo $titulo; ?></h3>
                        <?php endif; ?>
                        <p class="conteudo" ><?= $conteudo; ?></p>
                        <?php if(!empty($imagem)): ?>
                            <img class="imagem"
                                src="data:<?php echo $tipo_mime; ?>;base64,<?php echo base64_encode($imagem);?>"
                                alt="Imagem da publicação feita pelo admin ao blog"
                            >   
                        <?php endif; ?>
                        <small>Publicado em: <?php echo $criado_data; ?> às <?php echo $criado_hora;?></small>
                    </section>
                </section>
         <?php endforeach; ?>
        <footer></footer>
    </main>
</body>
</html>