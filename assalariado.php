<?php 
include_once "empregado.php";

	class Assalariado extends Empregado{
		var $salario;


		//Método construtor (sobrescrito) agora, também inicializa a variável $salario
		function Assalariado__construct($nome, $sobrenome, $cpf, $salario)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf,$salario);
			$this->salario = $salario;
		}
		function Empregado_vencimento($salario){
		return $salario;
		}

		//Método Destruidor
		/*function __destruct(){
        echo "<br> {$this->nome} Excluido... <br>";
    } */

	}

?>