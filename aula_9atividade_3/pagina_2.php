<?php 

    if( isset($_GET['num1']) && $_GET['num1'] != '' &&
        isset($_GET['num2']) && $_GET['num2'] != '' &&
        isset($_GET['num3']) && $_GET['num3'] != '' &&
        isset($_GET['num4']) && $_GET['num4'] != '' &&
        isset($_GET['num5']) && $_GET['num5'] != ''
    ){
        $numero_1 = $_GET['num1'];
        $numero_2 = $_GET['num2'];
        $numero_3 = $_GET['num3'];
        $numero_4 = $_GET['num4'];
        $numero_5 = $_GET['num5'];

        $resultado = ($numero_1 + $numero_2 + $numero_3) / ($numero_4 * $numero_5);

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
    <strong>Resultado Final: </strong>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
</body>
</html>