<?php

    require_once 'aula_12/ClassDAO.php';

    if(isset($_POST['btnSomar'])){
        $numero1 = trim($_POST['vl1']);
        $numero2 = trim($_POST['vl2']);
    
        $objDAO = new ClassDAO();

        $soma = $objDAO->SomarExemplo($numero1, $numero2);

        if($soma == 0){
            echo '<strong>Preencher todos os campos obrigatórios!</strong>';
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: Tahoma;">
    <form action="exemplo.php" method="POST">
        <label>1º Número:</label>
        <input type="number" name="vl1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <br>
        <label>2º Número:</label>
        <input type="number" name="vl2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <br>
        <button name="btnSomar">Somar</button>
    </form>

    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($soma) ? $soma : '' ?>">
</body>
</html>