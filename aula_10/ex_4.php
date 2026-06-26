<?php

    if(isset($_POST['btnCalcular'])){
        $tabuada = trim($_POST['tabuada']);

        if($tabuada == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Selecione uma das opções!</div>';
        }else{

            for($i=0; $i <= 10; $i++){
                echo $tabuada . ' X ' . $i . ' = ' . ($tabuada * $i) . '<br>';
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
    <title>Atividade 4</title>
</head>
<body style="font-family: Tahoma;">
    <form action="ex_4.php" method="POST">
        <label>Selecione a Tabuada desejada:</label>
        <select name='tabuada'>
            <option value="">Selecione</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->

</body>
</html>