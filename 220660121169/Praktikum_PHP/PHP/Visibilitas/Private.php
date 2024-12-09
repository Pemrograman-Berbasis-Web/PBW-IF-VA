<?php

class Car
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

$avanza = new Car();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;