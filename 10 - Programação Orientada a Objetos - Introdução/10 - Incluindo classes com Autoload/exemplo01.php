<?php 

function __autoload($nomeDaClasse){

	var_dump($nomeDaClasse);
	require_once("$nomeDaClasse.php");
}




$carro =  new Gol();

$carro->acelerar("100");

?>