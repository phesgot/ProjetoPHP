<?php
//Variaveis pré definidas:

//Toda informação obtida por GET ou POST vem como STRING
$nome = $_GET["a"]; // pegando informações de formulários.

//Convertendo STRING para outro tipo
$nome2 = (int)$_GET["a"];

var_dump($nome);

echo "<br/><br/>";

var_dump($nome2);

echo "<br/><br/>";

//Pegando o ip do úsuario:
$ip = $_SERVER["REMOTE_ADDR"]; // pegando IP

echo $ip;

echo "<br/><br/>";

$name = $_SERVER["SCRIPT_NAME"];

echo $name;

?>