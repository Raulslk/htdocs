<?php
    
    $ganho_total= '';
    $lucro_calculo=  '';
    $lucro_janeiro= '';
    $lucro_fevereiro= '';
    $lucro_marco= '';
    $lucro_abril= '';
    $lucro_maio= '';
    $lucro_junho= '';
    $lucro_julho= '';
    $lucro_agosto= '';
    $lucro_setembro= '';
    $lucro_outubro= '';
    $lucro_novembro= '';
    $lucro_dezembro= '';
    $perca_total= '';

    if(isset($_POST['btnCalcular'])){
        $numero_1 = ltrim(rtrim($_POST['valor_1']));
        $numero_2 = trim($_POST['valor_2']);
        $numero_3 = trim($_POST['valor_3']);
        $numero_4 = trim($_POST['valor_4']);
        $numero_5 = trim($_POST['valor_5']);
        $numero_6 = trim($_POST['valor_6']);
        $numero_7 = trim($_POST['valor_7']);
        $numero_8 = trim($_POST['valor_8']);
        $numero_9 = trim($_POST['valor_9']);
        $numero_10 = trim($_POST['valor_10']);
        $numero_11 = trim($_POST['valor_11']);
        $numero_12 = trim($_POST['valor_12']);
        $numero_13 = ltrim(rtrim($_POST['valor_13']));
        $numero_14 = trim($_POST['valor_14']);
        $numero_15 = trim($_POST['valor_15']);
        $numero_16 = trim($_POST['valor_16']);
        $numero_17 = trim($_POST['valor_17']);
        $numero_18 = trim($_POST['valor_18']);
        $numero_19 = trim($_POST['valor_19']);
        $numero_20 = trim($_POST['valor_20']);
        $numero_21 = trim($_POST['valor_21']);
        $numero_22 = trim($_POST['valor_22']);
        $numero_23 = trim($_POST['valor_23']);
        $numero_24 = trim($_POST['valor_24']);

     
        
        
        $lucro_janeiro= $numero_1 - $numero_13;
        $lucro_fevereiro= $numero_2 - $numero_14;
        $lucro_marco= $numero_3 - $numero_15;
        $lucro_abril= $numero_4 - $numero_16;
        $lucro_maio= $numero_5 - $numero_17;
        $lucro_junho= $numero_6 - $numero_18;
        $lucro_julho= $numero_7 - $numero_19;
        $lucro_agosto= $numero_8 - $numero_20;
        $lucro_setembro= $numero_9 - $numero_21;
        $lucro_outubro= $numero_10 - $numero_22;
        $lucro_novembro= $numero_11 - $numero_23;
        $lucro_dezembro= $numero_12 - $numero_24;
        $ganho_total = $numero_1 + $numero_2 +  $numero_3 + $numero_4 + $numero_5 + $numero_6 + $numero_7 + $numero_8 + $numero_9 + $numero_10 + $numero_11 + $numero_12;
        $perca_total= $numero_13 + $numero_14 +  $numero_15 + $numero_16 + $numero_17 + $numero_18 + $numero_19 + $numero_20 + $numero_21 + $numero_22 + $numero_23 + $numero_24;
        $lucro_total = $ganho_total - $perca_total;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Lucro anual:</h2>
    
    <form action="ex1_calc_ano.php" method="POST">
        <p>
            <label>Digite os ganhos em cada Mês:</label>
        </p>
        <p>
            <label>Ganho no Mês de Janeiro:</label>
            <input type="number" name="valor_1" value="<?= $numero_1 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Fevereiro:</label>
            <input type="number" name="valor_2" value="<?= $numero_2 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Março:</label>
            <input type="number" name="valor_3" value="<?= $numero_3 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Abril:</label>
            <input type="number" name="valor_4" value="<?= $numero_4 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Maio:</label>
            <input type="number" name="valor_5" value="<?= $numero_5 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Junho:</label>
            <input type="number" name="valor_6" value="<?= $numero_6 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Julho:</label>
            <input type="number" name="valor_7" value="<?= $numero_7 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Agosto:</label>
            <input type="number" name="valor_8" value="<?= $numero_8 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Setembro:</label>
            <input type="number" name="valor_9" value="<?= $numero_9 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Outubro:</label>
            <input type="number" name="valor_10" value="<?= $numero_10 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Novembro:</label>
            <input type="number" name="valor_11" value="<?= $numero_11 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Ganho no Mês de Dezembro:</label>
            <input type="number" name="valor_12" value="<?= $numero_12 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite as Percas em cada Mês:</label>
        </p>
        <p>
            <label>Perca no Mês de Janeiro:</label>
            <input type="number" name="valor_13" value="<?= $numero_13 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Fevereiro:</label>
            <input type="number" name="valor_14" value="<?= $numero_14 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Março:</label>
            <input type="number" name="valor_15" value="<?= $numero_15 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Abril:</label>
            <input type="number" name="valor_16" value="<?= $numero_16 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Maio:</label>
            <input type="number" name="valor_17" value="<?= $numero_17 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Junho:</label>
            <input type="number" name="valor_18" value="<?= $numero_18 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Julho:</label>
            <input type="number" name="valor_19" value="<?= $numero_19 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Agosto:</label>
            <input type="number" name="valor_20" value="<?= $numero_20 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Setembro:</label>
            <input type="number" name="valor_21" value="<?= $numero_21 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Outubro:</label>
            <input type="number" name="valor_22" value="<?= $numero_22 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Novembro:</label>
            <input type="number" name="valor_23" value="<?= $numero_23 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Perca no Mês de Dezembro:</label>
            <input type="number" name="valor_24" value="<?= $numero_24 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalcular">Calcular</button> 
        </p>
    </form>
    <p>
        <strong>Lucro no Mês de Janeiro:</strong>
        <input disabled value="<?= $lucro_janeiro ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Fevereiro:</strong>
        <input disabled value="<?= $lucro_fevereiro ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Março:</strong>
        <input disabled value="<?= $lucro_marco ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Abril:</strong>
        <input disabled value="<?= $lucro_abril ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Maio:</strong>
        <input disabled value="<?= $lucro_maio ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Junho:</strong>
        <input disabled value="<?= $lucro_junho ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Julho:</strong>
        <input disabled value="<?= $lucro_julho ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Agosto:</strong>
        <input disabled value="<?= $lucro_agosto ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Setembro:</strong>
        <input disabled value="<?= $lucro_setembro ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Outubro:</strong>
        <input disabled value="<?= $lucro_outubro ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Novembro:</strong>
        <input disabled value="<?= $lucro_novembro ?>">
    </p>
    <p>
        <strong>Lucro no Mês de Dezembro:</strong>
        <input disabled value="<?= $lucro_dezembro ?>">
    </p>
    <p>
        <strong>Soma total dos Ganhos:</strong>
        <input disabled value="<?= $ganho_total ?>">
    </p>
    <p>
        <strong>Soma total das Percas:</strong>
        <input disabled value="<?= $perca_total ?>">
    </p>
    <p>
        <strong>Cálculo total do Lucro:</strong>
        <input disabled value="<?= $lucro_calculo ?>">
    </p>
</body>
</html>