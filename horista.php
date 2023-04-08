<?php
include_once "empregado.php"; 

	class Horista extends Empregado{

		var $precoHora;
		var $horasTrabalhadas;

		//Método construtor (sobrescrito) agora, também inicializa a variável $precoHora $horasTrabalhadas
		function Horista__construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas);
			$this->precoHora = $precoHora;
			$this->horasTrabalhadas = $horasTrabalhadas;
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