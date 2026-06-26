<?php

    if(isset($_POST['btn_enviar'])){
        $nomeempresa = $_POST['nome_empresa'];
        $site = $_POST['site'];
        $face = $_POST['face'];
        $insta = $_POST['insta'];
        $dados = $_POST['info'];

        echo 'Nome da Empresa: ' . $nomeempresa . '.<br>Site: ' . $site . '.<br>Facebook: ' . $face . '.<br>Instagram: ' . $insta . '.<br>Descrição: ' . $dados . '.<hr>';
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
    <h2>Dados da Empresa: </h2>
    
    <form action="ex2_formulario.php" method="POST">
        <p>
            <label>Digite o Nome da Empresa:</label>
            <input type="text" name="nome_empresa" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Site:</label>
            <input type="url" name="site" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Facebook:</label>
            <input type="url" name="face" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Instagram:</label>
            <input type="url" name="insta" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite a Descrição da Empresa:</label>
            <input type="text" name="info" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btn_enviar">Enviar</button>
        </p>
    </form>
</body>
</html>