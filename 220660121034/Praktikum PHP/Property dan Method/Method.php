<?php

class Mobil3
{
	public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}
$avanza = new Mobil3();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->jalan('belakang'); 
echo PHP_EOL;

//Contoh real
//class Koneksi
//{
	//public function connect($username, $password, $host = 'localhost', $port = 3306)
	//{
		//Logic koneksi
	//}
//}