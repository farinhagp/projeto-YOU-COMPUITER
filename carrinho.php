<?php
session_start();
include_once 'topo.php';
include_once 'menu.php';
include_once "/config.inc.php";

// Remover item do carrinho
if (isset($_POST['remove'])) {
    $index = $_POST['index'];
    unset($_SESSION['cart'][$index]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
    echo "<script>alert('Peça removida do carrinho!');</script>";
}

// Finalizar compra e salvar no banco
if (isset($_POST['finalizar'])) {
    if (!empty($_SESSION['cart'])) {
        $total = 0;
        $conteudo = "Resumo da Compra\n";
        $conteudo .= "-----------------------------\n";
        $produtos = [];

        foreach ($_SESSION['cart'] as $item) {
            $conteudo .= "Produto: " . $item['name'] . " - Preço: R$ " . number_format($item['price'], 2, ',', '.') . "\n";
            $produtos[] = ['name' => $item['name'], 'price' => $item['price']];
            $total += $item['price'];
        }

        $conteudo .= "-----------------------------\n";
        $conteudo .= "Total: R$ " . number_format($total, 2, ',', '.') . "\n";

        // Salvar arquivo
        $arquivo = 'compra_' . date('Ymd_His') . '.txt';
        file_put_contents($arquivo, $conteudo);

        // Inserir no banco de dados
        $stmt = $conn->prepare("INSERT INTO compras (produto, preco, total) VALUES (?, ?, ?)");
        foreach ($produtos as $produto) {
            $stmt->bind_param("sdd", $produto['name'], $produto['price'], $total);
            $stmt->execute();
        }
        $stmt->close();

        // Limpar o carrinho
        unset($_SESSION['cart']);
        echo "<script>alert('Compra finalizada! Resumo salvo no arquivo e no banco de dados.');</script>";
    } else {
        echo "<script>alert('O carrinho está vazio!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link para o CSS -->
</head>
<body>
    <div class="carrinho-container">
        <h2>Seu Carrinho</h2>
        <table class="carrinho-itens">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
            <?php if (!empty($_SESSION['cart'])): ?>
                <?php foreach ($_SESSION['cart'] as $index => $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td>R$ <?= htmlspecialchars($item['price']) ?></td>
                        <td>
                            <form method="POST" action="">
                                <input type="hidden" name="index" value="<?= $index ?>">
                                <button type="submit" name="remove" class="botao-remover">Remover</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="carrinho-vazio">Seu carrinho está vazio.</td>
                </tr>
            <?php endif; ?>
        </table>
        <div class="carrinho-resumo">
            <h3>Resumo da Compra</h3>
            <p>Total: R$ 
                <?php
                $total = 0;
                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        $total += $item['price'];
                    }
                }
                echo number_format($total, 2, ',', '.');
                ?>
            </p>
        </div>
        <a href="index.php" class="botao-comprar">Continuar Comprando</a>
        <form method="POST" action="">
            <button type="submit" name="finalizar" class="botao-finalizar">Finalizar Compra</button>
        </form>
    </div>
</body>
</html>

<?php
include_once 'rodape.php';
$conn->close();
?>
