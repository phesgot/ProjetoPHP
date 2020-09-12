<?php
// Escopo de variaveis:

$nome = "Pedro";

//criando uma função:
function teste() {

	global $nome; //utilizado para enxergar a variavel criada fora do escopo da função.
	echo $nome;
}

function teste2() {

	$nome = "Torres";

	echo $nome;
}

// Chamando a função:
teste();
echo "<br/><br/>";
teste2();

?>