<?php

    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    
    require_once './DAO/MovimentoDAO.php';
    require_once './DAO/CategoriaDAO.php';
    require_once './DAO/EmpresaDAO.php';
    require_once './DAO/ContaDAO.php';

    $objCategoria = new CategoriaDAO();
    $objEmpresa = new EmpresaDAO();
    $objConta = new ContaDAO();

    $tipo = '';
    $categoria = '';
    $empresa = '';
    $conta = '';

    if(isset($_POST['btnRealizar'])){
        $tipo = $_POST['tipo'];
        $data = $_POST['data'];
        $valor = $_POST['valor'];
        $obs = $_POST['obs'];
        $categoria = $_POST['categoria'];
        $empresa = $_POST['empresa'];
        $conta = $_POST['conta'];

        $objDAO = new MovimentoDAO();
        $ret = $objDAO->CadastrarMovimento($tipo, $data, $valor, $obs, $categoria, $empresa, $conta);
    }

    $categorias = $objCategoria->ConsultarCategoria();
    $empresas = $objEmpresa->ConsultarEmpresa();
    $contas = $objConta->ConsultarConta();

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
                        <h2>Realizar uma Movimentação Financeira.</h2>
                        <h5>Aqui você pode realizar todas as suas Movimentações Financeiras(Fluxo de Caixa).</h5>
                        
                    </div>
                </div>
                <hr />
                <form action="realizar_movimento.php" method="POST">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione um Tipo de Movimento:</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="">Selecione</option>
                                <option value="1" <?= $tipo == 1 ? 'selected' : '' ?>>Entrada</option>
                                <option value="2"><?= $tipo == 2 ? 'selected' : '' ?>>Saída</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Selecione uma Data:</label>
                            <input type="date" class="form-control" name="data" id="data" value="<?= isset($data) ? $data : '' ?>"/>
                        </div>

                        <div class="form-group">
                            <label>Digite um Valor (R$):</label>
                            <input type="text" class="form-control" placeholder="Digite o Valor aqui..." name="valor" id="valor" value="<?= isset($valor) ? $valor : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Selecione uma Categoria Financeira:</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="">Selecione</option>
                                <?php foreach($categorias as $ct){ ?>
                                    <option value="<?= $ct['id_categoria'] ?>"><?= $ct['nome_categoria'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Selecione uma Empresa:</label>
                                <select class="form-control" name="empresa" id="empresa">
                                    <option value="">Selecione</option>
                                    <?php foreach($empresas as $emp){ ?>
                                    <option value="<?= $emp['id_empresa'] ?>"><?= $emp['nome_empresa'] ?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Selecione uma Conta Bancária:</label>
                                <select class="form-control" name="conta" id="conta">
                                    <option value="">Selecione</option>
                                    <?php foreach($contas as $cn){ ?>
                                    <option value="<?= $cn['id_conta'] ?>"><?= $cn['banco_conta'] ?> | R$ <?=  number_format($cn['saldo_conta'], 2, ',', '.') ?></option>
                                <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Digite sua Observação(Opcional):</label>
                            <textarea class="form-control" rows="4" placeholder="Digite sua Observação aqui..." name="obs"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" onclick="return ValidarTelaConsultarMovimento()">Realizar Movimento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>