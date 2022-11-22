<?php
    include 'conexao.php';

    $id = $_POST['idmed'];
    $nome = $_POST['nomemed'];
    $farm = $_POST['farmacia'];
    $val = $_POST['validade'];
    $tipo = $_POST['tipo'];
    $desc = $_POST['descricao'];
    $est = $_POST['estoque'];
    
    $funcionou = mysqli_query($conexao, "INSERT INTO medicamentos VALUES ('$id','$nome', '$farm', '$val', '$tipo', '$desc', '$est')");
    if (!$funcionou){
        echo "Cadastro não efetuado";
        exit;
    }

    header('location: ../mensagens/medsucesso.html');

?>      