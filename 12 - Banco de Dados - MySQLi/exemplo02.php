<?php 
// CONSULTA

$conn = new mysqli("localhost","root","26091407","dbphp7");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_assoc()) {

	array_push($data, $row);
}

echo json_encode($data);



?>