<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "1a2b3c4d5e6f@A");  
// 1 - Tipo de banco : Nome do banco 2 - local do banco 3- USER 4 - SENHA

$stmt = $conn->prepare("SELECT * FROM tb_usuario"); //PREPARANDO onde se vai os comando SQL

$stmt->execute(); // Executa o comando 

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //Resultado cria um array, FETCH_ASSOC pra retornar somente o indice do nome da coluna.

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key."</strong>" . ": " . $value . "<br>";
	}

	echo "________________________________________________________<br>";
}




?>