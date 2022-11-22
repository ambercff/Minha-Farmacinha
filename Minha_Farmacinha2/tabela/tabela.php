<head>
    <link rel="stylesheet" href="../css/tabela.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>

<div class="container">
    <table>
        <thead>
            <tr>
                <tr class="titulo">
                    <th colspan="8">Medicamentos cadastrados</th>
                </tr>
                
                <th>ID</th>
                <th>Nome Medicamento</th>
                <th>Farmácia</th>
                <th>Vencimento (AAAA-MM-DD)</th>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Estoque</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include "../banco/conexao.php";

                $BD=mysqli_query($conexao,"SELECT * FROM medicamentos ORDER BY data_validade DESC");

                if (mysqli_num_rows($BD) == 0) {
                    echo <<<HTML
                        <td> Não há nenhum medicamento no banco </td>
                    HTML;
                } else {
                    while ($linha = mysqli_fetch_assoc($BD)) {
                        $color;
                        $now = new DateTime();
                        $validade = new DateTime($linha['data_validade']);
                        $interval = $now->diff($validade);
                        
                        if ($interval->days <= 7 || $now > $validade) $color = '#b82121';
                        else if ($interval->days <= 31) $color = '#c99628';
                        else $color = '#307a11'; 
                        
                        echo "<tr class='linha' style='color: $color'>";
                        echo '<td>' . $linha['id_med'] . '</td>';
                        echo '<td>'. $linha['nome_med'] . '</td>';
                        echo '<td>'. $linha['farmacia'] . '</td>';
                        echo '<td>'. $linha['data_validade'] . '</td>';
                        echo '<td>'. $linha['tipo'] . '</td>';
                        echo '<td>'. $linha['descricao'] . '</td>';
                        echo '<td>'. $linha['estoque'] . '</td>';
                        echo '</tr>';
                    }
                }
            ?>

                <tr class="cores-tabela">
                    <th colspan="8">
                        <i class="fas fa-square-full" style="color: #b82121; border: 1px solid black"></i> 7 dias ou -
                        <span style="width: 20px; display: inline-block"></span>          
                        <i class="fas fa-square-full" style="color: #c99628; border: 1px solid black"></i> 1 mês ou - 
                        <span style="width: 20px; display: inline-block"></span>          
                        <i class="fas fa-square-full" style="color: #307a11; border: 1px solid black"></i> + de 1 mês 
                        <span style="width: 20px; display: inline-block"></span>         
                    </th>
                </tr>
        </tbody>
    </table>
</div>