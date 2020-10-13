<?php 

abstract class Animal{
	public function falar(){
		return "Fala";
	}
	public function mover(){
		return "Anda";
	}
}

class Passaro extends Animal{
	public function falar(){
		return "canta";
	}
	public function mover(){
		return "Voa e "  . parent::mover();
	}
}

class Cachorro extends Animal{
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Mia";
	}
}

$passaro = new Passaro();
$cachorro = new Cachorro();
$gato = new Gato();


echo $passaro->falar() . "<br>";
echo $passaro->mover() . "<br>";

echo "______________________<br><br>";

echo $cachorro->falar() . "<br>";
echo $cachorro->mover() . "<br>";

echo "______________________<br><br>";

echo $gato->falar() . "<br>";
echo $gato->mover() . "<br>";


 ?>