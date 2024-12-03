<?php
include_once 'topo.php';
include_once 'menu.php';
?>

<div class="registro">
    <h2>Registro</h2>
    <form action="Registro.Login/Registro.php" method="post">
        <label for="nome">Nome Completo:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required><br>

        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="CEP" placeholder="Digite seu CEP" required><br>

        <label for="rua">Rua:</label>
        <input type="text" id="rua" name="rua" placeholder="Digite sua rua" required><br>

        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" placeholder="Digite o número" required><br>

        <label for="complemento">Complemento:</label>
        <input type="text" id="complemento" name="complemento" placeholder="Opcional"><br>

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required><br>

        <input type="submit" value="Cadastrar">
    </form>
</div>
<link rel="stylesheet" href="css/style.css">
<?php
include_once 'rodape.php';
?>