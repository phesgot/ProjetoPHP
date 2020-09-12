<?php
// IF ELSEIF ELSE


$qualSuaIdade = 19;

$idadeCrianca = 12;
$idadeAdolecente = 13;
$idadeAdulto = 18;
$idadeIdoso = 65;

if ($qualSuaIdade <= $idadeCrianca) {
	
	echo "Você é uma criança!";

} elseif ($qualSuaIdade < $idadeAdulto ) {
	
	echo "Você é um adolesente!";

} elseif ($qualSuaIdade < $idadeIdoso ) {

	echo "Você é um Adulto!";

} else {

	echo "Você é um Idoso!";
}


echo "<br><br>";

echo ($qualSuaIdade < $idadeAdulto)?"Menor de Idade":"Maior de Idade";
// If de uma linha só para validação simples: ?= Então, : = Se não
?>