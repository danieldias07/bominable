<?php
    $servidor = "Bominable";
    $usuario = "root";
    $senha = "";
    $dbname = "cadastroB";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);

    if(!$conexao){
        die("Houve um erro: ".mysqli_connect_errno());
    }
?>