<?php
include_once 'topo.php';
include_once 'menu.php';
?>
<form action="Registro.Login/Registro.php" method="post"><br>
Nome Completo: <input type="text" name="nome" required><br>
Email: <input type="text" name="email" required><br>
Senha: <input type="text" name="senha" required><br>
CEP: <input type="number" name="CEP" required><br>
Rua: <input type="text" name="rua" required><br>
Numero: <input type="number" name="numero" required><br>
Complemento: <input type="text" name="complemento"><br>
Telefone: <input type="number" name="telefone" required><br>
<input type="submit" value="Cadastrar">
<?php
include_once 'rodape.php';
?>