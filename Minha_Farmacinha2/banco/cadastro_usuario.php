<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $tel = $_POST['telefone'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $foto = $_POST['foto'];
    $senha = base64_encode($_POST['senha']);
    
    $funcionou = mysqli_query($conexao, "INSERT INTO usuario VALUES ('$email', '$foto', '$tel', '$cep', '$nome', '$senha')");
    if (!$funcionou){
        header('location: ../mensagens/cadastrofalhou.html');
        exit;
    }

    header('location: ../mensagens/cadastrosucesso.html');

?>      