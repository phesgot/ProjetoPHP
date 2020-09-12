<?php

// String 
$nomeCompleto = "Pedro Henrique do E S G de O Torres";

//Numeral
$anoNascimento = 1995;

/*
Comentario em bloco
*/

$primeiroNome = "Pedro";
$ultimoNome  = "Torres";
// concatenando variavei:


echo $primeiroNome . " " . $ultimoNome;

exit; // para o código.

echo $nomeCompleto;

echo "<br/>";

unset($nomeCompleto); // unset serve para limpar a variavel.

// isset = se ela exixtir - serve para validação.
if (isset($nomeCompleto)) {
	echo $nomeCompleto;
}



?>