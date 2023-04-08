<?php 

	include_once 'assalariado.php';
	include_once 'comissionado.php';
	include_once 'horista.php';
	include_once 'empregado.php';


	#Criação do objeto horista
	$Fernanda = new Horista;
	$Fernanda->nome = "Fernanda";
    $Fernanda->sobrenome = "Souza";
    $Fernanda->cpf = 22233344405;
	$Fernanda->precoHora = 20.00;
	$Fernanda->horasTrabalhadas = 10;


	#Criação do objeto comissionado
	$Danilo = new Comissionado;
	$Danilo->nome = "Danilo";
    $Danilo->sobrenome = "Santos";
    $Danilo->cpf = 55577799908;
	$Danilo->totalVenda = 50000.00;
	$Danilo->taxaComissao = 0.05;


	#Criação do objeto assalariado
	$Joyce = new Assalariado;
	$Joyce->nome = "Joyce";
    $Joyce->sobrenome = "Pereira";
    $Joyce->cpf = 44422211104;
	$Joyce->salario = 1420.00;


echo("A {$Fernanda->nome} é Horista <br>");
echo "O sálario bruto da {$Fernanda->nome} é {$Fernanda->vencimento($Fernanda->precoHora*$Fernanda->horasTrabalhadas)} por mês. <br> <br>";
echo("O {$Danilo->nome} é Comissionado <br>");
echo "O sálario bruto do {$Danilo->nome} é {$Danilo->vencimento($Danilo->totalVenda*$Danilo->taxaComissao)} por mês. <br><br> ";
echo("A {$Joyce->nome} é Assalariado <br>");
echo "O sálario bruto da {$Joyce->nome} é {$Joyce->vencimento($Joyce->salario)} por mês. <br> <br>";


?>