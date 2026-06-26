<?php

    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    
    require_once './DAO/ContaDAO.php';

    if(isset($_POST['btnSalvar'])){
        $banco = trim($_POST['banco']);
        $agencia = trim($_POST['agencia']);
        $numero = trim($_POST['numero']);
        $saldo = trim($_POST['saldo']);

        $objdao = new ContaDAO();
        $ret = $objdao->CadastrarConta($banco, $agencia, $numero, $saldo);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Cadastrar uma Conta Bancária</h2>
                        <h5>Aqui você pode cadastrar todas as suas Contas Bancárias.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <form method="POST" action="nova_conta.php">
                    <div class="form-group">
                        <label>Digite o Nome do Banco:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome do Banco aqui..." name="banco" id="banco">
                    </div>
                    <div class="form-group">
                        <label>Digite o Núm. da Agência:</label>
                        <input type="text" class="form-control" placeholder="Digite o Núm da Agência aqui..." name="agencia" id="agencia">
                    </div>
                    <div class="form-group">
                        <label>Digite o Núm. da Conta:</label>
                        <input type="text" class="form-control" placeholder="Digite o Núm da Conta aqui..." name="numero" id="numero">
                    </div>
                    <div class="form-group">
                        <label>Digite o Saldo:</label>
                        <input type="text" class="form-control" placeholder="Digite o Saldo aqui..." name="saldo" id="saldo">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarTelaNovaConta()">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>