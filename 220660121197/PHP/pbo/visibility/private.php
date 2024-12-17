<?php

class Mobil3
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

$avanza = new Mobil3();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;