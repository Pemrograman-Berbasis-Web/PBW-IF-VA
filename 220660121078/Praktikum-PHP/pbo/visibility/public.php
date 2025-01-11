<?php

class Mobil5
{
	private $roda = 4;

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil5();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;