<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "pedro", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row ) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . ": </strong>" . $value . "</br>";
	}

	echo "_______________________________________</br>";
}




 ?>