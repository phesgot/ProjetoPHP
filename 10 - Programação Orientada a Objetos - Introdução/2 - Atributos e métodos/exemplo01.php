<?php 



class Carro {

private $modelo;
private $motor;
private $ano;

	public function getModelo(){

		return $this->modelo;
	}

	public function setModelo($modelo){

		$this->modelo = $modelo;
	}

	public function getMotor(){

		return $this->motor;
	}

	public function setMotor($motor) {

		$this->motor = $motor;
	}

	public function getAno() :int {

		return $this->ano;
	}

	public function setAno($ano) {

		$this->ano = $ano;
	}

	public function exibir(){

		return array(
			'modelo' =>$this->getModelo(),
			'motor' =>$this->getMotor(),
			'ano' =>$this->getAno() 
		);
	}
}


$carro = new Carro();

$carro->setModelo("Gol");
$carro->setMotor("AP");
$carro->setAno("2000");

print_r($carro->exibir());

echo "<br><br>";

var_dump($carro->exibir());




 ?>