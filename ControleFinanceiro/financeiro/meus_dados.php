<?php

    require_once './DAO/UtilDAO.php';
    UtilDAO::VerificarLogado();
    
    require_once 'DAO/UsuarioDAO.php';

    $objDAO = new UsuarioDAO();
    
    if(isset($_POST['btnSalvar'])){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);

        $ret = $objDAO->GravarMeusDados($nome, $email, $senha);
    }

    $dados_usuario = $objDAO->CarregarMeusDados();

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
                        <?php include_once '_msg.php'; ?>
                        <h2>Alterar Dados de Cadastro.</h2>
                        <h5>Aqui você pode alterar seus dados cadastrais.</h5>
                    </div>
                </div>
                <hr />
                <form role="form" method="POST" action="meus_dados.php">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Digite seu Nome:</label>
                            <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nome" id="nome" value="<?= $dados_usuario[0]['nome_usuario'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Digite seu E-mail:</label>
                            <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= $dados_usuario[0]['email_usuario'] ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Digite sua Senha:</label>
                            <div class="ajuste">
                                <input type="password" class="form-control" placeholder="Digite sua Senha aqui..." name="senha" id="senha" value="<?= $dados_usuario[0]['senha_usuario'] ?>">
                                <img src="./assets/img/img_senha.png" id="olho" alt="Clique aqui para ver sua Senha..." title="Clique aqui para ver sua Senha..." class="icon-senha">
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" onclick="GravarMeusDados()" class="btn btn-success" name="btnSalvar" onclick="return ValidarTelaMeusDados()">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $("#olho").mousedown(function(){
            $("#senha").attr("type", "text");
        });

        $("#olho").mouseup(function(){
            $("#senha").attr("type", "password");
        });
    </script>
</body>
</html>