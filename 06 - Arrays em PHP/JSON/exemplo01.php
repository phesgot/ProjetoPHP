<?php
//JASON
$pessoas = array();

array_push($pessoas, array(
		"Nome" => "Pedro", 
		"Idade" => 25
));

array_push($pessoas, array(
		"Nome" => "Rayane",
		"Idade" => 23
));

echo json_encode($pessoas);

?>