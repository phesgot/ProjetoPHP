<?php 
// Passagem de valor por parâmetro:

$a = 10;

function trocaValor($a){

	return $a += 50;
}

echo trocaValor($a) . "<br>";

echo $a;
 ?>