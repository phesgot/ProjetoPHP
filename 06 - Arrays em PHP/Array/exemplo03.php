<?php

$pessoas = array();

array_push($pessoas, array(
		"Nome" => "Pedro", 
		"Idade" => 25
));

array_push($pessoas, array(
		"Nome" => "Rayane",
		"Idade" => 23
));


print_r($pessoas);

echo "<br>" . "Nome: " . $pessoas[0]["Nome"] . "<br>Idade:" . $pessoas[0]["Idade"];

echo "<br>" . "Nome: " . $pessoas[1]["Nome"] . "<br>Idade:" . $pessoas[1]["Idade"];

?>