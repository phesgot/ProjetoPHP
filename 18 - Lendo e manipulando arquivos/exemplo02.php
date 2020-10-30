<?php 

$images = scandir("images"); // retorna um array;

$data = array();

foreach ($images as $img) {
	if(!in_array($img, array('.', '..'))){
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		$info = pathinfo($filename);

		$info['file'] = filesize($filename); // pega o tamanho do arquivo;
		$info['modified'] = date("d/m/Y H:i:s", filemtime($filename)); // pega data de modificação;
		$info['url'] = "http://localhost/Projeto%20PHP/18%20-%20Lendo%20e%20manipulando%20arquivos/" . str_replace("\\", "/", $filename);

		array_push($data, $info);
	}
}


echo json_encode($data);

 ?>