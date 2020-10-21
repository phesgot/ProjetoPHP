<?php 
//Forma segura de realizar um insert.

$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", "1a2b3c4d5e6f@A");

$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "joaquin";
$password = "123456";

$stmt->bindParam(":LOGIN", $login); // Bind Param = ligar uma iformação com um parametro. 
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso!";

 ?>