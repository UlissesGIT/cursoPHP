<?php

	// Dados básicos
	// String
	$nome = "Hcode";
	$site = 'www.hcode.com.br';
	// Int
	$ano = 1984;
	// Ponto flutuante
	$salario = 5500.99;
	// Booleano
	$bloqueado = false;
	////////////////////////////////////////////////
	// Dados compostos
	// Array
	$frutas = array("abacaxi", "laranja", "manga");
	echo $frutas[2];
	
	echo "<br/>";
	// Objeto
	$nascimento = new DateTime();
	var_dump($nascimento);
	echo "<br/>";
	////////////////////////////////////////////////
	//Dados especiais
	//Ressource
	$arquivo = fopen("exemplo3.php", "r");
	var_dump($arquivo)
	
	echo "<br/>";
	// Null
	$nulo = Null; // Ausência total de valor, não existe dado.
	$vazio = " "; // Foi iniciado mas não tem informação.

?>