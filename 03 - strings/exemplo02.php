<?php
// Funções com string:

$nome = "pedro";

$nome =  strtoupper($nome); //Deixa tudo maisculo.
echo $nome;

echo "<br><br>";

$nome = strtolower($nome); //Deixa tudo minusculo.
echo $nome;

echo "<br><br>";

$nomeCompleto = "pedro henrique torres";

$nomeCompleto = ucwords($nomeCompleto); // Deixa a primeira letra de cada palavra maiusculo.
echo $nomeCompleto;

echo "<br><br>";

$nomeCompleto = strtolower($nomeCompleto);
$nomeCompleto = ucfirst($nomeCompleto); // Deixa maiusculo somente a primeira letra.
echo $nomeCompleto;





?>