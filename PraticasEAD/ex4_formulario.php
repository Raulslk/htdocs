<?php

    if(isset($_POST['btn_enviar'])){
        $dia = $_POST['dia'];
        $mes_1 = $_POST['mes_1'];
        $mes_2 = $_POST['mes_2'];
        $ano = $_POST['ano'];

        echo 'Data Numérica: ' . $dia . '/' . $mes_1 . '/' . $ano . '.<hr>';
        echo 'Data Completa: Londrina dia ' . $dia . ' ' . 'de ' . $mes_2 . ' ' . 'de ' . $ano . '.<hr>';
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
    <h2>Preencha os dados com a Data desejada: </h2>
    
    <form action="ex4_formulario.php" method="POST">
        <p>
            <label>Digite o número do Dia:</label>
            <input type="number" name="dia" placeholder="Digite o Dia aqui...">
        </p>
        <p>
            <label>Digite o número do Mês:</label>
            <input type="number" name="mes_1" placeholder="Digite o Mês aqui...">
        </p>
        <p>
            <label>Selecione o Mês</label>
            <select name="mes_2">
                <option value="">Selecione</option>
                <option value="janeiro">Janeiro</option>
                <option value="fevereiro">Fevereiro</option>
                <option value="março">Março</option>
                <option value="abril">Abril</option>
                <option value="maio">Maio</option>
                <option value="junho">Junho</option>
                <option value="julho">Julho</option>
                <option value="agosto">Agosto</option>
                <option value="setembro">Setembro</option>
                <option value="outubro">Outubro</option>
                <option value="novembro">Novembro</option>
                <option value="dezembro">Dezembro</option>
            </select>
        </p>
        <p>
            <label>Digite o número do Ano:</label>
            <input type="number" name="ano" placeholder="Digite o Ano aqui...">
        </p>
        <p>
            <button type="submit" name="btn_enviar">Enviar</button>
        </p>
    </form>
</body>
</html>