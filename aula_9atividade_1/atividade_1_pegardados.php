<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);

    
        if($nome == '' || $peso == '' || $altura == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencher todos os campos obrigatórios!</div>';
        }else{
            header("location: atividade_1_mostrardados.php?pessoa=$nome&massa=$peso&tamanho=$altura");
            exit;
        }
            
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_1_pegardados.php" method="POST">
        <label>Seu nome:</label>
        <input type="text" name="nome" placeholder="Digite aqui..." value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Seu peso:</label>
        <input type="text" name="peso" placeholder="Digite aqui..." value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Sua altura:</label>
        <input type="text" name="altura" placeholder="Digite aqui..." value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button type="submit" name="btnEnviar">ENVIAR</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->
</body>
</html>