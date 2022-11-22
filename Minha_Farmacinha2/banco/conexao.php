<?php 
    $conexao = mysqli_connect('localhost', 'root', '', 'farmonkey');

    if (!$conexao) {
        echo 'Conexão não pôde ser efetuada';
        exit;
    }


?>