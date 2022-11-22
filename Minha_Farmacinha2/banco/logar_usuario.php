<?php 
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$res = mysqli_query($conexao, "SELECT * FROM Usuario WHERE email = '$email'");

if (!$res) {
    echo "Comando incorreto";
    exit;
}

if (mysqli_num_rows($res) == 0) {
    include "../mensagens/errologin.html";
    exit;
}

$usuario = mysqli_fetch_assoc($res);

$senhaDecoded = base64_decode($usuario["Senha"]);


if ($senhaDecoded != $senha){
    include "../mensagens/errologin.html";
    exit;
}

session_start();
$_SESSION['email'] = $usuario['email'];
$_SESSION['nomeUsuario'] = $usuario['nomeUsuario'];
$_SESSION['foto'] = $usuario['foto'];
$_SESSION['cep'] = $usuario['cep'];
$_SESSION['telefone'] = $usuario['telefone'];

header('location: ../usuariologado.php');
?>