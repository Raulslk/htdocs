<?php

    if(isset($_POST['btnResultado'])){
        $fruta_1 = trim($_POST['fruta1']);
        $fruta_2 = trim($_POST['fruta2']);
        $fruta_3 = trim($_POST['fruta3']);
        $fruta_4 = trim($_POST['fruta4']);
        $fruta_5 = trim($_POST['fruta5']);

        if($fruta_1 == '' || $fruta_2 == '' || $fruta_3 == '' || $fruta_4 == '' || $fruta_5 == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencha todos os campos obrigatórios!</div>';
        }else{

            $frutas = array($fruta_1, $fruta_2, $fruta_3, $fruta_4, $fruta_5);

            for($i=0; $i < count($frutas); $i++){
                echo 'A fruta armazenada no array que está na posição <b>' . ($i + 1) . '</b> é: ' . $frutas[$i] . '.<br>';
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
    <title>Atividade 2</title>
</head>
<body style="font-family: Tahoma;">
    <form action="ex_2.php" method="POST">
        <label>Digite o nome da 1º Fruta:</label>
        <input type="text" name="fruta1" value="<?= isset($fruta_1) ? $fruta_1 : '' ?>">
        <br>
        <label>Digite o nome da 2º Fruta:</label>
        <input type="text" name="fruta2" value="<?= isset($fruta_2) ? $fruta_2 : '' ?>">
        <br>
        <label>Digite o nome da 3º Fruta:</label>
        <input type="text" name="fruta3" value="<?= isset($fruta_3) ? $fruta_3 : '' ?>">
        <br>
        <label>Digite o nome da 4º Fruta:</label>
        <input type="text" name="fruta4" value="<?= isset($fruta_4) ? $fruta_4 : '' ?>">
        <br>
        <label>Digite o nome da 5º Fruta:</label>
        <input type="text" name="fruta5" value="<?= isset($fruta_5) ? $fruta_5 : '' ?>">
        <br>
        <button type="submit" name="btnResultado">VER</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->

</body>
</html>