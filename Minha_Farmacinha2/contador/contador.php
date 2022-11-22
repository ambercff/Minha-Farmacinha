<?php
    $caminho = fopen("contador/contador.txt", "r+");
    $leitor = fread($caminho,10);
    $contador = intval($leitor) + 1;

    echo "Você é o visitante número: $contador";
    
    fseek($caminho,0);
    fwrite($caminho, $contador);
    fclose($caminho);
?>