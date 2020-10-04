<?php 

class Pessoa{
	public $nome = "Pedro Torres";
	protected $idade = "25";
	private $senha = "123456";


	public function Exibir(){
		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

class Programador extends Pessoa{
	public function Exibir(){

		echo "Classe: " . get_class($this) . "<br/><br/>"; // Função que mostras a classe que está sendo utilizada.

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}
}

$objeto = new Programador();


$objeto->Exibir();




 ?>