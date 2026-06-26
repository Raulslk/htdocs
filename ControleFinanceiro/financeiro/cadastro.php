<?php

    require_once 'DAO/UsuarioDAO.php';

    if(isset($_POST['btnCadastrar'])){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['rep_senha']);

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->CadastrarUsuario($nome, $email, $senha, $repSenha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php'
?>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Intranet de Controle Financeiro.</h2>
               
                <h5>( Faça seu cadastro )</h5>
                <br />
            </div>
        </div>
        <div class="row">
               
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                <div class="panel-heading">
                        <?php include_once '_msg.php' ?>
                        <strong>  Preencher todos os dados </strong>  
                    </div>
                    <div class="panel-body">
                        <form role="form" action="cadastro.php" method="POST">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" id="nome"/>
                            </div>
                             <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Digite seu E-mail" name="email" id="email"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" class="form-control" placeholder="Crie uma senha (mínimo 6 caracteres)" name="senha" id="senha"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" class="form-control" placeholder="Confirme sua senha" name="rep_senha" id="rep"/>
                            </div>
                             
                            <button class="btn btn-success " name="btnCadastrar" onclick="return ValidarTelaCadastro()">Cadastrar-se</button>
                            <hr />
                            <span>Já possui cadastro?</span><a href="login.php" >Clique aqui...</a>
                        </form>
                    </div>
                   
                </div>
            </div>   
        </div>
    </div>
</body>
</html>
