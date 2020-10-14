<?php 

require_once("config.php");

use cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Pedro Torres");
$cad->setEmail("phesgot001@gmail.com");
$cad->setSenha("26091407");

echo $cad->__toString();

echo "<br><br>";

echo $cad->cadastrarVenda();

 ?>