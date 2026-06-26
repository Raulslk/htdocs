<?php

    require_once 'aula_11/function.php';

    if(isset($_POST['BtnEnviar'])){
        $salario = trim($_POST['salario']);
        $aumento = trim($_POST['aumento']);

        $resultado = CalcularAumentoSalario($salario, $aumento);

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
    <title>Atividade 2</title>
</head>
<body style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_2.php" method="POST">
        <label>Digite um Salário:</label>
        <input type="text" name="nome" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Digite um Aumento:</label>
        <input type="text" name="info" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button type="submit" name="BtnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($resultado) && $resultado != 0 && $resultado != ''){ ?>
        <br>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">
    <?php } ?>
    
</body>
</html>