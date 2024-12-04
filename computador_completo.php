<?php
session_start();
include_once 'topo.php';
include_once 'menu.php';

// Função para adicionar ao carrinho
if (isset($_POST['add_to_cart'])) {
    $product = [
        'name' => $_POST['name'],
        'price' => $_POST['price']
    ];
    $_SESSION['cart'][] = $product; // Adiciona o produto na sessão do carrinho
    echo "<script>alert('Produto adicionado ao carrinho!');</script>";
}
?>

<div class="computador-completo">
    <h1>Computadores Completos</h1>
    
    <!-- Produto 1 -->
    <div class="produto">
        <img src="imagens/51E7qwxJYiL._AC_SX522_.jpg" alt="Computador Gamer">
        <h2>Computador Gamer Pro</h2>
        <p>Máquina completa com hardware de alta performance para jogos.</p>
        <form method="POST" action="">
            <input type="hidden" name="name" value="Computador Gamer Pro">
            <input type="hidden" name="price" value="5999.90">
            <button type="submit" name="add_to_cart" class="botao-compra">Adicionar ao Carrinho</button>
        </form>
    </div>

    <!-- Produto 2 -->
    <div class="produto">
        <img src="imagens/51WiCpYhTnL._AC_SX522_.jpg" alt="Computador Escritório">
        <h2>Computador Escritório</h2>
        <p>Ideal para tarefas de escritório e produtividade diária.</p>
        <form method="POST" action="">
            <input type="hidden" name="name" value="Computador Escritório">
            <input type="hidden" name="price" value="2999.90">
            <button type="submit" name="add_to_cart" class="botao-compra">Adicionar ao Carrinho</button>
        </form>
    </div>
</div>

<link rel="stylesheet" href="css/style.css">

<?php
include_once 'rodape.php';
?>
