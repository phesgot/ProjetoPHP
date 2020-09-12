<?php	
//Trocando caracteres com função replace:

$empresa = "Torres";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>