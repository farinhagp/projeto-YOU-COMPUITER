<?php

    include_once("../config,inc.php");

    $id = $_REQUEST['id'];

    $sql = mysqli_query($conexao, "DELETE FROM contato WHERE id = $id");

    if($sql)
        echo "<h2> Mensagem apagada </h2>";
    else
        echo "<h2> Errou paizao </h2>";