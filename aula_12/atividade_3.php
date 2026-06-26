<?php

    require_once 'aula_12/ClassDAO.php';

    if(isset($_POST['btnCalcular'])){
        $meses = trim($_POST['meses']);
        $ganhos = trim($_POST['ganhos']);
        $lucro = trim($_POST['lucro']);
        $perda = trim($_POST['perda']);
    
        $objDAO = new ClassDAO();
        $ret = $objDAO->CalcularSalario($meses, $ganhos, $lucro, $perda);

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
    <title>Atividade 3</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_3.php" method="POST">
        <label>Meses trabalhados:</label>
        <input type="text" name="meses" value="<?= isset($meses) ? $meses : '' ?>">
        <br>
        <label>Ganho Médio Mensal:</label>
        <input type="text" name="ganhos" value="<?= isset($ganhos) ? $ganhos : '' ?>">
        <br>
        <label>Percentual de Lucro Total (%):</label>
        <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>">
        <br>
        <label>Percentual de Perda Total (%):</label>
        <input type="text" name="perda" value="<?= isset($perda) ? $perda : '' ?>">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($ret) && $ret != '' && $ret != 'error'){ ?>
    <br>
    <strong>Resultado Final:</strong>
    <input disabled value=" <?= $ret ?>">
    <?php } ?>
</body>
</html>