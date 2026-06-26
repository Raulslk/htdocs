<?php

    if(isset($_POST['btnResultado'])){
        $nome = trim($_POST['nome']);
        $idade = trim($_POST['idade']);
        $numero = trim($_POST['numero']);

        if($nome == '' || $idade == '' || $numero == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencha todos os campos obrigatórios!</div>';
        }else{

            for($i=1; $i<=$numero; $i++){
                echo 'Meu nome é ' . $nome . ', tenho ' . $idade . 'Anos de idade. Número informado: ' . $numero . ' -Posição do FOR: ' . $i . '<br>';
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
    <title>Atividade 1</title>
</head>
<body style="font-family: Tahoma;">
    <form action="ex_1.php" method="POST">
        <label>Digite o seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite a sua Idade:</label>
        <input type="text" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <label>Digite um Número:</label>
        <input type="number" name="numero" value="<?= isset($numero) ? $numero : '' ?>">
        <br>
        <button type="submit" name="btnResultado">VER</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->

</body>
</html>