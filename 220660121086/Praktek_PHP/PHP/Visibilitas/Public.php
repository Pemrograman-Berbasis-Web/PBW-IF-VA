<?php

class Car
{
	private $roda = 4;

	public function jumlahRoda()
	{
		echo $this->roda;
	}
}

$avanza = new Car();

echo $avanza->jumlahRoda(); 
echo PHP_EOL;