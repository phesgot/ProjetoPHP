<?php 
//Transação

$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", "1a2b3c4d5e6f@A");

$conn->beginTransaction(); // este comando está ligado diretamente com a conexão.

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 4;

$stmt->execute(array($id));

//$conn->rollback(); // cancela uma ação no banco

$conn->commit(); // Confirma uma ação no banco

echo "Deletado";

 ?>