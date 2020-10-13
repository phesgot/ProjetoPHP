<?php 

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}
}

class CPF extends Documento{

	public function validar(){

		$numeroCPF = $this->getNumero();

		if (strlen($numeroCPF) === 11) {

			echo "CPF valido!";
			
			
		} else echo "CPF invalido!";
		


	}
}

class CNPJ extends Documento{
	public function validar(){

		$numeroCNPJ = $this->getNumero();

		if (strlen($numeroCNPJ) === 14) {

			echo "CNPJ valido!";
			
		} else echo "CNPJ invalido!";
		
	}
}


$doc = new CPF;

$doc->setNumero("70240508106");

$doc->validar();

echo "<br><br>";

$docu = new CNPJ;

$docu->setNumero("7024050810612");

$docu->validar();



 ?>