<?php

    require_once 'aula_11/function.php';

    if(isset($_POST['BtnEnviar'])){
        $janeiro = trim($_POST['janeiro']);
        $fevereiro = trim($_POST['fevereiro']);
        $marco = trim($_POST['marco']);
        $abril = trim($_POST['abril']);
        $maio = trim($_POST['maio']);
        $junho = trim($_POST['junho']);
        $julho = trim($_POST['julho']);
        $agosto = trim($_POST['agosto']);
        $setembro = trim($_POST['setembro']);
        $outubro = trim($_POST['outubro']);
        $novembro = trim($_POST['novembro']);
        $dezembro = trim($_POST['dezembro']);

        $resultado = SomarMeses($janeiro, $fevereiro, $marco, $abril, $maio, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro);

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
    <title>Atividade 4</title>
</head>
<body style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_4.php" method="POST">
        <label>Digite um Valor de Janeiro:</label>
        <input type="text" name="janeiro" value="<?= isset($janeiro) ? $janeiro : '' ?>">
        <br>
        <label>Digite um Valor de Fevereiro:</label>
        <input type="text" name="fevereiro" value="<?= isset($fevereiro) ? $fevereiro : '' ?>">
        <br>
        <label>Digite um Valor de Março:</label>
        <input type="text" name="marco" value="<?= isset($marco) ? $marco : '' ?>">
        <br>
        <label>Digite um Valor de Abril:</label>
        <input type="text" name="abril" value="<?= isset($abril) ? $abril : '' ?>">
        <br>
        <label>Digite um Valor de Maio:</label>
        <input type="text" name="maio" value="<?= isset($maio) ? $maio : '' ?>">
        <br>
        <label>Digite um Valor de Junho:</label>
        <input type="text" name="junho" value="<?= isset($junho) ? $junho : '' ?>">
        <br>
        <label>Digite um Valor de Julho:</label>
        <input type="text" name="julho" value="<?= isset($julho) ? $julho : '' ?>">
        <br>
        <label>Digite um Valor de Agosto:</label>
        <input type="text" name="agosto" value="<?= isset($agosto) ? $agosto : '' ?>">
        <br>
        <label>Digite um Valor de Setembro:</label>
        <input type="text" name="setembro" value="<?= isset($setembro) ? $setembro : '' ?>">
        <br>
        <label>Digite um Valor de Outubro:</label>
        <input type="text" name="outubro" value="<?= isset($outubro) ? $outubro : '' ?>">
        <br>
        <label>Digite um Valor de Novembro:</label>
        <input type="text" name="novembro" value="<?= isset($novembro) ? $novembro : '' ?>">
        <br>
        <label>Digite um Valor de Dezembro:</label>
        <input type="text" name="dezembro" value="<?= isset($dezembro) ? $dezembro : '' ?>">
        <br>
        <button type="submit" name="BtnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($resultado) && $resultado != 0 && $resultado != ''){ ?>
        <br>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= number_format($resultado, 2, ',', '.') ?>">
    <?php } ?>

</body>
</html>