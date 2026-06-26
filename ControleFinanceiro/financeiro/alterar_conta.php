<?php

    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    
    require_once './DAO/ContaDAO.php';

    $objDAO = new ContaDAO();

    if(isset($_GET['cod']) && is_numeric($_GET['cod'])){
        $idConta = $_GET['cod'];

        $dados = $objDAO->DetalharConta($idConta);

        if(count($dados) == 0){
            header('location: consultar_conta.php');
            exit();
        }
    }else if(isset($_POST['btnSalvar'])){
        $banco = trim($_POST['banco']);
        $agencia = trim($_POST['agencia']);
        $numero = trim($_POST['numero']);
        $saldo = trim($_POST['saldo']);
        $idConta = $_POST['cod'];

        $ret = $objDAO->AlterarConta($banco, $agencia, $numero, $saldo, $idConta);

        header('location: consultar_conta.php?ret=' . $ret);
        exit();
    }else if(isset($_POST['btnExcluir'])){
        $idConta = $_POST['cod'];

        $ret = $objDAO->ExcluirConta($idConta);

        header('location: consultar_conta.php?ret=' . $ret);
        exit();
    }else{
        header('location: consultar_conta.php');
        exit();
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
                        <h2>Alterar/Excluir uma Conta Bancária</h2>
                        <h5>Aqui você pode alterar ou excluir sua Conta Bancária.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <form action="alterar_conta.php" method="POST">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                    <div class="form-group">
                        <label>Digite o Nome do Banco:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome do Banco aqui..." name="banco" id="banco" value="<?= $dados[0]['banco_conta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Digite o Núm. da Agência:</label>
                        <input type="text" class="form-control" placeholder="Digite o Núm da Agência aqui..." name="agencia" id="agencia" value="<?= $dados[0]['agencia_conta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Digite o Núm. da Conta:</label>
                        <input type="text" class="form-control" placeholder="Digite o Núm da Conta aqui..." name="numero" id="numero" value="<?= $dados[0]['numero_conta'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Digite o Saldo:</label>
                        <input type="text" class="form-control" placeholder="Digite o Saldo aqui..." name="saldo" id="saldo" value="<?= $dados[0]['saldo_conta'] ?>">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarTelaAlterarConta()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirmação de EXCLUSÃO:</h4>
                                </div>
                                <div class="modal-body">
                                    <span>Você deseja realmente excluir essa Conta?</span>
                                    <p>
                                        <span>Nome da Conta: </span><strong><?= $dados[0]['banco_conta'] ?></strong>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger" name="btnExcluir">Confirmar Exclusão</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>