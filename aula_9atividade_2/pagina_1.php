<?php

    if(isset($_POST['btnCalcular'])){
        $nome = trim($_POST['nome']);
        $dinheiro = trim($_POST['dinheiro']);
        $siglaOpr = trim($_POST['siglaOpr']);
        $siglaBanco = trim($_POST['siglaBanco']);

        if($nome == '' || $dinheiro == '' || $siglaOpr == '' || $siglaBanco == ''){
            $msg_notificar = '<div style="font-weight: bold; color: #f40000;"> Preencha todos os campos obrigatórios!</div>';
        }else if(!is_numeric($dinheiro)){
            $msg_notificar_sigla_a = '<div style="font-weight: bold; color: #f40000;"> Digite apenas caracteres numéricos!</div>';
        }else if($siglaOpr != 'G' && $siglaOpr != 'g' && $siglaOpr != 'P' && $siglaOpr != 'p'){
            $msg_notificar_sigla_b = '<div style="font-weight: bold; color: #f40000;"> Digite a SIGLA correta (G | P)!</div>';
        }else if(
            $siglaBanco != 'sa' && $siglaBanco != 'SA' &&
            $siglaBanco != 'it' && $siglaBanco != 'IT' &&
            $siglaBanco != 'si' && $siglaBanco != 'SI' &&
            $siglaBanco != 'Sa' && $siglaBanco != 'sA' &&
            $siglaBanco != 'It' && $siglaBanco != 'iT' &&
            $siglaBanco != 'Si' && $siglaBanco != 'sI'
            ){
            $msg_notificar_sigla_c = '<div style="font-weight: bold; color: #f40000;"> Digite a SIGLA correta (SA | IT | SI)!</div>';
        }else{
            header("location: pagina_2.php?pessoa=$nome&money=$dinheiro&opr=$siglaOpr&banco=$siglaBanco");
            exit;
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
    <form action="pagina_1.php" method="POST">
        <p>
            <label>Digite Seu nome:</label>
            <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        </p>
        <p>
            <label>Digite o Valor do investimento:</label>
            <input type="text" name="dinheiro" value="<?= isset($dinheiro) ? $dinheiro : '' ?>">
            <br>
            <!-- === Tratativas de Dados! === -->
            <?= isset ($msg_notificar_sigla_a) ? $msg_notificar_sigla_a : '' ?>
            <!-- ============================ -->
        </p>
        <p style="margin: 0px">
            <h3 style="margin: 0px; padding: 0px;">Siglas da Operação.</h3>
            <span>Sigla G:</span><strong>Ganho de 3%.</strong>
            <br>
            <span>Sigla P:</span><strong>Perda de 5%.</strong>
            <br>
            <label>Digite a Sigla da Operação:</label>
            <input type="text" name="siglaOpr" value="<?= isset($siglaOpr) ? $siglaOpr : '' ?>">
            <br>
            <!-- === Tratativas de Dados! === -->
            <?= isset ($msg_notificar_sigla_b) ? $msg_notificar_sigla_b : '' ?>
            <!-- ============================ -->
        </p>
        <p style="margin: 0px">
            <h3 style="margin: 0px; padding: 0px;">Siglas dos Bancos.</h3>
            <span>Sigla SA:</span><strong>Santander.</strong>
            <br>
            <span>Sigla IT:</span><strong>Itaú.</strong>
            <br>
            <span>Sigla SI:</span><strong>Sicredi.</strong>
            <br>
            <label>Digite a Sigla do Banco:</label>
            <input type="text" name="siglaBanco" value="<?= isset($siglaBanco) ? $siglaBanco : '' ?>">
            <br>
            <!-- === Tratativas de Dados! === -->
            <?= isset ($msg_notificar_sigla_c) ? $msg_notificar_sigla_c : '' ?>
            <!-- ============================ -->
        </p>
        <button type="submit" name="btnCalcular">VER RESULTADO</button>
    </form>

    <!-- === Tratativas de Dados! === -->
    <?= isset ($msg_notificar) ? $msg_notificar : '' ?>
    <!-- ============================ -->
</body>
</html>