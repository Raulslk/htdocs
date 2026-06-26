<?php

    require_once 'aula_12/ClassDAO.php';

    $gas = '';

    if(isset($_POST['btnEnviar'])){
        $gas = trim($_POST['combustivel']);
        $litros = trim($_POST['qtd']);
    
        $objDAO = new ClassDAO();
        $ret = $objDAO->CalcularCombustivel($gas, $litros);

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
    <title>Atividade 1 - POO</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_1.php" method="POST">
        <label>Selecione o Tipo do Combustível:</label>
        <Select name="combustivel">
            <option value = ''>Selecione</option>
            <option value = '1'><?= $gas == 1 ? 'selected' : null ?>>Etanol</option>
            <option value = '2'><?= $gas == 2 ? 'selected' : null ?>>Gasolina</option>
            <option value = '3'><?= $gas == 3 ? 'selected' : null ?>>Diesel</option>
        </Select>
        <br>
        <label>Informe a Quantidade de Litros:</label>
        <input type="text" name="qtd" value="<?= isset($litros) ? $litros : '' ?>">
        <button name="btnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($ret) && $ret != 0 && $ret != 'error'){ ?>
    <br>
    <strong>Resultado Final:</strong>
    <input disabled value="R$ <?= number_format($ret, 2, ',', '.') ?>">
    <?php } ?>
</body>
</html>