<?php
// ?? Verificando números nulos: 
$a = NULL;
$b = NULL;
$c = 10;
$d = 15;

echo $a ?? $b ?? $c ?? $d; /* serve para verificar numeros nullo, ele só para até ser encontrado um número não nulo.*/

?>