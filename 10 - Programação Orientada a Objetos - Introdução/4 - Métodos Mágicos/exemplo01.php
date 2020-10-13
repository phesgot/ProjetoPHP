<?php 

class Endereco{

	private $endereco;
	private $cidade;
	private $uf;
	private $cep;

	public function __construct($e, $i, $u, $c){ //Passando informação sem set usando método magíco
		$this->endereco = $e;
		$this->cidade = $i;
		$this->uf = $u;
		$this->cep = $c;
	}

	public function __destruct(){ // Destruindo
		var_dump("DESTRUIDO");
	}

	public function __toString(){ //Converte um objeto para string
		return "<br><br>" . $this->endereco . "<br>" . $this->cidade . "<br>" . $this->uf . "<br>" . $this->cep . "<br><br>";
	}


}

$meuEndereco = new Endereco("Quadra 16 Conjunto F", "Sobradinho", "DF", "73.050-166");

var_dump($meuEndereco);

//unset($meuEndereco); //Destroi variavel

echo $meuEndereco;

 ?>