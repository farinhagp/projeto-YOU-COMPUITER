<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div id="menu">
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="pecas.php">Peças</a></li>
        <li><a href="computador_completo.php">Computador Completo</a></li>
        <li><a href="entre_em_contato.php">Fale Conosco</a></li>
        <li><a href="carrinho.php">Carrinho</a></li>

        <?php if (!isset($_SESSION['user_id'])): ?>
            <li><a href="Form.Login.php">Login</a></li>
        <?php else: ?>
            <li>Bem-vindo, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</li>
            <li><a href="logout.php">Logout</a></li>
        <?php endif; ?>
    </ul>
</div>

<link rel="stylesheet" href="css/menu.css">