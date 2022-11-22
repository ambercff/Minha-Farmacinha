<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> FARMONKEY </title>
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/menu.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    </head>

    <body> 
        <header> 
            <nav>

                <a class="logo" href="../usuariologado.php"> <img src = "../imagens/logo.png"></a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class=line3></div>
                </div>
                <ul class="nav-list">
                    <li><a href="../usuariologado.php"> Home </a></li>
                    <li><a href="tabela.php"> Menu </a></li>
                    <li><a href="../logout.php"> Sair </a></li>

                    <li>
                        <?php
                            include "../banco/conexao.php";
                            session_start();

                            if (!isset($_SESSION['email'])) {
                                #mandar o usuário logar
                                echo "<a href='#'>Entrar</a>";
                            
                            } else {
                                echo '<div class="pic-container">';

                                $foto_query = mysqli_query($conexao,"SELECT foto FROM usuario WHERE email = '{$_SESSION['email']}'");

                                $campos = mysqli_fetch_assoc($foto_query);

                                if ($campos['foto'] == "") {
                                    echo "<a href='#'><img class='ppic' src='../imagens/default.jpg'></a>";
                                } else {
                                    echo "<a href='#'><img class='ppic' src='../imagens/".$campos['foto']."'></a>";
                                }

                                echo "</div>";
                            }
                        ?>
                    </li>
                </ul>

            </nav>

            
        <div class="botoes-container">
            <ul>
                <a href="../medicamentos/cadastrarmed.html"><li class="botao">Cadastrar medicamento</li></a>

                <a href="../medicamentos/atualizarmed.html"><li class="botao">Atualizar medicamento</li></a>

                <a href="../medicamentos/excluirmed.html"><li class="botao">Excluir medicamento</li></a>
            </ul>
        </div>
            
        <div class="centralizar">
            <?php 
                include "tabela.php";
            ?>
        </div>
        
        <footer>
            <center> <p>Política de privacidade | &copy; 2021. Todos os direitos reservados</p> </center>
        </footer>

        <script src="mobile-navbar.js"></script>
    </body>