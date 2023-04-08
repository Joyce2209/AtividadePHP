<?php 

	class Empregado{

		var $nome;
		var $sobrenome;
		var $cpf;
	
		function vencimento($salario){
			
			if ($salario <= 1302) {
			return	$salario = ($salario - $salario * (7.5/100));

			}
			if ($salario >= 1302.01 && $salario <= 2571.29) {
			return	$salario = ($salario - $salario * (9/100));

			}
			if ($salario >= 2571.30 && $salario <= 3856.94) {
			return	$salario = ($salario - $salario * (12/100));

			}
			if ($salario >= 3856.95 && $salario <= 7507.49) {
			return	$salario = ($salario - $salario * (14/100));
				
			} 
			else {
				echo "Meu sonho é ser você, ou talvez não";
			}
		}

		//Método construtor inicializa propriedades
		function Empregado__construct($nome, $sobrenome, $cpf){
			$this->nome = $nome;
			$this->sobrenome = $sobrenome;
			$this->cpf = $cpf;
		}
		//Método Destruidor
		/*function __destruct(){
        echo "<br> {$this->nome} Excluido... <br>";
    } */



	}

?>