<?php

require_once("config.php");

session_regenerate_id(); //cria novo id 

echo session_id() . "<br><br>";

var_dump($_SESSION);
?>
