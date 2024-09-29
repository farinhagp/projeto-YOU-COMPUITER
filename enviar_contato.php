<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    
    $enviado = true; 

    if ($enviado) {
        
        echo "<h1>Mensagem enviada com sucesso!</h1>";
        echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
        echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Mensagem:</strong> " . nl2br(htmlspecialchars($mensagem)) . "</p>";
        echo "<p>Obrigado pelo seu contato!</p>";
        echo '<a href="index.php">Retornar à Página Inicial</a>';
    } else {
        echo "<h1>Houve um erro ao enviar a mensagem. Tente novamente mais tarde.</h1>";
    }
} else {
    echo "<h1>Método inválido.</h1>";
}
?>
