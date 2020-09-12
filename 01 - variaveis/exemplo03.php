<?php
////////////////////////////////////////////////////////
//Tipos básicos de variaveis:

// String aspas duplas.
$nome = "Pedro";

// String aspas simples.
$site = 'wwww.pedro.com.br';

// int
$ano = 1995;

// float
$salario = 2.500;

// boleano
$bloqueado = false;

////////////////////////////////////////////////////////
//Tipos compostos de variaveis:

// Array
$frutas = array("Abacaxi", "Melão", "Uva", "Maracuja", "Laranja");

echo $frutas[3];

// objeto
$data = new DateTime();

echo "<br/>";

var_dump($data);


////////////////////////////////////////////////////////
// Tipos especiais de variaveis:

//abertura de arquivo (Resource)
$arquivo = fopen("exemplo03.php", "r");

echo "<br/>";

var_dump($arquivo);

// nulo e vazio 

$nulo = NULL; // nulo = ausencia de valor.

$vazio = ""; // vazio = ele foi iniciado.
?>