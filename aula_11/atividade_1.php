<?php

require_once 'aula_11/function.php';

    if(isset($_POST['BtnEnviar'])){
        $nome = trim($_POST['nome']);
        $info = trim($_POST['info']);
        $senha = trim($_POST['senha']);
        $repsenha = trim($_POST['repsenha']);


        if($nome == '' || $desc == '' || $senha == '' || $repsenha == ''){
            $msg_error = '<div style="font-weight: bold; color: #f40000;"> Preencher todos os campos obrigatórios!</div>';
       }else if(ValidarNome($nome)){
           $msg_error = '<div style="font-weight: bold; color: #f40000;"> O NOME deve conter no mínimo 3 caracteres!</div>';
       }else if(ValidarDescricao($info)){
           $msg_error = '<div style="font-weight: bold; color: #f40000;"> A DESCRIÇÃO deve conter no mínimo 50 caracteres!</div>';
       }else if(ValidarSenha($senha)){
           $msg_error = '<div style="font-weight: bold; color: #f40000;"> A SENHA deve conter no mínimo 6 caracteres!</div>';
       }else if(ComprarSenha($senha, $repsenha)){
           $msg_error = '<div style="font-weight: bold; color: #f40000;"> As SENHAS devem ser iguais!</div>';
       }else{
           $success = '<div style="font-weight: bold; color: #09ff00;"> Cadastro realizado com sucesso!</div>';    
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
<body style = "font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite uma Descrição:</label>
        <input type="text" name="info" value="<?= isset($info) ? $info : '' ?>">
        <br>
        <label>Digite uma Senha:</label>
        <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>" >
        <br>
        <label>Repita sua Senha:</label>
        <input type="password" name="repsenha" value="<?= isset($repsenha) ? $repsenha : '' ?>" >
        <br>
        <button type="submit" name="BtnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset ($msg_error) ? $msg_error : '' ?>

    <?= isset ($success) ? $success : '' ?>
    <!-- ====== Final das PHP! ====== -->

</body>
</html>