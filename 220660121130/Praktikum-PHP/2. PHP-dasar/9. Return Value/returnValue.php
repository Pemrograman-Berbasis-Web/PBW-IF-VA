<?php

class Lingkarancara
{
	const PI = 3.14;

	public function luas($jari)
	{
		return self::PI * $jari * $jari;
	}
}

$lingkaran = new Lingkaran();
$luas = $lingkaran->luas(7);

echo $luas;
echo PHP_EOL;