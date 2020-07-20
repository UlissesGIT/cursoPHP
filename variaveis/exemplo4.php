<?php 

	// Toda informação que vier por POST ou GET
	// sempre será String.
	// Para se obter outro tipo de dado, deve se declarar
	// o tipo antes do POST ou GET.

	//$nome = (int)$_GET["a"];
	//var_dump($nome);

	// Pegando ip do usuario
	$ip1 = $_SERVER["REMOTE_ADDR"];
	
	// Saber a página que o usuário acessou para
	// gerar um log de acesso.
	$ip2 = $_SERVER["SCRIPT_NAME"];
	echo $ip1;
	echo "<br/>";
	echo $ip2

?>