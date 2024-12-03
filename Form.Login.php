<?php
include_once 'topo.php';
include_once 'menu.php';
?>

<div class="Login">
    <h2>Login</h2>
    <form action="Registro.Login/Login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br>

        <input type="submit" value="Entrar">
        <a href="Form.registro.php">Cadastre-se</a>
    </form>
</div>
<link rel="stylesheet" href="css/style.css">
<?php
include_once 'rodape.php';
?>