<?php

    if(isset($_POST['btnEnviar'])){
        $nota_1 = trim($_POST['nota_1']);
        $nota_2 = trim($_POST['nota_2']);
        $nota_3 = trim($_POST['nota_3']);
        $nota_4 = trim($_POST['nota_4']);

    
        if($nota_1 == '' || $nota_2 == '' || $nota_3 == '' || $nota_4 == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencher todos os campos obrigatórios!</div>';
        }
        else{
            $media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;

            if($media < 0){
                $msg_notificar = '<div style="font-weight: bold; color: #f40000;">Digite os valores corretamente!</div>';
            }else if($media >= 0 && $media < 40){
                $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> O Aluno foi REPROVADO!</div>';
            }else if($media >= 40 && $media < 60){
                $msg_notificar = '<div style="font-weight: bold; color: #ffdd00;"> O Aluno ESTA de EXAME!</div>';
            }else{
                $msg_notificar = '<div style="font-weight: bold; color: #006400;"> O Aluno foi APROVADO!</div>';
            }
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
    <form action="atividade_3.php" method="POST">
        <label>1º Nota:</label>
        <input type="number" name="nota_1" placeholder="Digite aqui..." value="<?= isset($nota_1) ? $nota_1 : '' ?>">
        <br>
        <label>2º Nota:</label>
        <input type="number" name="nota_2" placeholder="Digite aqui..." value="<?= isset($nota_2) ? $nota_2 : '' ?>">
        <br>
        <label>3º Nota:</label>
        <input type="number" name="nota_3" placeholder="Digite aqui..." value="<?= isset($nota_3) ? $nota_3 : '' ?>">
        <br>
        <label>4º Nota:</label>
        <input type="number" name="nota_4" placeholder="Digite aqui..." value="<?= isset($nota_4) ? $nota_4 : '' ?>">
        <br>
        <button type="submit" name="btnEnviar">ENVIAR</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->

    <br>

    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($media) ? $media : '' ?>">
</body>
</html>