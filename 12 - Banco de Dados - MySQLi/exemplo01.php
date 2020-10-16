<?php 
// INSERÇÃO

$conn = new mysqli("localhost", "root", "26091407", "dbphp7"); // Local, user, senha, banco.

if ($conn->connect_error) {

	echo "Erro: " . $conn->conect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (?, ?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";
$stmt->execute();


$login = "pedro";
$pass = "1415";
$stmt->execute();

?>