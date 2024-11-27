<h2> Mensagens recebidas </h2>

<?php
    include_once("../config.inc.php");

    $sql = mysqli_query($conexao,"SELECT * FROM contatos");

    while($tabela = mysqli_fetch_array($sql));{
        echo "Nome: $tabela[nome] <br>";
        echo "Email: $tabela[email]<br>";
        echo "Mensagem: $tabela[mensagem]<br>";
        echo "<a href=?pg=excluir&id=$tabela[id]>x</a><br>";
        echo "<hr>";
    }
    if(!$sql){
        echo "Vazio.";
    }
    mysqli_close($conexao);