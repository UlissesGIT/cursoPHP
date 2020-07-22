<?php

	$nome1 = "João";
	$sobrenome = "Silva";
	$nomeCompleto = $nome1 . " " . $sobrenome;

	echo $nomeCompleto;

	exit;
	// Após o exit nada mais será executado

	echo "<br/>";

	// unset limpa a variável.
	// Quando rodar o código vai dar erro de 
	// variável indefinida.
	unset($nome1);

		if (isset($nome1)) {
			echo $nome1;
		}

	// isset vai mostrar a variável se ela existir.
	// comentando a linha 11, o resultado exibirá
	// duas vezes a saída João.

?>