<?php

$json = '[{"Nome":"Pedro","Idade":25},{"Nome":"Rayane","Idade":23}]';

$dado = json_decode($json, true);

var_dump($dado);

?>