<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header('location: index.php');
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> FARMONKEY </title>
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body> 
        <header> 
            <nav>

                <a class="logo" href="index.php"> <img src = "imagens/logo.png"></a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class=line3></div>
                </div>
                <ul class="nav-list">
                    <li><a href="/index.php"> Home </a></li>
                    <li><a href="#equipe"> Equipe </a></li>
                    <li><a href="tabela/listar.php"> Menu </a></li>
                    <li><a href="logout.php"> Sair </a></li>

                    <li>
                        <?php
                            include "banco/conexao.php";

                            if (!isset($_SESSION['email'])) {
                               
                                echo "<a href='#'>Entrar</a>";
                            
                            } else {
                                echo '<div class="pic-container">';

                                $foto_query = mysqli_query($conexao,"SELECT foto FROM usuario WHERE email = '{$_SESSION['email']}'");

                                $campos = mysqli_fetch_assoc($foto_query);

                                if ($campos['foto'] == "") {
                                    echo "<a href='#'><img class='ppic' src='imagens/default.jpg'></a>";
                                } else {
                                    echo "<a href='#'><img class='ppic' src='imagens/".$campos['foto']."'></a>";
                                }

                                echo "</div>";
                            }
                        ?>
                    </li>
                </ul>

            </nav>
        </header>
        <main class="hero">
            <div class="hero-container">
                <?php
                    include "banco/bem-vindo.php";
                ?>
            </div>
        </main>

        <h1> Dicas de Compras </h1>

        <div class="farmacias">
            <a href="#"> <img src="imagens/drogaraia.png" width="300px"> </a>

            <a href="#"> <img src="imagens/drogariasp.jpg" width="300px"> </a>

            <a href="#"> <img src="imagens/drogasil.png" width="300px"> </a>

            <a href="#"> <img src="imagens/ultrafarma.png" width="300px"> </a>
        </div>

        <h1> Sobre </h1>

        <div class="sobre" id="equipe"> 
            <div class="cartao">  
                <div class="sobre-foto">
                    <img src="imagens/math1.jpeg">
                </div>
                <p>Matheus</p>
            </div>

            <div class="cartao">
                <div class="sobre-foto">
                    <img src="imagens/amber1.png">
                </div>
                <p>Amber</p>
            </div>

            <div class="cartao">
                <div class="sobre-foto">
                    <img src="imagens/maria1.jpeg">
                </div>
                <p>Maria</p>
            </div>

            <div class="cartao">
                <div class="sobre-foto">
                    <img src="imagens/mariana1.jpeg">
                </div>
                <p>Mariana</p>
            </div>
                
        </div>

        <center class="contador">
        <?php 
            include "contador/contador.php";
        ?>
        </center>
        
        <footer>
            <center> <p>Política de privacidade | &copy; 2021. Todos os direitos reservados</p> </center>
        </footer>

        <script src="mobile-navbar.js"></script>
    </body>