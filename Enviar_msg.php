<?php

    include_once("config.inc.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    $query = mysqli_query($conexao,$sql);

    if($query)
        echo"<h2> Mensagem enviada com sucesso.</h2>";
    else
        die("Mensagem não enviada");

    mysqli_close($conexao);