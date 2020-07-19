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

	// A diferença entre Null e vazio dá pra perceber em uma requisição
	// de banco de dados. 
	// Se eu marcar como NULL, é que esta informação não existe.
	// Se eu deixá-la como Vazia, é que NO MOMENTO não existe
	// informação na consulta.

?>