<?php 
// Declaração de tipos escalados 

function soma(int ...$valores){
	return array_sum($valores);
}

echo soma(3,2) . "<br>";
echo soma(10,2,7,10) . "<br>";
echo soma(1.5,1.5) . "<br>";


 ?>