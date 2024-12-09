<?php

class Lingkaran
{
	const PI = 3.14;

	public function luas($jari)
	{
		echo self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran();

$lingkaran->luas(7); 
echo PHP_EOL;