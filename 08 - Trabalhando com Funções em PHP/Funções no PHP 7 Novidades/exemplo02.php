<?php 
// Declaração de tipos escalados

function soma(float ...$valores):float{ //Indicando o tipo do retorno cash converte.
	return array_sum($valores);
}

var_dump (soma(10, 14));

echo "<br>" . soma(1.5, 1.5);

 ?>