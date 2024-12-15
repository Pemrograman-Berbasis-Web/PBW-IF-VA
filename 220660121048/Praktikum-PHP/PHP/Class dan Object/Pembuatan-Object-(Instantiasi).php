<?php

class Car
{
	public $roda;

	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}

$avanza = new Car();
$avanza->roda = 4;

echo $avanza->jalan(); echo PHP_EOL;
echo $avanza->roda; echo PHP_EOL;