<?php 

class Pessoa { //Classe

	public $nome; // Atributo

	public  function falar(){ // Método

		return "Meu nome é " . $this->nome;

	}


}

$pedro = new Pessoa(); //Instanciando
$pedro->nome = "Pedro Torres"; //Acessando Atributo
echo $pedro->falar(); // Acessando método




 ?>