<?php

    require_once 'aula_11/function.php';

    if(isset($_POST['BtnEnviar'])){
        $vl1 = trim($_POST['vl1']);
        $vl2 = trim($_POST['vl2']);
        $vl3 = trim($_POST['vl3']);
        $vl4 = trim($_POST['vl4']);
        $vl5 = trim($_POST['vl5']);
        $vl6 = trim($_POST['vl6']);
        $vl7 = trim($_POST['vl7']);
        $vl8 = trim($_POST['vl8']);
        $vl9 = trim($_POST['vl9']);
        $vl10 = trim($_POST['vl10']);

        $resultado = CalcularValores($vl1, $vl2, $vl3, $vl4, $vl5, $vl6, $vl7, $vl8, $vl9, $vl10);

        if($resultado == 0){
            $msg_error = '<div style="font-weight: bold; color: #f40000;"> Preencher todos os campos obrigatórios!</div>';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_6.php" method="POST">
        <label>Digite o 1º Valor:</label>
        <input type="text" name="vl1" value="<?= isset($vl1) ? $vl1 : '' ?>">
        <br>
        <label>Digite o 2º Valor:</label>
        <input type="text" name="vl2" value="<?= isset($vl2) ? $vl2 : '' ?>">
        <br>
        <label>Digite o 3º Valor:</label>
        <input type="text" name="vl3" value="<?= isset($vl3) ? $vl3 : '' ?>">
        <br>
        <label>Digite o 4º Valor:</label>
        <input type="text" name="vl4" value="<?= isset($vl4) ? $vl4 : '' ?>">
        <br>
        <label>Digite o 5º Valor:</label>
        <input type="text" name="vl5" value="<?= isset($vl5) ? $vl5 : '' ?>">
        <br>
        <label>Digite o 6º Valor:</label>
        <input type="text" name="vl6" value="<?= isset($vl6) ? $vl6 : '' ?>">
        <br>
        <label>Digite o 7º Valor:</label>
        <input type="text" name="vl7" value="<?= isset($vl7) ? $vl7 : '' ?>">
        <br>
        <label>Digite o 8º Valor:</label>
        <input type="text" name="vl8" value="<?= isset($vl8) ? $vl8 : '' ?>">
        <br>
        <label>Digite o 9º Valor:</label>
        <input type="text" name="vl9" value="<?= isset($vl9) ? $vl9 : '' ?>">
        <br>
        <label>Digite o 10º Valor:</label>
        <input type="text" name="vl10" value="<?= isset($vl10) ? $vl10 : '' ?>">
        <br>
        <button type="submit" name="BtnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($resultado) && $resultado != 0 && $resultado != ''){ ?>
        <br>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= $resultado ?>">
    <?php } ?>

</body>
</html>