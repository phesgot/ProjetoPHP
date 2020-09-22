<?php 
// Passagem por referência &:

$a = 10;

function trocaValor(&$a){

	return $a += 50;
}

echo trocaValor($a) . "<br>";
echo trocaValor($a) . "<br>";
echo trocaValor($a) . "<br>";

echo "<br>" . $a;

 ?>