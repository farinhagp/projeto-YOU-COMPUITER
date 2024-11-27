<?php
include_once 'topo.php';
include_once 'menu.php';
?>

<div class="contato">
    <h1>Entre em Contato</h1>
    <form action="Enviar_msg.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        
        <input type="submit" value="Enviar">
    </form>
</div>

<link rel="stylesheet" href="css/style.css">

<?php
include_once 'rodape.php';
?>
