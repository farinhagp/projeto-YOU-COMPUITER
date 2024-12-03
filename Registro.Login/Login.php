<?php

include_once "../config.inc.php";

 $email = $_REQUEST['email'];
 $senha = $_REQUEST['senha'];

 $sql = "SELECT * FROM cliente WHERE email='$email'
  AND senha='$senha'";

 $resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "Logado com sucesso.";
    $dados = mysqli_fetch_array($resultado);
    if ($senha == $dados['senha']) {
        // Login válido
        session_start();
        $_SESSION['user_id'] = $dados['id'];
        $_SESSION['nome'] = $dados['nome'];

        header("Location: ../index.php");
    }else{
        header("Location: ../Form.Login.php");

    }
} else {
    // Login inválido
    echo "Nome de usuário ou senha incorretos.";
    header("Location: ../Form.Login.php");
    exit();
}

mysqli_close($conexao);