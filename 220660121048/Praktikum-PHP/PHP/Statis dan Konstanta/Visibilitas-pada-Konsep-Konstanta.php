<?php

class Lingkaran
{
	private const PI_PRIVATE = 3.14;
	protected const PI_PROTECTED = 3.14;
	public const PI_PUBLIC = 3.14;

	public static function luas()
	{
		echo self::PI_PUBLIC;
	}
}

echo Lingkaran::PI_PUBLIC;
echo PHP_EOL;
Lingkaran::luas(); 
echo PHP_EOL;