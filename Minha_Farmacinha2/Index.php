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
                    <li><a href="index.php"> Home </a></li>
                    <li><a href="#equipe"> Equipe </a></li>
                    <li><a href="login/login.html"> Login </a></li>
                </ul>

            </nav>
        </header>
        <main class="hero">
            <div class="hero-container">
                <h1> Cadastre Seus Remédios </h1>
                <h2> Faça uma conta em nosso site! </h2>
            </div>
        </main>

        <h1> Dicas de Compras </h1>

        <div class="farmacias">
            <a href="https://www.drogaraia.com.br"> <img src="imagens/drogaraia.png" width="300px"> </a>

            <a href="https://www.drogariasaopaulo.com.br"> <img src="imagens/drogariasp.jpg" width="300px"> </a>

            <a href="https://www.drogasil.com.br"> <img src="imagens/drogasil.png" width="300px"> </a>

            <a href="https://www.ultrafarma.com.br"> <img src="imagens/ultrafarma.png" width="300px"> </a>
        </div>

        <h1> Equipe </h1>

        <div class="sobre" id="equipe"> 
            <div class="cartao">  
                <div>
                    <img src="imagens/math1.jpeg" width="150px">
                </div>
                <p> Matheus </p>
                <p> Desenvolvedor </p>
            </div>

            <div class="cartao">
                <div>
                    <img src="imagens/amber1.png" width="150px">
                </div>
                <p> Amber </p>
                <p> Desenvolvedora </p>
            </div>

            <div class="cartao">
                <div>
                    <img src="imagens/maria1.jpeg" width="150px">
                </div>
                <p> Maria </p>
                <p> Desenvolvedora </p>
            </div>

            <div class="cartao">
                <div>
                    <img src="imagens/mariana1.jpeg" width="150px">
                </div>
                <p> Mariana </p>
                <p> Desenvolvedora </p>
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