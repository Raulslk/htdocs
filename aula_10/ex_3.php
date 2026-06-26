<?php

    if(isset($_POST['btnResultado'])){
        $numero = trim($_POST['numero']);

        if($numero == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencha todos os campos obrigatórios!</div>';
        }else{
  
            for($i=1; $i<=$numero; $i++){

                echo 'Número informado foi: ' . $numero . ' posição do FOR: ' . $i . '.<br>';
            }

            echo '<hr>';
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
    <form action="ex_3.php" method="POST">
        <label>Digite um número que informe a quantidade de Repetições:</label>
        <input type="number" name="numero" value="<?= isset($numero) ? $numero : '' ?>">
        <br>
        <button type="submit" name="btnResultado">VER</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->

</body>
</html>