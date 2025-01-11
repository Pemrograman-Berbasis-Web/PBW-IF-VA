<?php

class Mobil
{
	public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}

$avanza = new Mobil();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->jalan('belakang'); 
echo PHP_EOL;