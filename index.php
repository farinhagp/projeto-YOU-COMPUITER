<?php
session_start();
include_once 'topo.php';
include_once 'menu.php';
?>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="sidebar">
        <ul>
            <?php
            $categorias = [
                "Computadores completos" => "computador_completo.php",
                "Processadores" => "pecas.php",
                "Placas de Vídeo" => "pecas.php"
            ];

            foreach ($categorias as $nome => $link) {
                echo "<li><a href='{$link}'>{$nome}</a></li>";
            }
            ?>
        </ul>
    </div>

    <div class="principal">
        <h1>Bem-vindo ao nosso site!</h1>
        <p>Aqui você encontra as melhores peças de hardware e computadores completos.</p>
    </div>

    <?php include_once 'rodape.php'; ?>
</body>
