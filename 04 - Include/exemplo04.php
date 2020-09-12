<?php
// Require incluindo arquivos, mais indicado. Obriga a existencia do arquivo e que esteja correto.

Require_once "inc/exemplo01.php"; //esse require significa traga só uma vez.
Require_once "inc/exemplo01.php";

$resultado = somar(15, 100);

echo $resultado;

?>