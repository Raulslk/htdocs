<?php
    
    $resultadocalc= '';
    $numero_1 = '';
    $numero_2 = '';
    $numero_3 = '';
    $numero_4 = '';
    $numero_5 = '';

    if(isset($_POST['btnCalculo'])){
        $numero_1 = trim($_POST['valor_1']);
        $numero_2 = trim($_POST['valor_2']);
        $numero_3 = trim($_POST['valor_3']);
        $numero_4 = trim($_POST['valor_4']);
        $numero_5 = trim($_POST['valor_5']);
        
        if($numero_1 == '' || $numero_2 == '' || $numero_3 == '' || $numero_4 == '' || $numero_5 == ''){
            // echo '<strong style="color: #f40000;"> Preencher todos os campos obrigatórios!</strong>'//
            $msg_notificar = '<strong style="color: #f40000;"> Preencher todos os campos obrigatórios!</strong>';
        }
        else{
            $doisprimeiros = ($numero_1 * 2) + ($numero_2 * 2);
            $resultadocalc = $doisprimeiros + $numero_3 + $numero_4 + $numero_5;
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1ª Atividade</title>
</head>
<body style="font-family: Tahoma;">
    <h2>Calcular Valores</h2>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->
    
    <form action="atividade_1.php" method="POST">
        <p>
            <label>1º Valor:</label>
            <input type="number" name="valor_1" value="<?= $numero_1 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>2º Valor:</label>
            <input type="number" name="valor_2" value="<?= $numero_2 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>3º Valor:</label>
            <input type="number" name="valor_3" value="<?= $numero_3 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>4º Valor:</label>
            <input type="number" name="valor_4" value="<?= $numero_4 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <label>5º Valor:</label>
            <input type="number" name="valor_5" value="<?= $numero_5 ?>" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btnCalculo">Calcular</button>
        </p>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $resultadocalc ?>">
</body>
</html>