<?php 

interface Veiculo{
	public function velocidade($velocidade);
	public function marcha($marcha);
	public function freiar($freiar);
}

class Civic implements Veiculo{
	public function velocidade($velocidade){
		echo "velocidade do veiculo: " . $velocidade . "Km/h <br>";
	}
	public function marcha($marcha){
		echo "Quantidade de marcha: " . $marcha . "<br>";
	}
	public function freiar($freiar){
		echo "Frenagem em: " . $freiar . "s <br>";
	}

} 


$carro = new Civic();

$carro->velocidade("395");  
$carro->marcha("6");
$carro->freiar("05");



 ?>