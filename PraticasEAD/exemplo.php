<?php

    if(isset($_POST['btnSomar'])){
        $numero_1 = ltrim(rtrim($_POST['valor_1']));
        $numero_2 = trim($_POST['valor_2']);
     
        $resultado_soma = $numero_1 + $numero_2;
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
    <h2>Soma de Valores:</h2>
    
    <form action="exemplo.php" method="POST">
        <p>
            <label>Digite seu Primeiro Nome:</label>
            <input type="text" name="primeiro_nome" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite seu Segundo Nome:</label>
            <input type="text" name="segundo_nome" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btn_enviar">Enviar</button>
        </p>
    </form>
</body>
</html>