<?php 

namespace cliente;

class Cadastro extends \Cadastro {

	public function cadastrarVenda(){
		echo "Venda realizada para: " . $this->getNome();
	}

}


 ?>