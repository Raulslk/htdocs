<?php

    if(isset($_POST['btn_enviar'])){
        $nome = $_POST['nome_usuario'];
        $sobrenome = $_POST['sobrenome_usuario'];
        $ass = $_POST['ass'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        echo 'Nome do Usuário: ' . $nome . ' ' . $sobrenome . '.<br>Assunto: ' . $ass . '.<br>E-mail: ' . $email . '.<br>Mensagem: ' . $msg . '.<hr>';
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
    <h2>Preencha os Dados do Formulário: </h2>
    
    <form action="ex3_formulario.php" method="POST">
        <p>
            <label>Digite seu Nome:</label>
            <input type="text" name="nome_usuario" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite seu Sobrenome:</label>
            <input type="text" name="sobrenome_usuario" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite o Assunto:</label>
            <input type="text" name="ass" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite seu E-mail:</label>
            <input type="email" name="email" placeholder="Digite aqui...">
        </p>
        <p>
            <label>Digite sua Mensagem:</label>
            <input type="text" name="msg" placeholder="Digite aqui...">
        </p>
        <p>
            <button type="submit" name="btn_enviar">Enviar</button>
        </p>
    </form>
</body>
</html>