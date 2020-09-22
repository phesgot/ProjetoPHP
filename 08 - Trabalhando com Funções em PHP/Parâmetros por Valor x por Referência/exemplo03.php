<?php 

$pessoa = array(
	'nome' => "Pedro",
	'idade' => 20
);

foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value += 5;
		
		echo $value . "<br>";

}

print_r($pessoa);


 ?>