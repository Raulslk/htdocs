<?php

    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    
    require_once './DAO/CategoriaDAO.php';

    if(isset($_POST['btnSalvar'])){
        $nome = trim($_POST['nome']);

        $objdao = new CategoriaDAO();
        $ret = $objdao->CadastrarCategoria($nome);
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
                        <h2>Cadastrar uma categoria financeira.</h2>
                        <h5>Aqui você pode cadastrar todas as suas Categorias Financeiras.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <form method="POST" action="nova_categoria.php">
                    <div class="form-group">
                        <label>Digite sua Categoria Financeira:</label>
                        <input type="text" class="form-control" placeholder="Digite o Nome da Categoria Financeira aqui..." name="nome" id="nome">
                    </div>
                    <button type="submit" class="btn btn-success" name="btnSalvar" onclick="return ValidarTelaNovaCategoria()">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>