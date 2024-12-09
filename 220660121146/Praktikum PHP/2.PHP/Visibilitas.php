//Tingkatan Visibilitas pada PHP
//Private

<?php

class Mobil4
{
	private $roda = 4;

	private function jalan()
	{
		echo 'Mobil berjalan';
	}
}

$avanza = new Mobil();

//echo $avanza->jalan5(); 
echo PHP_EOL;
//echo $avanza->roda; 
echo PHP_EOL;

//Protected

class Mobil5
{
	private $roda = 4;

	protected function jalan()
	{
		echo 'Mobil berjalan';
	}

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();
//echo $avanza->jalan(); 
echo PHP_EOL;

//Public


class Mobil
{
	private $roda = 4;

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;