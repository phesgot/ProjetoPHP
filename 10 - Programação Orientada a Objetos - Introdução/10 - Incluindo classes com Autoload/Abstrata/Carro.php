<?php 

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

 ?>