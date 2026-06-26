<?php

    require_once 'aula_12/ClassDAO.php';

    $unidadeMedida = '';

    if(isset($_POST['btnConverter'])){
        $unidadeMedida = trim($_POST['unidadeMedida']);
        $temperatura = trim($_POST['qtd']);
    
        $objDAO = new ClassDAO();
        $ret = $objDAO->Conversor($unidadeMedida, $temperatura);

        if($ret == 'error'){
            $msg_error = '<div style="font-weight: bold; color: #f40000;"> Preencher todos os campos obrigatórios!</div>';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_2.php" method="POST">
        <label>Selecione uma Unidade de Medida:</label>
        <Select name="unidadeMedida">
            <option value = ''>Selecione</option>
            <option value = '1'><?= $unidadeMedida == 1 ? 'selected' : null ?>>Celsius -> Fahrenheit</option>
            <option value = '2'><?= $unidadeMedida == 2 ? 'selected' : null ?>>Fahrenheit -> Celsius</option>
        </Select>
        <br>
        <label>Quantidade de Temperatura:</label>
        <input type="text" name="qtd" value="<?= isset($temperatura) ? $temperatura : '' ?>">
        <button name="btnConverter">Converter</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($ret) && $ret != '' && $ret != 'error'){ ?>
    <br>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $ret ?>">
    <?php } ?>
</body>
</html>