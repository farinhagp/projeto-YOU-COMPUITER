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

<div class="pecas">
    <h1>Peças de Hardware</h1>

    <!-- Produto 1 -->
    <div class="produto">
        <img src="imagens/51D3DrDmwkL.__AC_SX300_SY300_QL70_ML2_.jpg" alt="Processador">
        <h2>Processador Ryzen 7</h2>
        <p>Alta performance para jogos e aplicações pesadas.</p>
        <form method="POST" action="">
            <input type="hidden" name="name" value="Processador Ryzen 7">
            <input type="hidden" name="price" value="1499.90">
            <button type="submit" name="add_to_cart" class="botao-compra">Adicionar ao Carrinho</button>
        </form>
    </div>

    <!-- Produto 2 -->
    <div class="produto">
        <img src="imagens/81QyMksmunL.__AC_SY300_SX300_QL70_ML2_.jpg" alt="Placa Mãe">
        <h2>Placa Mãe AORUS</h2>
        <p>Compatível com processadores AMD de última geração.</p>
        <form method="POST" action="">
            <input type="hidden" name="name" value="Placa Mãe AORUS">
            <input type="hidden" name="price" value="799.90">
            <button type="submit" name="add_to_cart" class="botao-compra">Adicionar ao Carrinho</button>
        </form>
    </div>
</div>

<link rel="stylesheet" href="css/style.css">

<?php
include_once 'rodape.php';
?>
