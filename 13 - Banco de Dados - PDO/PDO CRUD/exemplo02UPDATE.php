<?php 
$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", "1a2b3c4d5e6f@A");

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Jquim";
$password = "142536";
$id = 8;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alteração realizada com sucesso!";




?>