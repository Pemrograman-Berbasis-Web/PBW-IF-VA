<?php

class Car
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

$avanza = new Car();
echo $avanza->jalan(); 
echo PHP_EOL;