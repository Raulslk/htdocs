<?php 

    class ClassDAO{
        public function SomarExemplo($valor1, $valor2){
            if($valor1 == '' || $valor2 == ''){
                return 0;
            }else{
                $resultado = $valor1 + $valor2;

                return $resultado;
            }
        }

        public function CalcularCombustivel($combustivel, $qtd){
            if($combustivel == '' || $qtd == ''){
                return 0;
            }else{
                if($combustivel == 1){
                    $resultado = $this->Etanol($qtd);
                }else if($combustivel == 2){
                    $resultado = $this->Gasolina($qtd);
                }else if($combustivel == 3){
                    $resultado = $this->Diesel($qtd);
                }

                return $resultado;
            }
        }

        private function Etanol($qtd){
            $etanol = $qtd * 3.09;

            return $etanol;
        }

        private function Gasolina($qtd){
            $gasolina = $qtd * 4.10;

            return $gasolina;
        }

        private function Diesel($qtd){
            $diesel = $qtd * 4.65;

            return $diesel;
        }

        public function Conversor($tipoTemp, $qtdTemp){
            if($tipoTemp == '' || $qtdTemp == ''){
                return 'error';
            }else{
                if($tipoTemp == 1){
                    $resultado = $this->Celsius($qtdTemp);
                }else if($tipoTemp == 2){
                    $resultado = $this->Fahrenheit($qtdTemp);
                }

                return $resultado;
            }
        }

        private function Celsius($qtdTemp){
            $celsius = round((($qtdTemp * 9 / 5) + 32), 2);

            return $celsius;
        }

        private function Fahrenheit($qtdTemp){
            $fahrenheit = round((($qtdTemp - 32) * 5 / 9), 2);

            return $fahrenheit;
        }

        public function CalcularSalario($meses, $salario, $lucro, $perda){
            if($meses == '' || $salario == '' || $lucro || $perda){
                return 'error';
            }else{
                $ganhos = $meses * $salario;
                $totalLucro = ($ganhos * $lucro) / 100;
                $totalPerda = ($ganhos * $perda) / 100;

                $resultado = ($ganhos + $totalLucro) - $totalPerda;

                return number_format($resultado, 2, ',', '.');
            }
        }
    }