<?php

include 'conexao.php';

$id = $_POST['id'];

$pesquisa = "DELETE FROM medicamentos WHERE id_med = '$id'";

$retorno = mysqli_query($conexao, $pesquisa);

if(mysqli_affected_rows($conexao) == 0){
    include "../mensagens/excluidofalhou.html";
} else {
    include "../mensagens/excluidosucesso.html";

}
?>