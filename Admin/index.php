<?php

    include_once "sessao.php";

    if (logado()) {
        echo "<p>Bem-vindo <b>$_SESSION[usuario]</b>!</p>";
    } else {
        header("Location: Form.login.Adm.php");
        exit();
    }

?>

<h1>Painel Admin</h1>
<nav>
    
    <a href="#"> Página Inicial </a> |
    <a href="?pg=lista.msg">Lista de Mensagens </a> |
  
</nav>
<?php

if(empty($_SERVER['QUERY_STRING'])){
    $var = "conteudo.php";
    include_once($var);
}else{
    $pg = $_GET['pg'];
    include_once("$pg.php");
}
