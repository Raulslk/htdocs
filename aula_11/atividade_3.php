<?php

    require_once 'aula_11/function.php';

    if(isset($_POST['BtnEnviar'])){
        $numero1 = trim($_POST['vl1']);
        $numero2 = trim($_POST['vl2']);
        $numero3 = trim($_POST['vl3']);
        $numero4 = trim($_POST['vl4']);
        $numero5 = trim($_POST['vl5']);

        $ret = AtividadeTres($numero1, $numero2, $numero3, $numero4, $numero5);

        if($ret == 0){
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
<body style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>Digite o Primeiro Número:</label>
        <input type="text" name="vl1" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Digite o Segundo Número:</label>
        <input type="text" name="vl2" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <label>Digite o Terceiro Número:</label>
        <input type="text" name="vl3" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <label>Digite o Quarto Número:</label>
        <input type="text" name="vl4" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <label>Digite o Quinto Número:</label>
        <input type="text" name="vl5" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button type="submit" name="BtnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($ret) && $ret != 0 && $ret != ''){ ?>
        <br>
        <span>Resultado Final:</span>
        <input disabled value="<?= $ret ?>">
    <?php } ?>
</body>
</html>