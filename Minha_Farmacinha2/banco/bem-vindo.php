<div class="container theme-showcase" role="main">
<?php
include 'conexao.php';

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$hora = date('H');
if (($hora >= 0) AND ($hora < 6)) {
$mensagem = "Boa madrugada";
}else if (($hora >= 6) AND ($hora < 12)) {
$mensagem = "Bom dia";
}else if (($hora >= 12) AND ($hora < 18)) {
$mensagem = "Boa tarde";
}else {
$mensagem = "Boa noite";
}
echo '<div class="page-header">';

echo "<h1>".$mensagem.", ".$_SESSION['nomeUsuario']."</h1><p>";
echo strftime("<p>Hoje é %A, %d de %B de %Y ",strtotime($data)); ?>
<script type="text/javascript" src="js/standardclock1.js"></script>
</div>
</div>