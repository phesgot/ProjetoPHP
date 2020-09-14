<?php
//Array bidimensional

$carros[0][0] = "VW";
$carros[0][1] = "Gol";
$carros[0][2] = "Fusca";
$carros[0][3] = "Golf";

$carros[1][0] = "GM";
$carros[1][1] = "Chevete";
$carros[1][2] = "Camaro";
$carros[1][3] = "Spin";


echo $carros[0][3] . "<br><br>";

print_r($carros);

echo "<br><br>" . end($carros[0]) . "<br><br>";

echo end($carros[1]);

?>