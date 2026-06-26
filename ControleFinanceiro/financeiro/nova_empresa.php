<?php

    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    
    require_once './DAO/EmpresaDAO.php';

    if(isset($_POST['btnSalvar'])){
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);
        $endereco = trim($_POST['endereco']);

        $objdao = new EmpresaDAO();
        $ret = $objdao->CadastrarEmpresa($nome, $telefone, $endereco);
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
                        <h2>Cadastrar uma Empresa.</h2>
                        <h5>Aqui você pode cadastrar todas as suas Empresas.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <form action="nova_empresa.php" method="POST">
                    <div class="form-group">
                        <label>Digite o Nome da Empresa:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome da Empresa aqui..." name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label>Digite o Telefone:</label>
                        <input type="text" class="form-control" placeholder="Digite o Telefone aqui..." name="telefone" id="telefone">
                    </div>
                    <div class="form-group">
                        <label>Digite o Endereço:</label>
                        <input type="text" class="form-control" placeholder="Digite o Endereço aqui..." name="endereco" id="endereco">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarTelaNovaEmpresa()">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>