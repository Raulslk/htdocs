<?php

    require_once 'aula_11/function.php';

    if(isset($_POST['BtnEnviar'])){
        $nomeProduto = trim($_POST['produto']);
        $valorUni = trim($_POST['uni']);
        $quantidade = trim($_POST['quantidade']);

        $resultado = CalcularProduto($valorUni, $quantidade);

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
    <title>Atividade 5</title>
</head>
<body style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_5.php" method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="nome" value="<?= isset($nomeProduto) ? $nomeProduto : '' ?>">
        <br>
        <label>Valor Unitário:</label>
        <input type="text" name="info" value="<?= isset($valorUni) ? $valorUni : '' ?>">
        <br>
        <label>Quantidade:</label>
        <input type="text" name="info" value="<?= isset($quantidade) ? $quantidade : '' ?>">
        <br>
        <button type="submit" name="BtnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>
    <!-- ====== Final das PHP! ====== -->

    <?php if(isset($resultado) && $resultado != 0 && $resultado != ''){ ?>
        <br>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= number_format($resultado, 2, ',', '.') ?>">
    <?php } ?>
    
</body>
</html>