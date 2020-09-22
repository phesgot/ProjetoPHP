<?php 


function ola(){
	$argumentos = func_get_args();
	return $argumentos[1];
}

var_dump(ola("Bom dia", "Pedro", 10));


echo ola("Bom dia", "Pedro", 10);

 ?>