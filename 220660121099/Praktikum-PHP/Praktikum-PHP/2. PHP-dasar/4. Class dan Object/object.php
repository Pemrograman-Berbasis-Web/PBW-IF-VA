<?php

class Mobil
{
	public $roda;

	public function jalan()
	{
		echo 'Mobil berjalan';
	}
}

//$avanza = new Mobil();
$avanza->roda = 4;

echo $avanza->jalan(); echo PHP_EOL;
echo $avanza->roda; echo PHP_EOL;