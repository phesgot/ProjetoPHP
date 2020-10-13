<?php 

interface Automovel{
	public function acelerar($aceleracao);
	public function freiar($frenagem);
	public function macha($quantidade);
}

abstract class Carro implements Automovel{
	public function acelerar($aceleracao){
		echo "O carro acelerou: " . $aceleracao . "km/h";
	}
	public function freiar($frenagem){
		echo "O carro freia em: " . $frenagem . "s";
	}
	public function macha($quantidade){
		echo "O carro possui " . $quantidade . "!";
	}
}

class Gol extends Carro{
	public function empurrar(){}
}


$carro = new Gol();

$carro->acelerar(180);

 ?>