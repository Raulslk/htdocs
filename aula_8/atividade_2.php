<?php
    
    $resultadocalc= '';
    $numero_1 = '';
    $numero_2 = '';
    $numero_3 = '';

    if(isset($_POST['btnCalculo'])){
        $numero_1 = trim($_POST['valor_1']);
        $numero_2 = trim($_POST['valor_2']);
        $numero_3 = trim($_POST['valor_3']);

    
        if($numero_1 == '' || $numero_2 == '' || $numero_3 == ''){
            $msg_notificar = '<strong style="color: #f40000;"> Preencher todos os campos obrigatórios!</strong>';
        }
        else{
            $resultadocalc = $numero_2 / 2;

            if($resultadocalc < 0){
                $msg_notificar = '<div style="font-weight: bold; color: #f40000;">Digite números inteiros!</div>';
            }else if($resultadocalc >= $numero_1 && $resultadocalc <= $numero_3){
                $msg_notificar = '<div style="font-weight: bold; color: #006400;"> O Resultado ' . $resultadocalc . ' ESTA entre o número ' . $numero_1 . ' e ' . $numero_3 . '.</div>';
            }else if($resultadocalc >= $numero_1 && $resultadocalc <= $numero_3){
                $msg_notificar = '<div style="font-weight: bold; color: #006400;"> O Resultado ' . $resultadocalc . ' ESTA entre o número ' . $numero_1 . ' e ' . $numero_3 . '.</div>';
            }else{
                $msg_notificar = '<div style="font-weight: bold; color: #006400;"> O Resultado ' . $resultadocalc . ' NÃO ESTA entre o número ' . $numero_1 . ' e ' . $numero_3 . '.</div>';
            }
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
        <label>1º Valor:</label>
        <input type="number" name="valor_1" value="<?= $numero_1 ?>" placeholder="Digite aqui...">
        <br>
        <label>2º Valor:</label>
        <input type="number" name="valor_2" value="<?= $numero_2 ?>" placeholder="Digite aqui...">
        <br>
        <label>3º Valor:</label>
        <input type="number" name="valor_3" value="<?= $numero_3 ?>" placeholder="Digite aqui...">
        <br>
        <button type="submit" name="btnCalculo">Calcular</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->

    <br>

    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($resultadocalc) ? $resultadocalc : '' ?>">
</body>
</html>