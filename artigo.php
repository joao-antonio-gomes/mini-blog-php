<?php

require 'config.php';
include_once 'src/Artigo.php';
$artigoQuery = new Artigo($pdo);
$artigo = $artigoQuery->getArtigoById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="container">
    <h1>
        <?php echo $artigo[0]['titulo']; ?>
    </h1>
    <p>
        <?php echo $artigo[0]['conteudo']; ?>
    </p>
    <div>
        <a class="botao botao-block" href="/index.php">Voltar</a>
    </div>
</div>
</body>

</html>