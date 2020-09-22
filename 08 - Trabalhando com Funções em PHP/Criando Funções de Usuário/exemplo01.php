<?php 
// Funções de usuario:

// Função sem retorno:
function ola(){

	echo "Olá mundo!<br>";
}

// Sem nescessidade de colocar o echo:
ola();

///////////////////////////////////////////////////////

// função com retorno ela retorna uma string:
function retorno(){

	return "Retorno!<br>";
}

//é nescessario colocar o echo: 
echo retorno();

$frase = retorno();

echo strlen($frase);

 ?>