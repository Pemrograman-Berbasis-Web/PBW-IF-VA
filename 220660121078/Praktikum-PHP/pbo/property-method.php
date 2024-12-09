<?php

class Mobil2
{
	public $roda = 4; //property

  //method
  public function jalan($arah = 'depan')
	{
		echo 'Mobil berjalan ke arah '.$arah;
	}
}

$avanza = new Mobil2();

echo $avanza->jalan(); 
echo PHP_EOL;
echo $avanza->jalan('belakang'); 
echo PHP_EOL;

// Contoh real
// class Koneksi
// {
// 	public function connect($username, $password, $host = 'localhost', $port = 3306)
// 	{
// 		//Logic koneksi
// 	}
// }

// $koneksi = new Koneksi();
// $koneksi->connect('root', '');