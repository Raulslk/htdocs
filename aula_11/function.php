<?php

    function Cadastro($numero_1, $numero_2){
        $soma = $numero_1 + $numero_2;

        return $soma;
    }

    function ValidarNome($nome){
        if(strlen($nome) < 3){
            return -1;
        }
    }

    function ValidarDescricao($info){
        if(strlen($info) < 50){
            return -2;
        }
    }

    function ValidarSenha($senha){
        if(strlen($senha) < 6 || strlen($senha) > 8){
            return -3;
        }
    }

    function ComprarSenha($senha, $repsenha){
        if($senha != $repsenha){
            return -4;
        }
    }

    function CalcularAumentoSalario($dinheiro, $bonus){
        if($dinheiro == '' || $bonus == ''){
            return 0;
        }else{
            $calcular = $dinheiro + (($dinheiro + $bonus) / 100);

            return $calcular;
        }
    }

    function AtividadeTres($valor1, $valor2, $valor3, $valor4, $valor5){
        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            return 0;
        }else{
            $resultado = $valor1 + $valor2 + $valor3 + ($valor4 * $valor5);

            return $resultado;
        }
    }

    function SomarMeses($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez){
        if($jan == '' || $fev == '' || $mar == '' || $abr == '' || $mai == '' || $jun == '' || $jul == '' || $ago == '' || $set == '' || $out == '' || $nov == '' || $dez == ''){
            return 0;
        }else{
            $soma = $jan + $fev + $mar + $abr + $mai + $jun + $jul + $ago + $set + $out + $nov + $dez;

            return $soma;
        }
    }

    function CalcularProduto($valor, $qtd){
        if($valor == '' || $qtd == ''){
            return 0;
        }else{
            $calculo = $valor * $qtd;

            return $calculo;
        }
    }

    function CalcularValores($vl1, $vl2, $vl3, $vl4, $vl5, $vl6, $vl7, $vl8, $vl9, $vl10){
        if($vl1 == '' || $vl2 == '' || $vl3 == '' || $vl4 == '' || $vl5 == '' || $vl6 == '' || $vl7 == '' || $vl8 == '' || $vl9 == '' || $vl10 == ''){
            return 0;
        }else{
            $calcular = ($vl1 + $vl2 + $vl3 + $vl4 + $vl5 + $vl6 + $vl7 + $vl8 + $vl9) / $vl10;

            return $calcular;
        }
    }

?>