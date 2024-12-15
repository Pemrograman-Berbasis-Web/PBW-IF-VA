<?php

class Singa
{
	const KAKI = 4;

	public static function lari()
	{
		echo 'Singa berlari';
	}
}

echo Singa::KAKI; 
echo PHP_EOL;
Singa::lari(); 
echo PHP_EOL;