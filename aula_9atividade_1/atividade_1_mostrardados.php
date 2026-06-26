<?php 

    if( isset($_GET['pessoa']) && $_GET['pessoa'] != '' &&
        isset($_GET['massa']) && $_GET['massa'] != '' &&
        isset($_GET['tamanho']) && $_GET['tamanho'] != ''
    ){
        $person = $_GET['pessoa'];
        $weight = $_GET['massa'];
        $height = $_GET['tamanho'];

        $imc = round($weight / ($height * $height), 2);

        if($imc <= 0){
            $status = '<strong style="color: red;">Erro no cálculo!</strong>';
        }else if($imc > 0 && $imc < 21){
            $status = '<strong style="color: yellow;">Magro!</strong>';
        }else if($imc > 20 && $imc < 26){
            $status = '<strong style="color: green;">Peso Ideal!</strong>';
        }else if($imc > 26 && $imc < 31){
            $status = '<strong style="color: orange;">Acima do Peso!</strong>';
        }else{
            $status = '<strong style="color: red;">Obeso!</strong>';
        }
    }else{   
        header('location: atividade_1_pegardados.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span>Nome: </span><strong><?= isset($person) ? $person : '' ?></strong>
    <br>
    <span>Peso: </span><strong><?= isset($weight) ? $weight : '' ?></strong>
    <br>
    <span>Altura: </span><strong><?= isset($height) ? $height : '' ?></strong>
    <br>
    <span>Resultado do IMC: </span><strong><?= isset($imc) ? $imc : '' ?></strong>
    <br>
    <span>Status: </span><strong><?= isset($status) ? $status : '' ?></strong>
</body>
</html>