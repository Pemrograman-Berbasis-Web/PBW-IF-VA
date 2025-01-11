<?php

class Mobil4
{
	private $roda = 4;

	private function jalan()
	{
		echo 'Mobil berjalan';
	}

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil4();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;