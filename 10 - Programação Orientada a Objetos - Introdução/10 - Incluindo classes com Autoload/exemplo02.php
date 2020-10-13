<?php 

function incluirClasses($nomeClasse){
	if(file_exists($nomeClasse. ".php") === true) {
		require_once($nomeClasse. ".php");
	}
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){
	if(file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
	}
});

spl_autoload_register(function($nomeClasse){
	if(file_exists("Interface" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("Interface" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
	}
});

$carro =  new Gol();

$carro->acelerar("180");




 ?>