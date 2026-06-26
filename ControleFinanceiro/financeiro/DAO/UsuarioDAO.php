<?php

    require_once 'Conexao.php';
    require_once 'UtilDAO.php';

    class UsuarioDAO extends Conexao{
        public function ValidarLogin($email, $senha){
            if($email == '' || $senha == ''){
                return 0;
            }else if(strlen($senha) < 6 || strlen($senha) > 8){
                return -2;
            }else{
                // return 1;

                $conexao = parent::retornarConexao();

                $comando_sql = 'SELECT id_usuario, nome_usuario FROM tb_usuario WHERE email_usuario = ? AND senha_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $email);
                $sql->bindValue(2, $senha);

                $sql->setFetchMode(PDO::FETCH_ASSOC);

                $sql->execute();

                // Vamos criar uma Variável de Tipo Array para manipular as posições de acordo com os dados necessários!
                $user = $sql->fetchAll();

                if(count($user) == 0){
                    return -6;
                }else{
                    $cod = $user[0]['id_usuario'];
                    $nome = $user[0]['nome_usuario'];

                    UtilDAO::CriarSessao($cod, $nome);

                    header('location: tela_inicial.php');
                    exit;
                }
            }
        }

        public function CadastrarUsuario($nome, $email, $senha, $repSenha){
            if($nome == '' || $email == '' || $senha == '' || $repSenha == ''){
                return 0;
            }else if(strlen($senha) < 6 || strlen($senha) > 8){
                return -2;
            }else if($senha != $repSenha){
                return -3;
            }else{
                // return 1;
                if($this->ValidarEmailDuplicadoCadastro($email) != 0){
                    return -5;
                }

                $conexao = parent::retornarConexao();

                $comando_sql = 'INSERT INTO tb_usuario(nome_usuario, email_usuario, senha_usuario, data_cadastro) VALUES(?, ?, ?, ?);';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $i = 1;
                $sql->bindValue($i++, $nome);
                $sql->bindValue($i++, $email);
                $sql->bindValue($i++, $senha);
                $sql->bindValue($i++, date('Y-m-d'));

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        public function CarregarMeusDados(){
            $conexao = parent::retornarConexao();

            $comando_sql = 'SELECT nome_usuario, email_usuario, senha_usuario FROM tb_usuario WHERE id_usuario = ?;';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, UtilDAO::UsuarioLogado());

            // Aqui sera realizada uma consulta via PDO para retornar os dados pesquisados!
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            // Executa todos os processos adicionados no Objeto SQL!
            $sql->execute();

            // Retorna a consulta de fato, com todos os itens econtados!
            return $sql->fetchAll();
        }

        public function GravarMeusDados($nome, $email, $senha){
            if($nome == '' || $email == '' || $senha == ''){
                return 0;
            }else{
                // return 1;

                if($this->ValidarEmailDuplicadoAlterar($email) != 0){
                    return -5;
                }

                $conexao = parent::retornarConexao();

                $comando_sql = 'UPDATE tb_usuario SET nome_usuario = ?, email_usuario = ?, senha_usuario = ? WHERE id_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $i = 1;

                $sql->bindValue($i++, $nome);
                $sql->bindValue($i++, $email);
                $sql->bindValue($i++, $senha);
                $sql->bindValue($i++, UtilDAO::UsuarioLogado());

                try{
                    $sql->execute();
                    return 1;
                }catch(Exception $ex){
                    echo $ex->getMessage();
                    return -1;
                }
            }
        }

        // Essa function vai impedir que Usuário faça  um novo cadastro com um E-mail já existente no Banco de Dados!
        public function ValidarEmailDuplicadoCadastro($email){
            if($email == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'SELECT count(email_usuario) AS contar FROM tb_usuario WHERE email_usuario = ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $email);

                $sql->setFetchMode(PDO::FETCH_ASSOC);

                $sql->execute();

                $contar = $sql->fetchAll();

                return $contar[0]['contar'];
            }
        }

        // Essa function vai impedir que Usuário faça  uma alteração com um E-mail já existente no Banco de Dados!
        public function ValidarEmailDuplicadoAlterar($email){
            if($email == ''){
                return 0;
            }else{
                $conexao = parent::retornarConexao();

                $comando_sql = 'SELECT count(email_usuario) AS contar FROM tb_usuario WHERE email_usuario = ? AND id_usuario != ?;';

                $sql = new PDOStatement();

                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $email);
                $sql->bindValue(2, UtilDAO::UsuarioLogado());

                $sql->setFetchMode(PDO::FETCH_ASSOC);

                $sql->execute();

                $contar = $sql->fetchAll();

                return $contar[0]['contar'];
            }
        }
    }