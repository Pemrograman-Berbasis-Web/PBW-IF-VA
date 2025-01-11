//Apa itu Property

<?php

class Mobil3
{
	public $roda = 4;
}

//Apa itu Method



class Mobil4
{
	public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}

$avanza = new Mobil();

//echo $avanza->jalan(); 
echo PHP_EOL;
//echo $avanza->jalan('belakang'); 
echo PHP_EOL;