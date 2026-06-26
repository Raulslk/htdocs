<?php

    if(isset($_POST['btn_enviar'])){
        $nomeprato = $_POST['nome_prato'];
        $desc = $_POST['info'];
        $valor = $_POST['custo'];
        $ingredientes = $_POST['itens'];

        echo 'Nome do Prato: ' . $nomeprato . '.<br>Descrição: ' . $desc . '.<br>Valor: R$' . $valor . '.<br>Ingredientes: ' . $ingredientes . '.<hr>';
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
    <h2>Ticket de Pedido: </h2>
    
    <form action="ex1_formulario.php" method="POST">
        <p>
            <label>Digite o Nome do Prato:</label>
            <input type="text" name="nome_prato" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite uma Descrição:</label>
            <input type="text" name="info" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite um Preço (R$):</label>
            <input type="text" name="custo" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite os Ingredientes:</label>
            <input type="text" name="itens" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btn_enviar">Enviar</button>
        </p>
    </form>
</body>
</html>