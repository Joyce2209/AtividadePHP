<?php
include_once "empregado.php"; 

	class Comissionado extends Empregado{
		var $totalVenda;
		var $taxaComissao;

		//Método construtor (sobrescrito) agora, também inicializa a variável $totalVenda e $taxaComissao
		function Comisssionado__construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao)
		{
		//Chamando o método construtor da classe mãe
			parent::__construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao);
			$this->totalVenda = $totalVenda;
			$this->taxaComissao = $taxaComissao;
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