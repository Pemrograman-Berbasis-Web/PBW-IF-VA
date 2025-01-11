<?php

class Mobil6
{
	private $roda = 4;

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Mobil6();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;