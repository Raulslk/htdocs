<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['valor1']);
        $valor2 = trim($_POST['valor2']);
        $valor3 = trim($_POST['valor3']);
        $valor4 = trim($_POST['valor4']);
        $valor5 = trim($_POST['valor5']);

        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencha todos os campos obrigatórios!</div>';
        }else{
            header("location: pagina_2.php?num1=$numero_1&num2=$numero_2&num3=$numero_3&num4=$numero_4&num5=$numero_5");
            exit;
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
    <form action="pagina_1.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Digite o Terceiro Valor:</label>
        <input type="text" name="valor3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Digite o Quarto Valor:</label>
        <input type="text" name="valor4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Digite o Quinto Valor:</label>
        <input type="text" name="valor5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <button type="submit" name="btnCalcular">VER RESULTADO</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->
</body>
</html>