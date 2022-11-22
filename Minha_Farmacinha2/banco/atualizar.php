<?php

include 'conexao.php';

$id_p = $_POST['idprincipal'];
$nome = $_POST['nomemed'];
$farm = $_POST['farmacia'];
$val = $_POST['validade'];
$tipo = $_POST['tipo'];
$desc = $_POST['descricao'];
$est = $_POST['estoque'];

$alterar = "UPDATE medicamentos SET nome_med = '$nome', farmacia = '$farm', data_validade = '$val', tipo = '$tipo', descricao = '$desc', estoque = '$est' WHERE id_med = $id_p ";

$retorno = mysqli_query($conexao, $alterar);

if($retorno){
    include "../mensagens/atualizarsucesso.html";
} else {
    include "../mensagens/atualizarerro.html";
}
?>

