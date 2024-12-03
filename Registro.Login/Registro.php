<?php

include_once "../config.inc.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cep = $_POST['CEP'];
$Rua = $_POST['rua'];
$Numero = $_POST['numero'];
$Complemento = $_POST['complemento'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO cliente (nome, email, senha, CEP, rua, numero, complemento, contato) VALUES ('$nome', '$email', '$senha', '$cep', '$Rua', '$Numero', '$Complemento', '$telefone')";

$query = mysqli_query($conexao, $sql);

if ($query) {
    echo "<h2> Cadastro feito com sucesso.</h2>";
    header("Location: ../index.php");
    exit(); // Encerra o script para evitar problemas após o redirecionamento
} else {
    die("Mensagem não enviada");
}

mysqli_close($conexao);
