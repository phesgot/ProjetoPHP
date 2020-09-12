<?php

$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

echo "Total da Compra: R$" . " " . $valorTotal;

echo "<br/><br/> Desconto de 10% <br/><br/>";

//Aplicando o desconto:

//$valorTotal -= 10*$valorTotal/100;
// ou
$valorTotal *= .90;

echo "Valor Total com desconto:<br/> 
R$" . " " . $valorTotal;

?>