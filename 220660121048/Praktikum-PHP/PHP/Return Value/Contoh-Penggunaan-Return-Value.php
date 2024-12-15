<?php

class Lingkaran
{
	const PI = 3.14;

	public function luas($jari)
	{
		return self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran();

echo $lingkaran->luas(7); 
echo PHP_EOL;