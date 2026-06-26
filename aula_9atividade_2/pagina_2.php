<?php 

    if( isset($_GET['pessoa']) && $_GET['pessoa'] != '' &&
        isset($_GET['money']) && $_GET['money'] != '' &&
        isset($_GET['opr']) && $_GET['opr'] != '' &&
        isset($_GET['banco']) && $_GET['banco'] != ''
    ){
        $usuario = $_GET['pessoa'];
        $valor = $_GET['money'];
        $operacao = $_GET['opr'];
        $banco = $_GET['banco'];

        if($operacao == 'g' || $operacao == 'G'){
            $operacao = 'Ganho';
        }else if ($operacao == 'p' || $operacao == 'P'){
            $operacao = 'Perda';
        }

        if($banco == 'SA' || $banco == 'sa' || $banco == 'Sa' || $banco == 'sA'){
            $banco = 'Santander';
        }else if($banco == 'IT' || $banco == 'it' || $banco == 'It' || $banco == 'iT'){
            $banco = 'Itau';
        }else if($banco == 'SI' || $banco == 'si' || $banco == 'Si' || $banco == 'sI'){
            $banco = 'Sicredi';
        }

        if($operacao == 'Ganho'){
            $resultado = $valor + ($valor * 0.03);
        }else if ($operacao == 'Perda'){
            $resultado = $valor - ($valor * 0.05);
        }

    }else{   
        header('location: pagina_1.php');
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
<body style="font-family: Tahoma;">
    <strong>Nome do Usuário: </strong><span><?= isset($usuario) ? $usuario : '' ?>.</span>
    <br>
    <strong>Valor da Operação: </strong><span>R$ <?= isset($valor) ? number_format($valor, 2, ',', '.') : '' ?>.</span>
    <br>
    <strong>Sigla da Operação: </strong><span><?= isset($operacao) ? $operacao : '' ?>.</span>
    <br>
    <strong>Sigla do Banco: </strong><span><?= isset($banco) ? $banco : '' ?>.</span>
    <br>
    <strong>Resultado da Operação: </strong><span>R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>.</span>
</body>
</html>