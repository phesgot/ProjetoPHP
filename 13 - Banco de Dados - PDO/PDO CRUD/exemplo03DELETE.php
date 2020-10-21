<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "1a2b3c4d5e6f@A");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$id = 8;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Exluido com sucesso!";



 ?>