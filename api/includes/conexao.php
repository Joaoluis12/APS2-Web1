<?php

    $server = '127.0.0.1';
    $user = 'root';
    $pass = '';
    $bd = 'exercicio_loja';

    $conexao = mysqli_connect($server,$user,$pass,$bd);

    if(!$conexao){
        echo "<h1>Não houve conexão com o banco de dados";
        die();
    }

?>