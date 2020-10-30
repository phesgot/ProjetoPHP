<?php 

$name = "images";

if (!is_dir($name)){
	mkdir($name);
	echo "Diretório criado! " . $name;

} else {
	rmdir($name);
	echo "Diretório já existe, deletado " . $name;
}
	



 ?>