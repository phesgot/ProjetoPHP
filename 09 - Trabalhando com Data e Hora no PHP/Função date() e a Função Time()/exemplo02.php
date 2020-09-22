<?php 

//$ts = strtotime("18-11-2017");
$ts = strtotime("-4 day");



switch (date("w", $ts)) {
	case '0':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Domingo";
		break;
	case '1':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Segunda";
		break;
	case '2':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Terça";
		break;
	case '3':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Quarta";
		break;
	case '4':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Quinta";
		break;
	case '5':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Sexta";
		break;
	case '6':
		echo "<br>" . date("d/m/Y H:i:s", $ts) . "<br>";
		echo "Sabado";
		break;
	
	default:
		echo "ERRO";
		break;
}

?>