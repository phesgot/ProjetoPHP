<?php 

class Pessoa {

	public $nome = "Pedro Torres"; // Todo mundo ver
	protected $idade = "25"; // Visivel dentro da classe e classes extendidas "Filhas". Objeto não ver.
	private $senha = "123456"; // Visivel somente dentro da classe. Objeto não ver, Extend não ver. 

	public function Exibir(){
		echo $this->nome . "<br>"; //Consigo acessar de dentro da classe 
		echo $this->idade . "<br>"; //Consigo acessar de dentro da classe
		echo $this->senha . "<br>"; //Consigo acessar de dentro da classe
	}
}

$objeto = new Pessoa();

/*
echo $objeto->nome; // Consigo ver de fora da classe
echo $objeto->idade; // Não consigo ver
echo $objeto->senha; // Não consigo ver 
*/
$objeto->Exibir();





 ?>