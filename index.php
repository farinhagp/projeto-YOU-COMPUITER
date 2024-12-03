<?php
include_once 'topo.php';
include_once 'menu.php';
?>

<body>
  <div class="sidebar">
  <ul>
    <?php
    $categorias = ["Computadores completos "];
    foreach ($categorias as $categoria) 
        echo "<li><a href='computador_completo.php'>{$categoria}</a></li>";
    
    $categorias = ["Processadores"];
    foreach ($categorias as $categoria) 
        echo "<li><a href='pecas.php'>{$categoria}</a></li>";

   $categorias = ["Placas de Videos"];
    foreach ($categorias as $categoria) {
        echo "<li><a href='pecas.php'>{$categoria}</a></li>";
    }
    ?>
  </ul>
</div>
</body>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/topo.css">
   
</head>



<div class="principal">
    <h1>Bem-vindo ao nosso site!</h1>
    <p>Aqui você encontra as melhores peças de hardware e computadores completos.</p>
</div>

<link rel="stylesheet" href="css/style.css">

<?php
include_once 'rodape.php';
?>
