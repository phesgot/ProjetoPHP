<?php
// Manipulando Strings:
$frase = "A repetição é mãe da repetição.";
$palavra = "mãe";


$q = strpos($frase, "mãe"); // String position conta a posição até um determinado ponto.
var_dump($q);
echo "<br><br>";


$texto = substr($frase, 0, $q); //sub string começa a frase de um determinado ponto.
echo $texto;
echo "<br><br>";


$texto2 = substr($frase, $q);
echo $texto2;
echo "<br><br>";

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase)); // conta a quantidade de caracteres de uma palavra ou frase.
echo $texto3;
echo "<br><br>";

?>


